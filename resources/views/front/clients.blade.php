<x-front.master :title="'Referanslarımız'" :image="'front/images/references.jpeg'">
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleimage :image="'front/images/references.jpeg'">
                                    <x-slot name="title">Referanslarımız</x-slot>
                                </x-front.singleimage>
                                <section>
                                    <div class="container">
                                        <div class="heading-text heading-section text-center">
                                            <span class="lead">Çözüm ortaklığı olarak danışmanlık verdiğimiz, eğitimler gerçekleştirdiğimiz ve bireysel seanslar için yönlendirme aldığımız kurumlardan bazıları...</span>
                                        </div>
                                        <ul class="grid grid-2-columns">
                                            @foreach($clients as $client)
                                                <li>
                                                    <a href="#">
                                                        {!! ImageHelper::createTag($client->image,['width' =>[455], 'height' => [455]],['class'=> 'late-load','alt' => $settings->title,'title' => $settings->title],'lazy') !!}
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
