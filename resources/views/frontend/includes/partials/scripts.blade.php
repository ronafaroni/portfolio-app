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
            text = `Halo Rona Faroni,

Nama: ${name}
Kontak / No. HP: ${phone}

Detail Pesan / Kebutuhan:
${message}

Terima kasih.`;
        } else {
            text = `Hello Rona Faroni,

Name: ${name}
Contact / Phone: ${phone}

Project Details / Message:
${message}

Thank you.`;
        }

        const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(text)}`;
        window.open(url, "_blank");

        const alertMsg = currentLang === 'id' 
            ? "Terima kasih! Pesan Anda sedang dikirim ke WhatsApp." 
            : "Thank you! Your message is being sent to WhatsApp.";
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
    // Smooth scroll & auto-close mobile navbar on anchor click
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('nav a[href^="#"], .main-footer a[href^="#"]');

        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const targetId = link.getAttribute('href');
                if (targetId && targetId !== '#' && targetId.startsWith('#')) {
                    const targetSection = document.querySelector(targetId);
                    if (targetSection) {
                        e.preventDefault();
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                        // Auto-collapse mobile navbar if open
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                            if (typeof bootstrap !== 'undefined' && bootstrap.Collapse) {
                                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) || new bootstrap.Collapse(navbarCollapse, { toggle: false });
                                bsCollapse.hide();
                            } else {
                                navbarCollapse.classList.remove('show');
                            }
                        }
                    }
                }
            });
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
  "url": "https://ronafaroni.my.id",
  "image": "https://ronafaroni.my.id/assets/images/about/aboutme-thumbnail.png",
  "description": "Fullstack Developer specializing in Web and App development, building scalable and elegant digital experiences.",
  "sameAs": [
    "https://github.com/ronafaroni",
    "https://www.linkedin.com/in/ronafaroni",
    "https://www.instagram.com/ronafachronie",
    "https://www.threads.net/@ronafachronie",
    "https://www.facebook.com/rona.fachronie"
  ]
}
</script>
@endverbatim
