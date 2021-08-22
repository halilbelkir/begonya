<x-front.master>
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleImage :image="$pages->image"></x-front.singleImage>
                                <x-front.item_detail :title="$pages->title">
                                    <x-slot name="desc">
                                        {!! $pages->content !!}
                                    </x-slot>
                                </x-front.item_detail>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front.master>
