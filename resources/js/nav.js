// Ambil semua elemen <a> di dalam .bottom-nav
const navLinks = document.querySelectorAll('.bottom-nav ul li a');

// Ambil elemen audio
const hoverSound = document.getElementById('hover-sound');
const clickSound = document.getElementById('click-sound');

// Tambahkan event listener untuk hover
navLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
        hoverSound.currentTime = 0; // Reset waktu pemutaran
        hoverSound.play();
    });

    link.addEventListener('click', (e) => {
        e.preventDefault(); // Mencegah perilaku default link
        clickSound.currentTime = 0; // Reset waktu pemutaran
        clickSound.play();
    });
});