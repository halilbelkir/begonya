<x-front.master>
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
                                <x-front.itemDetail :title="$blog->title">
                                    <x-slot name="desc">
                                        {!! $blog->content !!}
                                    </x-slot>
                                </x-front.itemDetail>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front.master>
