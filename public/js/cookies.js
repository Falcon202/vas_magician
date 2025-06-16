

// Získat tlačítka a modal
const acceptCookies = document.getElementById('acceptCookies');
const cookieModal = document.getElementById('cookieModal');

if (!localStorage.getItem('cookieConsent')) {
    cookieModal.style.display = 'flex';
}

acceptCookies.addEventListener('click', () => {
    localStorage.setItem('cookieConsent', 'accepted');
    cookieModal.style.display = 'none';
});
