<div class="post-meta-share float-none">
    <a class="btn btn-xs btn-slide btn-facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;">
        <i class="fab fa-facebook-f"></i>
        <span>Facebook</span>
    </a>
    <a class="btn btn-xs btn-slide btn-twitter" href="https://twitter.com/share" target="_blank" data-url="http://blog-detay.html"  data-lang="tr" data-width="100">
        <i class="fab fa-twitter"></i>
        <span>Twitter</span>
    </a>
    <a class="btn btn-xs btn-slide btn-whatsapp" href="whatsapp://send?text={{url()->full()}}" >
        <i class="fab fa-whatsapp"></i>
        <span>Whatsapp</span>
    </a>
    <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:{{$settings->email}}?body={{url()->full()}}&Subject={{$subject}}" target="_top" data-width="80">
        <i class="icon-mail"></i>
        <span>Mail</span>
    </a>
</div>
