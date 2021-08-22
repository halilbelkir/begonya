<x-front.master>
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleimage :image="$pages->image"></x-front.singleimage>
                                <x-front.itemdetail :title="$pages->title">
                                    <x-slot name="desc">
                                        {!! $pages->content !!}
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