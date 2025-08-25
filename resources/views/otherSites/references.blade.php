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

<section class="main-reference">
    <div class="vertical-text-l left-side-text">
        <p>Děkuji všem svým klientům, že mohu být kouzelníkem na plný úvazek.</p>
    </div>
    <div class="main-reference-container">
        <h2>reference</h2>
    </div>
    <div class="vertical-text-l right-side-text">
        <p>#MARTINKELLMAN</p>
    </div>
</section>

<section class="references-container">
    <div class="references-brands">
        <div class="main-review-container">
            <div class="review-item">
                <div class="logo-circle">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google logo">
                </div>
                <div class="rating-info">
                    <div class="star-group">
                        <span class="star-icon">★</span>
                    </div>
                    <span class="rating">4.8</span>
                    <span class="reviews">/ 50 recenzí</span>
                </div>
            </div>
        </div>
    </div>


    <div class="reviews-container">
        <div class="review-block">
            <div class="review-info-top">
                <div class="avatar-holder">
                    <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové" class="profile-pic">
                </div>
                <div class="author-details">
                    <h3 class="author-name">Zuzana Kučerová</h3>
                    <span class="review-count-text">2 recenze</span>
                </div>
            </div>
            <div class="rating-and-time">
                <div class="star-group">
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                </div>
                <span class="timestamp">před 2 měsíci</span>
            </div>
            <p class="review-content">
                Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level. Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí. Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie prostě všechny dostala. Moc děkujeme za skvělý halloween
            </p>
        </div>
        <div class="review-block">
            <div class="review-info-top">
                <div class="avatar-holder">
                    <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové" class="profile-pic">
                </div>
                <div class="author-details">
                    <h3 class="author-name">Zuzana Kučerová</h3>
                    <span class="review-count-text">2 recenze</span>
                </div>
            </div>
            <div class="rating-and-time">
                <div class="star-group">
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                </div>
                <span class="timestamp">před 2 měsíci</span>
            </div>
            <p class="review-content">
                Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level. Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí. Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie prostě všechny dostala. Moc děkujeme za skvělý halloween
            </p>
        </div>
        <div class="review-block">
            <div class="review-info-top">
                <div class="avatar-holder">
                    <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové" class="profile-pic">
                </div>
                <div class="author-details">
                    <h3 class="author-name">Zuzana Kučerová</h3>
                    <span class="review-count-text">2 recenze</span>
                </div>
            </div>
            <div class="rating-and-time">
                <div class="star-group">
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                </div>
                <span class="timestamp">před 2 měsíci</span>
            </div>
            <p class="review-content">
                Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level. Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí. Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie prostě všechny dostala. Moc děkujeme za skvělý halloween
            </p>
        </div>
    </div>
    <div class="references-arrow-container">
        <span class="arrow ref-left-arrow"></span>
        <span class="arrow ref-right-arrow"></span>
    </div>
</section>

<section class="references-container">
    <div class="references-brands">
        <div class="main-review-container">
            <div class="review-item">
                <div class="logo-circle">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google logo">
                </div>
                <div class="rating-info">
                    <div class="star-group">
                        <span class="star-icon">★</span>
                    </div>
                    <span class="rating">4.8</span>
                    <span class="reviews">/ 50 recenzí</span>
                </div>
            </div>
        </div>
    </div>


    <div class="reviews-container">
        <div class="review-block">
            <div class="review-info-top">
                <div class="avatar-holder">
                    <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové" class="profile-pic">
                </div>
                <div class="author-details">
                    <h3 class="author-name">Zuzana Kučerová</h3>
                    <span class="review-count-text">2 recenze</span>
                </div>
            </div>
            <div class="rating-and-time">
                <div class="star-group">
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                </div>
                <span class="timestamp">před 2 měsíci</span>
            </div>
            <p class="review-content">
                Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level. Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí. Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie prostě všechny dostala. Moc děkujeme za skvělý halloween
            </p>
        </div>
        <div class="review-block">
            <div class="review-info-top">
                <div class="avatar-holder">
                    <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové" class="profile-pic">
                </div>
                <div class="author-details">
                    <h3 class="author-name">Zuzana Kučerová</h3>
                    <span class="review-count-text">2 recenze</span>
                </div>
            </div>
            <div class="rating-and-time">
                <div class="star-group">
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                </div>
                <span class="timestamp">před 2 měsíci</span>
            </div>
            <p class="review-content">
                Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level. Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí. Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie prostě všechny dostala. Moc děkujeme za skvělý halloween
            </p>
        </div>
        <div class="review-block">
            <div class="review-info-top">
                <div class="avatar-holder">
                    <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové" class="profile-pic">
                </div>
                <div class="author-details">
                    <h3 class="author-name">Zuzana Kučerová</h3>
                    <span class="review-count-text">2 recenze</span>
                </div>
            </div>
            <div class="rating-and-time">
                <div class="star-group">
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                </div>
                <span class="timestamp">před 2 měsíci</span>
            </div>
            <p class="review-content">
                Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level. Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí. Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie prostě všechny dostala. Moc děkujeme za skvělý halloween
            </p>
        </div>
    </div>
    <div class="references-arrow-container">
        <span class="arrow ref-left-arrow"></span>
        <span class="arrow ref-right-arrow"></span>
    </div>
