
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ route('index') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>
    <url>
        <loc>{{ route('about') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    @foreach($services as $service)
        <url>
            <loc>{{ route('services.detail',$service->seflink) }}</loc>
            <lastmod>{{ $now }}</lastmod>
        </url>
    @endforeach

    <url>
        <loc>{{ route('clients') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    <url>
        <loc>{{ route('awards') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    <url>
        <loc>{{ route('gallery') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    @foreach($blog as $post)
        <url>
            <loc>{{ route('blog.detail',$post->seflink) }}</loc>
            <lastmod>{{ $now }}</lastmod>
        </url>
    @endforeach

    @foreach($pages as $page)
        <url>
            <loc>{{ route('front.pages',$page->seflink) }}</loc>
            <lastmod>{{ $now }}</lastmod>
        </url>
    @endforeach

    @foreach($team as $person)
        <url>
            <loc>{{ route('team.detail',$person->seflink) }}</loc>
            <lastmod>{{ $now }}</lastmod>
        </url>
    @endforeach

    <url>
        <loc>{{ route('media') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>

    <url>
        <loc>{{ route('contact') }}</loc>
        <lastmod>{{ $now }}</lastmod>
    </url>


</urlset>
