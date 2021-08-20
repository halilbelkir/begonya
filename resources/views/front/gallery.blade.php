<x-front.master>
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">
                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleImage :image="'front/images/gallery.jpg'">
                                    <x-slot name="title">Galeri</x-slot>
                                </x-front.singleImage>
                                <section id="page-content">
                                    <nav class="grid-filter gf-creative" data-layout="#portfolio">
                                        <ul>
                                            <li class="active"><a href="#" data-category="*">Hepsi</a></li>
                                            @foreach($gallery as $category)
                                                <li><a href="#" data-category=".{{App\Helpers\Helpers::seflink($category->category_name)}}">{{$category->category_name}}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="grid-active-title">Hepsi</div>
                                    </nav>
                                    <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="20" data-item="portfolio-item" data-lightbox="gallery" >
                                        @foreach($gallery as $images)
                                            @foreach(json_decode($images->images) as $image)
                                                <div class="portfolio-item img-zoom {{App\Helpers\Helpers::seflink($images->category_name)}}">
                                                    <a title="Kategori 1" data-lightbox="gallery-image" href="{{asset($image->image)}}">
                                                        {!! ImageHelper::createTag($image->image,['width' =>[355], 'height' => [200]],['class'=> 'lazy','alt' => $images->category_name,'title' => $images->category_name],'lazy') !!}
                                                    </a>
                                                </div>
                                            @endforeach
                                            @if(!empty($images->youtube_link))
                                                @foreach(explode(',',$images->youtube_link) as $order => $link)
                                                        <div class="portfolio-item img-zoom {{App\Helpers\Helpers::seflink($images->category_name)}} iframe">
                                                            <div class="video grid-image">
                                                                <img src="{{config('app.loading_image')}}" data-src="{{\App\Helpers\Helpers::youtubeThumbnail($link)}}" class="lazy" alt="{{$images->category_name}}" title="{{$images->category_name}}">
                                                            </div>
                                                            <div class="portfolio-description">
                                                                <a data-lightbox="iframe" href="{{$link}}"><i class="icon-play"></i></a>
                                                            </div>
                                                        </div>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front.master>
