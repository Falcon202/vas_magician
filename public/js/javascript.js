document.addEventListener('DOMContentLoaded', function() {
  // Kód pro FAQ sekci
  document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
      const item = question.parentElement;
      item.classList.toggle('active');
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
    const gap = 20; // Stejná hodnota jako v CSS
    const scrollAmount = logoWidth + gap;

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
});

document.addEventListener('DOMContentLoaded', () => {
  const showMoreButton = document.getElementById('show-more-faq');
  const hiddenItems = document.querySelector('.faq-hidden-items');

  if (showMoreButton && hiddenItems) {
    showMoreButton.addEventListener('click', () => {
      // Přepne třídu 'show' na kontejneru, čímž se položky zobrazí/skryjí
      hiddenItems.classList.toggle('show');

      // Změní text tlačítka podle toho, zda jsou položky viditelné
      if (hiddenItems.classList.contains('show')) {
        showMoreButton.textContent = '- zavřít FAQ';
      } else {
        showMoreButton.textContent = '+ zobrazit další FAQ';
      }
    });
  }
});