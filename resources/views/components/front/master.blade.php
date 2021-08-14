<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Begonya Psikoloji</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto%3A700%2C400%2C300%2C500" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css2?family=WindSong:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{mix('css/front/front.css')}}" />
</head>
<body>
<header @if(!empty(Request::segment(1))) class="dark" @endif>
    <div class="new-logo">
        <a href="{{route('index')}}">
            <img src="{{asset('front/images/logo-light.png')}}" class="light-logo">
            <img src="{{asset('front/images/logo-dark.png')}}" class="dark-logo">
        </a>
    </div>
    <a id="hamburger-icon" href="#" title="Menu">
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
    </a>
    <div class="new-menu">
        <ul>
            <li><a href="{{route('about')}}">Hakkımızda</a></li>
            <li><a href="{{route('about')}}#ekibimiz">Ekibimiz</a></li>
            <li><a href="{{route('services.list')}}">Hizmetlerimiz</a></li>
            <li><a href="{{route('clients')}}">Referanslarımız</a></li>
            <li><a href="{{route('awards')}}">Ödüllerimiz</a></li>
            <li><a href="{{route('trainings')}}">Eğitimler & Derneğimiz</a></li>
            <li><a href="{{route('gallery')}}">Galeri</a></li>
            <li><a href="{{route('blog.list')}}">Blog</a></li>
            <li><a href="{{route('media')}}">Basında Biz</a></li>
            <li><a href="{{route('online')}}">Yurtdışı Online Danışmanlık</a></li>
            <li><a href="{{route('contact')}}">İletişim</a></li>
        </ul>
    </div>
</header>
<div class="body-inner">
    {{$slot}}
    @if(!empty(Request::segment(1)))
        <footer id="footer">
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2021 Begonya Psikoloji.
                        Bütün Hakları Saklıdır.<a href="https://www.zaurac.io" target="_blank"> ZAURAC</a> </div>
                </div>
            </div>
        </footer>
    @endif

</div>


<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<script src="{{mix('js/front/front.js')}}"></script>
@yield('js')
</body>
</html>
