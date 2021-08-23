<x-front.master>
    <section class="profile-content">
        <div class="profile-image" style="background-image:url({{ ImageHelper::getImage($team->resim, 1300, 1200) }})">
            <div class="bg-overlay" data-style="10"></div>
            <div class="profile-name">
                <h3>{{$team->ad}}</h3>
                <h5>{{$team->unvan}}</h5>
            </div>
        </div>
        <div class="profile-bio">
            <h3>
                {{$team->ad}}
            </h3>
            <h3>
                <small>{{$team->unvan}}</small>
            </h3>
            <hr>
            {!! $team->content !!}
        </div>
    </section>
</x-front.master>
