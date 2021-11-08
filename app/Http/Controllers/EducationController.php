<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Models\Education;
use Carbon\Carbon;
use Carbon\Traits\Creator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Validator,Session;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('education.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $attribute = array(
                'title'       => 'Başlık',
                'content'     => 'İçerik',
                'tag'         => 'Etiket',
                'description' => 'İlk Açıklama',
                'image'      => 'Resim',
                'finish_date'  => 'Bitiş Tarihi',
                'seflink'      => 'Seflink'
            );

            $rules = array(
                'title'       => 'required',
                'content'     => 'required',
                'tag'         => 'required',
                'finish_date'  => 'required',
                'description' => 'required|max:160',
                'image'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'seflink'      => 'required|unique:education,seflink',
            );


            $validator = Validator::make($request->all(), $rules);
            $validator->setAttributeNames($attribute);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $image        = $request->file('image');
            $imageName    = 'education-'.time().'.'.$image->extension();
            $target_file   = 'images/front/education';
            $imageName    = $target_file.'/'.$imageName;
            $image->move($target_file,$imageName);

            $education              = new Education;
            $education->title       = $request->get('title');
            $education->content     = $request->get('content');
            $education->tag         = $request->get('tag');
            $education->description = $request->get('description');
            $education->seflink      = $request->get('seflink');
            $education->youtube_link = $request->get('youtube_link');
            $education->finish_date  = $request->get('finish_date');
            $education->image       = $imageName;
            $education->save();

            Session::flash('message', array('Başarılı!','Eğitim kaydedildi.', 'success'));

        }
        catch (\Exception $e)
        {
            Session::flash('message', array('Başarısız!','Hata! Lütfen tekrar deneyiniz.', 'error'));
        }

        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Education::find($id);
        return view('education.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try
        {
            $attribute = array(
                'title'       => 'Başlık',
                'content'     => 'İçerik',
                'tag'         => 'Etiket',
                'description' => 'İlk Açıklama',
                'finish_date'  => 'Bitiş Tarihi',
                'seflink'      => 'Seflink'
            );

            $rules = array(
                'title'       => 'required',
                'content'     => 'required',
                'tag'         => 'required',
                'finish_date'  => 'required',
                'description' => 'required|max:160',
                'seflink'      => 'required|unique:education,seflink,'.$id,'id',
            );

            $education = Education::find($id);

            if(empty($education->image) || $request->hasFile('image'))
            {
                $attribute['image']   = 'Resim';
                $rules['image']       = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024';
            }

            $validator = Validator::make($request->all(), $rules);
            $validator->setAttributeNames($attribute);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            if ($request->hasFile('image'))
            {
                $image        = $request->file('image');
                $imageName    = 'education-'.time().'.'.$image->extension();
                $target_file   = 'images/front/education';
                $imageName    = $target_file.'/'.$imageName;
                $image->move($target_file,$imageName);
                $education->image       = $imageName;
            }

            $education->title       = $request->get('title');
            $education->content     = $request->get('content');
            $education->tag         = $request->get('tag');
            $education->description = $request->get('description');
            $education->seflink      = $request->get('seflink');
            $education->youtube_link = $request->get('youtube_link');
            $education->finish_date  = $request->get('finish_date');
            $education->save();

            Session::flash('message', array('Başarılı!','Eğitim kaydedildi.', 'success'));

        }
        catch (\Exception $e)
        {
            Session::flash('message', array('Başarısız!','Hata! Lütfen tekrar deneyiniz.', 'error'));
        }

        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $education = Education::find($id);
            Helpers::fileDelete($education->image);
            $education->delete();

            session()->flash('flash_message', array('Başarılı!','Eğitim silindi.', 'success'));
        }
        catch (\Exception $e){

            session()->flash('flash_message', array('Başarısız!','Hata! Lütfen tekrar deneyiniz.', 'error'));

        }
        return redirect()->route('education.index');
    }

    public function destroyImage($id)
    {
        try
        {
            $education = Education::find($id);
            Helpers::fileDelete($education->image);
            $education->image    = null;
            $education->save();

            session()->flash('flash_message', array('Başarılı!','Resim silindi.', 'success'));
        }
        catch (\Exception $e)
        {
            session()->flash('flash_message', array('Başarısız!','Hata! Lütfen tekrar deneyiniz.', 'error'));
        }
        return redirect()->route('education.edit',$education->id);
    }

    public function datatable()
    {
        return Datatables::of(Education::get())
            ->editColumn('created_at', function ($education) {
                return $education->updated_at ? with(new Carbon($education->updated_at))->format('d-m-Y') : '';
            })
            ->addColumn('actions', function ($education) {
                $actions  = '<a  href="'.route('education.edit',$education->id).'" class="inline-flex items-center px-1 py-1 bg-blue-800 mr-2 border border-transparent rounded-md font-normal text-xs text-white uppercase tracking-widest hover:bg-blue-700 hover:text-white active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition"><span class="material-icons" style="font-size: 18px">edit</span></a>';
                $actions .= '<a data-id="'.$education->id.'" onclick="return confirm(\' '.$education->title.' isimli bloğu silmek istediğinize emin misiniz? \')" href="'.route('educationn.destroy',$education->id).'" class="inline-flex items-center px-1 py-1 bg-red-800 border border-transparent rounded-md font-normal text-xs text-white uppercase tracking-widest hover:bg-red-700 hover:text-white active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition"><span class="material-icons" style="font-size: 18px">delete</span></a>';
                return $actions;
            })
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function sortable(Request $request)
    {
        $posts = Education::all();

        foreach ($posts as $post) {
            foreach ($request->order as $order) {
                if ($order['id'] == $post->id) {
                    $post->update(['order' => $order['position']]);
                }
            }
        }

        return response()->json([
            'result' => 1,
        ]);
    }
}
