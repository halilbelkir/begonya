<?php

namespace App\Http\Controllers;

use App\Mail\sendmail;
use App\Models\Awards;
use App\Models\Blog;
use App\Models\Education;
use App\Models\Gallery;
use App\Models\Media;
use App\Models\Pages;
use App\Models\References;
use App\Models\Services;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Form;
use Carbon\Carbon;
use Cookie,Validator,Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class frontController extends Controller
{
    public function index()
    {
        $slider    = Slider::orderBy('order','asc')->get();
        $text_type =
            [
                1 =>
                    [
                        'text_1' =>
                            [
                                'data-x'       => "'left','left','center','center'",
                                'data-hoffset' => "'50','50','0','0'",
                                'data-y'       => "'top','top','top','top'",
                                'data-voffset' => "'180','180','340','180'",
                                'data-width'   => "none",
                                'data-whitespace' => "normal"
                            ],
                        'text_2' =>
                            [
                                'data-x'       => "'left','left','center','center'",
                                'data-hoffset' => "'50','50','0','0'",
                                'data-y'       => "'top','top','middle','middle'",
                                'data-voffset' => "'300','300','0','0'",
                                'data-width'   => "none",
                                'data-whitespace' => "normal"
                            ],
                        'text_3' =>
                            [
                                'data-x'       => "'left','left','center','center'",
                                'data-hoffset' => "'50','50','0','0'",
                                'data-y'       => "'top','top','top','top'",
                                'data-voffset' => "'450','450','540','450'",
                                'data-width'   => "none",
                                'data-whitespace' => "normal"
                            ],
                        'button' =>
                            [
                                'data-x'       => "'left','left','center','center'",
                                'data-hoffset' => "'50','50','0','0'",
                                'data-y'       => "'top','top','top','top'",
                                'data-voffset' => "'540','617','600','600'",
                                'data-width'   => "none",
                                'data-whitespace' => "nowrap"
                            ]
                    ],
                2 =>
                    [
                        'text_1' =>
                            [
                                'data-x'       => "'left','left','center','center'",
                                'data-hoffset' => "'798','585','0','0'",
                                'data-y'       => "'top','top','top','top'",
                                'data-voffset' => "'180','180','340','180'",
                                'data-width'   => "400",
                                'data-whitespace' => "normal"
                            ],
                        'text_2' =>
                            [
                                'data-x'       => "'left','left','center','center'",
                                'data-hoffset' => "'800','580','1','1'",
                                'data-y'       => "'top','top','middle','middle'",
                                'data-voffset' => "'300','300','0','0'",
                                'data-width'   => "400",
                                'data-whitespace' => "normal"
                            ],
                        'text_3' =>
                            [
                                'data-x'       => "'left','left','center','center'",
                                'data-hoffset' => "'800','584','3','3'",
                                'data-y'       => "'top','top','top','top'",
                                'data-voffset' => "'450','450','540','450'",
                                'data-width'   => "400",
                                'data-whitespace' => "normal"
                            ],
                        'button' =>
                            [
                                'data-x'       => "'left','left','center','center'",
                                'data-hoffset' => "'800','588','-40','-40'",
                                'data-y'       => "'top','top','top','top'",
                                'data-voffset' => "'540','617','600','600'",
                                'data-width'   => "none",
                                'data-whitespace' => "nowrap"
                            ]
                ],
                3 =>
                    [
                        'text_1' =>
                            [
                                'data-x'       => "'center','center','center','center'",
                                'data-hoffset' => "'30','20','-30','0'",
                                'data-y'       => "'top','top','middle','middle'",
                                'data-voffset' => "'220','220','-100','-100'",
                                'data-width'   => "'none','none','350','300'",
                                'data-whitespace' => "'nowrap','nowrap','normal','normal'",
                            ],
                        'text_2' =>
                            [
                                'data-x'       => "'center','center','center','center'",
                                'data-hoffset' => "'0','0','-30','0'",
                                'data-y'       => "'top','top','middle','middle'",
                                'data-voffset' => "'300','300','0','0'",
                                'data-width'   => "'none','none','350','300'",
                                'data-whitespace' => "'nowrap','nowrap','normal','normal'",
                            ],
                        'text_3' =>
                            [
                                'data-x'       => "'center','center','center','center'",
                                'data-hoffset' => "'0','0','-30','0'",
                                'data-y'       => "'top','top','middle','middle'",
                                'data-voffset' => "'400','450','100','100'",
                                'data-width'   => "'none','none','350','300'",
                                'data-whitespace' => "'nowrap','nowrap','normal','nowrap'",
                            ],
                        'button' =>
                            [
                                'data-x'       => "'center','center','center','center'",
                                'data-hoffset' => "'0','0','-40','-40'",
                                'data-y'       => "'top','top','top','top'",
                                'data-voffset' => "'540','600','650','600'",
                                'data-width'   => "'none','none','none','none'",
                                'data-whitespace' => "'nowrap','nowrap','normal','normal'",
                            ]
                    ]
            ];
        return view('front.index',compact('slider','text_type'));
    }

    public function about()
    {
        $team = Team::orderBy('order','asc')->get();
        return view('front.about',compact('team'));
    }

    public function services()
    {
        $services = Services::orderBy('order','asc')->get();
        return view('front.services.list',compact('services'));
    }

    public function service($seflink)
    {
        $service = Services::where('seflink',$seflink)->first();
        return view('front.services.detail',compact('service'));
    }

    public function clients()
    {
        $clients = References::orderBy('order','asc')->get();
        return view('front.clients',compact('clients'));
    }

    public function awards()
    {
        $awards = Awards::orderBy('order','asc')->get();
        return view('front.awards',compact('awards'));
    }

    public function pages($seflink)
    {
        $pages = Pages::where('seflink',$seflink)->first();

        if (!$pages)
        {
            return view('front.notfound',compact('pages'));
        }

        return view('front.pages',compact('pages'));
    }

    public function gallery()
    {
        $gallery = Gallery::orderBy('order','asc')->get();
        return view('front.gallery',compact('gallery'));
    }

    public function blog()
    {
        $blog = Blog::orderBy('order','asc')->get();
        return view('front.blog.list',compact('blog'));
    }

    public function blog_detail($seflink)
    {
        $blog = Blog::where('seflink',$seflink)->first();
        return view('front.blog.detail',compact('blog'));
    }

    public function education()
    {
        $education = Education::orderBy('order','asc')->get();
        return view('front.education.list',compact('education'));
    }

    public function education_detail($seflink)
    {
        $education = Education::where('seflink',$seflink)->first();
        return view('front.education.detail',compact('education'));
    }

    public function team_detail($seflink)
    {
        $team = Team::where('seflink',$seflink)->first();
        return view('front.team_detail',compact('team'));
    }

    public function media()
    {
        $media = Media::orderBy('order','asc')->get();
        return view('front.media',compact('media'));
    }

    public function send(Request $request)
    {
        try
        {

            if (!empty(Cookie::get('form')))
            {
                Session::flash('message', array('Başarısız!','Lütfen 2 dakika sonra tekrar deneyiniz.', 'danger'));

                return redirect()->back();
            }

            if ($request->has('education_id'))
            {
                $attribute = array(
                    'name'    => 'Ad & Soyad',
                    'phone'   => 'Telefon',
                );

                $rules = array(
                    'name'    => 'required',
                    'phone'   => 'required',
                );
            }
            else
            {
                $attribute = array(
                    'name'    => 'Ad & Soyad',
                    'email'   => 'E-Mail',
                    'message'   => 'Mesajınız',
                );

                $rules = array(
                    'name'    => 'required',
                    'email'   => 'required|email',
                    'message'   => 'required',
                );
            }



            $validator = Validator::make($request->all(), $rules);
            $validator->setAttributeNames($attribute);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $form          = new Form;
            $form->name    = $request->get('name');
            $form->message = $request->get('message');
            $form->email = $request->has('email') ? $request->get('email') : null;
            $form->phone = $request->has('phone') ? $request->get('phone') : null;
            $form->education_id = $request->has('education_id') ? $request->get('education_id') : null;

            $form->save();

            Session::flash('message', array('Başarılı!','Form Gönderildi. En kısa süre içerisinde sizinle irtibata geçilecek.', 'success'));

            $settings = Settings::find(1);
            $datas    = array(
                'name'    => $request->get('name'),
                'email'   => $request->get('email'),
                'message' => $request->get('message'),
                'subject' => 'İletişim Formu'
            );

            if ($request->has('education_id'))
            {
                $education        = Education::where('id',$request->get('education_id'))->first();
                $datas['subject'] = 'Eğitime Kayıt Olan Var :)';
                $datas['phone']   = $request->get('phone');
                $datas['education'] = $education->title;
            }

            Mail::to($settings->recipient_email)->send(new sendmail($datas));

            Cookie::queue('form', true, 2);
        }
        catch (\Exception $e)
        {
            Session::flash('message', array('Başarısız!','Hata! Lütfen tekrar deneyiniz.', 'danger'));
        }

        if ($request->has('education_id'))
        {
            return redirect()->route('education.detail',$education->seflink);
        }
        else
        {
            return redirect()->route('contact');
        }
    }

    public function sitemap()
    {
        $blog      = Blog::orderBy('order','asc')->get();
        $services  = Services::orderBy('order','asc')->get();
        $pages     = Pages::all();
        $team      = Team::all();
        $now       = Carbon::now()->toAtomString();
        $content   = view('front.sitemap', compact('now','blog','services','pages','team'));
        return response($content)->header('Content-Type', 'application/xml');
    }
}
