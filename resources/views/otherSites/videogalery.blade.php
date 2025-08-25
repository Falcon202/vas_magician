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
    <nav>
        <div class="nav-btn">
            <button class="first-button">
                poptávka
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                    <g>
                        <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <g>
                                <path d="M297.8,757.2c-7.3,0-14.3-2.9-19.5-8.1l-162.3-162.3c-10.8-10.8-10.8-28.2,0-39l162.3-162.3c10.3-10.3,28.6-10.3,39,0l162.3,162.3c10.8,10.8,10.8,28.2,0,39l-162.3,162.3c-5.2,5.2-12.2,8.1-19.5,8.1ZM174.4,567.3l123.3,123.3,123.3-123.3-123.3-123.3-123.3,123.3Z"/>
                                <path d="M702.2,757.2c-7.3,0-14.3-2.9-19.5-8.1l-162.3-162.3c-10.8-10.8-10.8-28.2,0-39l162.3-162.3c10.3-10.3,28.6-10.3,39,0l162.3,162.3c10.8,10.8,10.8,28.2,0,39l-162.3,162.3c-5.2,5.2-12.2,8.1-19.5,8.1ZM578.9,567.3l123.3,123.3,123.3-123.3-123.3-123.3-123.3,123.3Z"/>
                                <path d="M500,474.5c-7.3,0-14.3-2.9-19.5-8.1l-162.3-162.3c-10.8-10.8-10.8-28.2,0-39l162.3-162.3c10.3-10.3,28.6-10.3,39,0l162.3,162.3c10.8,10.8,10.8,28.2,0,39l-162.3,162.3c-5.2,5.2-12.2,8.1-19.5,8.1ZM376.6,284.6l123.3,123.3,123.4-123.4-123.3-123.3-123.4,123.4Z"/>
                                <path d="M500,904.9c-15.2,0-27.6-12.3-27.6-27.5v-140.7c0-15.2,12.3-27.5,27.6-27.5s27.6,12.3,27.6,27.5v140.7c0,15.2-12.3,27.5-27.6,27.5Z"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
        <div class="nav-logo">
            <div class="logo-wrapper">
                <img src="{{ asset('images/kouzelnik-martin-kellman-symbol.svg') }}" alt="Symbol loga Martin Kellman" class="logo-symbol">

                <img src="{{ asset('images/kouzelnik-martin-kellman-typograficke-logo.svg') }}" alt="Text loga Martin Kellman" class="logo-text">
            </div>
        </div>
        <div class="hamburger-menu">
            <img src="images/" alt="">
            menu
        </div>
    </nav>

    <div class="menu-overlay" id="menuOverlay"></div>
    <div class="main-menu" id="mainMenu">
        <ul class="menu-list">
            <li><a href="{{ route('index') }}">úvod</a></li>
            <li><a href="#">nabídka</a></li>
            <li><a href="{{ route('fotogalery') }}">galerie</a></li>
            <li><a href="{{ route('references') }}">reference</a></li>
            <li><a href="{{ route('contact') }}">kontakt</a></li>
        </ul>
    </div>
</header>

<section class="fotogalery-container">
    <div class="vertical-text-l left-side-text">
        <p>Děkuji všem svým klientům, že mohu být kouzelníkem na plný úvazek.</p>
    </div>
    <div class="fotogalery-image">
        <div class="fotogalery-text">
            <h2>videogalerie</h2>
        </div>
    </div>
    <div class="vertical-text-l right-side-text">
        <p>#MARTINKELLMAN</p>
    </div>
</section>


<section class="row-video">
    <div class="three-row-video">
        <div class="one-video">
            <h3>video</h3>
        </div>
        <div class="one-video">
            <h3>video</h3>
        </div>
        <div class="one-video">
            <h3>video</h3>
        </div>
    </div>

    <div class="three-row-video">
        <div class="one-video">
            <h3>video</h3>
        </div>
        <div class="one-video">
            <h3>video</h3>
        </div>
        <div class="one-video">
            <h3>video</h3>
        </div>
    </div>
</section>

    @include('_partials.main.footer')
    <script src="{{ asset('js/javascript.js') }}" defer></script>
</body>
