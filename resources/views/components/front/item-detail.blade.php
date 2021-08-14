<div class="post-item-description">
    @if(!empty($title))
        <div class="title border-bottom mb-3 d-flex justify-content-between">
            <h2>{{$title}}</h2>
            <x-front.share></x-front.share>
        </div>
    @endif
    {!! $desc !!}
</div>
