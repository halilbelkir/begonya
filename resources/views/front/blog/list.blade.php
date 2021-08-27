<x-front.master :title="'Blog'">
    <section id="page-content">
        <div class="container">
            <div class="page-title">
                <h1>Blog</h1>
                <div class="breadcrumb float-left col-12 pl-0">
                    <ul>
                        <li><a href="{{route('index')}}">Anasayfa</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
            <div id="blog" class="row m-b-30 blog">
                @foreach($blog as $data)
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="post-item border">
                            <div class="post-item-wrap shadow">
                                <div class="post-image">
                                    <a href="{{route('blog.detail',$data->seflink)}}">
                                        {!! ImageHelper::createTag(json_decode($data->images,true)[0]['image'],['width' =>[355], 'height' => [200]],['class'=> 'late-load','alt' => $data->title,'title' => $data->title],'lazy') !!}
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2><a href="{{route('blog.detail',$data->seflink)}}">{{$data->title}}</a></h2>
                                    <p>{{$data->description}}</p>
                                    <a href="{{route('blog.detail',$data->seflink)}}" class="item-link">Daha Fazla<i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
</x-front.master>
