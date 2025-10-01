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
</header>

<section class="main-error">
    <div class="vertical-text-l left-side-text">
        <p>Děkuji všem svým klientům, že mohu být kouzelníkem na plný úvazek.</p>
    </div>
    <div class="main-error-container">
        <h2>404</h2>
        <h3>stránku se nepodařilo načíst</h3>
        <a href="{{ route('index') }}">přejít na domovskou stránku</a>
    </div>
    <div class="vertical-text-l right-side-text">
        <p>#MARTINKELLMAN</p>
    </div>
</section>

<script src="{{ asset('js/javascript.js') }}" defer></script>
</body>
