<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-wide " dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="front-pages" data-style="light">

<head>
    @include('landing.component.head')
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
    <script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/mega-dropdown.js') }}"></script>

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

            .col-text-responsive {
                padding-left: 50px
            }

            .col-hover {
                transition: .3s ease-in-out
            }

            .section-py {
                padding: 200px 0px;
            }

            .btn-ulala {
                justify-content: end
            }

            p {
                line-height: 2rem;
                color: #797979;
            }

            @media screen and (max-width:1024px) {
                .landing-hero {
                    height: 85vh;
                }

                .btn-ulala {
                    justify-content: center
                }

                .section-py {
                    padding: 0px 0px;
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

            .btn-inti {
                transition: .3s ease-in-out;
                border: 1px solid rgba(255, 255, 255, .6);
                border-radius: 10px
            }

            .btn-inti:hover {
                border: 1px solid rgba(255, 255, 255, 1)
            }
        </style>
        <section id="landingHero" style="padding: 100px 0px"
            class="landing-hero position-relative d-flex align-items-center justify-content-center">
            {{-- <img class="position-absolute bgHero" style="z-index: -3;" src="{{ asset('assets/img/bg-belakang.png') }}">
            </img> --}}
            {{-- <img class="position-absolute bgHero" style="z-index: -1;" src="{{ asset('assets/img/depan3.png') }}" type="webm"> --}}
            {{-- </img> --}}
            <p class="text-white welcome" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">SELAMAT
                DATANG</p>
            <h3 class="text-white hero-title mb-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500"
                style="width:95%;font-family: 'Poppins'; font-weight:700;text-shadow: 0px 0px 10px rgba(0,0,0,.6);;">
                Probolinggo</h3>
            <p class=" descHero" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" style="width:95%;">
                Probolinggo adalah sebuah kota di Jawa Timur yang terkenal<br> dengan keindahan alamnya, seperti Gunung
                Bromo <br> dan kebudayaan lokal yang kaya.</p>
            <a href="#tentang" class="btn py-3 px-6 text-white mt-5"
                style="z-index:3;border: 1px solid white"data-aos="fade-up" data-aos-duration="500"
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
            class="section-py bg-black overflow-hidden d-flex justify-content-center align-items-center">
            <div class="row justify-content-center row-responsive gy-5">
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-start" data-aos="fade-up"
                    data-aos-duration="500" data-aos-delay="100">
                    <img class=""
                        style="width: 100%;border-radius:20px;border:1px solid rgba(255,255,255,.3);box-shadow: 10px 10px 20px rgba(255,255,255,.1);"
                        src="{{ asset('assets/img/aboutulala.jpeg') }}" alt="">
                </div>
                <div
                    class="col-12 col-lg-6 d-flex flex-column justify-content-start align-items-start col-text-responsive">
                    <div class=" d-flex w-100 align-items-center justify-content-between h-fit mb-5">
                        <div class="d-flex align-items-center justify-content-center w-fit fs-5 text-primary"
                            style="font-family: 'Poppins', monospace;font-weight: 300" data-aos="fade-left"
                            data-aos-duration="500" data-aos-delay="200">Tentang</div>
                        <div data-aos="fade-left" data-aos-duration="500" data-aos-delay="300"
                            class="line bg-primary ms-5" style=" height:2.5px;width:100%;"></div>
                    </div>
                    <h1 data-aos="fade-left" data-aos-duration="500" data-aos-delay="400"
                        class="text-white h-responsive w-100"
                        style="font-family: 'Poppins', monospace;font-weight: 800">
                        Mengenal Probolinggo</h1>
                    <p style="font-family: 'Poppins';overflow: hidden;
                                        display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;"
                        data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" class="fs-4 mt-3">
                        Probolinggo adalah kota dan kabupaten di Provinsi Jawa Timur, Indonesia, yang terkenal dengan
                        budaya lokal seperti Tari Jaran Bodag, Petik Laut, Tari Glipang dan berbagai tradisi masyarakat.
                        Nama "Probolinggo" berasal dari bahasa Sanskerta, di mana "Proba" berarti "kebaikan" dan
                        "Lingga" berarti "simbol," sehingga dapat diartikan sebagai "tempat yang baik." Daerah ini kaya
                        akan budaya dan tradisi, menjadikannya tempat menarik untuk dikunjungi..</p>
                    <a href="{{ route('about') }}" data-aos="fade-left" data-aos-duration="500" data-aos-delay="600"
                        class="btn btn-inti bg-transparent text-white text-uppercase w-fit py-3 px-6"
                        style="letter-spacing: .1rem">Selengkapnya</a>
                </div>
            </div>
        </section>

        <style>
            .card-list {
                display: flex;
                justify-content: start;
                margin: 10px 1.5rem 10px 0px;
            }



            .card-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card-list .card-item {
                list-style: none;
                /* margin-block-start: 0 50px 0; */
            }

            .card-item {
                list-style-type: none;

            }

            .card-list .card-item .card-link {
                display: block;
                user-select: none;
                background: linear-gradient(135deg, #292929, #131313);
                padding: 20px;
                border-radius: 15px;
                text-decoration: none;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card-list .card-item .card-link:hover {
                transform: translateY(-10px);
                box-shadow: 0 16px 30px rgba(0, 0, 0, 0.3);
            }

            .card-list .card-link .card-image {
                width: 100%;
                aspect-ratio: 16/9;
                object-fit: cover;
                border-radius: 12px;
                transition: transform 0.3s ease;
            }

            .card-list .card-link:hover .card-image {
                transform: scale(1.05);
            }

            .card-list .card-link .card-title {
                font-size: 36px;
                font-weight: 600;
                color: #f5f5f5;
                margin-top: 15px;
                letter-spacing: 1px;
                text-transform: uppercase;
                text-align: center;
            }

            .card-list .card-link .card-button {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 10px 15px;
                border-radius: 25px;
                margin: 20px auto 0;
                cursor: pointer;
                border: 2px solid #f5f5f5;
                background-color: transparent;
                color: #f5f5f5;
                transition: background-color 0.3s ease, color 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .card-list .card-link .material-symbols-outlined {
                display: inline-block;
                transform: rotate(-45deg);
                transition: transform 0.3s ease;
            }

            .card-list .card-link .button-text {
                margin-left: 10px;
                opacity: 0;
                color: #f5f5f5;
                transition: opacity 0.3s ease;
            }

            .card-list .card-link .card-button:hover .material-symbols-outlined {
                transform: rotate(0);
            }

            .card-list .card-link .card-button:hover .button-text {
                opacity: 1;
                color: black;
            }

            .card-list .card-link .card-button:hover {
                background-color: #f5f5f5;
                color: #131313;
            }

            .swiper-pagination-bullet {
                background-color: #eaeaea
            }
        </style>

        <section id="budaya"
            class="section-py bg-black overflow-hidden d-flex justify-content-center align-items-center">
            <div class="row justify-content-center row-responsive gy-5">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-start align-items-start ">

                    <div class=" d-flex w-100 align-items-center justify-content-between h-fit mb-5 mt-6">
                        <div class="d-flex align-items-center justify-content-center w-fit fs-5 text-primary"
                            style="font-family: 'Poppins', monospace;font-weight: 300" data-aos="fade-right"
                            data-aos-duration="500" data-aos-delay="400">Budaya</div>
                        <div data-aos="fade-right" data-aos-duration="500" data-aos-delay="600"
                            class="line bg-primary ms-5" style=" height:2.5px;width:100%;"></div>
                    </div>
                    <h1 data-aos="fade-right" data-aos-duration="500" data-aos-delay="800"
                        class="text-white h-responsive w-100"
                        style="font-family: 'Poppins', monospace;font-weight: 800">
                        Berbagai Macam Budaya</h1>
                    <p style="font-family: 'Poppins';overflow: hidden;
                                        display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;"
                        data-aos="fade-right" data-aos-duration="500" data-aos-delay="1000" class="fs-4 mt-3">
                        Probolinggo yang terletak di Jawa Timur, memiliki beragam ritual, seni, dan adat yang
                        mencerminkan kehidupan masyarakatnya. Dari upacara adat seperti Petik Laut, hingga seni
                        pertunjukan seperti Tari Glipang dan Jaran Bodhag, setiap aspek budaya di sini memiliki nilai
                        historis dan sosial yang mendalam. Keberagaman ini tidak hanya memperkaya identitas lokal,
                        tetapi juga menarik minat wisatawan untuk mengenal lebih dekat keunikan budaya Probolinggo.</p>
                    <a href="{{ route('budaya') }}" data-aos="fade-right" data-aos-duration="500"
                        data-aos-delay="1200"
                        class="btn btn-inti bg-transparent text-white text-uppercase w-fit py-3 px-6"
                        style="letter-spacing: .1rem">Selengkapnya</a>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-start col-text-responsive">
                    <div class="container swiper" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                        <div class="card-wrapper d-flex justify-content-center align-items-center"
                            style="padding: 1rem">
                            <ul class="card-list swiper-wrapper mb-5">
                                @foreach ($cultures as $culture)
                                    <li class="card-item swiper-slide ">
                                        <a href="{{ route('budayaDetail', $culture->id) }}"
                                            class="card-link text-center"
                                            style="border: .5px solid rgba(255,255,255,.2);">
                                            <img src="{{ asset("$culture->image") }}" alt="Tari Glepang Image"
                                                class="card-image">
                                            <h2 class="card-title">{{ $culture->name }}</h2>
                                            <p>{{ $culture->lokasi }}</p>
                                            {{-- <button class="card-button">
                                            <span class="material-symbols-outlined">arrow_forward</span>
                                            <span class="button-text ">Lihat Selengkapnya</span>
                                        </button> --}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="swiper-pagination"></div>
                            <!-- If we need navigation buttons -->
                            {{-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> --}}
                            <!-- If we need scrollbar -->
                            {{-- <div class="swiper-scrollbar"></div> --}}
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Useful features: Start -->
        <section id="landingFeatures" style="padding-top: 0"
            class="section-py landing-features position-relative bg-black">
            {{-- <img src="{{ asset('assets/img/daun2.png') }}" class="position-absolute overflow-hidden" style="top: -2%;width:20%; left:0px; z-index: 1;">
            <img src="{{ asset('assets/img/daun2.png') }}" class="position-absolute overflow-hidden" style="top: -2%;width:20%; right:-3%; z-index: 1;"> --}}
            <div class="container">
                <h6 class="text-center d-flex justify-content-center align-items-center mb-0" data-aos="fade-up"
                    data-aos-duration="500" data-aos-delay="400">
                    <span class="text-uppercase text-primary">UMKM </span>
                </h6>
                <h1 class="text-center mb-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600"><span
                        class=" fw-bold text-white h-responsive">DAFTAR UMKM</span></h1>
                <p class="text-center fw-medium mb-4 mb-md-12"data-aos="fade-up" data-aos-duration="500"
                    data-aos-delay="800">
                    Dukung UMKM daerah Probolinggo.
                </p>

                <div class="d-flex btn-ulala w-100">

                    <a href="{{ route('umkm') }}" data-aos="fade-right" data-aos-duration="500"
                        data-aos-delay="1200"
                        class="btn btn-inti bg-transparent d-flex justify-content-end  text-white text-uppercase  py-3 px-6"
                        style="letter-spacing: .1rem;">Lihat Selengkapnya<i class="ri-arrow-right-line"></i></a>
                </div>
                <div class="features-icon-wrapper row gx-0 gy-12 gx-sm-6 mt-n4 mt-sm-0">
                    @foreach ($umkms as $index => $umkm)
                        <div class="col-lg-4 col-sm-6 text-left features-icon-box col-hover" data-aos="fade-up"
                            data-aos-duration="500" data-aos-delay="{{ ($index + 7) * 100 }}">
                            <a href="{{ $umkm->link }}" target="blank">
                                <style>
                                    .card-umkm:hover {
                                        transform: scale(104%);
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
            </div>
        </section>
        <!-- Useful features: End -->

        <style>
            .popup {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background-color: rgba(0, 0, 0, .9);
                transition: opacity 0.5s, visibility 0.5s;
                visibility: hidden;
                opacity: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10;
            }

            .popup.active {
                visibility: visible;
                opacity: 1;
            }

            .popup .popup-content {
                position: relative;
                max-width: 90%;
                max-height: 90%;
                margin-top: auto;
                margin-bottom: auto;
                text-align: left;
            }

            .popup .popup-content img {
                width: 600px;
                height: 450px;
                object-fit: cover;
                border-radius: 10px;
                max-width: 100%;
                justify-content: center;
                justify-items: center;
            }

            .popup .info {
                background-color: rgba(255, 255, 255, 0.1);
                color: #fff;
                padding: 15px;
                border-radius: 5px;
                margin-top: 10px;
                max-width: 100%;
                text-align: left;
            }

            .popup .info .title {
                font-size: 1.5rem;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .popup .info .location {
                font-size: 1rem;
                margin-bottom: 5px;
                font-style: italic;
            }

            .popup .info .description {
                font-size: 1rem;
                width: 570px;
            }

            .popup .close-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                padding: 5px 10px;
                cursor: pointer;
            }

            .popup .close-btn .text-close {
                color: #fff;
                font-size: 1.2rem;
            }

            figure {
                position: relative;
                overflow: hidden;
                cursor: pointer;
                /* border: 1px solid rgba(255,255,255,.2); */
                box-shadow: 0px 0px 10px rgba(255, 255, 255, .2)
            }

            figcaption {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                padding: 10px;
                background: rgba(0, 0, 0, 0.5);
                transform: translateY(100%);
                transition: transform 0.5s;
            }

            figure:hover figcaption {
                transform: translateY(0);
            }

            h3,
            div {
                margin: 0;
                transition: all 0.5s ease;
            }

            figure:hover h3 {
                transform: translateY(-10px);
            }

            figure:hover div {
                transform: translateY(10px);
            }
        </style>

        <section id="Galery" class="section-py landing-features position-relative bg-black">
            <div class="container mb-8">
                <h6 class="text-center d-flex justify-content-center align-items-center mb-0" data-aos="fade-up"
                    data-aos-duration="500" data-aos-delay="100">
                    <span class="text-uppercase text-primary">Wisata </span>
                </h6>
                <h1 class="text-center mb-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200"><span
                        class="fw-bold text-white h-responsive">GALERI WISATA</span></h1>
                <p class="text-center fw-medium mb-4 mb-md-12"data-aos="fade-up" data-aos-duration="500"
                    data-aos-delay="300">
                    Jelajahi berbagai wisata yang ada di wilayah probolinggo
                </p>
            </div>

            <div class="container overflow-hidden">
                <div class="row gy-3 gy-md-2 bsb-project-1-grid">
                    <div class="col-12 col-md-4 col-lg-4 bsb-project-1-item image" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="400">
                        <figure class="rounded rounded-4 overflow-hidden bsb-overlay-hover">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale"
                                src="{{ asset('assets/img/gallery/4.png') }}" alt="Cozy Occupancy"
                                data-description="Gunung berapi ikonik ini terkenal dengan pemandangan matahari terbit yang spektakuler dan lanskap menawannya yang menarik wisatawan dari seluruh dunia.">
                            <figcaption>
                                <h3 class="text-white bsb-hover-fadeInLeft">Gunung Bromo</h3>
                                <div class="text-white text-center bsb-hover-fadeInRight">Desa Ngadisari, Kecamatan
                                    Sukapura, Kabupaten Probolinggo.</div>
                            </figcaption>
                        </figure>
                    </div>


                    <div class="col-12 col-md-4 col-lg-4 bsb-project-1-item image" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="500">
                        <figure class="rounded rounded-4 overflow-hidden bsb-overlay-hover">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale"
                                src="{{ asset('assets/img/gallery/madakaripura.jpeg') }}" alt="Air Terjun"
                                data-description="Air terjun yang indah ini terkenal dengan keindahan alamnya dan suasana yang menenangkan, menjadikannya tempat yang sempurna untuk berwisata alam.">
                            <figcaption>
                                <h3 class="text-white bsb-hover-fadeInUp">Air Terjun Madakaripura</h3>
                                <div class="text-white bsb-hover-fadeInDown">Kec. Lumbang, Kabupaten Probolinggo</div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 bsb-project-1-item image" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="600">
                        <figure class="rounded rounded-4 overflow-hidden bsb-overlay-hover">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale"
                                src="{{ asset('assets/img/gallery/kebunteh.jpg') }}" alt="Kebun Teh"
                                data-description="Kebun teh yang luas ini menawarkan pemandangan hijau yang menakjubkan serta pengalaman menikmati teh segar langsung dari kebun.">
                            <figcaption>
                                <h3 class="text-white bsb-hover-fadeInLeft">Kebun Teh Andung Biru</h3>
                                <div class="text-white bsb-hover-fadeInRight">Tiris, Kab. Probolinggo</div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 bsb-project-1-item image" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="100">
                        <figure class="rounded rounded-4 overflow-hidden bsb-overlay-hover">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale"
                                src="{{ asset('assets/img/gallery/3.png') }}" alt="Fashion"
                                data-description="Pulau kecil ini menyajikan keindahan pantai berpasir putih dan kegiatan snorkeling yang menawan, ideal untuk pelarian sejenak.">
                            <figcaption>
                                <h3 class="text-white bsb-hover-fadeInLeft">Gili Ketapang</h3>
                                <div class="text-white bsb-hover-fadeInRight">Gili Ketapang, Probolinggo</div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 bsb-project-1-item image" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="200">
                        <figure class="rounded rounded-4 overflow-hidden bsb-overlay-hover">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale"
                                src="{{ asset('assets/img/gallery/2.png') }}" alt="Food"
                                data-description="Resort ramah lingkungan ini dikelilingi hutan bakau, menawarkan penginapan nyaman dan berbagai aktivitas ekowisata.">
                            <figcaption>
                                <h3 class="text-white bsb-hover-fadeInLeft">Beejay Bakau Resort</h3>
                                <div class="text-white bsb-hover-fadeInRight">Kec. Mayangan, Kota Probolinggo</div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 bsb-project-1-item image" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="300">
                        <figure class="rounded rounded-4 overflow-hidden bsb-overlay-hover">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale"
                                src="{{ asset('assets/img/gallery/6.png') }}" alt="Boat Adventure"
                                data-description="Taman ini merupakan surga bagi pecinta alam, dengan trekking menantang dan keanekaragaman hayati yang kaya.">
                            <figcaption>
                                <h3 class="text-white bsb-hover-fadeInLeft">Taman Hidup</h3>
                                <div class="text-white bsb-hover-fadeInRight">Kec. Krucil, Kabupaten Probolinggo</div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 bsb-project-1-item image" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="100">
                        <figure class="rounded rounded-4 overflow-hidden bsb-overlay-hover">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale"
                                src="{{ asset('assets/img/abungbg.jpg') }}" alt="Candi"
                                data-description="Candi bersejarah ini mencerminkan arsitektur kuno dan budaya Majapahit, menjadi tempat menarik untuk belajar tentang sejarah lokal.">
                            <figcaption>
                                <h3 class="text-white bsb-hover-fadeInUp">Candi Jabung</h3>
                                <div class="text-white bsb-hover-fadeInDown">Paito, Kab. Probolinggo</div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 bsb-project-1-item image" data-aos="fade-up"
                        data-aos-duration="500" data-aos-delay="200">
                        <figure class="rounded rounded-4 overflow-hidden bsb-overlay-hover">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale"
                                src="{{ asset('assets/img/gallery/1.png') }}" alt="Offroad Moves"
                                data-description="Air terjun menawan ini dikelilingi oleh hutan lebat, menawarkan keindahan alam yang memesona dan suasana yang tenang.">
                            <figcaption>
                                <h3 class="text-white bsb-hover-fadeInLeft">Air Terjun Tirai Bidadari</h3>
                                <div class="text-white bsb-hover-fadeInRight">Jangkang, Kec. Tiris, Kabupaten
                                    Probolinggo</div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="popup">
                    <div class="popup-content">
                        <img id="popup-image" src="" alt="" />
                        <div class="info">
                            <div class="title" id="popup-title"></div>
                            <div class="location" id="popup-location"></div>
                            <div class="description" id="popup-description"></div>
                        </div>
                        <div class="close-btn">
                            <span class="text-close"><b>X</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <script>
            const images = [...document.querySelectorAll(".image img")];
            const popup = document.querySelector(".popup");
            const popupImage = document.getElementById("popup-image");
            const popupTitle = document.getElementById("popup-title");
            const popupLocation = document.getElementById("popup-location");
            const popupDescription = document.getElementById("popup-description");
            const closeBtn = document.querySelector(".close-btn");
            let currentIndex = 0;

            images.forEach((image, index) => {
                image.addEventListener("click", () => {
                    updateImage(index);
                    popup.classList.add("active");
                });
            });

            closeBtn.addEventListener("click", () => {
                popup.classList.remove("active");
            });

            const updateImage = (index) => {
                currentIndex = index;
                const imgSrc = images[index].src;
                const imgTitle = images[index].nextElementSibling.querySelector('h3').textContent;
                const imgDescription = images[index].getAttribute("data-description");

                popupImage.src = imgSrc;
                popupTitle.textContent = imgTitle;
                popupDescription.textContent = imgDescription;
            };

            popup.addEventListener("click", (e) => {
                if (e.target === popup) {
                    popup.classList.remove("active");
                }
            });
            
        </script>



        <!-- Footer: Start -->
        @include('landing.component.footer')
        @include('landing.component.script')
</body>

</html>
