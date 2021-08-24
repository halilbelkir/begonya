<x-front.master :image="'front/images/contact.jpg'" :title="'İletişim'">
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleimage :image="'front/images/contact.jpg'">
                                    <x-slot name="title">İletişim</x-slot>
                                </x-front.singleimage>
                            </div>
                        </div>
                        <section style="padding: 20px 0;" class="contact">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 order-last order-md-first order-lg-first">
                                    <div>
                                        <address>
                                            <strong>{{$settings->title}}</strong><br>
                                            @if(!empty($settings->adres))<abbr title="Adres">Adres:</abbr> {{$settings->adres}}<br>@endif
                                            @if(!empty($settings->telefon))<abbr title="Telefon">Telefon:</abbr>  <a href="tel:{{$settings->telefon}}" class="black">{{$settings->telefon}}</a><br>@endif
                                            @if(!empty($settings->email))<abbr title="E-Mail">E-Mail:</abbr>    <a href="mailto:{{$settings->email}}" class="black">{{$settings->email}}</a><br>@endif
                                        </address>
                                    </div>
                                    <div class="social-icons m-t-30 social-icons-colored">
                                        <ul>
                                            @if(!empty($settings->facebook))<li class="social-facebook"><a href="{{$settings->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>@endif
                                            @if(!empty($settings->twitter))<li class="social-twitter"><a href="{{$settings->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>@endif
                                            @if(!empty($settings->instagram))<li class="social-instagram"><a href="{{$settings->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>@endif
                                            @if(!empty($settings->linkedin))<li class="social-linkedin"><a href="{{$settings->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>@endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 contact-form">
                                    <form onsubmit="loading()" action="{{route('send')}}" role="form" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Ad & Soyad</label>
                                                <input type="text" aria-required="true" name="name" value="{{old('name')}}" required class="form-control required name" placeholder="Ad & Soyad">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">E-Mail</label>
                                                <input type="email" aria-required="true" name="email" value="{{old('email')}}" required class="form-control required email" placeholder="E-Mail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Mesajınız</label>
                                            <textarea  name="message" required rows="5" class="form-control required" placeholder="Mesajınız">{{old('message')}}</textarea>
                                        </div>

                                        <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Gönder</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <section class="no-padding">
                            <div class="map" data-latitude="40.9287862" data-longitude="29.3075917" data-style="light" data-info="Hello from &lt;br&gt; Inspiro Themes"></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('js')
        <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCxKM3K1kNRjTV2k3_--LMQU-Ulxzu8J50'></script>
        <script type="text/javascript" src="{{asset('front/js/gmap3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/map-styles.js')}}"></script>
    @endsection
</x-front.master>

@if (session('message'))
    <script>
        $.notify({
            // options
            title: '{{ session('message')[0] }}',
            message: '{{ session('message')[1] }}'
        },{
            // settings
            type: '{{session('message')[2]}}'
        });
    </script>
@endif
