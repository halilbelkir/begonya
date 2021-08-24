<x-front.master :title="'Hakkımızda'">
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">
                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleimage :image="'front/images/about_banner.jpg'"></x-front.singleimage>
                                <div class="post-item-description">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="heading-text heading-section">
                                                <h2>Hakkımızda</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    {!! $settings->hakkimizda !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ekibimiz">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>Ekibimiz</h2>
                <span class="lead">Samimiyet ve doğru yaklaşım vazgeçilmez ilkemizdir.</span>
            </div>
            <div class="row team-members team-members-shadow m-b-40 d-flex justify-content-center">
                @foreach($team as $person)
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="team-member">
                            <a href="{{route('team.detail',$person->seflink)}}">
                                <div class="team-image">
                                    {!! ImageHelper::createTag($person->resim,['width' =>[250], 'height' => [230]],['class'=> 'lazy','alt' => $person->ad,'title' => $person->ad],'lazy') !!}
                                </div>
                                <div class="team-desc">
                                    <h3>{{$person->ad}}</h3>
                                    <span>{{$person->unvan}}</span>
                                    <p>{{$person->aciklama}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</x-front.master>
