<x-front.master>
    <section id="page-content">
        <div class="container">


            <div class="page-title">
                <h1>Blog</h1>
                <div class="breadcrumb float-left pl-0">
                    <ul>
                        <li><a href="{{route('index')}}">Anasayfa</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>


            <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item">

                <div class="post-item border">
                    <div class="post-item-wrap shadow">
                        <div class="post-image">
                            <a href="{{route('blog.detail')}}">
                                <img alt="" src="{{asset('front/images/slider-1.jpg')}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <h2><a href="{{route('blog.detail')}}">Blog Başlık</a></h2>
                            <p>Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama </p>
                            <a href="{{route('blog.detail')}}" class="item-link">Daha Fazla<i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap shadow">
                        <div class="post-image">
                            <a href="{{route('blog.detail')}}">
                                <img alt="" src="{{asset('front/images/slider-1.jpg')}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <h2><a href="{{route('blog.detail')}}">Blog Başlık</a></h2>
                            <p>Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama </p>
                            <a href="{{route('blog.detail')}}" class="item-link">Daha Fazla<i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap shadow">
                        <div class="post-image">
                            <a href="{{route('blog.detail')}}">
                                <img alt="" src="{{asset('front/images/slider-1.jpg')}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <h2><a href="{{route('blog.detail')}}">Blog Başlık</a></h2>
                            <p>Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama </p>
                            <a href="{{route('blog.detail')}}" class="item-link">Daha Fazla<i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap shadow">
                        <div class="post-image">
                            <a href="{{route('blog.detail')}}">
                                <img alt="" src="{{asset('front/images/slider-1.jpg')}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <h2><a href="{{route('blog.detail')}}">Blog Başlık</a></h2>
                            <p>Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama </p>
                            <a href="{{route('blog.detail')}}" class="item-link">Daha Fazla<i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap shadow">
                        <div class="post-image">
                            <a href="{{route('blog.detail')}}">
                                <img alt="" src="{{asset('front/images/slider-1.jpg')}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <h2><a href="{{route('blog.detail')}}">Blog Başlık</a></h2>
                            <p>Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama Blog Açıklama </p>
                            <a href="{{route('blog.detail')}}" class="item-link">Daha Fazla<i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>


            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>

        </div>

    </section>
</x-front.master>
