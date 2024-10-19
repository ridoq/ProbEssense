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
                            <a href="{{ route('budayaDetail', $section1[$i]->id) }}" data-aos="fade-right"
                                data-aos-duration="500" data-aos-delay="100"
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
                            <a href="{{ route('budayaDetail', $section2[$i]->id) }}" data-aos="fade-right"
                                data-aos-duration="500" data-aos-delay="100"
                                class="btn btn-inti mt-6 bg-transparent text-white text-uppercase w-fit py-3 px-6"
                                style="letter-spacing: .1rem">Selengkapnya</a>
                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-start" data-aos="fade-up"
                            data-aos-duration="500" data-aos-delay="100">
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
    @include('landing.component.script')
</body>

</html>
