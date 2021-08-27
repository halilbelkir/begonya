<x-front.master :title="'Hizmetlerimiz'">
    <section id="page-content">
        <div class="container">
            <div class="page-title">
                <h1>Hizmetlerimiz</h1>
                <div class="breadcrumb float-left pl-0 col-12">
                    <ul>
                        <li><a href="{{route('index')}}">Anasayfa</a></li>
                        <li class="active">Hizmetlerimiz</li>
                    </ul>
                </div>
            </div>
            <div id="blog" class="row m-b-30 services" >
                @foreach($services as $service)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="post-item border">
                            <div class="post-item-wrap shadow">
                                <div class="post-image">
                                    <a href="{{route('services.detail',$service->seflink)}}">
                                        {!! ImageHelper::createTag(json_decode($service->images,true)[0]['image'],['width' =>[355], 'height' => [200]],['class'=> 'late-load','alt' => $service->title,'title' => $service->title],'lazy') !!}
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2><a href="{{route('services.detail',$service->seflink)}}">{{$service->title}}</a></h2>
                                    <p>{{$service->description}}</p>
                                    <a href="{{route('services.detail',$service->seflink)}}" class="item-link">Daha Fazla<i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-front.master>
