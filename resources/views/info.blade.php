

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

    <link rel="stylesheet" href="{{ asset('/css/info/info.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles/components.css') }}.">
    <link rel="stylesheet" href="{{ asset('/css/styles/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Info</title>

    <style>
        .single-blog-btn > button {
            border-radius: 46px;
        }
        @media only screen and (max-width: 991px) {
            .single-blog-galery {
                display: flex;
                flex-direction: column;
                gap: 20px;
                /*margin: 0 20px 30px;*/
            }

            .item-2 {
                height: 350px!important;
                width: 100%!important;
            }

            .tall,
            .small {
                grid-column: unset;
                grid-row: unset;
                height: auto;
            }

            .another-blog-galery{
                display: flex;
                flex-direction: column;
                gap: 20px;

                margin: 0;
            }
            .another-blog-galery > .item {
                height: 350px!important;
                width: 100%!important;
            }
        }
    </style>

</head>
<body>
    <header>
        todo header
    </header>

    <section>
        <article class="article_1">
            <div class="side-text-left">
                <span>Děkuji všem svým klientům, že mohu být kouzelníkem na plný úvazek.</span>
            </div>
            <div class="main-text">
                <h2>#MARTIN</h2>
                <h3>KELLMAN</h3>
            </div>
            <div class="side-text-right">
                <span>#MARTINKELLMAN</span>
            </div>
        </article>


        <article class="article_2">
            <span>Jmenuji se Martin a kouzlům se věnuji od 12 let. Začínal jsem asi jako každý kouzelník - malý kluk, kterému se do rukou dostala kouzelnická knížka.</span>
        </article>


        <article class="single-blog-photogalery">
            <div class="single-blog-galery">
                <div class="item-2 tall" style="background-image: url('{{ asset('/api/blog_photo/1') }}');">

                </div>
                <div class="item-2 small" style="background-image: url('{{ asset('/api/blog_photo/1') }}');">

                </div>
                <div class="item-2 tall" style="background-image: url('{{ asset('/api/blog_photo/1') }}');">

                </div>
                <div class="item-2 small" style="background-image: url('{{ asset('/api/blog_photo/1') }}');">

                </div>
            </div>
            <div class="single-blog-btn">
                <button>+ zobrazit více foto</button>
            </div>
        </article>


        <article class="article_4">
            <span>Později jsem začal chodit do kouzelnického kroužku p. Netopila a po letech k p. Jedličkovi, který vychovával mladé kouzelníky a důraz kladl na kouzla a pohyb na jevišti.</span>
        </article>


        <article class="article_5">
            <h2>chcete celý příběh?</h2>
        </article>


        <article class="article_6">
            <div>
                <img class="photo" alt="Foto článku" src="{{ asset('/img/testing/idnes.png') }}">
                <img class="logo" alt="Logo" src="{{ asset('/img/logos/idnes.png') }}">
                <span>článek z iDnes.cz / 2019</span>
                <h3>Šálíme smysly jako psychologové. Kouzlím i při policejní kontrole.</h3>
            </div>
            <div>
                <img class="photo" alt="Foto článku" src="{{ asset('/img/testing/denik.png') }}">
                <img class="logo" alt="Logo" src="{{ asset('/img/logos/denik.png') }}">
                <span>článek z Pražský deník / 2020</span>
                <h3>Martin Kellman: Kouzelník tělem i duší.</h3>
            </div>
            <div>
                <img class="photo" alt="Foto článku" src="{{ asset('/img/testing/soucasnost.png') }}">
{{--                <img class="logo" alt="Logo" src="{{ asset('/img/logos/idnes.png') }}">--}}
                <span></span>
                <h3></h3>
            </div>
        </article>


        <article class="article_7">
            <h2>tady jsem byl!</h2>
        </article>


        <article class="article_8">
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
        </article>


        <article class="article_9">
            <div class="blog-section">
                <div class="white-top">

                </div>
                <div class="image-bottom" style="background-image: url('{{ asset('/img/testing/lettersImage.png') }}');">
                    <div class="vertical-texts">
                        <div class="word"><span class="white">ko</span><span>uzelník</span></div>
                        <div class="word"><span class="white">mo</span><span>derátor</span></div>
                        <div class="word"><span class="white">ba</span><span>vič</span></div>
                        <div class="word"><span class="white">Ma</span><span>rtin</span></div>
                        <div class="word"><span class="white">ti</span><span>cho prosím</span></div>
                        <div class="word"><span class="white">ba</span><span>lónky</span></div>
                    </div>
                </div>
            </div>
        </article>
    </section>

    @include('_partials.main.footer')

</body>
</html>


