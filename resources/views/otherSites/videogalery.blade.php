<!DOCTYPE html>
<html lang="cs-CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('_partials.main.head')

    <link rel="stylesheet" href="{{ asset('/css/styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles/components.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Domů - VASkouzelnik</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-btn">
                <button class="first-button">poptávka</button>
            </div>
            <div class="nav-logo">
                <img src="{{ asset('images/kouzelník-martin-kellman-symbol.svg') }}" alt="">
            </div>
            <div class="hamburger-menu">
                <img src="images/" alt="">
                menu
            </div>
        </nav>
    </header>

    <section class="fotogalery-container">
        <div class="vertical-text-l left-side-text">
            <p>Děkuji všem svým klientům, že mohu být kouzelníkem na plný úvazek.</p>
        </div>
        <div class="fotogalery-image">
            <div class="fotogalery-text">
                <h2>videogalerie</h2>
            </div>
            <div class="navbar">
                <a href="" class="active">vše</a>
                <a href="">akce pro děti</a>
                <a href="">svatby</a>
                <a href="">firemní večírky</a>
                <a href="">ostatní</a>
            </div>
        </div>
        <div class="vertical-text right-side-text">
            <p>#MARTINKELLMAN</p>
        </div>
    </section>
    <div class="image-purple">
        <img class="faq-toggle-image" src="{{ asset('images/citace.svg') }}" alt="Zobrazit více informací">

        <div class="hidden-text" id="myHiddenText">
            <p>Tady je ten skrytý text, který vyjede přímo z obrázku. Může to být delší odstavec, další citace, nebo jakýkoli obsah, který potřebuješ zobrazit jen na vyžádání.</p>
            <p>Můžeš zde mít více odstavců nebo jiných HTML elementů.</p>
        </div>
    </div>

    @include('_partials.main.footer')

    <script src="{{ asset('js/javascript.js') }}" defer></script>
</body>
