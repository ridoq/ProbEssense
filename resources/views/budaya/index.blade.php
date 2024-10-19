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
    href="{{ asset('assets/img/logo.jpg') }}" />
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
                background: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .5), rgba(0, 0, 0, .7), rgba(0, 0, 0, 1)), url({{ asset('assets/img/uye.jpeg') }});
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
                width: 75%;
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

            p {
                line-height: 2rem;
                color: #797979;
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
                style="width:95%;font-family: 'Poppins'; font-weight:700;text-shadow: 0px 0px 10px rgba(0,0,0,.6);">
                BUDAYA</h3>
            <p class=" descHero" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" style="width:95%;">
                Berikut adalah daftar berbagai budaya yang ada di Probolinggo</p>

        </section>
        @php
            $max = max($section1->count(), $section2->count()); // Dapatkan jumlah maksimum
        @endphp

        @for ($i = 0; $i < $max; $i++)
            @if (isset($section1[$i]))
                <section id="tentang{{ $section1[$i]->id }}"
                    class="section-py hero-responsive bg-black overflow-hidden d-flex justify-content-center align-items-center">
                    <div class="row justify-content-center row-responsive gy-5">
                        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-start" data-aos="fade-up"
                            data-aos-duration="500" data-aos-delay="100">
                            <img class="" style="width: 100%;border-radius:20px;"
                                src="{{ asset($section1[$i]->image) }}" alt="">
                        </div>
                        <div
                            class="col-12 col-lg-6 d-flex flex-column justify-content-start align-items-start col-text-responsive">
                            <h1 data-aos="fade-left" data-aos-duration="500" data-aos-delay="400"
                                class="text-white  w-100" style="font-family: 'Poppins', monospace;font-weight: 800">
                                {{ $section1[$i]->name }}</h1>
                            <p style="font-family: 'Poppins';font-style:italic;" data-aos="fade-left"
                                data-aos-duration="500" data-aos-delay="500" class="fs-5 mt-3 text-primary">
                                {{ $section1[$i]->lokasi }}</p>
                            <p style="font-family: 'Poppins';overflow: hidden;
                                        display: -webkit-box;-webkit-line-clamp: 6;-webkit-box-orient: vertical;"
                                data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" class="fs-4 mt-3">
                                {{ $section1[$i]->descSatu }}</p>
                                <a href="{{ route('budayaDetail',$section1[$i]->id) }}" data-aos="fade-right" data-aos-duration="500"
                                data-aos-delay="100"
                                class="btn btn-inti bg-transparent text-white text-uppercase w-fit mt-6 py-3 px-6"
                                style="letter-spacing: .1rem">Selengkapnya</a>
                            </div>
                        </div>
                    </section>
                    @endif

                    @if (isset($section2[$i]))
                    <section id="tentang{{ $section2[$i]->id }}"
                        class="section-py hero-responsive bg-black overflow-hidden d-flex justify-content-center align-items-center">
                        <div class="row justify-content-center row-responsive gy-5">
                            <div
                            class="col-12 col-lg-6 d-flex flex-column justify-content-start align-items-start col-text-responsive">
                            <h1 data-aos="fade-left" data-aos-duration="500" data-aos-delay="400"
                                class="text-white  w-100" style="font-family: 'Poppins', monospace;font-weight: 800">
                                {{ $section2[$i]->name }}</h1>
                            <p style="font-family: 'Poppins';font-style:italic;" data-aos="fade-left"
                                data-aos-duration="500" data-aos-delay="500" class="fs-5 mt-3 text-primary">
                                {{ $section2[$i]->lokasi }}</p>
                            <p style="font-family: 'Poppins';overflow: hidden;
                                        display: -webkit-box;-webkit-line-clamp: 6;-webkit-box-orient: vertical;"
                                data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" class="fs-4 mt-3">
                                {{ $section2[$i]->descSatu }}</p>
                                <a href="{{ route('budayaDetail',$section2[$i]->id) }}" data-aos="fade-right" data-aos-duration="500"
                                data-aos-delay="100"
                                class="btn btn-inti mt-6 bg-transparent text-white text-uppercase w-fit py-3 px-6"
                                style="letter-spacing: .1rem">Selengkapnya</a>
                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-start"
                            data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                            <img class="" style="width: 100%;border-radius:20px;"
                                src="{{ asset($section2[$i]->image) }}" alt="">
                        </div>
                    </div>
                </section>
            @endif
        @endfor

        {{-- <section class="section-text bg-black overflow-hidden d-flex justify-content-center align-items-center">
            <div class="row justify-content-center row-responsive gy-5 rounded" data-aos="fade-up"
                data-aos-duration="500" data-aos-delay="100">
                <div
                    class="col-12 col-lg-12 d-flex flex-column justify-content-start align-items-start col-text-responsive">
                    <h1 class="text-white  w-100" style="font-family: 'Poppins', monospace;font-weight: 800">
                        {{ $culture->headingDua }}</h1>
                    <p style="font-family: 'Poppins';" class="fs-4 mt-3">
                        {{ $culture->descDua }}</p> <br>
                    <p style="font-family: 'Poppins';" class="fs-4 mt-3">
                        {{ $culture->subDescDua }}</p>
                </div>
            </div>
        </section>
        @if ($culture && isset($culture->headingTiga))
            <section class="section-text bg-black overflow-hidden d-flex justify-content-center align-items-center">
                <div class="row justify-content-center row-responsive gy-5 rounded" data-aos="fade-up"
                    data-aos-duration="500" data-aos-delay="100">
                    <div
                        class="col-12 col-lg-12 d-flex flex-column justify-content-start align-items-start col-text-responsive">
                        <h1 class="text-white  w-100" style="font-family: 'Poppins', monospace;font-weight: 800">
                            {{ $culture->headingTiga }}</h1>
                        <p style="font-family: 'Poppins';" class="fs-4 mt-3">
                            {{ $culture->descTiga }}</p> <br>
                        <p style="font-family: 'Poppins';" class="fs-4 mt-3">
                            {{ $culture->subDescTiga }}</p>
                    </div>
                </div>
            </section>
        @endif --}}
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
        AOS.init();
    </script>
</body>

</html>
