document.addEventListener('DOMContentLoaded', () => {
    // Aktuální volné termíny (jen pro ukázku)
    document.getElementById('available-dates').textContent = '15. června, 22. června, 29. června';

    // Změna cen
    window.changePrice = () => {
        alert('Ceny byly aktualizovány.');
    };

    // Změna fotek
    window.changePhotos = () => {
        alert('Fotky byly změněny.');
    };
});

