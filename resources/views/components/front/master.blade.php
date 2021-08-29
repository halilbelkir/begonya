<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Zaurac" />

    @php $new_title = empty($title) ? $settings->title : $title.' | '.$settings->title  @endphp

    <meta name="keywords" content="{{$settings->tag}}{{!empty($keywords) ? ','.$keywords : ''}}">
    <meta name="description" content="{{empty($description) ? $settings->description : $description}}">
    <meta property="og:description" content="{{empty($description) ? $settings->description : $description}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{request()->url()}}">
    <meta property="og:image" content="{{asset('images/share.jpg')}}">
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="600" />
    <meta property="og:title" content="{{$new_title}}">
    <title>{{$new_title}}</title>

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
    <meta name="theme-color" content="#52cc7f">
    <link rel="manifest" href="/front/manifest.json">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto%3A700%2C400%2C300%2C500&display=swap" onload="this.rel='stylesheet'" property="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=WindSong:wght@400;500&display=swap" onload="this.rel='stylesheet'">
    <link rel="preload" as="image" href="{{asset(config('app.loading_image'))}}">
    <link rel="preload" as="image" href="{{asset('front/images/logo-light.png')}}">
    <link rel="preload" as="image" href="{{asset('front/images/logo-dark.png')}}">
    <link rel="preload" as="font" href="{{asset('/front/webfonts/inspiro-icons_ijzgpf.ttf')}}"  type="font/ttf" crossorigin>
    <link rel="preload" as="font" href="{{asset('/front/webfonts/inspiro-icons_ijzgpf.woff')}}"  type="font/woff2" crossorigin>
    @yield('link-preload-image')
    <link rel="stylesheet" href="{{mix('css/front/front.css')}}" />
    <link rel="alternate" href="{{ route('index') }}" hreflang="x-default" />
    <link rel="alternate" href="{{ route('index') }}" hreflang="tr" />
</head>
<body>
<header @if(!empty(Request::segment(1))) class="dark" @endif>
    <div class="new-logo">
        <a href="{{route('index')}}">
            <img src="{{asset('front/images/logo-light.png')}}" height="90" width="218" alt="{{$settings->title}}" title="{{$settings->title}}" class="light-logo">
            <img src="{{asset('front/images/logo-dark.png')}}" height="90" width="218" alt="{{$settings->title}}" title="{{$settings->title}}" class="dark-logo">
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

<div class="loading">
    <img src="{{config('app.loading_image')}}">
</div>

<script src="{{mix('js/front/front.js')}}"></script>
<script src="{{mix('js/front/front2.js')}}"></script>
@yield('js')
</body>
</html>
