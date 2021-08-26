<x-front.master :title="$blog->title" :keywords="$blog->tag" :description="$blog->description" :image="json_decode($blog->images,true)[0]['image']">
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.carousel :images="json_decode($blog->images)">
                                    <x-slot name="title">{{$blog->title}}</x-slot>
                                </x-front.carousel>
                                <x-front.itemdetail :title="$blog->title">
                                    <x-slot name="desc">
                                        {!! $blog->content !!}
                                        <div id="portfolio" class="grid-layout portfolio-3-columns mt-5 " data-margin="20">
                                            @if(!empty($blog->youtube_link))
                                                @foreach(explode(',',$blog->youtube_link) as $order => $link)
                                                    <div class="portfolio-item img-zoom iframe">
                                                        <div class="video grid-image">
                                                            <img src="{{asset(config('app.loading_image'))}}" data-src="{{\App\Helpers\Helpers::youtubeThumbnail($link)}}" class="lazy" alt="{{$blog->title}}" title="{{$blog->title}}">
                                                        </div>
                                                        <div class="portfolio-description">
                                                            <a data-lightbox="iframe" href="{{$link}}"><i class="icon-play"></i></a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </x-slot>
                                </x-front.itemdetail>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front.master>
