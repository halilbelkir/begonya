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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d376.8047688600738!2d29.308741044709667!3d40.928063542745164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3509261bf948ecf1!2sBegonya%20Psikolojik%20Dan%C4%B1%C5%9Fmanl%C4%B1k%20Merkezi!5e0!3m2!1str!2str!4v1630434184803!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('js')
        @if (session('message'))
            <script>
                $.notify({
                    title: '{{ session('message')[0] }}',
                    message: '{{ session('message')[1] }}'
                },{
                    type: '{{session('message')[2]}}'
                });
            </script>
        @endif
    @endsection
</x-front.master>
