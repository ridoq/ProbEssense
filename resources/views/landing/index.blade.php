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
                height: 110vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                flex-direction: column;
                overflow: hidden;
                background: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .5), rgba(0, 0, 0, .7), rgba(0, 0, 0, 1)), url({{ asset('assets/img/bg-belakang.png') }});
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
            .col-text-responsive{
                padding-left: 50px
            }

            @media screen and (max-width:1024px) {
                .landing-hero {
                    height: 85vh;
                }
                .col-text-responsive{
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
        </style>
        <section id="landingHero"
            class="landing-hero position-relative d-flex align-items-center justify-content-center">
            {{-- <img class="position-absolute bgHero" style="z-index: -3;" src="{{ asset('assets/img/bg-belakang.png') }}">
            </img> --}}
            {{-- <img class="position-absolute bgHero" style="z-index: -1;" src="{{ asset('assets/img/depan3.png') }}" type="webm"> --}}
            {{-- </img> --}}
            <p class="text-white welcome" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">SELAMAT
                DATANG</p>
            <h3 class="text-white hero-title " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"
                style="width:95%;font-family: 'Poppins'; font-weight:700;text-shadow: 0px 0px 10px rgba(0,0,0,.6);;">
                Probolinggo</h3>
            <p class=" descHero" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600" style="width:95%;">
                Probolinggo adalah sebuah kota di Jawa Timur yang terkenal<br> dengan keindahan alamnya, seperti Gunung
                Bromo <br> dan kebudayaan lokal yang kaya.</p>
            <a href="#" class="btn py-3 px-6 text-white mt-5"
                style="z-index:3;border: 1px solid white"data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="800">Eksplor</a>
            {{-- <div id="carouselExample" class="carousel slide position-absolute start-0 top-0" data-bs-ride="carousel">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item  active">
                        <img class="d-block w-100 h-100"
                            src="{{ asset('assets/img/front-pages/backgrounds/cta-bg.png') }}" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3>First slide</h3>
                            <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100 h-100"
                            src="{{ asset('assets/img/front-pages/backgrounds/cta-bg.png') }}" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Second slide</h3>
                            <p>In numquam omittam sea.</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100 h-100"
                        src="{{ asset('assets/img/front-pages/backgrounds/cta-bg.png') }}" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Third slide</h3>
                            <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div> --}}
            {{-- <div class="container">
                <div class="hero-text-box text-center">
                    <h3 class="text-primary hero-title fs-2">All in one sass application for your business</h3>
                    <h2 class="h6 mb-8">
                        No coding required to make customisations.<br />The live customiser has everything your
                        marketing need.
                    </h2>
                    <a href="#landingPricing" class="btn btn-lg btn-primary">Get early access</a>
                </div>
                <div class="position-relative hero-animation-img">
                    <a href="https://demos.pixinvent.com/materialize-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html"
                        target="_blank">
                        <div class="hero-dashboard-img text-center">
                            <img src="../../assets/img/front-pages/landing-page/hero-dashboard-light.png"
                            alt="hero dashboard" class="animation-img" data-speed="2"
                                data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                                data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.html" />
                            </div>
                            <div class="position-absolute hero-elements-img">
                                <img src="../../assets/img/front-pages/landing-page/hero-elements-light.png"
                                alt="hero elements" class="animation-img" data-speed="4"
                                data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                                data-app-dark-img="front-pages/landing-page/hero-elements-dark.html" />
                            </div>
                        </a>
                    </div>
            </div> --}}
        </section>
        <!-- Hero: End -->

        <section id="tentang"
            class="section-py bg-black overflow-hidden d-flex justify-content-center align-items-center"
            style="padding:100px 0px;">
            <div class="row justify-content-center row-responsive gy-5">
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-start" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="400">
                    <img class="" style="width: 100%;border-radius:20px;"
                        src="{{ asset('assets/img/Badag_Iklan.jpg') }}" alt="">
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-start align-items-start col-text-responsive" >
                    <div class=" d-flex w-100 align-items-center justify-content-between h-fit mb-5">
                        <div class="d-flex align-items-center justify-content-center w-fit fs-5 text-primary"
                            style="font-family: 'Poppins', monospace;font-weight: 300" data-aos="fade-left"
                            data-aos-duration="1000" data-aos-delay="400">Tentang</div>
                        <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600"
                            class="line bg-primary ms-5" style=" height:2.5px;width:100%;"></div>
                    </div>
                    <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="800"
                        class="text-white h-responsive w-100"
                        style="font-family: 'Poppins', monospace;font-weight: 800">
                        Mengenal Probolinggo</h1>
                    <p style="font-family: 'Poppins';color:gray;" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="1000">
                        Probolinggo adalah kota dan kabupaten di Provinsi Jawa Timur, Indonesia, yang terkenal dengan
                        budaya lokal seperti Tari Jaran Bodag, Petik Laut, Tari Glipang dan berbagai tradisi masyarakat.
                        Nama "Probolinggo" berasal dari bahasa Sanskerta, di mana "Proba" berarti "kebaikan" dan
                        "Lingga" berarti "simbol," sehingga dapat diartikan sebagai "tempat yang baik." Daerah ini kaya
                        akan budaya dan tradisi, menjadikannya tempat menarik untuk dikunjungi..</p>
                </div>
            </div>
        </section>
        <!-- Useful features: Start -->
        <section id="landingFeatures" class="section-py landing-features position-relative bg-black">
            {{-- <img src="{{ asset('assets/img/daun2.png') }}" class="position-absolute overflow-hidden" style="top: -2%;width:20%; left:0px; z-index: 1;">
            <img src="{{ asset('assets/img/daun2.png') }}" class="position-absolute overflow-hidden" style="top: -2%;width:20%; right:-3%; z-index: 1;"> --}}
            <div class="container">
                <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
                    <span class="text-uppercase text-primary">UMKM </span>
                </h6>
                <h1 class="text-center mb-2"><span class=" fw-bold text-white h-responsive">GALERI UMKM</span></h1>
                <p class="text-center fw-medium mb-4 mb-md-12">
                    Dukung UMKM daerah Probolinggo.
                </p>
                <div class="features-icon-wrapper row gx-0 gy-12 gx-sm-6 mt-n4 mt-sm-0">
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="card" style="min-height: 350px">
                            <div class="card content">
                                <div class="card-header">

                                </div>
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="features-icon mb-4">
                            <img src="../../assets/img/front-pages/icons/transition-up.png" alt="transition up" />
                        </div>
                        <h5 class="mb-2">Continuous Updates</h5>
                        <p class="features-icon-description">
                            Free updates for the next 12 months, including new demos and features.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="features-icon mb-4">
                            <img src="../../assets/img/front-pages/icons/edit.png" alt="edit" />
                        </div>
                        <h5 class="mb-2">Stater-Kit</h5>
                        <p class="features-icon-description">
                            Start your project quickly without having to remove unnecessary features.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="features-icon mb-4">
                            <img src="../../assets/img/front-pages/icons/3d-select-solid.png" alt="3d select solid" />
                        </div>
                        <h5 class="mb-2">API Ready</h5>
                        <p class="features-icon-description">
                            Just change the endpoint and see your own data loaded within seconds.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="features-icon mb-4">
                            <img src="../../assets/img/front-pages/icons/lifebelt.png" alt="lifebelt" />
                        </div>
                        <h5 class="mb-2">Excellent Support</h5>
                        <p class="features-icon-description">An easy-to-follow doc with lots of references and code
                            examples.</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="features-icon mb-4">
                            <img src="../../assets/img/front-pages/icons/google-docs.png" alt="google docs" />
                        </div>
                        <h5 class="mb-2">Well Documented</h5>
                        <p class="features-icon-description">An easy-to-follow doc with lots of references and code
                            examples.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Useful features: End -->

        <!-- Real customers reviews: Start -->
        <section id="landingReviews" class="section-py landing-reviews bg-black">
            <div class="container">
                <h6 class="text-center  d-flex justify-content-center align-items-center mb-6">
                    <img src="../../assets/img/front-pages/icons/section-tilte-icon.png" alt="section title icon"
                        class="me-3" />
                    <span class="text-uppercase">real customers reviews</span>
                </h6>
                <h5 class="text-center mb-2"><span class="display-5 fs-4 fw-bold">Success stories</span> from clients
                </h5>
                <p class="text-center fw-medium mb-4 mb-md-12">See what our customers have to say about their
                    experience.</p>
            </div>
            <div class="swiper-reviews-carousel overflow-hidden mb-12 pt-4">
                <div class="swiper" id="swiper-reviews">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-4.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        “I've never used a theme as versatile and flexible as Vuexy. It's my go to for
                                        building dashboard
                                        sites on almost any project.”
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Eugenia Moore</h6>
                                        <p class="mb-0 small">Founder of Hubspot</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-1.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>Materio is awesome, and I particularly enjoy knowing that if I get stuck on
                                        something.</h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Tommy haffman</h6>
                                        <p class="mb-0 small">Founder of Levis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-3.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        This template is superior in so many ways. The code, the design, the regular
                                        updates, the
                                        support.. It’s the whole package. Excellent Work.
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Eugenia Moore</h6>
                                        <p class="mb-0 small">CTO of Airbnb</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-2.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        All the requirements for developers have been taken into consideration, so I’m
                                        able to build any
                                        interface I want.
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Sara Smith</h6>
                                        <p class="mb-0 small">Founder of Continental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-5.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        “I've never used a theme as versatile and flexible as Vuexy. It's my go to for
                                        building dashboard
                                        sites on almost any project.”
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Eugenia Moore</h6>
                                        <p class="mb-0 small">Founder of Hubspot</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8 h-100">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-4.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        “I've never used a theme as versatile and flexible as Vuexy. It's my go to for
                                        building dashboard
                                        sites on almost any project.”
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-half-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Eugenia Moore</h6>
                                        <p class="mb-0 small">Founder of Hubspot</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8 h-100">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-1.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>Materio is awesome, and I particularly enjoy knowing that if I get stuck on
                                        something.</h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Tommy haffman</h6>
                                        <p class="mb-0 small">Founder of Levis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8 h-100">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-3.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        This template is superior in so many ways. The code, the design, the regular
                                        updates, the
                                        support.. It’s the whole package. Excellent Work.
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Eugenia Moore</h6>
                                        <p class="mb-0 small">CTO of Airbnb</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8 h-100">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-2.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        All the requirements for developers have been taken into consideration, so I’m
                                        able to build any
                                        interface I want.
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-half-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Sara Smith</h6>
                                        <p class="mb-0 small">Founder of Continental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8 h-100">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-5.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        “I've never used a theme as versatile and flexible as Vuexy. It's my go to for
                                        building dashboard
                                        sites on almost any project.”
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Eugenia Moore</h6>
                                        <p class="mb-0 small">Founder of Hubspot</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-4.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        “I've never used a theme as versatile and flexible as Vuexy. It's my go to for
                                        building dashboard
                                        sites on almost any project.”
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Eugenia Moore</h6>
                                        <p class="mb-0 small">Founder of Hubspot</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-1.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>Materio is awesome, and I particularly enjoy knowing that if I get stuck on
                                        something.</h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Tommy haffman</h6>
                                        <p class="mb-0 small">Founder of Levis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-3.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        This template is superior in so many ways. The code, the design, the regular
                                        updates, the
                                        support.. It’s the whole package. Excellent Work.
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Eugenia Moore</h6>
                                        <p class="mb-0 small">CTO of Airbnb</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-2.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        All the requirements for developers have been taken into consideration, so I’m
                                        able to build any
                                        interface I want.
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Sara Smith</h6>
                                        <p class="mb-0 small">Founder of Continental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                                    <div class="mb-4">
                                        <img src="../../assets/img/front-pages/branding/logo-5.png" alt="client logo"
                                            class="client-logo img-fluid" />
                                    </div>
                                    <h6>
                                        “I've never used a theme as versatile and flexible as Vuexy. It's my go to for
                                        building dashboard
                                        sites on almost any project.”
                                    </h6>
                                    <div class="text-warning mb-4">
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                        <i class="tf-icons ri-star-fill ri-24px"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Eugenia Moore</h6>
                                        <p class="mb-0 small">Founder of Hubspot</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="container">
                <div class="swiper-logo-carousel pt-lg-4 mt-12">
                    <div class="swiper" id="swiper-clients-logos">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../../assets/img/front-pages/branding/logo-1-light.png" alt="client logo"
                                    class="client-logo" data-app-light-img="front-pages/branding/logo-1-light.png"
                                    data-app-dark-img="front-pages/branding/logo-1-dark.html" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../../assets/img/front-pages/branding/logo-2-light.png" alt="client logo"
                                    class="client-logo" data-app-light-img="front-pages/branding/logo-2-light.png"
                                    data-app-dark-img="front-pages/branding/logo-2-dark.html" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../../assets/img/front-pages/branding/logo-3-light.png" alt="client logo"
                                    class="client-logo" data-app-light-img="front-pages/branding/logo-3-light.png"
                                    data-app-dark-img="front-pages/branding/logo-3-dark.html" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../../assets/img/front-pages/branding/logo-4-light.png" alt="client logo"
                                    class="client-logo" data-app-light-img="front-pages/branding/logo-4-light.png"
                                    data-app-dark-img="front-pages/branding/logo-4-dark.html" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../../assets/img/front-pages/branding/logo-5-light.png" alt="client logo"
                                    class="client-logo" data-app-light-img="front-pages/branding/logo-5-light.png"
                                    data-app-dark-img="front-pages/branding/logo-5-dark.html" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Real customers reviews: End -->

        <!-- Our great team: Start -->
        <section id="landingTeam" class="section-py landing-team bg-black">
            <div class="container bg-icon-right position-relative">
                <img src="../../assets/img/front-pages/icons/bg-right-icon-light.png" alt="section icon"
                    class="position-absolute top-0 end-0" data-speed="1"
                    data-app-light-img="front-pages/icons/bg-right-icon-light.png"
                    data-app-dark-img="front-pages/icons/bg-right-icon-dark.html" />
                <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
                    <img src="../../assets/img/front-pages/icons/section-tilte-icon.png" alt="section title icon"
                        class="me-3" />
                    <span class="text-uppercase">our great team</span>
                </h6>
                <h5 class="text-center mb-2"><span class="display-5 fs-4 fw-bold">Supported</span> by Real People</h5>
                <p class="text-center fw-medium mb-4 mb-md-12 pb-7">Who is behind these great-looking interfaces?</p>
                <div class="row gy-lg-5 gy-12 mt-2">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-hover-border-primary mt-4 mt-lg-0 shadow-none">
                            <div class="bg-label-primary position-relative team-image-box">
                                <img src="../../assets/img/front-pages/landing-page/team-member-1.png"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">Sophie Gilbert</h5>
                                <p class="card-text mb-3">Project Manager</p>
                                <div class="text-center team-media-icons">
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-facebook-circle-line ri-22px me-1"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-twitter-line ri-22px me-1"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-linkedin-box-line ri-22px"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-hover-border-danger mt-4 mt-lg-0 shadow-none">
                            <div class="bg-label-danger position-relative team-image-box">
                                <img src="../../assets/img/front-pages/landing-page/team-member-2.png"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">Nannie Ford</h5>
                                <p class="card-text mb-3">Development Lead</p>
                                <div class="text-center team-media-icons">
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-facebook-circle-line ri-22px me-1"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-twitter-line ri-22px me-1"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-linkedin-box-line ri-22px"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-hover-border-success mt-4 mt-lg-0 shadow-none">
                            <div class="bg-label-success position-relative team-image-box">
                                <img src="../../assets/img/front-pages/landing-page/team-member-3.png"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">Chris Watkins</h5>
                                <p class="card-text mb-3">Marketing Manager</p>
                                <div class="text-center team-media-icons">
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-facebook-circle-line ri-22px me-1"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-twitter-line ri-22px me-1"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-linkedin-box-line ri-22px"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-hover-border-info mt-4 mt-lg-0 shadow-none">
                            <div class="bg-label-info position-relative team-image-box">
                                <img src="../../assets/img/front-pages/landing-page/team-member-4.png"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">Paul Miles</h5>
                                <p class="card-text mb-3">UI Designer</p>
                                <div class="text-center team-media-icons">
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-facebook-circle-line ri-22px me-1"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-twitter-line ri-22px me-1"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="text-heading" target="_blank">
                                        <i class="tf-icons ri-linkedin-box-line ri-22px"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our great team: End -->

        <!-- Pricing plans: Start -->
        <section id="landingPricing" class="section-py landing-pricing bg-black">
            <div class="container bg-icon-left position-relative">
                <img src="../../assets/img/front-pages/icons/bg-left-icon-light.png" alt="section icon"
                    class="position-absolute top-0 start-0" data-speed="1"
                    data-app-light-img="front-pages/icons/bg-left-icon-light.png"
                    data-app-dark-img="front-pages/icons/bg-left-icon-dark.html" />
                <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
                    <img src="../../assets/img/front-pages/icons/section-tilte-icon.png" alt="section title icon"
                        class="me-3" />
                    <span class="text-uppercase">pricing plans</span>
                </h6>
                <h5 class="text-center mb-2"><span class="display-5 fs-4 fw-bold">Tailored pricing plans</span>
                    designed for you</h5>
                <p class="text-center fw-medium mb-10 mb-md-12 pb-lg-4">
                    All plans include 40+ advanced tools and features to boost your product.<br />
                    the best plan to fit your needs.
                </p>
                <div id="slider-pricing" class="mb-10 mb-md-12"></div>
                <div class="row gy-6 pt-md-4">
                    <!-- Basic Plan: Start -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="card shadow-none border">
                            <div class="card-header border-0 p-6 p-sm-8">
                                <h4 class="mb-2 pb-1 text-center">Basic Plan</h4>
                                <div class="d-flex align-items-center">
                                    <h5 class="d-flex mb-0"><sup class="h5 mt-4">$</sup><span
                                            class="display-3 fw-bold">20</span></h5>
                                    <div class="ms-2 ps-1">
                                        <h6 class="mb-1">Per month</h6>
                                        <p class="small mb-0 text-body">10% off for yearly subscription</p>
                                    </div>
                                </div>
                                <img src="../../assets/img/front-pages/icons/smiling-icon.png" alt="smiling icon" />
                            </div>
                            <div class="card-body p-6 p-sm-8 pt-0">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Timeline
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Basic search
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Live chat widget
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Email marketing
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Custom Forms
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Traffic analytics
                                        </h5>
                                    </li>
                                </ul>
                                <hr />
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="me-1">
                                        <h6 class="mb-1">Basic Support</h6>
                                        <p class="small mb-0">Only Email</p>
                                    </div>
                                    <span class="badge bg-label-primary rounded-pill">AVG. Time: 24h</span>
                                </div>
                                <div class="text-center mt-6 pt-2">
                                    <a href="payment-page.html" class="btn btn-outline-primary w-100">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Plan: End -->

                    <!-- Favourite Plan: Start -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="card border-primary border-2 shadow-none">
                            <div class="card-header border-0 p-6 p-sm-8">
                                <h4 class="mb-2 pb-1 text-center">Favourite Plan</h4>
                                <div class="d-flex align-items-center">
                                    <h5 class="d-flex mb-0"><sup class="h5 mt-4">$</sup><span
                                            class="display-3 fw-bold">51</span></h5>
                                    <div class="ms-2 ps-1">
                                        <h6 class="mb-1">Per month</h6>
                                        <p class="small mb-0 text-body">10% off for yearly subscription</p>
                                    </div>
                                </div>
                                <img src="../../assets/img/front-pages/icons/smiling-icon.png" alt="smiling icon" />
                            </div>
                            <div class="card-body p-6 p-sm-8 pt-0">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Everything in basic
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Timeline with database
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Advanced search
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Marketing automation
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Advanced chatbot
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Campaign management
                                        </h5>
                                    </li>
                                </ul>
                                <hr />
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="me-1">
                                        <h6 class="mb-1">Standard Support</h6>
                                        <p class="small mb-0">Email & Chat</p>
                                    </div>
                                    <span class="badge bg-label-primary rounded-pill">AVG. Time: 6h</span>
                                </div>
                                <div class="text-center mt-6 pt-2">
                                    <a href="payment-page.html" class="btn btn-primary w-100">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Favourite Plan: End -->

                    <!-- Standard Plan: Start -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="card shadow-none border">
                            <div class="card-header border-0 p-6 p-sm-8">
                                <h4 class="mb-2 pb-1 text-center">Standard Plan</h4>
                                <div class="d-flex align-items-center">
                                    <h5 class="d-flex mb-0"><sup class="h5 mt-4">$</sup><span
                                            class="display-3 fw-bold">99</span></h5>
                                    <div class="ms-2 ps-1">
                                        <h6 class="mb-1">Per month</h6>
                                        <p class="small mb-0 text-body">10% off for yearly subscription</p>
                                    </div>
                                </div>
                                <img src="../../assets/img/front-pages/icons/smiling-icon.png" alt="smiling icon" />
                            </div>
                            <div class="card-body p-6 p-sm-8 pt-0">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Everything in premium
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Timeline with database
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Fuzzy search
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            A/B testing sanbox
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Custom permissions
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 class="mb-3">
                                            <img src="../../assets/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl" />
                                            Social media automation
                                        </h5>
                                    </li>
                                </ul>
                                <hr />
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="me-1">
                                        <h6 class="mb-1">Exclusive Support</h6>
                                        <p class="small mb-0">Email, Chat & Google Meet</p>
                                    </div>
                                    <span class="badge bg-label-primary rounded-pill">Live Support</span>
                                </div>
                                <div class="text-center mt-6 pt-2">
                                    <a href="payment-page.html" class="btn btn-outline-primary w-100">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Standard Plan: End -->
                </div>
            </div>
        </section>
        <!-- Pricing plans: End -->

        <!-- Fun facts: Start -->
        <section id="landingFunFacts" class="section-py landing-fun-facts py-12 my-4 bg-black">
            <div class="container">
                <div class="row gx-0 gy-6 gx-sm-6">
                    <div class="col-md-3 col-sm-6 text-center">
                        <span class="badge rounded-pill bg-label-hover-primary fun-facts-icon mb-6 p-5"><i
                                class="tf-icons ri-layout-line ri-42px"></i></span>
                        <h2 class="fw-bold mb-0 fun-facts-text">137+</h2>
                        <h6 class="mb-0 text-body">Completed Sites</h6>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <span class="badge rounded-pill bg-label-hover-success fun-facts-icon mb-6 p-5"><i
                                class="tf-icons ri-time-line ri-42px"></i></span>
                        <h2 class="fw-bold mb-0 fun-facts-text">1,100+</h2>
                        <h6 class="mb-0 text-body">Working Hours</h6>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <span class="badge rounded-pill bg-label-hover-warning fun-facts-icon mb-6 p-5"><i
                                class="tf-icons ri-user-smile-line ri-42px"></i></span>
                        <h2 class="fw-bold mb-0 fun-facts-text">137+</h2>
                        <h6 class="mb-0 text-body">Happy Customers</h6>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <span class="badge rounded-pill bg-label-hover-info fun-facts-icon mb-6 p-5"><i
                                class="tf-icons ri-award-line ri-42px"></i></span>
                        <h2 class="fw-bold mb-0 fun-facts-text">23+</h2>
                        <h6 class="mb-0 text-body">Awards Winning</h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fun facts: End -->

        <!-- FAQ: Start -->
        <section id="landingFAQ" class="section-py landing-faq bg-black">
            <div class="container bg-icon-right">
                <img src="../../assets/img/front-pages/icons/bg-right-icon-light.png" alt="section icon"
                    class="position-absolute top-0 end-0" data-speed="1"
                    data-app-light-img="front-pages/icons/bg-right-icon-light.png"
                    data-app-dark-img="front-pages/icons/bg-right-icon-dark.html" />
                <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
                    <img src="../../assets/img/front-pages/icons/section-tilte-icon.png" alt="section title icon"
                        class="me-3" />
                    <span class="text-uppercase">faq</span>
                </h6>
                <h5 class="text-center mb-2">Frequently asked<span class="display-5 fs-4 fw-bold"> questions</span>
                </h5>
                <p class="text-center fw-medium mb-4 mb-md-12 pb-4">
                    Browse through these FAQs to find answers to commonly asked questions.
                </p>
                <div class="row gy-5">
                    <div class="col-lg-5">
                        <div class="text-center">
                            <img src="../../assets/img/front-pages/landing-page/sitting-girl-with-laptop.png"
                                alt="sitting girl with laptop" class="faq-image scaleX-n1-rtl" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="accordion" id="accordionFront">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="head-One">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true"
                                        aria-controls="accordionOne">
                                        Do you charge for each upgrade?
                                    </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFront" aria-labelledby="accordionOne">
                                    <div class="accordion-body">
                                        Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping.
                                        Sesame snaps icing
                                        marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée
                                        pastry topping
                                        soufflé. Wafer gummi bears marshmallow pastry pie.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item previous-active">
                                <h2 class="accordion-header" id="head-Two">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionTwo"
                                        aria-expanded="false" aria-controls="accordionTwo">
                                        Do I need to purchase a license for each website?
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse"
                                    aria-labelledby="accordionTwo" data-bs-parent="#accordionFront">
                                    <div class="accordion-body">
                                        Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw
                                        dragée oat cake
                                        dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart
                                        donut gummies. Jelly
                                        beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item active">
                                <h2 class="accordion-header" id="head-Three">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionThree" aria-expanded="true"
                                        aria-controls="accordionThree">
                                        What is regular license?
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse show"
                                    aria-labelledby="accordionThree" data-bs-parent="#accordionFront">
                                    <div class="accordion-body">
                                        Regular license can be used for end products that do not charge users for access
                                        or service(access
                                        is free and there will be no monthly subscription fee). Single regular license
                                        can be used for
                                        single end product and end product can be used by you or your client. If you
                                        want to sell end
                                        product to multiple clients then you will need to purchase separate license for
                                        each client. The
                                        same rule applies if you want to use the same end product on multiple
                                        domains(unique setup). For
                                        more info on regular license you can check official description.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="head-Four">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionFour"
                                        aria-expanded="false" aria-controls="accordionFour">
                                        What is extended license?
                                    </button>
                                </h2>
                                <div id="accordionFour" class="accordion-collapse collapse"
                                    aria-labelledby="accordionFour" data-bs-parent="#accordionFront">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid
                                        quaerat possimus maxime!
                                        Mollitia reprehenderit neque repellat deleniti delectus architecto dolorum
                                        maxime, blanditiis
                                        earum ea, incidunt quam possimus cumque.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="head-Five">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionFive"
                                        aria-expanded="false" aria-controls="accordionFive">
                                        Which license is applicable for SASS application?
                                    </button>
                                </h2>
                                <div id="accordionFive" class="accordion-collapse collapse"
                                    aria-labelledby="accordionFive" data-bs-parent="#accordionFront">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias
                                        exercitationem ab cum
                                        nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia
                                        ipsam quasi
                                        labore enim architecto non!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ: End -->

        <!-- CTA: Start -->
        <section id="landingCTA" class="section-py landing-cta p-lg-0 pb-0 position-relative bg-black">
            <img src="../../assets/img/front-pages/backgrounds/cta-bg.png"
                class="position-absolute bottom-0 end-0 scaleX-n1-rtl h-100 w-100 z-n1" alt="cta image" />
            <div class="container">
                <div class="row align-items-center gy-5 gy-lg-0">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h3 class="display-5 text-primary fw-bold mb-1 h3">Ready to Get Started?</h3>
                        <p class="fw-medium mb-6 mb-md-8">Start your project with a 14-day free trial</p>
                        <a href="payment-page.html" class="btn btn-primary">Get Started<i
                                class="ri-arrow-right-line ri-16px ms-2 scaleX-n1-rtl"></i></a>
                    </div>
                    <div class="col-lg-6 pt-lg-12">
                        <img src="../../assets/img/front-pages/landing-page/cta-dashboard.png" alt="cta dashboard"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA: End -->

        <!-- Contact Us: Start -->
        <section id="landingContact" class="section-py landing-contact">
            <div class="container bg-icon-left position-relative">
                <img src="../../assets/img/front-pages/icons/bg-left-icon-light.png" alt="section icon"
                    class="position-absolute top-0 start-0" data-speed="1"
                    data-app-light-img="front-pages/icons/bg-left-icon-light.png"
                    data-app-dark-img="front-pages/icons/bg-left-icon-dark.html" />
                <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
                    <img src="../../assets/img/front-pages/icons/section-tilte-icon.png" alt="section title icon"
                        class="me-3" />
                    <span class="text-uppercase">contact us</span>
                </h6>
                <h5 class="text-center mb-2"><span class="display-5 fs-4 fw-bold">Lets work</span> together</h5>
                <p class="text-center fw-medium mb-4 mb-md-12 pb-3">Any question or remark? just write us a message
                </p>
                <div class="row gy-6">
                    <div class="col-lg-5">
                        <div class="card h-100">
                            <div class="bg-primary rounded-4 text-white card-body p-8">
                                <p class="fw-medium mb-1_5 tagline">Let’s contact with us</p>
                                <h4 class="text-white mb-5 title">Share your ideas or requirement with our experts.
                                </h4>
                                <img src="../../assets/img/front-pages/landing-page/let%c3%a2%c2%80%c2%99s-contact.html"
                                    alt="let’s contact" class="w-100 mb-5" />
                                <p class="mb-0 description">
                                    Looking for more customisation, more features, and more anything? Don’t worry, We’ve
                                    provide you with
                                    an entire team of experienced professionals.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-6">Share your ideas</h5>
                                <form>
                                    <div class="row g-5">
                                        <div class="col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" class="form-control"
                                                    id="basic-default-fullname" placeholder="John Doe" />
                                                <label for="basic-default-fullname">Full name</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="email" class="form-control" id="basic-default-email"
                                                    placeholder="johndoe99@gmail.com" />
                                                <label for="basic-default-email">Email address</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating form-floating-outline">
                                                <textarea class="form-control h-px-250" placeholder="Message" aria-label="Message" id="basic-default-message"></textarea>
                                                <label for="basic-default-message">Message</label>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary mt-5">Send inquiry</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us: End -->
    </div>

    <!-- / Sections:End -->



    <!-- Footer: Start -->
    <footer class="landing-footer">
        <div class="footer-top position-relative overflow-hidden">
            <img src="../../assets/img/front-pages/backgrounds/footer-bg.png" alt="footer bg"
                class="footer-bg banner-bg-img" />
            <div class="container position-relative">
                <div class="row gx-0 gy-7 gx-sm-6 gx-lg-12">
                    <div class="col-lg-5">
                        <a href="landing-page.html" class="app-brand-link mb-6">
                            <span class="app-brand-logo demo me-2">
                                <span style="color:#666cff;">
                                    <svg width="268" height="150" viewBox="0 0 38 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                                            fill="currentColor" />
                                        <path
                                            d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                                            fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4" />
                                        <path
                                            d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                                            fill="currentColor" />
                                        <path
                                            d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                            fill="currentColor" />
                                        <path
                                            d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                            fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4" />
                                        <path
                                            d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                                            fill="currentColor" />
                                        <defs>
                                            <linearGradient id="paint0_linear_2989_100980" x1="5.36642"
                                                y1="0.849138" x2="10.532" y2="24.104"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-opacity="1" />
                                                <stop offset="1" stop-opacity="0" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_2989_100980" x1="5.19475"
                                                y1="0.849139" x2="10.3357" y2="24.1155"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-opacity="1" />
                                                <stop offset="1" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                            </span>
                            <span class="app-brand-text demo footer-link fw-semibold ms-1">Materialize</span>
                        </a>
                        <p class="footer-text footer-logo-description mb-6">
                            Most Powerful & Comprehensive 🤩 React NextJS Admin Template with Elegant Material Design &
                            Unique
                            Layouts.
                        </p>
                        <form>
                            <div class="d-flex mt-2 gap-4">
                                <div class="form-floating form-floating-outline w-px-250">
                                    <input type="text" class="form-control bg-transparent" id="newsletter-1"
                                        placeholder="Your email" />
                                    <label for="newsletter-1">Subscribe to newsletter</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="footer-title mb-4 mb-lg-6">Demos</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4">
                                <a href="https://demos.pixinvent.com/materialize-html-admin-template/html/vertical-menu-template/"
                                    target="_blank" class="footer-link">Vertical Layout</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://demos.pixinvent.com/materialize-html-admin-template/html/horizontal-menu-template/"
                                    target="_blank" class="footer-link">Horizontal Layout</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://demos.pixinvent.com/materialize-html-admin-template/html/vertical-menu-template-bordered/"
                                    target="_blank" class="footer-link">Bordered Layout</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://demos.pixinvent.com/materialize-html-admin-template/html/vertical-menu-template-semi-dark/"
                                    target="_blank" class="footer-link">Semi Dark Layout</a>
                            </li>
                            <li>
                                <a href="https://demos.pixinvent.com/materialize-html-admin-template/html/vertical-menu-template-dark/"
                                    target="_blank" class="footer-link">Dark Layout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="footer-title mb-4 mb-lg-6">Pages</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4">
                                <a href="pricing-page.html" class="footer-link">Pricing</a>
                            </li>
                            <li class="mb-4">
                                <a href="payment-page.html" class="footer-link">Payment<span
                                        class="badge rounded-pill bg-primary ms-2">New</span></a>
                            </li>
                            <li class="mb-4">
                                <a href="checkout-page.html" class="footer-link">Checkout</a>
                            </li>
                            <li class="mb-4">
                                <a href="help-center-landing.html" class="footer-link">Help Center</a>
                            </li>
                            <li>
                                <a href="https://demos.pixinvent.com/materialize-html-admin-template/html/vertical-menu-template/auth-login-cover.html"
                                    target="_blank" class="footer-link">Login/Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <h6 class="footer-title mb-4 mb-lg-6">Download our app</h6>
                        <a href="javascript:void(0);" class="d-block footer-link mb-4"><img
                                src="../../assets/img/front-pages/landing-page/apple-icon.png"
                                alt="apple icon" /></a>
                        <a href="javascript:void(0);" class="d-block footer-link"><img
                                src="../../assets/img/front-pages/landing-page/google-play-icon.png"
                                alt="google play icon" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-5">
            <div
                class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
                <div class="mb-2 mb-md-0">
                    <span class="footer-text">©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>, Made with <i class="tf-icons ri-heart-fill text-danger"></i> by
                    </span>
                    <a href="https://pixinvent.com/" target="_blank"
                        class="footer-link fw-medium footer-theme-link">Pixinvent</a>
                </div>
                <div>
                    <a href="https://github.com/pixinvent" class="footer-link me-4" target="_blank"><i
                            class="ri-github-fill"></i></a>
                    <a href="https://www.facebook.com/pixinvents/" class="footer-link me-4" target="_blank"><i
                            class="ri-facebook-circle-fill"></i></a>
                    <a href="https://twitter.com/pixinvents" class="footer-link me-4" target="_blank"><i
                            class="ri-twitter-fill"></i></a>
                    <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank"><i
                            class='ri-instagram-line'></i></a>
                </div>
            </div>
        </div>
    </footer>
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
