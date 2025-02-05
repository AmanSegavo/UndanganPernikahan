    <div class="bottom-nav" id="bottomNav" >
        <ul>
            <li>
                <a href="{{ url('/opening/' . $guest->invitation_link) }}" 
                class="{{ Request::is('opening/' . $guest->invitation_link) ? 'active' : '' }}">
                    <i class="fas fa-door-open"></i> Opening
                </a>
            </li>
            <li>
                <a href="{{ url('/quotes/' . $guest->invitation_link) }}" 
                class="{{ Request::is('quotes/' . $guest->invitation_link) ? 'active' : '' }}">
                    <i class="fas fa-quote-right"></i> Quotes
                </a>
            </li>
            <li>
                <a href="{{ url('/mempelai/' . $guest->invitation_link) }}" 
                class="{{ Request::is('mempelai/' . $guest->invitation_link) ? 'active' : '' }}">
                    <i class="fas fa-users"></i> Mempelai
                </a>
            </li>
            <li>
                <a href="{{ url('/akad/' . $guest->invitation_link) }}" 
                class="{{ Request::is('akad/' . $guest->invitation_link) ? 'active' : '' }}">
                    <i class="fas fa-handshake"></i> Akad
                </a>
            </li>
            <li>
                <a href="{{ url('/resepsi/' . $guest->invitation_link) }}" 
                class="{{ Request::is('resepsi/' . $guest->invitation_link) ? 'active' : '' }}">
                    <i class="fas fa-glass-cheers"></i> Resepsi
                </a>
            </li>
            <li>
                <a href="{{ url('/gallery/' . $guest->invitation_link) }}" 
                class="{{ Request::is('gallery/' . $guest->invitation_link) ? 'active' : '' }}">
                    <i class="fas fa-camera"></i> Gallery
                </a>
            </li>
            <li>
                <a href="{{ url('/maps/' . $guest->invitation_link) }}" 
                class="{{ Request::is('maps/' . $guest->invitation_link) ? 'active' : '' }}">
                    <i class="fas fa-map-marked-alt"></i> Maps
                </a>
            </li>
            <li>
                <a href="{{ url('/rsvp/' . $guest->invitation_link) }}" 
                class="{{ Request::is('rsvp/' . $guest->invitation_link) ? 'active' : '' }}">
                    <i class="fas fa-envelope"></i> RSVP
                </a>
            </li>
            <li>
                <a href="{{ url('/gift/' . $guest->invitation_link) }}" 
                class="{{ Request::is('gift/' . $guest->invitation_link) ? 'active' : '' }}">
                    <i class="fas fa-gift"></i> Gift
                </a>
            </li>
            <li>
                <a href="{{ url('/thanks/' . $guest->invitation_link) }}" 
                class="{{ Request::is('thanks/' . $guest->invitation_link) ? 'active' : '' }}">
                    <i class="fas fa-hands-praying"></i> Thanks
                </a>
            </li>
        </ul>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
    let bottomNav = document.querySelector(".bottom-nav");

    // Ambil posisi scroll dari localStorage
    bottomNav.scrollLeft = localStorage.getItem("navScroll") || 0;

    // Simpan posisi scroll setiap kali bergeser
    bottomNav.addEventListener("scroll", function() {
        localStorage.setItem("navScroll", this.scrollLeft);
    });
});

</script>


</script>

