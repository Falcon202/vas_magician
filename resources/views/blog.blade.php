<!doctype html>
<html lang="cs-CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    @include('_partials.main.head')

    <link rel="stylesheet" href="{{ asset('/css/styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles/components.css') }}.">
    <link rel="stylesheet" href="{{ asset('/css/styles/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Blog</title>

</head>
<body>

    <nav>
        <a href="{{ route('home') }}" class="navbar">vše</a>
        @foreach($categories as $category)
            <a href="{{ route('category', ['id' => $category->id]) }}" class="navbar">{{ $category->name }}</a>
        @endforeach
    </nav>

    @php
        $gallery1_classes = ['item large', 'item', 'item tall', 'item wide'];
        $gallery2_classes = ['item-2 wide-2', 'item-2 tall-2', 'item-2 large-2', 'item-2 large-2', 'item-2 wide-2'];

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
                    <div class="{{ $class }}"
                         style="cursor: pointer; background-image: url('{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}')"
                         onclick="window.location.href='{{ route('blog', ['id' => $blogView->id]) }}'">
                        <div class="text">
                            <h3>{{ $blogView->name }}</h3>
                            <p>{{ \Carbon\Carbon::parse($blogView->date)->format('j. n. Y') }} / {{ $blogView->location }} / {{ $blogView->location2 }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="gallery-2">
                @foreach($items as $i => $blogView)
                    @php
                        $class = $gallery2_classes[$i] ?? 'item-2';
                    @endphp
                    <div class="{{ $class }}"
                         style="cursor: pointer; background-image: url('{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}')"
                         onclick="window.location.href='{{ route('blog', ['id' => $blogView->id]) }}'">
                        <div class="text-2">
                            <h3>{{ $blogView->name }}</h3>
                            <p>{{ \Carbon\Carbon::parse($blogView->date)->format('j. n. Y') }} / {{ $blogView->location }} / {{ $blogView->location2 }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        @php
            $index += $sliceLength;
        @endphp
    @endwhile

{{--    <div class="gallery">--}}
{{--        @foreach($blogViews->take(4) as $index => $blogView)--}}
{{--            @php--}}
{{--                $classes = ['item large', 'item', 'item tall', 'item wide'];--}}
{{--                $class = $classes[$index] ?? 'item';--}}
{{--            @endphp--}}
{{--            <div class="{{ $class }}"--}}
{{--                 style="cursor: pointer; background-image: url('{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}')"--}}
{{--                 onclick="window.location.href='{{ route('blog', ['id' => $blogView->id]) }}'">--}}
{{--                <div class="text">--}}
{{--                    <h3>{{ $blogView->name }}</h3>--}}
{{--                    <p>{{ \Carbon\Carbon::parse($blogView->date)->format('j. n. Y') }} / {{ $blogView->location }} / {{ $blogView->location2 }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--    <div class="gallery-2">--}}
{{--        @php--}}
{{--            $classes = ['item-2 wide-2', 'item-2 tall-2', 'item-2 large-2', 'item-2 large-2', 'item-2 wide-2'];--}}
{{--        @endphp--}}

{{--        @foreach($blogViews->slice(4, 5)->values() as $index => $blogView)--}}
{{--            <div class="{{ $classes[$index] }}"--}}
{{--                 style="cursor: pointer; background-image: url('{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}')"--}}
{{--                 onclick="window.location.href='{{ route('blog', ['id' => $blogView->id]) }}'">--}}
{{--                <div class="text-2">--}}
{{--                    <h3>{{ $blogView->name }}</h3>--}}
{{--                    <p>{{ \Carbon\Carbon::parse($blogView->date)->format('j. n. Y') }} / {{ $blogView->location }} / {{ $blogView->location2 }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}

    <footer>
        <div class="contact">
            <div class="contact-text">
                <h2>Kouzlo na vaši akci,<br> nebo jen tak?</h2>
                <p>
                    Těším se na naší budoucí spolupráci!
                </p>
            </div>
            <div class="contact-info">
                <a href="tel:+420777879704">+420 777 879 704</a>
                <a href="mailto:martin@vaskouzelnik.cz">martin@vaskouzelnik.cz</a>
            </div>
        </div>
        <div class="copyright">
            © 2025 SKYBERT graphic studio & production. Všechna práva vyhrazena.
        </div>
    </footer>

</body>
</html>

