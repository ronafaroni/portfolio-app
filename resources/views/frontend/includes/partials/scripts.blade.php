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
        const form = event.target;
        const currentLang = "{{ App::getLocale() }}";

        // Validasi form manual dengan alert bilingual
        if (!form.checkValidity()) {
            const errorMsg = currentLang === 'id' 
                ? "Mohon lengkapi semua kolom formulir sebelum mengirim." 
                : "Please fill out all fields before sending.";
            alert(errorMsg);
            form.reportValidity();
            return;
        }

        const name = document.getElementById("name").value;
        const phone = document.getElementById("phone_number").value;
        const message = document.getElementById("message").value;
        const whatsappNumber = "6285226118681";

        let text = "";
        
        if (currentLang === 'id') {
            text = `Halo, Sintesa Digital Solution 👋
Nama: ${name}
No. HP: ${phone}
Pesan: ${message}

Terima kasih telah menghubungi kami! 🙏
Kami akan membalas pesan Anda sesegera mungkin.`;
        } else {
            text = `Hello, Sintesa Digital Solution 👋
Name: ${name}
Phone: ${phone}
Message: ${message}

Thank you for contacting us! 🙏
We'll get back to you as soon as possible.`;
        }

        const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(text)}`;
        window.open(url, "_blank");

        const alertMsg = currentLang === 'id' 
            ? "Terima kasih! Pesan Anda sedang dikirim ke WhatsApp kami." 
            : "Thank you! Your message is being sent to our WhatsApp.";
        alert(alertMsg);
    }

    // Custom Bilingual Validation Messages (Browser Bubble)
    document.addEventListener('DOMContentLoaded', function() {
        const currentLang = "{{ App::getLocale() }}";
        const formInputs = document.querySelectorAll('#contactForm input[required], #contactForm textarea[required]');
        
        formInputs.forEach(input => {
            const setMsg = () => {
                if (input.validity.valueMissing) {
                    const msg = currentLang === 'id' ? "Harap isi bidang ini." : "Please fill out this field.";
                    input.setCustomValidity(msg);
                } else {
                    input.setCustomValidity("");
                }
            };

            input.addEventListener('invalid', setMsg);
            input.addEventListener('input', () => input.setCustomValidity(""));
        });
    });
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

<script>
    // Manual Language Dropdown Toggle (Fix for all devices)
    document.addEventListener('DOMContentLoaded', function() {
        const langBtn = document.getElementById('langDropdown');
        const langMenu = langBtn ? langBtn.nextElementSibling : null;

        if (langBtn && langMenu) {
            langBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                langMenu.style.display = langMenu.style.display === 'block' ? 'none' : 'block';
            });

            document.addEventListener('click', function() {
                langMenu.style.display = 'none';
            });
            
            langMenu.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }
    });
</script>

@verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Rona Faroni",
  "jobTitle": "Fullstack Developer",
  "url": "https://ronafaronie.my.id",
  "image": "https://ronafaronie.my.id/assets/images/profile.jpg",
  "description": "Fullstack Developer specializing in Web and App development, building scalable and elegant digital experiences.",
  "sameAs": [
    "https://github.com/ronafaroni",
    "https://linkedin.com/in/ronafaroni",
    "https://instagram.com/ronafaroni"
  ]
}
</script>
@endverbatim
