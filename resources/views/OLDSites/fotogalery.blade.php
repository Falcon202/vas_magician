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
    <div class="fotogalery-text">
        <h2>fotogalerie</h2>
    </div>
    <div class="navbar">
        <a href="">vše</a>
        <a href="">akce pro děti</a>
        <a href="">svatby</a>
        <a href="">firemní večírky</a>
        <a href="">ostatní</a>
    </div>
</section>
</body>
