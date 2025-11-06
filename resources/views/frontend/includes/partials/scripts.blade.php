<!-- theme preloader start -->
{{-- @include('frontend.includes.partials.preloader') --}}
<!-- theme preloader end -->


<!-- Jquery -->
<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
<!-- Appear Js -->
<script src="{{ asset('/assets/js/appear.min.js') }}"></script>
<!-- Slick -->
<script src="{{ asset('/assets/js/slick.min.js') }}"></script>
<!-- Nice Select -->
<script src="{{ asset('/assets/js/jquery.nice-select.min.js') }}"></script>
<!-- Image Loader -->
<script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- Isotope -->
<script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
<!--  WOW Animation -->
<script src="{{ asset('/assets/js/wow.min.js') }}"></script>
<!-- Custom script -->
<script src="{{ asset('/assets/js/script.js') }}"></script>

<!-- For Contact Form -->
<script src="{{ asset('/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('/assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('/assets/js/contact-form-script.js') }}"></script>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<script>
    function sendToWhatsApp(event) {
        event.preventDefault();

        const name = document.getElementById("name").value;
        const phone = document.getElementById("phone_number").value;
        const message = document.getElementById("message").value;
        const whatsappNumber = "6285226118681"; // Ganti dengan nomor WhatsApp kamu

        const text = `Hello, Sintesa Digital Solution 👋
    Name: ${name}
    Phone: ${phone}
    Message: ${message}

    Thank you for contacting us! 🙏
    We'll get back to you as soon as possible.`;

        const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(text)}`;
        window.open(url, "_blank");

        // Optional alert
        alert("Thank you! Your message is being sent to our WhatsApp.");
    }
</script>

<script>
    // Pilih semua link di navbar
    const navLinks = document.querySelectorAll('nav a[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); // cegah default lompat langsung
            const targetId = link.getAttribute('href'); // misal: #about
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                // Scroll halus ke posisi section
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
