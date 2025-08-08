<!DOCTYPE html>
<html lang="cs-CZ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('_partials.main.head')

    <link rel="stylesheet" href="{{ asset('/css/styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles/components.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

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
    <div class="image-purple">
        <img class="faq-toggle-image" src="{{ asset('images/citace.svg') }}" alt="Zobrazit více informací">
    </div>
    <section class="contactus">
        <!-- Nový textový sloupec vlevo -->
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
                    <input type="text" name="name" placeholder="jméno a příjmení"/>
                    <div class="underline"></div>
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="e-mailová adresa"/>
                    <div class="underline"></div>
                </div>

                <div class="form-group">
                    <input type="tel" name="phone" placeholder="telefonní číslo"/>
                    <div class="underline"></div>
                </div>

                <div class="form-group">
                    <input type="text" name="magic" placeholder="chcete čarovat?"/>
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
                    <button class="contact-button">
                        odeslat zprávu
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                            <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                            <g>
                                <g id="Vrstva_1">
                                    <path d="M-447.1,350.4h0Z"/>
                                    <g>
                                        <path
                                            d="M297.8,757.2c-7.3,0-14.3-2.9-19.5-8.1l-162.3-162.3c-10.8-10.8-10.8-28.2,0-39l162.3-162.3c10.3-10.3,28.6-10.3,39,0l162.3,162.3c10.8,10.8,10.8,28.2,0,39l-162.3,162.3c-5.2,5.2-12.2,8.1-19.5,8.1ZM174.4,567.3l123.3,123.3,123.3-123.3-123.3-123.3-123.3,123.3Z"/>
                                        <path
                                            d="M702.2,757.2c-7.3,0-14.3-2.9-19.5-8.1l-162.3-162.3c-10.8-10.8-10.8-28.2,0-39l162.3-162.3c10.3-10.3,28.6-10.3,39,0l162.3,162.3c10.8,10.8,10.8,28.2,0,39l-162.3,162.3c-5.2,5.2-12.2,8.1-19.5,8.1ZM578.9,567.3l123.3,123.3,123.3-123.3-123.3-123.3-123.3,123.3Z"/>
                                        <path
                                            d="M500,474.5c-7.3,0-14.3-2.9-19.5-8.1l-162.3-162.3c-10.8-10.8-10.8-28.2,0-39l162.3-162.3c10.3-10.3,28.6-10.3,39,0l162.3,162.3c10.8,10.8,10.8,28.2,0,39l-162.3,162.3c-5.2,5.2-12.2,8.1-19.5,8.1ZM376.6,284.6l123.3,123.3,123.4-123.4-123.3-123.3-123.4,123.4Z"/>
                                        <path
                                            d="M500,904.9c-15.2,0-27.6-12.3-27.6-27.5v-140.7c0-15.2,12.3-27.5,27.6-27.5s27.6,12.3,27.6,27.5v140.7c0,15.2-12.3,27.5-27.6,27.5Z"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>

            </form>
        </div>

        <!-- Nový textový sloupec vpravo -->
        <div class="vertical-text right-side-text">
            <p>#MARTINKELLMAN</p>
        </div>
    </section>
    <section class="towns">
        <div class="towns-text">
            <h2>města, ve kterých jsem často kouzelníkem</h2>
        </div>
        <div class="towns-item">
            <div class="towns-top">
                <div class="towns-text">
                    <span class="towns-city">Praha</span>
                    <div class="towns-answer">
                        <p>Hledáe originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými
                            zkušenostmi z dětsk...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>

        <div class="towns-item">
            <div class="towns-top">
                <div class="towns-text">
                    <span class="towns-city">Praha</span>
                    <div class="towns-answer">
                        <p>Hledáe originální zábavu pro vaši akci v Praze? Jsem profesionální kouzelník s bohatými
                            zkušenostmi z dětsk...</p>
                    </div>
                </div>
                <img src="{{ asset('images/KA987.jpg') }}" alt="">
            </div>
        </div>


    </section>

    @include('_partials.main.footer')
</body>
