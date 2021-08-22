<x-front.master>
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.single_image :image="'front/images/references.jpeg'">
                                    <x-slot name="title">Referanslarımız</x-slot>
                                </x-front.single_image>
                                <section>
                                    <div class="container">
                                        <div class="heading-text heading-section text-center">
                                            <span class="lead">Birlikte çalışmaktan zevk aldığımız harika müşterilerimiz!</span>
                                        </div>
                                        <ul class="grid grid-2-columns">
                                            @foreach($clients as $client)
                                                <li>
                                                    <a href="#">
                                                        {!! ImageHelper::createTag($client->image,['width' =>[455], 'height' => [455]],['class'=> 'lazy','alt' => config('app.company_name'),'title' => config('app.company_name')],'lazy') !!}
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
