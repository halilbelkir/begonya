<div class="post-image">
    <div class="single-image" data-bg-image="{{ ImageHelper::getImage($image, 1200, 620) }}">
        @if(!empty($title))
            <div class="bg-overlay" data-style="10"></div>
            <div class="row h-100 align-items-end">
                <div class="col">
                    <div class="text-white p-20 text-left">
                        <h2>{{$title}}</h2>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
