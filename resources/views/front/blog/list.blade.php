<x-front.master>
    <section id="page-content">
        <div class="container">


            <div class="page-title">
                <h1>Blog</h1>
                <div class="breadcrumb float-left pl-0">
                    <ul>
                        <li><a href="{{route('index')}}">Anasayfa</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>


            <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item">

                @foreach($blog as $data)
                    <div class="post-item border">
                        <div class="post-item-wrap shadow">
                            <div class="post-image">
                                <a href="{{route('blog.detail',$data->seflink)}}">
                                    {!! ImageHelper::createTag(json_decode($data->images,true)[0]['image'],['width' =>[355], 'height' => [200]],['class'=> 'lazy','alt' => $data->title,'title' => $data->title],'lazy') !!}
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2><a href="{{route('blog.detail',$data->seflink)}}">{{$data->title}}</a></h2>
                                <p>{{$data->description}}</p>
                                <a href="{{route('blog.detail',$data->seflink)}}" class="item-link">Daha Fazla<i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </section>
</x-front.master>
