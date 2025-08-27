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
<div class="quote-container">
    <img class="quote-toggle-image-left" src="{{ asset('images/citace.svg') }}" alt="Zobrazit více informací">

    <div class="quote-content-wrapper">
        <div class="quote-content">
            <p>Zde je text, který se má zobrazit po kliknutí. Může být libovolně dlouhý a obsahovat cokoliv, co potřebujete.</p>
        </div>
    </div>
</div>
</div>
<section class="contactus">
    <div class="vertical-text-l left-side-text">
        <p>Děkuji všem svým klientům, že mohu být kouzelníkem na plný úvazek.</p>
    </div>

    <div class="contactus-image">
        <img src="{{ asset('images/DSC00017-2-Enhanced-NR.jpg') }}" alt="">
    </div>
    <div class="contactus-form">
        <h2>Kouzlo na vaši akci, nebo jen tak?</h2>
        <h4>Těším se na naší budoucí spolupráci!</h4>

        <div class="contactus-tel">
            <a href="tel:+420777879704">+420 777 879 704</a>
            <a href="mailto:martin@vaskouzelnik.cz">martin@vaskouzelnik.cz</a>
        </div>

        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="jméno a příjmení" />
                <div class="underline"></div>
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="e-mailová adresa" />
                <div class="underline"></div>
            </div>

            <div class="form-group">
                <input type="tel" name="phone" placeholder="telefonní číslo" />
                <div class="underline"></div>
            </div>

            <div class="form-group">
                <input type="text" name="magic" placeholder="chcete čarovat?" />
                <div class="underline"></div>
            </div>

            <div class="form-group full-width">
                <textarea name="message" placeholder="okouzlete mě vaší zprávou!" rows="4"></textarea>
                <div class="underline"></div>
            </div>

            <div class="form-footer">
                <p class="gdpr-text">
                    Odesláním souhlasíte se zpracováním osobních údajů GDPR.
                </p>
                <button class="first-button">
                    odeslat zprávu
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

        </form>
    </div>

    <div class="vertical-text-l right-side-text">
        <p>#MARTINKELLMAN</p>
    </div>
</section>

<section class="contact-con-towns">
    <div class="contact-con-text">
        <h2>města, ve kterých jsem často kouzelníkem</h2>
    </div>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Praha
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Brno
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Plzeň
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Liberec
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Ústí nad Labem
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Hradec Králové
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Pardubice
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">České Budějjovice
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Tábor
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Písek
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Karlovy Vary
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Příbram
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Kutná Hora
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Mladá Boleslav
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Jihlava
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Chomutov
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Teplice
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Benešov
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
    <a href="{{ route('town', ['id' => 1]) }}" class="contact-con-link">
        <div class="contact-con-item">
            <div class="contact-con-top">
                <div class="contact-con-text">
                  <span class="contact-con-city">Poděbrady
                    <svg class="contact-con-svg" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 649.8 333.98">
                      <path d="M489.92,7.12c-9.49-9.49-24.86-9.49-34.34,0-9.49,9.48-9.49,24.86,0,34.34l101.23,101.23H24.29c-13.41,0-24.29,10.88-24.29,24.29s10.88,24.29,24.29,24.29h532.57l-101.27,101.27c-9.49,9.49-9.49,24.86,0,34.34,4.74,4.74,10.95,7.12,17.17,7.12s12.43-2.37,17.17-7.12l159.87-159.87L489.92,7.12Z"/>
                    </svg>
                  </span>
                    <div class="contact-con-answer">
                        <p>Hledáte originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými zkušenostmi z děts...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>
    </a>
</section>


    @include('_partials.main.footer')
    <script src="{{ asset('js/javascript.js') }}" defer></script>
</body>
