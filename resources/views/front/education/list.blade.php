<x-front.master :title="'Eğitimler'">
    <section id="page-content">
        <div class="container">
            <div class="page-title">
                <h1>Eğitimler</h1>
                <div class="breadcrumb float-left col-12 pl-0">
                    <ul>
                        <li><a href="{{route('index')}}">Anasayfa</a></li>
                        <li class="active">Eğitimler</li>
                    </ul>
                </div>
            </div>
            <div id="education" class="row m-b-30 education">
                @foreach($education as $data)
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="post-item border">
                            <div class="post-item-wrap shadow">
                                <div class="post-image">
                                    <a href="{{route('education.detail',$data->seflink)}}">
                                        {!! ImageHelper::createTag($data->image,['width' =>[355], 'height' => [200]],['class'=> 'late-load','alt' => $data->title,'title' => $data->title],'lazy') !!}
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    @php
                                        $date = \Carbon\Carbon::parse($data->finish_date);
                                        $now = \Carbon\Carbon::now();
                                        $diff = $date->diffInDays($now);
                                    @endphp
                                    <span class="badge @if($diff > 1) badge-success @else badge-danger @endif"><i class="fa fa-calendar-o"></i>Son Tarih : {{with(new \Carbon\Carbon($data->finish_date))->format('d.m.Y H:i')}}</span>
                                    <h2><a href="{{route('education.detail',$data->seflink)}}">{{$data->title}}</a></h2>
                                    <p>{{$data->description}}</p>
                                    <a href="{{route('education.detail',$data->seflink)}}" class="item-link">Daha Fazla<i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
</x-front.master>
