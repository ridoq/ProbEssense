<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
<!-- endbuild -->
<!-- Vendors JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/isotope-packery@2.0.1/packery-mode.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/bs-brain@2.0.4/components/projects/project-1/assets/controller/project-1.js"></script>
<script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
<!-- Main JS -->
<script src="{{ asset('assets/js/front-main.js') }}"></script>
<!-- Page JS -->
<script src="{{ asset('assets/js/ui-carousel.js') }}"></script>
<script src="{{ asset('assets/js/front-page-landing.js') }}"></script>
<script>
    new Swiper('.card-wrapper', {
        loop: true,
        spaceBetween: 700,
        // Optional parameters

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },

        // Navigation arrows
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        speed: 1200,

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 1,
            },
        }
    });
    AOS.init();
</script>
