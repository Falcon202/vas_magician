
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('/css/styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles/components.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Domů - VASkouzelnik</title>
</head>
<body>
<header>
    @include('_partials.main.navMenu')

    <main class="fotogalery-main">
        <div class="vertical-text-l left-side-text">
            <p>Děkuji všem svým klientům, že mohu být kouzelníkem na plný úvazek.</p>
        </div>

        <div class="fotogalery-title">
            <h2>fotogalerie</h2>
        </div>
        <div class="vertical-text-l right-side-text">
            <p>#MARTINKELLMAN</p>
        </div>
    </main>
    <div class="fotogalery-bottom-nav">
        <ul class="fotogalery-nav-list">
            <li class="fotogalery-nav-item active">vše</li>
            <li class="fotogalery-nav-item">akce pro děti</li>
            <li class="fotogalery-nav-item">svatby</li>
            <li class="fotogalery-nav-item">firemní večírky</li>
            <li class="fotogalery-nav-item">ostatní</li>
        </ul>
    </div>
</header>

@php
    $gallery1_classes = ['item large', 'item', 'item tall', 'item wide'];
    $gallery2_classes = ['reference-item reference-default', 'reference-item reference-wide', 'reference-item reference-default', 'reference-item reference-default', 'reference-item reference-default'];

    $total = $blogViews->count();
    $index = 0;
@endphp

@while ($index < $total)
    @php
        // Rozhodni se, zda bude blok 4 (gallery) nebo 5 (gallery-2) položek
        $useGallery1 = floor($index / 9) % 2 === 0;
        // Vzorec: každých 9 příspěvků se střídá layout, takže 0-8 = gallery1, 9-17=gallery2, 18-26=gallery1, atd.
        // Ale protože bloky jsou po 4 a 5, posuneme index i pro blok velikosti:
        // lepší: střídáme bloky po 4 a 5 příspěvcích:
        // První blok (0-3): 4 položky (gallery)
        // Druhý blok (4-8): 5 položek (gallery-2)
        // Třetí blok (9-12): 4 položky (gallery)
        // Čtvrtý blok (13-17): 5 položek (gallery-2)
        // atd.

        // Proto použijeme součet délky předchozích bloků a střídání:
        $blockSizes = [4, 5];
        $currentBlock = 0;
        $acc = 0;
        while ($acc <= $index) {
            $acc += $blockSizes[$currentBlock % 2];
            $currentBlock++;
        }
        $useGallery1 = ($currentBlock % 2) === 1; // liché bloky => gallery1, sudé => gallery2

        $blockSize = $blockSizes[($currentBlock - 1) % 2];
        $sliceStart = $index;
        $sliceLength = min($blockSize, $total - $index);
        $items = $blogViews->slice($sliceStart, $sliceLength)->values();
    @endphp

    @if ($useGallery1)
        <div class="gallery">
            @foreach($items as $i => $blogView)
                @php
                    $class = $gallery1_classes[$i] ?? 'item';
                @endphp
{{--                <div class="{{ $class }}"--}}
{{--                     style="cursor: pointer; background-image: url('{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}')"--}}
{{--                     onclick="window.location.href='{{ route('single_blog', ['id' => $blogView->id]) }}'">--}}
{{--                    <div class="text">--}}
{{--                        <h3>{{ $blogView->name }}</h3>--}}
{{--                        <p>{{ \Carbon\Carbon::parse($blogView->date)->format('j. n. Y') }} / {{ $blogView->city_name }} / {{ $blogView->location2 }}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="{{ $class }}"
                     style="cursor: pointer; background-image: url('{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}')"
                     onclick="window.location.href='{{ route('single_blog', ['id' => $blogView->id]) }}'">
                    <div class="text">
                        <div class="blog-corner-badge">
                            <svg class="blog-icon" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                                <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                                <g>
                                    <g id="Vrstva_1">
                                        <path d="M-447.1,350.4h0Z"/>
                                        <g>
                                            <path d="M499.9,819.9c-91.7,0-183.5,0-275.2,0-55,0-93.7-38.8-93.7-93.9,0-117.9,0-235.8,0-353.7,0-55,38.8-93.7,94-93.7,31.5,0,63-.1,94.5.1,5.2,0,7.7-1.3,9.2-6.5,3.3-11.3,7.2-22.4,11.2-33.5,13-35.2,45.6-58.3,83.2-58.5,51.2-.3,102.5-.3,153.7,0,37.6.2,70,23.3,83.1,58.6,3.9,10.5,7.6,21.2,10.7,32,1.7,5.8,4.2,7.9,10.6,7.9,31.8-.4,63.5-.2,95.3-.2,53,0,92.3,39.2,92.3,92.3,0,118.9,0,237.8,0,356.7,0,53-39.3,92.2-92.3,92.3-92.2,0-184.5,0-276.7,0ZM500.1,770.7c91.7,0,183.4,0,275.1,0,27.8,0,44.6-16.7,44.6-44.4,0-118.1,0-236.2,0-354.4,0-27.3-16.8-44.1-44-44.1-38.9,0-77.9,0-116.8,0-14.9,0-22.6-5.5-27.4-19.7-5.5-16.2-10.8-32.5-16.3-48.8-6.7-19.7-20.7-29.9-41.6-29.9-48.9,0-97.9,0-146.8,0-21.8,0-35.3,9.9-42.4,30.8-5.1,15.3-10.2,30.6-15.3,45.9-5.5,16.6-12.6,21.7-29.9,21.7-37.9,0-75.8,0-113.7,0-28.9,0-45.3,16.4-45.3,45.1,0,117.3,0,234.7,0,352,0,29.4,16.2,45.7,45.5,45.7,91.5,0,182.9,0,274.4,0Z"/>
                                            <path d="M315.5,537.2c0-101.7,82.5-184.7,183.9-184.7,102.5,0,185.2,82.7,185.1,185.1,0,101.4-83,184-184.7,184-101.6,0-184.2-82.7-184.3-184.3ZM635.3,537.2c0-74.6-60.6-135.5-134.5-135.5-75.8,0-136.2,60.4-136.1,136.2.1,74,61,134.4,135.6,134.4,74,0,135.1-61,135-135.1Z"/>
                                            <path d="M770.5,402.3c-.3,13.3-11.7,24.2-25,23.9-13.6-.2-24.6-12-24.1-25.6.5-13.4,11.9-24,25.4-23.5,13.3.4,24.1,11.9,23.7,25.2Z"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span class="blog-icon-text">/ 0</span>
                        </div>
                        <h3>{{ $blogView->name }}</h3>
                        <p>{{ \Carbon\Carbon::parse($blogView->date)->format('j. n. Y') }} / {{ $blogView->city_name }} / {{ $blogView->location2 }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="reference-gallery">
            @foreach($items as $i => $blogView)
                @php
                    $class = $gallery2_classes[$i] ?? 'item-2';
                @endphp
{{--                <div class="{{ $class }}"--}}
{{--                     style="cursor: pointer; background-image: url('{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}')"--}}
{{--                     onclick="window.location.href='{{ route('blog', ['id' => $blogView->id]) }}'">--}}
{{--                    <div class="reference-text">--}}
{{--                        <h3>{{ $blogView->name }}</h3>--}}
{{--                        <p>{{ \Carbon\Carbon::parse($blogView->date)->format('j. n. Y') }} / {{ $blogView->city_name }} / {{ $blogView->location2 }}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="{{ $class }}"
                     style="cursor: pointer;background-image: url('{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}');"
                     onclick="window.location.href='{{ route('blog', ['id' => $blogView->id]) }}'">
                    <div class="reference-text">
                        <div class="blog-corner-badge">
                            <svg class="blog-icon" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                                <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                                <g>
                                    <g id="Vrstva_1">
                                        <path d="M-447.1,350.4h0Z"/>
                                        <g>
                                            <path d="M499.9,819.9c-91.7,0-183.5,0-275.2,0-55,0-93.7-38.8-93.7-93.9,0-117.9,0-235.8,0-353.7,0-55,38.8-93.7,94-93.7,31.5,0,63-.1,94.5.1,5.2,0,7.7-1.3,9.2-6.5,3.3-11.3,7.2-22.4,11.2-33.5,13-35.2,45.6-58.3,83.2-58.5,51.2-.3,102.5-.3,153.7,0,37.6.2,70,23.3,83.1,58.6,3.9,10.5,7.6,21.2,10.7,32,1.7,5.8,4.2,7.9,10.6,7.9,31.8-.4,63.5-.2,95.3-.2,53,0,92.3,39.2,92.3,92.3,0,118.9,0,237.8,0,356.7,0,53-39.3,92.2-92.3,92.3-92.2,0-184.5,0-276.7,0ZM500.1,770.7c91.7,0,183.4,0,275.1,0,27.8,0,44.6-16.7,44.6-44.4,0-118.1,0-236.2,0-354.4,0-27.3-16.8-44.1-44-44.1-38.9,0-77.9,0-116.8,0-14.9,0-22.6-5.5-27.4-19.7-5.5-16.2-10.8-32.5-16.3-48.8-6.7-19.7-20.7-29.9-41.6-29.9-48.9,0-97.9,0-146.8,0-21.8,0-35.3,9.9-42.4,30.8-5.1,15.3-10.2,30.6-15.3,45.9-5.5,16.6-12.6,21.7-29.9,21.7-37.9,0-75.8,0-113.7,0-28.9,0-45.3,16.4-45.3,45.1,0,117.3,0,234.7,0,352,0,29.4,16.2,45.7,45.5,45.7,91.5,0,182.9,0,274.4,0Z"/>
                                            <path d="M315.5,537.2c0-101.7,82.5-184.7,183.9-184.7,102.5,0,185.2,82.7,185.1,185.1,0,101.4-83,184-184.7,184-101.6,0-184.2-82.7-184.3-184.3ZM635.3,537.2c0-74.6-60.6-135.5-134.5-135.5-75.8,0-136.2,60.4-136.1,136.2.1,74,61,134.4,135.6,134.4,74,0,135.1-61,135-135.1Z"/>
                                            <path d="M770.5,402.3c-.3,13.3-11.7,24.2-25,23.9-13.6-.2-24.6-12-24.1-25.6.5-13.4,11.9-24,25.4-23.5,13.3.4,24.1,11.9,23.7,25.2Z"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span class="blog-icon-text">/ 0</span>
                        </div>
                        <h3>{{ $blogView->name }}</h3>
                        <p>{{ \Carbon\Carbon::parse($blogView->date)->format('j. n. Y') }} / {{ $blogView->city_name }} / {{ $blogView->location2 }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @php
        $index += $sliceLength;
    @endphp
@endwhile


    @include('_partials.main.footer')
    <script src="{{ asset('js/javascript.js') }}" defer></script>
</body>
