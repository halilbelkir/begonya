<div class="post-item-description">
    @if(!empty($title))
        <div class="title border-bottom mb-3  d-lg-flex justify-content-lg-between">
            <h2>
                {{$title}}
                @if(!empty($date))
                    {!! $date !!}
                @endif
            </h2>
            <x-front.share :subject="$title"></x-front.share>
        </div>
    @endif
    {!! $desc !!}
</div>
