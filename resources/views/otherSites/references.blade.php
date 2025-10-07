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
            <img src="{{ asset('images/loga/logo-abs-jets.png') }}" alt="logo-absjets" class="logo-image">
            <img src="{{ asset('images/loga/logo-aquapalace-praha.png') }}" alt="logo-aquapalace" class="logo-image">
            <img src="{{ asset('images/loga/logo-bambule.png') }}" alt="logo-bambule" class="logo-image">
            <img src="{{ asset('images/loga/logo-bosch.png') }}" alt="logo-bosch" class="logo-image">
            <img src="{{ asset('images/loga/logo-chateau-mcely-spa-hotel-and-forest-retreat.png') }}" alt="logo-chateau-mcely-spa-hotel-and-forest-retreat" class="logo-image">
            <img src="{{ asset('images/loga/logo-chateau-trnova-hotel-and-restaurant.png') }}" alt="logo-chateau-mcely-spa-hotel-and-forest-retreat" class="logo-image">
            <img src="{{ asset('images/loga/logo-cloud-9-sky-bar-and-lounge.png') }}" alt="logo-cloud-9-sky-bar-and-lounge" class="logo-image">
            <img src="{{ asset('images/loga/logo-CPP-vienna-insurance-group.png') }}" alt="logo-CPP-vienna-insurance-group" class="logo-image">
        </div>
    </div>
</div>
<div class="logo-slider">
    <div class="slider-content-wrapper">
        <div class="slider-content">
            <img src="{{ asset('images/loga/logo-deloitte.png') }}" alt="logo-deloitte" class="logo-image">
            <img src="{{ asset('images/loga/logo-event-arena.png') }}" alt="logo-event-arena" class="logo-image">
            <img src="{{ asset('images/loga/logo-finep-developerska-spolecnost.png') }}" alt="logo-finep-developerska-spolecnost" class="logo-image">
            <img src="{{ asset('images/loga/logo-fischer.png') }}" alt="logo-fischer" class="logo-image">
            <img src="{{ asset('images/loga/logo-forum-karlin.png') }}" alt="logo-forum-karlin" class="logo-image">
            <img src="{{ asset('images/loga/logo-four-seasons.png') }}" alt="logo-four-seasons" class="logo-image">
            <img src="{{ asset('images/loga/logo-hasbro.png') }}" alt="logo-hasbro" class="logo-image">
            <img src="{{ asset('images/loga/logo-hermes-paris.png') }}" alt="logo-hermes-paris" class="logo-image">
        </div>
    </div>
</div>

<div class="logo-slider">
    <div class="slider-content-wrapper">
        <div class="slider-content">
            <img src="{{ asset('images/loga/logo-hilton-hotels-and-resorts.png') }}" alt="logo-hilton-hotels-and-resorts" class="logo-image">
            <img src="{{ asset('images/loga/logo-honor.png') }}" alt="logo-honor" class="logo-image">
            <img src="{{ asset('images/loga/logo-KB-pojistovna.png') }}" alt="logo-KB-pojistovna" class="logo-image">
            <img src="{{ asset('images/loga/logo-little-shoes.png') }}" alt="logo-little-shoes" class="logo-image">
            <img src="{{ asset('images/loga/logo-louis-vuitton.png') }}" alt="logo-louis-vuitton" class="logo-image">
            <img src="{{ asset('images/loga/logo-marriott-hotels-resorts-suites.png') }}" alt="logo-marriott-hotels-resorts-suites" class="logo-image">
            <img src="{{ asset('images/loga/logo-metlife.png') }}" alt="logo-metlife" class="logo-image">
            <img src="{{ asset('images/loga/logo-obecni-dum.png') }}" alt="logo-obecni-dum" class="logo-image">
        </div>
    </div>
</div>

<div class="logo-slider">
    <div class="slider-content-wrapper">
        <div class="slider-content">
            <img src="{{ asset('images/loga/logo-pepsi.png') }}" alt="logo-pepsi" class="logo-image">
            <img src="{{ asset('images/loga/logo-quix-art-of-inspiration.png') }}" alt="logo-quix-art-of-inspiration" class="logo-image">
            <img src="{{ asset('images/loga/logo-samsung.png') }}" alt="logo-samsung" class="logo-image">
            <img src="{{ asset('images/loga/logo-sportisimo.png') }}" alt="logo-sportisimo" class="logo-image">
            <img src="{{ asset('images/loga/logo-uniqa.png') }}" alt="logo-uniqa" class="logo-image">
            <img src="{{ asset('images/loga/logo-villa-richter.png') }}" alt="logo-villa-richter" class="logo-image">
            <img src="{{ asset('images/loga/logo-vodafone.png') }}" alt="logo-vodafone" class="logo-image">
        </div>
    </div>
</div>

    @include('_partials.main.footer')
    <script src="{{ asset('js/javascript.js') }}" defer></script>
</body>
