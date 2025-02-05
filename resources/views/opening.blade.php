<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Dancing+Script&family=Parisienne&family=Tangerine&family=Alex+Brush&family=Playfair+Display&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/opening.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
    <style>
        /* Atur gambar dalam kontainer */
        #imageContainer {
            position: relative;
            text-align: center;
        }

        #image {
            width: 100%;
            max-width: 500px; /* Atur ukuran gambar sesuai kebutuhan */
            cursor: pointer;
        }

        /* Gaya modal */
        .modal {
            display: none; /* Modal tersembunyi secara default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Latar belakang semi-transparan */
            justify-content: center;
            align-items: center;
            z-index: 1000; /* Pastikan modal di atas elemen lain */
        }

        .modal img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: cover; /* Gambar menutupi seluruh area modal */
        }

        /* Menampilkan modal saat dibuka */
        .modal.show {
            display: flex;
        }

        /* Menutup modal saat area di luar gambar diklik */
        .modal-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container" id="imageContainer">
        <!-- Tambahkan klik untuk memunculkan modal -->
        <img src="{{ asset('images/foto.jpeg') }}" alt="Image" id="image">
    </div>

    @include('layouts.nav')

    <!-- Modal untuk Fullscreen -->
    <div class="modal" id="fullscreenModal">
        <div class="modal-background"></div>
        <img src="{{ asset('images/foto.jpeg') }}" alt="Fullscreen Image">
    </div>

    
    <audio id="hover-sound" src="https://www.soundjay.com/button/beep-07.wav"></audio>
    <audio id="click-sound" src="https://www.soundjay.com/button/beep-08b.wav"></audio>
    <script src="{{ asset('js/nav.js') }}"></script>
    <script>
        // Menangani klik pada gambar untuk membuka modal
        const image = document.getElementById('image');
        const modal = document.getElementById('fullscreenModal');
        const modalBackground = document.querySelector('.modal-background');

        image.addEventListener('click', () => {
            modal.classList.add('show'); // Tampilkan modal
        });

        // Menangani klik di area luar gambar untuk menutup modal
        modalBackground.addEventListener('click', () => {
            modal.classList.remove('show'); // Sembunyikan modal
        });
    </script>    
</body>
</html>