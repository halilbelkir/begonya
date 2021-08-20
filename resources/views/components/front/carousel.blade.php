@if(!empty($images))
    <div class="carousel dots-inside arrows-visible" data-items="1" data-lightbox="gallery">
        @foreach($images as $image)
            <a href="{{asset($image->image)}}" data-lightbox="gallery-image">
                {!! ImageHelper::createTag($image->image,['width' =>[1200], 'height' => [620]],['alt' => $title,'title' => $title]) !!}
            </a>
        @endforeach
    </div>
@endif