</section>

<section class="references-container">
    <div class="references-brands">
        <div class="main-review-container">
            <div class="review-item">
                <div class="logo-circle">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google logo">
                </div>
                <div class="rating-info">
                    <div class="star-group">
                        <span class="star-icon">★</span>
                    </div>
                    <span class="rating">4.8</span>
                    <span class="reviews">/ 50 recenzí</span>
                </div>
            </div>
        </div>
    </div>


    <div class="reviews-container">
        <div class="review-block">
            <div class="review-info-top">
                <div class="avatar-holder">
                    <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové" class="profile-pic">
                </div>
                <div class="author-details">
                    <h3 class="author-name">Zuzana Kučerová</h3>
                    <span class="review-count-text">2 recenze</span>
                </div>
            </div>
            <div class="rating-and-time">
                <div class="star-group">
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                </div>
                <span class="timestamp">před 2 měsíci</span>
            </div>
            <p class="review-content">
                Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level. Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí. Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie prostě všechny dostala. Moc děkujeme za skvělý halloween
            </p>
        </div>
        <div class="review-block">
            <div class="review-info-top">
                <div class="avatar-holder">
                    <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové" class="profile-pic">
                </div>
                <div class="author-details">
                    <h3 class="author-name">Zuzana Kučerová</h3>
                    <span class="review-count-text">2 recenze</span>
                </div>
            </div>
            <div class="rating-and-time">
                <div class="star-group">
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                </div>
                <span class="timestamp">před 2 měsíci</span>
            </div>
            <p class="review-content">
                Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level. Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí. Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie prostě všechny dostala. Moc děkujeme za skvělý halloween
            </p>
        </div>
        <div class="review-block">
            <div class="review-info-top">
                <div class="avatar-holder">
                    <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové" class="profile-pic">
                </div>
                <div class="author-details">
                    <h3 class="author-name">Zuzana Kučerová</h3>
                    <span class="review-count-text">2 recenze</span>
                </div>
            </div>
            <div class="rating-and-time">
                <div class="star-group">
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                    <span class="star-icon">★</span>
                </div>
                <span class="timestamp">před 2 měsíci</span>
            </div>
            <p class="review-content">
                Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level. Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí. Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie prostě všechny dostala. Moc děkujeme za skvělý halloween
            </p>
        </div>
    </div>
    <div class="references-arrow-container">
        <span class="arrow ref-left-arrow"></span>
        <span class="arrow ref-right-arrow"></span>
    </div>
</section>

<div class="logo-slider">
    <div class="slider-content-wrapper">
        <div class="slider-content">
            <img src="{{ asset('images/logo-tesco.png') }}" alt="Logo 1" class="logo-image">
            <img src="{{ asset('images/logo-letnany-obchodni-centrum.png') }}" alt="Logo 2" class="logo-image">
            <img src="{{ asset('images/logo-tesco.png') }}" alt="Logo 3" class="logo-image">
            <img src="{{ asset('images/logo-letnany-obchodni-centrum.png') }}" alt="Logo 4" class="logo-image">
            <img src="{{ asset('images/logo-tesco.png') }}" alt="Logo 5" class="logo-image">
            <img src="{{ asset('images/logo-letnany-obchodni-centrum.png') }}" alt="Logo 6" class="logo-image">
            <img src="{{ asset('images/logo-tesco.png') }}" alt="Logo 7" class="logo-image">
            <img src="{{ asset('images/logo-letnany-obchodni-centrum.png') }}" alt="Logo 8" class="logo-image">
        </div>
    </div>
</div>
<div class="logo-slider">
    <div class="slider-content-wrapper">
        <div class="slider-content">
            <img src="{{ asset('images/logo-tesco.png') }}" alt="Logo 1" class="logo-image">
            <img src="{{ asset('images/logo-letnany-obchodni-centrum.png') }}" alt="Logo 2" class="logo-image">
            <img src="{{ asset('images/logo-tesco.png') }}" alt="Logo 3" class="logo-image">
            <img src="{{ asset('images/logo-letnany-obchodni-centrum.png') }}" alt="Logo 4" class="logo-image">
            <img src="{{ asset('images/logo-tesco.png') }}" alt="Logo 5" class="logo-image">
            <img src="{{ asset('images/logo-letnany-obchodni-centrum.png') }}" alt="Logo 6" class="logo-image">
            <img src="{{ asset('images/logo-tesco.png') }}" alt="Logo 7" class="logo-image">
            <img src="{{ asset('images/logo-letnany-obchodni-centrum.png') }}" alt="Logo 8" class="logo-image">
        </div>
    </div>
</div>

    @include('_partials.main.footer')
    <script src="{{ asset('js/javascript.js') }}" defer></script>
</body>
