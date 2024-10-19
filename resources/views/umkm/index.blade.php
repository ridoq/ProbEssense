<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-wide " dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="front-pages" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>ProboCulture - Seputar budaya dan wisata Probolinggo</title>
    <meta name="description"
        content="Materialize – is the most developer friendly &amp; highly customizable Admin Dashboard Template." />
    <meta name="keywords"
        content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <link rel="canonical" href="https://1.envato.market/materialize_admin">
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
    </script>
    <link rel="icon" type="image/x-icon"
        href="https://demos.pixinvent.com/materialize-html-admin-template/assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:ital,wght@0,300..700;1,300..700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward"  />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"  />
    <link rel="stylesheet" href="../../assets/vendor/fonts/remixicon/remixicon.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page.css') }}" />
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page-landing.css" />
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <script src="../../assets/js/front-config.js"></script>
</head>

<body class="overflow-x-hidden">
    <style>
        * {
            font-family: 'Poppins';
        }
    </style>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script src="../../assets/vendor/js/dropdown-hover.js"></script>
    <script src="../../assets/vendor/js/mega-dropdown.js"></script>

    <!-- Navbar: Start -->
    @include('landing.component.navbar')
    <!-- Navbar: End -->


    <!-- Sections:Start -->


    <div data-bs-spy="scroll" class="scrollspy-example">
        <!-- Hero: Start -->
        <style>
            .landing-hero {
                height: 50vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                flex-direction: column;
                overflow: hidden;
                background: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .5), rgba(0, 0, 0, .7), rgba(0, 0, 0, 1)), url({{ asset('assets/img/Mengenal-Batik-Manggur-Batik-Khas-Kota-Probolinggo-1.jpg') }});
                background-size: cover;
                background-position: center;

            }

            .hero-title {
                font-size: 8rem;
                /* background:linear-gradient(180deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, .5), rgba(0, 0, 0, 1)); */
            }

            .bgHero {
                wdith: 100%;
                left: -100px;
                bottom: 60px;
            }

            .descHero {
                margin-top: 35px;
                color: #eaeaea;
            }

            .welcome {
                margin-bottom: 40px;
                font-weight: 300;
                font-size: 17px;
                letter-spacing: .2rem;
                font-family: 'Poppins';
            }

            .row-responsive {
                width: 80%;
            }

            .h-responsive {
                line-height: 5rem;
                font-size: 5rem;
            }

            .col-text-responsive {
                padding-left: 50px
            }

            .col-hover {
                transition: .3s ease-in-out
            }

            .section-py {
                padding: 200px 0px;
            }


            @media screen and (max-width:1024px) {
                .landing-hero {
                    height: 85vh;

                }
                .hero-responsive {
                    padding: 0px;
                }

                .section-py {
                    padding: 120px 0px 100px 0px;
                }

                .col-text-responsive {
                    padding-left: 10px
                }

                .h-responsive {
                    font-size: 2.7rem;
                    line-height: 3rem;
                }

                .row-responsive {
                    width: 90%;
                }

                .welcome {
                    margin-bottom: 0px
                }

                .hero-title {
                    font-size: 2.5rem;
                }

                .bgHero {
                    left: -320px;
                    bottom: 10px;
                }

                .descHero {
                    margin-top: 15px;
                    font-size: 12px;
                }
            }

            .bgHero {
                height: 100%;
            }

            .section-text {
                padding: 50px 0px;
            }

            .btn-inti {
                transition: .3s ease-in-out;
                border: 1px solid rgba(255, 255, 255, .6);
                border-radius: 10px
            }

            .btn-inti:hover {
                border: 1px solid rgba(255, 255, 255, 1)
            }
        </style>
        <!-- Hero: End -->
        <section id="landingHero" style="padding: 100px 0px"
            class="landing-hero position-relative d-flex align-items-center justify-content-center">
            {{-- <img class="position-absolute bgHero" style="z-index: -3;" src="{{ asset('assets/img/bg-belakang.png') }}">
            </img> --}}
            {{-- <img class="position-absolute bgHero" style="z-index: -1;" src="{{ asset('assets/img/depan3.png') }}" type="webm"> --}}
            {{-- </img> --}}
            <h3 class="text-white hero-title mb-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500"
                style="width:95%;font-family: 'Poppins'; font-weight:700;text-shadow: 0px 0px 10px rgba(0,0,0,.6);;">
                UMKM</h3>
            <p class=" descHero" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" style="width:95%;">
                Berikut adalah daftar UMKM daerah probolinggo</p>

        </section>
        <section id="tentang"
            class="section-py hero-responsive bg-black overflow-hidden d-flex justify-content-center align-items-center">

            <div class="row justify-content-start row-responsive gy-5">
                @foreach ($umkms as $umkm)
                    <div
                        class="col-12 col-lg-4 d-flex flex-column justify-content-start align-items-start col-text-responsive">
                        <a href="{{ $umkm->link }}" target="blank">
                            <style>
                                .card-umkm:hover {
                                    transform: scale(104%);
                                    transition: .3s ease-in-out
                                }
                            </style>
                            <div class="card card-umkm"
                                style="background:#0e100e;backdrop-filter: blur (10px);border: .5px solid rgba(255,255,255,.2);">
                                <div class="card-content">
                                    <div class="card-body " style="min-height: 400px;">
                                        <div class="w-100"
                                            style="height: 400px;background:url('{{ asset("$umkm->image") }}');background-size:cover;background-position:center;">
                                        </div>
                                        {{-- <img src="" alt=""
                                        style="width:100%;min-height:400px;"> --}}
                                        <h3 class="mt-5 text-white mb-0">{{ $umkm->name }}</h3>
                                        <p class="text-primary fw-bold">Rp. {{ number_format($umkm->price, 0) }}
                                        </p>
                                        <p class="mb-6 "
                                            style="
                                    overflow: hidden;
                                    display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;
                                    ">
                                            {{ $umkm->desc }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>


        <!-- Contact Us: End -->
    </div>

    <!-- / Sections:End -->



    <!-- Footer: Start -->
    @include('landing.component.footer')
    <!-- Footer: End -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../../assets/vendor/libs/nouislider/nouislider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <!-- Main JS -->
    <script src="../../assets/js/front-main.js"></script>
    <!-- Page JS -->
    <script src="../../assets/js/ui-carousel.js"></script>
    <script src="../../assets/js/front-page-landing.js"></script>
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
</body>

</html>
