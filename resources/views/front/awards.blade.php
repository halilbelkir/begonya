<x-front.master>
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleimage :image="'front/images/awards.jpeg'">
                                    <x-slot name="title">Ödüllerimiz</x-slot>
                                </x-front.singleimage>

                                <section id="page-content" class="awards">
                                    <div class="grid-layout grid-3-columns portfolio-item light-bg no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign shadow" >
                                        @foreach($awards as $award)
                                            <div class="grid-item animated fadeInDown portfolio-item light-bg no-overlay img-zoom ct-photography ct-marketing ct-media">
                                                <div class="portfolio-item-wrap pb-0">
                                                    <div class="portfolio-image">
                                                        <a href="{{$award->link}}" target="_blank">
                                                            {!! ImageHelper::createTag($award->image,['width' =>[355], 'height' => [200]],['class'=> 'late-load','alt' => $award->title,'title' => $award->title],'lazy') !!}
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-description">
                                                        <a href="{{$award->link}}" target="_blank">
                                                            <h3>{{$award->title}}</h3>
                                                            <p>{{$award->content}}</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
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
