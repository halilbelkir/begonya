<x-front.master :title="$blog->title" :keywords="$blog->tag" :description="$blog->description" :image="json_decode($blog->images,true)[0]['image']">
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.carousel :images="json_decode($blog->images)">
                                    <x-slot name="title">{{$blog->title}}</x-slot>
                                </x-front.carousel>
                                <x-front.itemdetail :title="$blog->title">
                                    <x-slot name="desc">
                                        {!! $blog->content !!}
                                    </x-slot>
                                </x-front.itemdetail>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front.master>
