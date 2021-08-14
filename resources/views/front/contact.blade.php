<x-front.master>
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleImage>
                                    <x-slot name="title">İletişim</x-slot>
                                </x-front.singleImage>
                            </div>
                        </div>
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="row m-t-40">
                                            <div class="col-lg-12">
                                                <address>
                                                    <strong>Begonya Psikoloji & Aile Danışmanlığı</strong><br>
                                                    <abbr title="Adres">Adres:</abbr>     Yenişehir, Osmanlı Blv. No:7, 34912 Pendik/İstanbul <br>
                                                    <abbr title="Telefon">Telefon:</abbr>  <a href="tel:+905303898213" class="black">+90 (530) 389 82 13</a><br>
                                                    <abbr title="E-Mail">E-Mail:</abbr>    <a href="mailto:info@begonyapsikoloji.com" class="black">info@begonyapsikoloji.com</a><br>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="social-icons m-t-30 social-icons-colored">
                                            <ul>
                                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                                <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <form class="widget-contact-form" novalidate action="include/contact-form.php.json" role="form" method="post">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="name">Ad & Soyad</label>
                                                    <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Ad & Soyad">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">E-Mail</label>
                                                    <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="E-Mail">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Mesajınız</label>
                                                <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Mesajınız"></textarea>
                                            </div>

                                            <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Gönder</button>
                                        </form>
                                    </div>
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
