document.addEventListener('DOMContentLoaded', function() {
    // ---- KÓD PRO FAQ SEKCI A LOGA ----

    // Kód pro FAQ sekci
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            item.classList.toggle('active');
        });
    });

    // Kód pro zobrazení/skrytí textu po kliknutí na obrázek citace.svg
    document.querySelectorAll('.quote-toggle-image-left').forEach(toggleImage => {
        toggleImage.addEventListener('click', function() {
            const parentContainer = this.closest('.quote-container');
            if (parentContainer) {
                const contentWrapper = parentContainer.querySelector('.quote-content-wrapper');
                if (contentWrapper) {
                    contentWrapper.classList.toggle('open');
                }
            }
        });
    });

    // Kód pro přepínání textu (skrytí/zobrazení)
    const toggleImage = document.querySelector('.faq-toggle-image');
    const hiddenText = document.getElementById('myHiddenText');

    if (toggleImage && hiddenText) {
        toggleImage.addEventListener('click', function() {
            hiddenText.classList.toggle('show');
        });
    }

    // Kód pro posuvník s logy
    const sliderContent = document.querySelector('.slider-content');
    const leftArrow = document.querySelector('.logo-arrow-left');
    const rightArrow = document.querySelector('.logo-arrow-right');

    if (sliderContent && leftArrow && rightArrow) {
        const logoImage = document.querySelector('.logo-image');
        const logoWidth = logoImage.offsetWidth;
        const gap = 20;
        const scrollAmount = (logoWidth * 3) + (gap * 2);

        rightArrow.addEventListener('click', () => {
            sliderContent.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });

        leftArrow.addEventListener('click', () => {
            sliderContent.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });
    }

    const showMoreButton = document.getElementById('show-more-faq');
    const hiddenItems = document.querySelector('.faq-hidden-items');

    if (showMoreButton && hiddenItems) {
        showMoreButton.addEventListener('click', () => {
            hiddenItems.classList.toggle('show');
            if (hiddenItems.classList.contains('show')) {
                showMoreButton.textContent = '- zavřít FAQ';
            } else {
                showMoreButton.textContent = '+ zobrazit další FAQ';
            }
        });
    }

    const sliderData = [
        {
            image: "/images/firemni-akce-kouzelnik-martin-kellman.webp",
            subtitle: "kouzelník I moderátor",
            title: "MARTIN<br>KELLMAN",
            eventType: "firemní akce"
        },
        {
            image: "/images/martin-kellman-kouzelnik-i-moderator-firemni-akce.jpg",
            subtitle: "kouzelník I moderátor",
            title: "MARTIN<br>KELLMAN",
            eventType: "akce pro děti"
        },
        {
            image: "/images/firemni-akce-kouzelnik-martin-kellman.webp",
            subtitle: "kouzelník I moderátor",
            title: "MARTIN<br>KELLMAN",
            eventType: "akce pro dospělé"
        },
        {
            image: "/images/martin-kellman-kouzelnik-i-moderator-firemni-akce.jpg",
            subtitle: "kouzelník I moderátor",
            title: "MARTIN<br>KELLMAN",
            eventType: "svatby"
        }
    ];

    const subtitle = document.querySelector('.subtitle');
    const title = document.querySelector('.title');
    const slideNumber = document.querySelector('.slide-number');
    const eventType = document.querySelector('.event-type');
    const navItems = document.querySelectorAll('.nav-item');

    const bgLayer1 = document.getElementById('bg-layer-1');
    const bgLayer2 = document.getElementById('bg-layer-2');

    let currentSlideIndex = 0;
    let isAnimating = false;
    let activeLayer = bgLayer1;

    function updateContent(index) {
        if (isAnimating || index === currentSlideIndex) return;
        isAnimating = true;

        const data = sliderData[index];

        const currentLayer = activeLayer;
        const nextLayer = (activeLayer === bgLayer1) ? bgLayer2 : bgLayer1;

        nextLayer.style.backgroundImage = `url('${data.image}')`;

        nextLayer.style.zIndex = 3;
        nextLayer.classList.add('active');

        subtitle.textContent = data.subtitle;
        title.innerHTML = data.title;
        slideNumber.textContent = `${index + 1} / 4`;
        eventType.textContent = data.eventType;
        navItems.forEach((item, i) => {
            item.classList.toggle('active', i === index);
        });

        setTimeout(() => {
            currentLayer.classList.remove('active');
            currentLayer.style.zIndex = 1;
            nextLayer.style.zIndex = 2;
            activeLayer = nextLayer;
            currentSlideIndex = index;
            isAnimating = false;
        }, 1000);
    }

    function nextSlide() {
        const nextIndex = (currentSlideIndex + 1) % sliderData.length;
        updateContent(nextIndex);
    }

    function initSlider() {
        bgLayer1.style.backgroundImage = `url('${sliderData[0].image}')`;
        bgLayer1.classList.add('active');

        const initialData = sliderData[0];
        subtitle.textContent = initialData.subtitle;
        title.innerHTML = initialData.title;
        slideNumber.textContent = `1 / 4`;
        eventType.textContent = initialData.eventType;
        navItems[0].classList.add('active');

        setInterval(nextSlide, 5000);
    }

    if (bgLayer1 && bgLayer2) {
        initSlider();
    }

    // ---- KÓD PRO VYSOUVACÍ MENU (NOVÁ VERZE) ----
    const menuToggle = document.querySelector('.hamburger-menu');
    const mainMenu = document.getElementById('mainMenu');
    const menuOverlay = document.getElementById('menuOverlay');

    const submenuToggleNabidka = document.getElementById('submenuToggle-nabidka');
    const submenuToggleGalerie = document.getElementById('submenuToggle-galerie');
    const backButtons = document.querySelectorAll('.backButton');

    const mainMenuList = document.querySelector('.menu-main');
    const nabidkaSubmenuList = document.getElementById('nabidka-submenu');
    const galerieSubmenuList = document.getElementById('galerie-submenu');

    // Funkce pro otevření/zavření celého menu
    function toggleMainMenu() {
        menuToggle.classList.toggle('is-open');
        mainMenu.classList.toggle('active');
        menuOverlay.classList.toggle('active');

        if (!mainMenu.classList.contains('active')) {
            showMainMenu();
        }
    }

    // Funkce pro zobrazení submenu
    function showSubmenu(targetSubmenu) {
        mainMenuList.classList.add('fade-out');
        document.querySelectorAll('.menu-submenu').forEach(submenu => {
            submenu.classList.remove('visible');
        });
        targetSubmenu.classList.add('visible');
    }

    // Funkce pro návrat do hlavního menu
    function showMainMenu() {
        mainMenuList.classList.remove('fade-out');
        document.querySelectorAll('.menu-submenu').forEach(submenu => {
            submenu.classList.remove('visible');
        });
    }

    // Přiřazení událostí
    if (menuToggle && mainMenu && menuOverlay) {
        menuToggle.addEventListener('click', toggleMainMenu);
        menuOverlay.addEventListener('click', toggleMainMenu);
    }

    if (submenuToggleNabidka) {
        submenuToggleNabidka.addEventListener('click', (event) => {
            event.preventDefault();
            showSubmenu(nabidkaSubmenuList);
        });
    }

    if (submenuToggleGalerie) {
        submenuToggleGalerie.addEventListener('click', (event) => {
            event.preventDefault();
            showSubmenu(galerieSubmenuList);
        });
    }

    if (backButtons.length > 0) {
        backButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                showMainMenu();
            });
        });
    }

    // ---- KÓD PRO POSUVNÍK BLOGU ----
    const blogScrollContainer = document.querySelector('.another-blog-galery-wrapper');
    const blogLeftArrow = document.querySelector('.blog-arrow-left');
    const blogRightArrow = document.querySelector('.blog-arrow-right');

    if (blogScrollContainer && blogLeftArrow && blogRightArrow) {
        const blogItem = document.querySelector('.another-blog-container');
        const blogItemWidth = blogItem.offsetWidth;
        const gap = 50;
        const scrollAmount = (blogItemWidth * 2) + gap;

        blogLeftArrow.addEventListener('click', () => {
            blogScrollContainer.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });

        blogRightArrow.addEventListener('click', () => {
            blogScrollContainer.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
    }
});
