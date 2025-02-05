<script>
    document.addEventListener("DOMContentLoaded", function() {
        let bottomNav = document.getElementById("bottomNav");

        // Ambil posisi scroll terakhir dari sessionStorage
        let savedScroll = sessionStorage.getItem("navbarScroll");
        if (savedScroll) {
            bottomNav.scrollLeft = savedScroll;
        }

        // Simpan posisi scroll sebelum pindah halaman
        bottomNav.addEventListener("scroll", function() {
            sessionStorage.setItem("navbarScroll", bottomNav.scrollLeft);
        });
    });
</script>
