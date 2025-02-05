// Menangani klik gambar untuk memperbesar dan kembali ke ukuran normal
const imageContainer = document.getElementById("imageContainer");
const image = document.getElementById("image");

imageContainer.addEventListener("click", () => {
    if (image.classList.contains("fullscreen")) {
        // Jika gambar dalam mode fullscreen, kembalikan ke ukuran semula
        image.classList.remove("fullscreen");
        document.body.style.overflow = "hidden"; // Menonaktifkan scroll saat di fullscreen
    } else {
        // Jika gambar tidak dalam fullscreen, perbesar gambar
        image.classList.add("fullscreen");
        document.body.style.overflow = "hidden"; // Menonaktifkan scroll saat di fullscreen
    }
});