
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

    <title>{{ $blogView->name }}</title>

</head>
<body>
    <main class="single-blog">
        <div class="blog-header" style="background-image: url('{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }} ')">
            <h3>{{ $blogView->name }}</h3>
            <p>{{ $blogView->category_name . " " . \Carbon\Carbon::parse($blogView->date)->format('j. n. Y') }} / {{ $blogView->location }} / {{ $blogView->location2 }}</p>
        </div>
    </main>

    <section class="single-blog-photogalery">
        <div class="single-blog-text">
            <h4>{{ $blogView->text }}</h4>
        </div>
        @php
            // Rozděl fotky do skupin po 4
            $chunks = $blogPhotos->chunk(4);
        @endphp

        @foreach($chunks as $chunkIndex => $chunk)
            <div class="single-blog-galery" style="{{ $chunkIndex > 0 ? 'display:none;' : '' }}">
                @foreach($chunk as $index => $blogPhoto)
                    @php
                        $class = $index % 2 === 0 ? 'tall' : 'small';
                    @endphp
                    <div class="item-2 {{ $class }}" style="background-image: url('{{ asset('/api/blog_photo/' . $blogPhoto->id) }}');"></div>
                @endforeach
            </div>
            @if($chunkIndex < $chunks->count() - 1)
                <div class="single-blog-btn" style="{{ $chunkIndex > 0 ? 'display:none;' : '' }}">
                    <button class="show-more-btn" data-next="{{ $chunkIndex + 1 }}">+ zobrazit více foto</button>
                </div>
            @endif
        @endforeach

        <script>
            document.querySelectorAll('.show-more-btn').forEach(button => {
                button.addEventListener('click', () => {
                    const nextIndex = button.dataset.next;

                    // Najdi další galerii a zobraz ji
                    const galleries = document.querySelectorAll('.single-blog-galery');
                    const buttons = document.querySelectorAll('.single-blog-btn');

                    if(galleries[nextIndex]) {
                        galleries[nextIndex].style.display = ''; // nebo block podle tvého layoutu
                    }

                    // Skryj aktuální tlačítko
                    button.parentElement.style.display = 'none';

                    // Pokud existuje další tlačítko, zobraz ho
                    if(buttons[nextIndex]) {
                        buttons[nextIndex].style.display = '';
                    }
                });
            });
        </script>

{{--        <div class="single-blog-galery">--}}
{{--            @foreach($blogPhotos->take(4) as $index => $blogPhoto)--}}
{{--                @php--}}
{{--                    $class = $index % 2 === 0 ? 'tall' : 'small';--}}
{{--                @endphp--}}
{{--                <div class="item-2 {{ $class }}" style="background-image: url('{{ asset('/api/blog_photo/' . $blogPhoto->id) }}');"></div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="single-blog-btn">--}}
{{--            <button>+ zobrazit více foto</button>--}}
{{--        </div>--}}
{{--        <div class="single-blog-galery" style="display: none;">--}}
{{--            @foreach($blogPhotos->take(4) as $index => $blogPhoto)--}}
{{--                @php--}}
{{--                    $class = $index % 2 === 0 ? 'tall' : 'small';--}}
{{--                @endphp--}}
{{--                <div class="item-2 {{ $class }}" style="background-image: url('{{ asset('/api/blog_photo/' . $blogPhoto->id) }}');"></div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="single-blog-btn" style="display: none;">--}}
{{--            <button>+ zobrazit více foto</button>--}}
{{--        </div>--}}
    </section>

    <section class="another-blog">
        <div class="references-info-container">
            <div class="references-info-container-text">
                <h2>další náhodné akce</h2>
            </div>
            <button class="second-button">objednat Martina</button>
        </div>
        <div class="another-blog-galery">
            @foreach($nextBlogViews->take(2) as $blogView)
                <div class="item mid"
                     style=" cursor: pointer; background-image: url('{{ asset('/api/blog_photo/' . $blogView->main_photo_id) }}');"
                     onclick="window.location.href='{{ route('blog', ['id' => $blogView->id]) }}'">
                    <h3>{{ $blogView->name }}</h3>
                    <p>{{ \Carbon\Carbon::parse($blogView->date)->format('j. n. Y') }} / {{ $blogView->location }} / {{ $blogView->location2 }}</p>
                </div>
            @endforeach
        </div>
    </section>

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


