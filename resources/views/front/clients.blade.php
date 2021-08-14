<x-front.master>
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleImage>
                                    <x-slot name="title">Referanslarımız</x-slot>
                                </x-front.singleImage>
                                <section>
                                    <div class="container">
                                        <div class="heading-text heading-section text-center">
                                            <span class="lead">Birlikte çalışmaktan zevk aldığımız harika müşterilerimiz!</span>
                                        </div>
                                        <ul class="grid grid-2-columns">
                                            <li><a href="#"><img src="{{asset('front/images/1.png')}}" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('front/images/2.png')}}" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('front/images/3.png')}}" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('front/images/4.png')}}" alt=""></a></li>
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
