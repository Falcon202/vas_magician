<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('/css/styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles/components.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>Domů - VASkouzelnik</title>
</head>
<body>
    <header>
        @include('_partials.main.navMenu')

        <main>
            <div class="vertical-text-l left-side-text">
                <p>Děkuji všem svým klientům, že mohu být kouzelníkem na plný úvazek.</p>
            </div>
            <div class="slider-container">
                <div class="background-layer" id="bg-layer-1"></div>
                <div class="background-layer" id="bg-layer-2"></div>

                <div class="bottom-content-wrapper">
                    <div class="content">
                        <h1 class="title">MARTIN<br>KELLMAN</h1>
                        <p class="subtitle">kouzelník I moderátor</p>
                    </div>
                    <div class="info-bottom-right">
                        <p class="slide-number">1 / 4</p>
                        <p class="event-type">firemní akce</p>
                    </div>
                </div>

                <div class="bottom-nav">
                    <ul class="nav-list">
                        <li class="nav-item active">firemní akce</li> |
                        <li class="nav-item">dětské akce</li> |
                        <li class="nav-item">svatby</li> |
                        <li class="nav-item">moderace</li>
                    </ul>
                </div>
            </div>
            </div>
            <div class="vertical-text-l right-side-text">
                <p>#MARTINKELLMAN</p>
            </div>
        </main>
    </header>

    <section class="promo-container">
        <div class="promo-info-container">
            <div class="promo-info-container-text">
                <h2>propůjčil jsem si realitu, <br> a proto nic není pravda a vše je dovoleno</h2>
            </div>
            <button class="first-button">

                <span>objednat Martina</span>
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
        <div class="promo-programme">
            <div class="promo-programme-container" id="animated-promo-container">
                <svg class="promo-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                    <g>
                        <g id="Vrstva_1">
                            <path
                                d="M942.6,766.2h-183.8V205.6c0-15.2-12.3-27.5-27.6-27.5h-441.6c-15.2,0-27.6,12.3-27.6,27.5v560.6H57.4c-15.2,0-27.6,12.3-27.6,27.5s12.3,27.5,27.6,27.5h226.1c2,.5,4,.7,6.2.7h441.6c2.1,0,4.2-.2,6.2-.7h205.2c15.2,0,27.6-12.3,27.6-27.5s-12.3-27.5-27.6-27.5ZM317.2,233.1h386.5v533h-386.5V233.1Z"/>
                        </g>
                    </g>
                </svg>
                <h3>Připravuji akci pro děti</h3>
            </div>
            <div class="promo-programme-container" id="animated-promo-container">
                <svg class="promo-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                    <g>
                        <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <g>
                                <path
                                    d="M355.1,783.1c-7,0-14.1-2.7-19.4-8l-248.5-247.6c-5.2-5.2-8.1-12.2-8.1-19.5s2.9-14.3,8.1-19.5L481.5,95.5c5.8-5.7,13.5-8.4,20.9-8,7.6-.5,15.5,2.1,21.3,8l389.1,387.7c5.2,5.2,8.1,12.2,8.1,19.5s-2.9,14.3-8.1,19.5l-251.9,251c-10.8,10.7-28.1,10.7-38.9,0l-122.8-122.4-124.7,124.3c-5.4,5.4-12.4,8-19.4,8ZM145.6,507.9l209.5,208.7,124.7-124.3c10.8-10.7,28.1-10.7,38.9,0l122.8,122.4,212.8-212.1L502.6,152.2,145.6,507.9Z"/>
                                <path
                                    d="M500,912.5c-15.2,0-27.6-12.3-27.6-27.5v-140.7c0-15.2,12.3-27.5,27.6-27.5s27.6,12.3,27.6,27.5v140.7c0,15.2-12.3,27.5-27.6,27.5Z"/>
                            </g>
                        </g>
                    </g>
                </svg>
                <h3>Plánuji firemní akce</h3>
            </div>
            <div class="promo-programme-container" id="animated-promo-container">
                <svg class="promo-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                    <g>
                        <g id="Vrstva_1">
                            <g>
                                <path
                                    d="M232.8,862.4c-7,0-14.1-2.7-19.5-8.1l-68.4-68.4c-10.8-10.8-10.8-28.2,0-39,10.8-10.8,28.2-10.8,39,0l68.4,68.4c10.8,10.8,10.8,28.2,0,39-5.4,5.4-12.4,8.1-19.5,8.1Z"/>
                                <path
                                    d="M433.2,806.3c-68,0-131.1-18.4-175.7-63-126.1-126.1-42.8-399,72.7-514.5,121.6-121.6,319.6-121.4,441.5.4,121.8,121.8,122,319.9.4,441.5-74.6,74.6-214.9,135.7-338.8,135.7ZM550.5,192.7c-65.7,0-131.4,25-181.4,75-52,52-95,137.7-112.2,223.6-18.4,91.9-4,169.5,39.5,213,43.5,43.5,121.1,57.9,213,39.5,85.9-17.2,171.6-60.1,223.6-112.2,100.1-100.1,99.9-263.2-.4-363.6-50.2-50.2-116.2-75.4-182.1-75.4Z"/>
                            </g>
                        </g>
                    </g>
                </svg>
                <h3>Dětská oslava narozenin</h3>
            </div>
        </div>
        <div class="promo-programme">
            <div class="promo-programme-container" id="animated-promo-container">
                <svg class="promo-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                    <g>
                        <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <path
                                d="M495.7,847.9c-7,0-14.1-2.7-19.4-8L87.1,452.1c-5.2-5.2-8.1-12.2-8.1-19.5s2.9-14.3,8.1-19.5l251.9-251c10.8-10.7,28.1-10.7,38.9,0l122.8,122.4,124.7-124.3c10.8-10.7,28.1-10.7,38.9,0l248.5,247.6c5.2,5.2,8.1,12.2,8.1,19.5s-2.9,14.3-8.1,19.5l-394.3,392.9c-5.8,5.7-13.4,8.4-20.9,8-.6,0-1.3,0-1.9,0ZM145.6,432.6l351.8,350.5,357-355.7-209.5-208.7-124.7,124.3c-10.8,10.7-28.1,10.7-38.9,0l-122.8-122.4-212.8,212.1Z"/>
                        </g>
                    </g>
                </svg>
                <h3>Family day pro děti a rodiče</h3>
            </div>
            <div class="promo-programme-container" id="animated-promo-container">
                <svg class="promo-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                    <g>
                        <g id="Vrstva_1">
                            <path
                                d="M836.2,763.5c-5.6,0-11.1-1.7-15.8-5l-320.3-224.8-320.3,224.8c-8.4,5.9-19.4,6.6-28.5,1.9-9.1-4.7-14.8-14.2-14.8-24.4v-471.9c0-10.3,5.7-19.7,14.8-24.4,9.1-4.7,20.1-4,28.5,1.9l320.3,224.8,320.3-224.8c8.4-5.9,19.4-6.6,28.5-1.9,9.1,4.7,14.8,14.2,14.8,24.4v471.9c0,10.3-5.7,19.7-14.8,24.4-4,2.1-8.4,3.1-12.7,3.1ZM548,500l260.6,182.9v-365.9l-260.6,182.9ZM191.4,317.1v365.9l260.6-182.9-260.6-182.9Z"/>
                        </g>
                    </g>
                </svg>
                <h3>Kouzelná svatba</h3>
            </div>
            <div class="promo-programme-container" id="animated-promo-container">
                <svg class="promo-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                    <g>
                        <g id="Vrstva_1">
                            <g>
                                <path
                                    d="M500,204.7c15.2,0,27.6-12.3,27.6-27.5v-96.7c0-15.2-12.3-27.5-27.6-27.5s-27.6,12.3-27.6,27.5v96.7c0,15.2,12.3,27.5,27.6,27.5Z"/>
                                <path
                                    d="M500,795.3c-15.2,0-27.6,12.3-27.6,27.5v96.7c0,15.2,12.3,27.5,27.6,27.5s27.6-12.3,27.6-27.5v-96.7c0-15.2-12.3-27.5-27.6-27.5Z"/>
                                <path
                                    d="M785.2,214.8c-10.8-10.8-28.2-10.8-39,0l-246.2,246.2-246.2-246.2c-10.8-10.8-28.2-10.8-39,0-10.8,10.8-10.8,28.2,0,39l246.2,246.2-246.2,246.2c-10.8,10.8-10.8,28.2,0,39,5.4,5.4,12.4,8.1,19.5,8.1s14.1-2.7,19.5-8.1l246.2-246.2,246.2,246.2c5.4,5.4,12.4,8.1,19.5,8.1s14.1-2.7,19.5-8.1c10.8-10.8,10.8-28.2,0-39l-246.2-246.2,246.2-246.2c10.8-10.8,10.8-28.2,0-39Z"/>
                                <path
                                    d="M177.1,472.5h-96.7c-15.2,0-27.6,12.3-27.6,27.5s12.3,27.5,27.6,27.5h96.7c15.2,0,27.6-12.3,27.6-27.5s-12.3-27.5-27.6-27.5Z"/>
                                <path
                                    d="M919.6,472.5h-96.7c-15.2,0-27.6,12.3-27.6,27.5s12.3,27.5,27.6,27.5h96.7c15.2,0,27.6-12.3,27.6-27.5s-12.3-27.5-27.6-27.5Z"/>
                            </g>
                        </g>
                    </g>
                </svg>
                <h3>Dospělá oslava narozenin</h3>
            </div>

        </div>

        <div class="magic-container">
            <div class="magic-box-black">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                    <g>
                        <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <g>
                                <path
                                    d="M936.7,323h-215.9c-15.2,0-27.6-12.3-27.6-27.5s12.3-27.5,27.6-27.5h215.9c15.2,0,27.6,12.3,27.6,27.5s-12.3,27.5-27.6,27.5Z"/>
                                <path
                                    d="M677.1,529H55c-15.2,0-27.6-12.3-27.6-27.5s12.3-27.5,27.6-27.5h622.1c15.2,0,27.6,12.3,27.6,27.5s-12.3,27.5-27.6,27.5Z"/>
                                <path
                                    d="M945,732.1H322.9c-15.2,0-27.6-12.3-27.6-27.5s12.3-27.5,27.6-27.5h622.1c15.2,0,27.6,12.3,27.6,27.5s-12.3,27.5-27.6,27.5Z"/>
                            </g>
                        </g>
                    </g>
                </svg>
                <h3 class="magic-h">Bespoke Magic</h3>
                <p class="magic-p">magii propojím s příběhem vaší značky, do kouzel
                    vložím Vaše produkty.</p>
            </div>
            <div class="magic-box-white">
                <svg id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100.79 1244.43">
                    <g id="Group_141">
                        <path id="Path_764" d="M841.72,0c-143.07.14-259.02,116.09-259.16,259.16,0,4.78,0,9.48.42,14.15-7.24,6.71-13.88,14.03-19.84,21.89L70.56,941.54l-.21.21c-9.79,12.8-14.31,28.86-12.63,44.89-33.94,37.5-54.28,85.33-57.72,135.79.85,35.46,17.32,68.73,44.99,90.9,24.99,20.86,56.71,31.89,89.25,31.05,141.75,0,342.43-169.99,492.76-310.98l9.66-9.06c13.25-11.8,14.44-32.11,2.64-45.36-11.8-13.25-32.11-14.44-45.36-2.64-.39.35-.77.7-1.14,1.06l-9.76,9.06c-340.46,319.12-457.19,310.98-496.4,277.69-13.61-10.1-21.79-25.92-22.18-42.87v-1.23c3.13-29.72,15.01-57.85,34.12-80.82,7.09,2.82,14.65,4.27,22.29,4.28,13.91-.1,27.41-4.71,38.48-13.12l646.53-492.76c7.72-5.98,14.93-12.58,21.58-19.74,4.67.31,9.48.42,14.25.42,143.13-.03,259.14-116.09,259.1-259.22C1100.76,116.03,984.79.05,841.72,0M144.77,960.58l-18.82,14.36,15.75-20.45h0l458.37-601.8c26.41,67.92,80.13,121.62,148.05,148.02L144.77,960.58ZM865.63,452.54c-7.93,1.02-15.92,1.53-23.91,1.52-107.61.04-194.89-87.16-194.93-194.77v-.13c0-7.96.5-15.91,1.52-23.81,13.13-106.84,110.39-182.8,217.23-169.67,106.84,13.13,182.8,110.39,169.67,217.23-10.91,88.76-80.82,158.7-169.57,169.66"/>
                    </g>
                </svg>
                <h3 class="magic-h">Moderování</h3>
                <p class="magic-p">Moderátor, který čaruje slovy - i na Vaší akci slovy
                    vykouzlím emoce, zábavu i zamyšlení.</p>
            </div>
        </div>
    </section>

    <section class="index-photogalery">
        <div class="photogalery-title">
            <div class="photogalery-title-row">
                <h2>fotografie ze společných akcí</h2>
                <div class="quote-container-right">
                    <img class="quote-toggle-image-right" src="{{ asset('images/citace.svg') }}" alt="Zobrazit více informací">

                    <div class="quote-content-wrapper-right">
                        <div class="quote-content-right">
                            <p><span class="quotation-marks-right">„</span>Báli jsme se objednat Martina na svatbu,<br> ale nakonec jsme byli <span class="quotation-line-right"> nadmíru spokojeni!</span><span class="quotation-marks-right">“</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="photogalery-container">
                <div class="photogalery-container-image">
                    <img src="{{ asset('images/KA977.jpg') }}" alt="">
                </div>

                <div class="photogalery-container-title">
                    <div class="photogalery-container-title-row">
                        <div class="photogalery-container-text">
                            <h1>Svatba Michala a Lucky</h1>
                            <p>20.7.2024 / Praha</p>
                        </div>
                        <div class="photogalery-container-button">
                            <button class="second-button">
                                prohlédnout
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                                    <g>
                                        <g id="Vrstva_1">
                                            <path d="M-447.1,350.4h0Z"/>
                                            <path
                                                d="M977.9,480.5L519.5,22.1c-10.8-10.8-28.2-10.8-39,0L22.1,480.5c-10.8,10.8-10.8,28.2,0,39l458.5,458.5c5.4,5.4,12.4,8.1,19.5,8.1s14.1-2.7,19.5-8.1l458.5-458.5c10.8-10.8,10.8-28.2,0-39ZM500,80.5l181.6,181.6h-363.3l181.6-181.6ZM262.1,681.6l-181.6-181.6,181.6-181.6v363.3ZM500,919.5l-181.7-181.7h363.3l-181.7,181.7ZM682.7,682.8h-365.5v-365.5h365.5v365.5ZM737.8,681.6v-363.3l181.6,181.7-181.6,181.6Z"/>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p>Nádherný den, kdy se dvě duše spojily v kouzelném obřadu, a my jsme byli svědky něčeho opravdu
                        magického. Michal a Lucka si řekli "ano" v okouzlujícím prostředí, kde nechybělo ani špetka
                        tajemství a kouzla.</p>
                    <p>Jako překvapení pro svatební hosty jsme připravili nejen zábavu, ale i kouzelnické vysoupení, které
                        zpestřilo celý večer.
                        Triky, které vyrazí dech a vykouzlí úsměv na každé tváři, to byla součást svatebního programu,
                        kterou si nikdo nenechal ujít.
                    </p>
                    <div class="arrow-container">
                        <span class="arrow left-arrow"></span>
                        <span class="arrow right-arrow"></span>
                        <a href="">všechny akce</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="video-camera">
        <div class="video-container">
            <div class="video-pane video-levy">
                <button id="play-video" class="play-button">
                    <svg class="play-icon" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8 5v14l11-7z"></path>
                    </svg>
                    <span>pusťte si video</span>
                </button>
            </div>

            <div class="video-pane video-pravy">
                <button id="play-video" class="play-button">
                    <svg class="play-icon" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8 5v14l11-7z"></path>
                    </svg>
                    <span>pusťte si video</span>
                </button>
            </div>
        </div>
    </section>

    <section class="citation">
        <div class="citation-title">
            <h2>
                <span class="purple-text">"</span>nic není pravda a <span class="purple-line">&nbsp;&nbsp;všechno</span> je
                dovoleno
            </h2>
        </div>
    </section>

    <section class="references-container">
        <div class="references-info-container">
            <div class="references-info-container-text">
                <h2>okouzlení diváci nezmizeli<br> a mluví</h2>
            </div>
        </div>
        <div class="references-brands">
            <div class="review-container">
                <div class="review-item">
                    <div class="logo-circle">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                             alt="Google logo">
                    </div>
                    <div class="rating-info">
                        <span class="star">⭐</span>
                        <span class="rating">4.8</span>
                        <span class="reviews">/ (50 recenzí)</span>
                    </div>
                </div>

                <div class="review-item">
                    <div class="logo-circle">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                             alt="Facebook logo">
                    </div>
                    <div class="rating-info">
                        <span class="star">⭐</span>
                        <span class="rating">4.7</span>
                        <span class="reviews">/ (50 recenzí)</span>
                    </div>
                </div>

                <div class="review-item">
                    <div class="logo-circle">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Seznam.cz_logo.svg" alt="Seznam logo">
                    </div>
                    <div class="rating-info">
                        <span class="star">⭐</span>
                        <span class="rating">4.9</span>
                        <span class="reviews">/ (50 recenzí)</span>
                    </div>
                </div>
            </div>
            <div class="button-brand">
                <button class="second-button">
                    ostatní reference
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                        <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                        <g>
                            <g id="Vrstva_1">
                                <path d="M-447.1,350.4h0Z"/>
                                <path
                                    d="M977.9,480.5L519.5,22.1c-10.8-10.8-28.2-10.8-39,0L22.1,480.5c-10.8,10.8-10.8,28.2,0,39l458.5,458.5c5.4,5.4,12.4,8.1,19.5,8.1s14.1-2.7,19.5-8.1l458.5-458.5c10.8-10.8,10.8-28.2,0-39ZM500,80.5l181.6,181.6h-363.3l181.6-181.6ZM262.1,681.6l-181.6-181.6,181.6-181.6v363.3ZM500,919.5l-181.7-181.7h363.3l-181.7,181.7ZM682.7,682.8h-365.5v-365.5h365.5v365.5ZM737.8,681.6v-363.3l181.6,181.7-181.6,181.6Z"/>
                            </g>
                        </g>
                    </svg>
                </button>
            </div>
        </div>


        <div class="reviews-container">
            <div class="review-block">
                <div class="review-info-top">
                    <div class="avatar-holder">
                        <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové"
                             class="profile-pic">
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
                    Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level.
                    Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí.
                    Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie
                    prostě všechny dostala. Moc děkujeme za skvělý halloween
                </p>
            </div>
            <div class="review-block">
                <div class="review-info-top">
                    <div class="avatar-holder">
                        <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové"
                             class="profile-pic">
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
                    Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level.
                    Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí.
                    Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie
                    prostě všechny dostala. Moc děkujeme za skvělý halloween
                </p>
            </div>
            <div class="review-block">
                <div class="review-info-top">
                    <div class="avatar-holder">
                        <img src="https://via.placeholder.com/60" alt="Profilová fotografie Zuzany Kučerové"
                             class="profile-pic">
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
                    Martin je drahoušek. Byl součástí naší svatby a myslím, že ji právě on pozvedl na úplně jiný level.
                    Bavili se všichni a ještě dnes v konverzacích přemýšlíme, jak co udělal. Nadšené byly děti i dospělí.
                    Jeho krásná S Martinem to byla super zábava, děti rozesmál, dospělé udivoval a jeho kouzelná energie
                    prostě všechny dostala. Moc děkujeme za skvělý halloween
                </p>
            </div>
        </div>
    </section>

    <div class="logo-slider">
        <button class="slider-arrow logo-arrow-left">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
            </svg>
        </button>

        <div class="slider-content-wrapper">
            <div class="slider-content">
                <!-- Všechna vaše loga -->
                <img src="{{ asset('images/loga/logo-abs-jets.png') }}" alt="logo-absjets" class="logo-image">
                <img src="{{ asset('images/loga/logo-aquapalace-praha.png') }}" alt="logo-aquapalace" class="logo-image">
                <img src="{{ asset('images/loga/logo-bambule.png') }}" alt="logo-bambule" class="logo-image">
                <img src="{{ asset('images/loga/logo-bosch.png') }}" alt="logo-bosch" class="logo-image">
                <img src="{{ asset('images/loga/logo-chateau-mcely-spa-hotel-and-forest-retreat.png') }}" alt="logo-chateau-mcely-spa-hotel-and-forest-retreat" class="logo-image">
                <img src="{{ asset('images/loga/logo-chateau-trnova-hotel-and-restaurant.png') }}" alt="logo-chateau-mcely-spa-hotel-and-forest-retreat" class="logo-image">
                <img src="{{ asset('images/loga/logo-cloud-9-sky-bar-and-lounge.png') }}" alt="logo-cloud-9-sky-bar-and-lounge" class="logo-image">
                <img src="{{ asset('images/loga/logo-CPP-vienna-insurance-group.png') }}" alt="logo-CPP-vienna-insurance-group" class="logo-image">

                <img src="{{ asset('images/loga/logo-deloitte.png') }}" alt="logo-deloitte" class="logo-image">
                <img src="{{ asset('images/loga/logo-event-arena.png') }}" alt="logo-event-arena" class="logo-image">
                <img src="{{ asset('images/loga/logo-finep-developerska-spolecnost.png') }}" alt="logo-finep-developerska-spolecnost" class="logo-image">
                <img src="{{ asset('images/loga/logo-fischer.png') }}" alt="logo-fischer" class="logo-image">
                <img src="{{ asset('images/loga/logo-forum-karlin.png') }}" alt="logo-forum-karlin" class="logo-image">
                <img src="{{ asset('images/loga/logo-four-seasons.png') }}" alt="logo-four-seasons" class="logo-image">
                <img src="{{ asset('images/loga/logo-hasbro.png') }}" alt="logo-hasbro" class="logo-image">
                <img src="{{ asset('images/loga/logo-hermes-paris.png') }}" alt="logo-hermes-paris" class="logo-image">

                <img src="{{ asset('images/loga/logo-hilton-hotels-and-resorts.png') }}" alt="logo-hilton-hotels-and-resorts" class="logo-image">
                <img src="{{ asset('images/loga/logo-honor.png') }}" alt="logo-honor" class="logo-image">
                <img src="{{ asset('images/loga/logo-KB-pojistovna.png') }}" alt="logo-KB-pojistovna" class="logo-image">
                <img src="{{ asset('images/loga/logo-little-shoes.png') }}" alt="logo-little-shoes" class="logo-image">
                <img src="{{ asset('images/loga/logo-louis-vuitton.png') }}" alt="logo-louis-vuitton" class="logo-image">
                <img src="{{ asset('images/loga/logo-marriott-hotels-resorts-suites.png') }}" alt="logo-marriott-hotels-resorts-suites" class="logo-image">
                <img src="{{ asset('images/loga/logo-metlife.png') }}" alt="logo-metlife" class="logo-image">
                <img src="{{ asset('images/loga/logo-obecni-dum.png') }}" alt="logo-obecni-dum" class="logo-image">

                <img src="{{ asset('images/loga/logo-pepsi.png') }}" alt="logo-pepsi" class="logo-image">
                <img src="{{ asset('images/loga/logo-quix-art-of-inspiration.png') }}" alt="logo-quix-art-of-inspiration" class="logo-image">
                <img src="{{ asset('images/loga/logo-samsung.png') }}" alt="logo-samsung" class="logo-image">
                <img src="{{ asset('images/loga/logo-sportisimo.png') }}" alt="logo-sportisimo" class="logo-image">
                <img src="{{ asset('images/loga/logo-uniqa.png') }}" alt="logo-uniqa" class="logo-image">
                <img src="{{ asset('images/loga/logo-villa-richter.png') }}" alt="logo-villa-richter" class="logo-image">
                <img src="{{ asset('images/loga/logo-vodafone.png') }}" alt="logo-vodafone" class="logo-image">
            </div>
        </div>

        <button class="slider-arrow logo-arrow-right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
            </svg>
        </button>
    </div>

    <section class="social-media">
        <div class="social-media-title-container">
            <div class="social-media-title">
                <h2>instagram plný kouzelné atmosféry</h2>
            </div>
            <div class="social-media-instagram">
                <a href="https://www.instagram.com/VAŠE_UŽIVATELSKÉ_JMÉNO" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="social-media-container">
            <img src="{{ asset('images/PRAHA - ZOFIN 01164-4K.jpg') }}" alt="Zofin">
            <img src="{{ asset('images/PRAHA - ZOFIN 01164-4K.jpg') }}" alt="Zofin">
            <img src="{{ asset('images/PRAHA - ZOFIN 01164-4K.jpg') }}" alt="Zofin">
            <img src="{{ asset('images/PRAHA - ZOFIN 01164-4K.jpg') }}" alt="Zofin">
            <img src="{{ asset('images/PRAHA - ZOFIN 01164-4K.jpg') }}" alt="Zofin">
            <img src="{{ asset('images/PRAHA - ZOFIN 01164-4K.jpg') }}" alt="Zofin">
        </div>
    </section>

    <div class="quote-container">
        <img class="quote-toggle-image-left" src="{{ asset('images/citace.svg') }}" alt="Zobrazit více informací">

        <div class="quote-content-wrapper">
            <div class="quote-content">
                <p><span class="quotation-marks">„</span>Nevěděl jsem, jakého kouzelníka zvolit, ale když <br> jsme si s Martinem zavolali, <span class="quotation-line"> měla jsem jasno!</span><span class="quotation-marks">“</span></p>
            </div>
        </div>
    </div>

    <section class="faq">
        <div class="faq-title">
            <h2>FAQ - čarovné otázky</h2>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-number">1.</span>
                    <span class="faq-text">Jezdíte s kouzelnickým vystoupením po celé ČR?</span>
                    <span class="faq-toggle"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                      <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                      <g>
                        <g id="Vrstva_1">
                          <path d="M-447.1,350.4h0Z"/>
                          <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                        </g>
                      </g>
                    </svg>
                  </span>
                </div>
                <div class="faq-answer">
                    Rád se vydám kamkoliv! Ať už hledáte kouzelníka na večírek v srdci Prahy, na
                    svatbu v Brně, nebo třeba kouzelnické vystoupení pro děti v Českých
                    Budějovicích. Magie si cestu k vám vždy najde. Stačí mi napsat, kam za vámi
                    přijet – kufr je sbalený, karty zamíchané a kouzla vždy připravená.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-number">2.</span>
                    <span class="faq-text">Umíte nechat zmizet mojí manželku/manžela?</span>
                    <span class="faq-toggle"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                      <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                      <g>
                        <g id="Vrstva_1">
                          <path d="M-447.1,350.4h0Z"/>
                          <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                        </g>
                      </g>
                    </svg>
                  </span>
                </div>
                <div class="faq-answer">
                    Jistě. Ale upozorňuji, že kouzlo funguje jen do konce večera – pak se manžel/
                    manželka zase objeví. Zatím. 😉
                </div>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-number">3.</span>
                <span class="faq-text">Jaká je cena kouzelnického vystoupení?</span>
                <span class="faq-toggle"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                    <g>
                      <g id="Vrstva_1">
                        <path d="M-447.1,350.4h0Z"/>
                        <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                      </g>
                    </g>
                  </svg>
                </span>
            </div>
            <div class="faq-answer">
                <p>Cena závisí na typu akce, délce programu a vzdálenosti. <br>
                    • Dětské oslavy začínají už od částky, která potěší i rodičovský rozpočet. <br>
                    • Svatby a firemní akce mají individuální kalkulaci podle rozsahu programu
                    a počtu hostů. </p>

                Napište mi pár detailů o vaší akci a já připravím cenovou nabídku kouzelnického
                vystoupení na míru - bez kouzelnických triků v kalkulaci.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span class="faq-number">4.</span>
                <span class="faq-text">Máte zkušenosti s vystupováním na firemních akcích?</span>
                <span class="faq-toggle"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                    <g>
                      <g id="Vrstva_1">
                        <path d="M-447.1,350.4h0Z"/>
                        <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                      </g>
                    </g>
                  </svg>
                </span>
            </div>
            <div class="faq-answer">
                <p>Rozhodně ano! Jako kouzelník na firemní akce mám za sebou desítky večírků,
                    teambuildingů i konferencí. Vím, jak vytvořit elegantní zábavu, která zapadne do
                    programu – ať už jde o krátké vystoupení na pódiu, nebo o mikromagii, kdy se
                    kouzla odehrávají přímo u stolů mezi hosty.
                    A nebojte, moje magie je společenská – žádné trapné momenty, jen spousta
                    smíchu, úžasu a zážitků, o kterých se v práci mluví ještě týdny.</p>
            </div>
        </div>

        <div class="faq-hidden-items">
            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-number">5.</span>
                    <span class="faq-text">Jak dlouho trvá kouzelnické vystoupení?</span>
                    <span class="faq-toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                        <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                        <g>
                          <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                          </g>
                        </g>
                      </svg>
                    </span>
                </div>
                <div class="faq-answer">
                    <p>Moje kouzelnická show je pružná – přizpůsobím ji publiku i typu akce. <br>
                        • Pro děti: 35 až 60 minut čisté magie. Hravé, veselé, interaktivní – děti nejsou
                        jen diváci, ale přímo součástí kouzel. Smějí se, žasnou a kouzlí se mnou. <br>

                        • Pro dospělé: Hlavní show trvá kolem 20 minut – dost na to, aby všechny vtáhla
                        a aby si vzpomněli, že věřit na nemožné je vlastně docela fajn. A pak přichází na
                        řadu mikromagie – kouzla zblízka, přímo mezi hosty. Karty mizí, mince se
                        objevují a vy cítíte, jak se magie doslova děje ve vašich rukách. Ideální pro
                        večírky, svatby i firemní akce.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-number">6.</span>
                    <span class="faq-text">Je vaše kouzelnické vystoupení vhodné i pro děti?</span>
                    <span class="faq-toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                        <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                        <g>
                          <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                          </g>
                        </g>
                      </svg>
                    </span>
                </div>
                <div class="faq-answer">
                    <p>Ano! A nejen že vhodné – děti se stávají součástí show. Jako kouzelník pro děti
                        vím, jak udržet pozornost i těch nejmenších a vždy si pohlídám, aby show byla
                        hravá, veselá a bezpečná. A dospělí se přistihnou, že se smějí a tleskají stejně
                        nadšeně jako jejich děti.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-number">7.</span>
                    <span class="faq-text">Potřebujete pro vaše vystoupení speciální podmínky?</span>
                    <span class="faq-toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                        <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                        <g>
                          <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                          </g>
                        </g>
                      </svg>
                    </span>
                </div>
                <div class="faq-answer">
                    <p>Nic složitého – stačí mi kousek místa, kde se vejde kouzelník a trocha magie. <br>
                        • na dětskou oslavu: stačí roh obýváku nebo zahrada, zásuvka na 230V. <br>
                        • Svatba nebo firemní akce? Klidný prostor, kde mě všichni dobře uvidí, je ideál.</p>
                    <p>Umím se vejít i do malého sálu... a v případě nouze i do skříně na stojáka. (Ale
                        jen když se opravdu snažím.)</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-number">8.</span>
                    <span class="faq-text">Přizpůsobíte show našemu tématu?</span>
                    <span class="faq-toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                        <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                        <g>
                          <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                          </g>
                        </g>
                      </svg>
                    </span>
                </div>
                <div class="faq-answer">
                    <p>Magie je tvárná – stejně jako vaše představa, takže ROZHODNĚ. Firemní barvy,
                        svatební téma, nebo dokonce kouzelnická show ve stylu Harry Potter. Žádný
                        problém. Magie má být osobní a originální – přesně jako vaše událost.
                        kouzelnické vystoupení na svatbu, tematická show pro firemní večírek, nebo
                        dokonce dětskou oslavu s kouzelníkem. Stačí mi dát vědět a společně vytvoříme
                        show, která k vaší akci dokonale sedne.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-number">9.</span>
                    <span class="faq-text">Jak dlouho dopředu musím rezervovat termín?</span>
                    <span class="faq-toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                        <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                        <g>
                          <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                          </g>
                        </g>
                      </svg>
                    </span>
                </div>
                <div class="faq-answer">
                    <p>Co nejdřív, minimálně si domluvit rezervaci termínu. Populární termíny mizí rychleji
                        než kapesník v kouzelnické ruce. Pokud plánujete velkou akci, doporučuji
                        rezervovat klidně několik měsíců dopředu.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-number">10.</span>
                    <span class="faq-text">Co když někdo v publiku „prokoukne trik“?</span>
                    <span class="faq-toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                        <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                        <g>
                          <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                          </g>
                        </g>
                      </svg>
                    </span>
                </div>
                <div class="faq-answer">
                    <p>Úsměv, vtip a pokračujeme dál. Můj cíl není jen „ukázat kouzlo“, ale vytvořit
                        atmosféru, kde se všichni baví. A i ti největší skeptici se obvykle chytí do sítě iluze
                        – stačí trocha šarmu a magie. A pak zjistí, že vlastně nic neprokoukli, jen se zapojili
                        do této hry na realitu.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-number">11.</span>
                    <span class="faq-text">Co vás na kouzlení baví nejvíc?</span>
                    <span class="faq-toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
                        <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                        <g>
                          <g id="Vrstva_1">
                            <path d="M-447.1,350.4h0Z"/>
                            <path d="M721.7,73.9c-9.6-9.6-25.1-9.6-34.7,0l-408.3,408.3c-.2,0-.3.2-.5.4h0c-9.6,9.7-9.6,25.2,0,34.8l408.8,408.7c4.8,4.8,11.1,7.2,17.4,7.2s12.5-2.4,17.3-7.2c9.6-9.6,9.6-25.2,0-34.7l-391.3-391.4L721.7,108.6c9.6-9.6,9.6-25.1,0-34.7Z"/>
                          </g>
                        </g>
                      </svg>
                    </span>
                </div>
                <div class="faq-answer">
                    <p>Ten moment, kdy se lidem rozsvítí oči. Když dospělí zapomenou na všední den a
                        děti věří, že magie je skutečná. Proto jsem kouzelník - protože společně dokážeme
                        na chvíli zapomenout na realitu a věřit na nemožné.</p>
                </div>
            </div>
        </div>
        <div class="FAQ-button">
            <button id="show-more-faq" class="third-button">+ zobrazit další FAQ</button>
        </div>
    </section>

    @include('_partials.main.footer')
    <script src="{{ asset('js/javascript.js') }}" defer></script>
</body>
</html>
