<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/opening.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title> <!-- Bagian title yang bisa diubah -->
</head>
<body>
<div class="content" id="pjax-container">
        <!-- Konten halaman, diubah dengan @section('content') -->
        @yield('content') 
    </div>
    <script>
        // Menyimpan posisi scroll sebelum halaman direfresh
        window.addEventListener('beforeunload', function () {
            localStorage.setItem('scrollPosition', window.scrollY);
        });

        // Mengembalikan posisi scroll setelah halaman dimuat ulang
        document.addEventListener("DOMContentLoaded", function () {
            let scrollPosition = localStorage.getItem("scrollPosition");
            if (scrollPosition) {
                window.scrollTo(0, scrollPosition);
                localStorage.removeItem("scrollPosition"); // Hapus setelah digunakan
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).pjax('a', '#pjax-container', { timeout: 5000 });

        $(document).on('pjax:end', function() {
            let savedPosition = sessionStorage.getItem("scrollPosition");
            if (savedPosition) {
                window.scrollTo(0, savedPosition);
            }
        });

        window.addEventListener("beforeunload", function() {
            sessionStorage.setItem("scrollPosition", window.scrollY);
        });
    });
</script>

</body>
</html>