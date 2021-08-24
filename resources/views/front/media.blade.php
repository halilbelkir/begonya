<x-front.master :title="'Basında Biz'" :image="'front/images/media.jpg'">
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleimage :image="'front/images/media.jpg'">
                                    <x-slot name="title">Basında Biz</x-slot>
                                </x-front.singleimage>
                                <section>
                                    <div class="container">
                                        <div class="heading-text heading-section text-center">
                                            <span class="lead">Haberlerimiz her yerde!</span>
                                        </div>
                                        <ul class="grid grid-4-columns">
                                            @foreach($media as $mediaa)
                                                <li>
                                                    <a href="{{$mediaa->link}}" target="_blank">
                                                        {!! ImageHelper::createTag($mediaa->image,['width' =>[190], 'height' => [60]],['class'=> 'lazy','alt' => $settings->title,'title' => $settings->title],'lazy') !!}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
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
