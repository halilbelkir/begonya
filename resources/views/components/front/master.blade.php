<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="/front/images/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/front/images/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/front/images/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/front/images/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/front/images/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/front/images/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/front/images/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/front/images/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/front/images/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/front/images/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/front/images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/front/images/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/front/images/fav/favicon-16x16.png">
    <meta name="msapplication-TileImage" content="/front/images/fav/ms-icon-144x144.png">
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
            <li><a href="{{url($trainings->seflink)}}">{{$trainings->title}}</a></li>
            <li><a href="{{route('gallery')}}">Galeri</a></li>
            <li><a href="{{route('blog.list')}}">Blog</a></li>
            <li><a href="{{route('media')}}">Basında Biz</a></li>
            <li><a href="{{url($online->seflink)}}">{{$online->title}}</a></li>
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