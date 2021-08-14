<x-front.master>
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">
                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleImage>
                                    <x-slot name="title">Galeri</x-slot>
                                </x-front.singleImage>
                                <section id="page-content">
                                    <nav class="grid-filter gf-creative" data-layout="#portfolio">
                                        <ul>
                                            <li class="active"><a href="#" data-category="*">Hepsi</a></li>
                                            <li><a href="#" data-category=".category1">Kategori 1</a></li>
                                            <li><a href="#" data-category=".category2">Kategori 2</a></li>
                                        </ul>
                                        <div class="grid-active-title">Hepsi</div>
                                    </nav>
                                    <div id="portfolio" class="grid-layout portfolio-3-columns" data-margin="20" data-item="portfolio-item" data-lightbox="gallery" >

                                        <div class="portfolio-item img-zoom category1">
                                            <a title="Kategori 1" data-lightbox="gallery-image" href="{{asset('front/images/slider-2.jpg')}}">
                                                <img src="{{asset('front/images/slider-2.jpg')}}" alt="">
                                            </a>
                                        </div>

                                        <div class="portfolio-item img-zoom category2 iframe">
                                            <div class="video grid-image">
                                                <img src="{{asset('front/images/slider-3.jpg')}}" alt="">
                                            </div>
                                            <div class="portfolio-description">
                                                <a title="Kategori 2" data-lightbox="iframe" href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="icon-play"></i></a>
                                            </div>
                                        </div>


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
