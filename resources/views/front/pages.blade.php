<x-front.master>
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleimage :image="$pages->image"></x-front.singleimage>
                                <x-front.itemdetail :title="$pages->title">
                                    <x-slot name="desc">
                                        {!! $pages->content !!}
                                        <div id="portfolio" class="grid-layout portfolio-3-columns mt-5 " data-margin="20">
                                            @if(!empty($pages->youtube_link))
                                                @foreach(explode(',',$pages->youtube_link) as $order => $link)
                                                    <div class="portfolio-item img-zoom iframe">
                                                        <div class="video grid-image">
                                                            <img src="{{asset(config('app.loading_image'))}}" data-src="{{\App\Helpers\Helpers::youtubeThumbnail($link)}}" class="lazy" alt="{{$pages->title}}" title="{{$pages->title}}">
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
