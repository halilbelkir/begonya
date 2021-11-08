<x-front.master :title="$education->title" :keywords="$education->tag" :description="$education->description" :image="$education->image">
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">

                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <x-front.singleimage :image="$education->image"></x-front.singleimage>
                                <x-front.itemdetail :title="$education->title">
                                    <x-slot name="date">
                                        @php
                                            $date = \Carbon\Carbon::parse($education->finish_date);
                                            $now = \Carbon\Carbon::now();
                                            $diff = $date->diffInDays($now);
                                        @endphp
                                        <span style="font-size: 50%;" class="badge @if($diff > 1) badge-success @else badge-danger @endif"><i class="fa fa-calendar-o"></i>Son Tarih : {{with(new \Carbon\Carbon($education->finish_date))->format('d.m.Y H:i')}}</span>
                                    </x-slot>
                                    <x-slot name="desc">
                                        {!! $education->content !!}
                                        <div id="portfolio" class="grid-layout portfolio-3-columns mt-5 " data-margin="20">
                                            @if(!empty($education->youtube_link))
                                                @foreach(explode(',',$education->youtube_link) as $order => $link)
                                                    <div class="portfolio-item img-zoom iframe">
                                                        <div class="video grid-image">
                                                            <img src="{{asset(config('app.loading_image'))}}" data-src="{{\App\Helpers\Helpers::youtubeThumbnail($link)}}" class="lazy" alt="{{$education->title}}" title="{{$education->title}}">
                                                        </div>
                                                        <div class="portfolio-description">
                                                            <a data-lightbox="iframe" href="{{$link}}"><i class="icon-play"></i></a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>

                                        <div class="title border-bottom mb-3  d-lg-flex justify-content-lg-between">
                                            <h2> Haydi Kaydol!</h2>
                                        </div>
                                        <form onsubmit="loading()" action="{{route('send')}}" role="form" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="name">Ad & Soyad</label>
                                                    <input type="text" aria-required="true" name="name" value="{{old('name')}}" required class="form-control required name" placeholder="Ad & Soyad">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">Telefon</label>
                                                    <input type="text" data-inputmask-mask="9(999)999-9999" aria-required="true" name="phone" value="{{old('phone')}}" required class="form-control required" placeholder="Telefon">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Mesajınız</label>
                                                <textarea  name="message" rows="5" class="form-control required" placeholder="Mesajınız">{{old('message')}}</textarea>
                                            </div>
                                            <input type="hidden" name="education_id" value="{{$education->id}}" required>
                                            <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Gönder</button>
                                        </form>
                                    </x-slot>
                                </x-front.itemdetail>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('js')
        <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
        <script>
            $(document).ready(function()
            {
                $(":input[data-inputmask-mask]").inputmask();
                $(":input[data-inputmask-alias]").inputmask();
                $(":input[data-inputmask-regex]").inputmask("Regex");
            });
        </script>
        @if (session('message'))
            <script>
                $.notify({
                    title: '{{ session('message')[0] }}',
                    message: '{{ session('message')[1] }}'
                },{
                    type: '{{session('message')[2]}}'
                });
            </script>
        @endif
    @endsection
</x-front.master>

