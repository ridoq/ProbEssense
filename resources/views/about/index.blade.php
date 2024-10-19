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
                background: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .5), rgba(0, 0, 0, .7), rgba(0, 0, 0, 1)), url({{ asset('assets/img/aboutulala.jpeg') }});
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
                width: 60%;
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
            .section-text{
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
                TENTANG</h3>
            <p class=" descHero" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" style="width:95%;">
                Selamat datang di Probolinggo, daerah kaya sejarah dan budaya yang terletak di jantung Jawa Timur.</p>

        </section>

        <section id="tentang"
            class="section-py hero-responsive bg-black overflow-hidden d-flex justify-content-center align-items-center">
            <div class="row justify-content-center row-responsive gy-5">
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-start" data-aos="fade-up"
                    data-aos-duration="500" data-aos-delay="100" >
                    <img class="" style="width: 100%;border-radius:20px;"
                        src="{{ asset('assets/img/Badag_Iklan.jpg') }}" alt="">
                </div>
                <div
                    class="col-12 col-lg-6 d-flex flex-column justify-content-start align-items-start col-text-responsive">
                    <h1 data-aos="fade-left" data-aos-duration="500" data-aos-delay="400"
                        class="text-white  w-100"
                        style="font-family: 'Poppins', monospace;font-weight: 800">
                        Tentang Probolinggo</h1>
                    <p style="font-family: 'Poppins';" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500"
                        class="fs-5 mt-3">
                        Probolinggo adalah sebuah kota yang terletak di pesisir utara Jawa Timur, dikenal sebagai pintu
                        gerbang menuju Gunung Bromo yang megah. Selain pesonanya yang alami, Probolinggo juga memiliki
                        kekayaan budaya yang luar biasa. Kota ini dikelilingi oleh pegunungan yang menakjubkan dan
                        ladang hijau yang subur, menjadikannya tempat yang ideal untuk para pencinta alam dan
                        petualangan.</p>
                </div>
            </div>
        </section>
        <section class="section-text bg-black overflow-hidden d-flex justify-content-center align-items-center" >
            <div class="row justify-content-center row-responsive gy-5 rounded" style="border:1px solid rgba(255,255,255,.3);" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <div
                    class="col-12 col-lg-12 d-flex flex-column justify-content-start align-items-start col-text-responsive">
                    <h1
                        class="text-white  w-100"
                        style="font-family: 'Poppins', monospace;font-weight: 800">
                        Asal Kata Probolinggo</h1>
                    <p style="font-family: 'Poppins';"  class="fs-5 mt-3">
                        Nama "Probolinggo" berasal dari bahasa Sansekerta, yang mengandung makna mendalam. "Probo"
                        berarti melimpah, dan "linggo" berarti bulan. Dengan demikian, Probolinggo dapat diartikan
                        sebagai "bulan yang melimpah" — simbol harapan akan kesejahteraan dan keberuntungan bagi
                        masyarakatnya. Nama ini mencerminkan sifat kota yang kaya akan sumber daya alam dan budaya.</p>
                </div>
            </div>
        </section>
        <section class="section-text bg-black overflow-hidden d-flex justify-content-center align-items-center" >
            <div class="row justify-content-center row-responsive py-5  rounded" style="border:1px solid rgba(255,255,255,.3);" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <div
                    class="col-12 col-lg-12 d-flex flex-column justify-content-start align-items-start col-text-responsive">
                    <h1
                        class="text-white  w-100"
                        style="font-family: 'Poppins', monospace;font-weight: 800">
                        Sejarah Singkat Kota Probolinggo</h1>
                    <p style="font-family: 'Poppins';" class="fs-5 mt-3">
                        Sejarah Probolinggo dimulai jauh sebelum kemerdekaan Indonesia. Kota ini diperkirakan sudah ada
                        sejak abad ke-13 dan merupakan bagian dari Kerajaan Majapahit. Pada masa itu, Probolinggo
                        menjadi pusat perdagangan penting, berkat lokasinya yang strategis di jalur perdagangan antara
                        pulau-pulau di Indonesia.
                        <br> <br>
                        Dengan munculnya kekuatan kolonial Belanda, Probolinggo semakin berkembang. Pelabuhan
                        Probolinggo menjadi salah satu pelabuhan utama untuk perdagangan rempah-rempah, sehingga menarik
                        perhatian para pedagang dari berbagai daerah. Dalam perkembangannya, Probolinggo menjadi wilayah
                        yang ramai dan padat penduduk.
                        <br> <br>
                        Setelah Indonesia merdeka pada tahun 1945, Probolinggo terus tumbuh dan berubah. Masyarakatnya
                        berupaya membangun kota yang lebih modern sambil tetap menghargai warisan budaya yang telah ada.
                        Kini, Probolinggo bukan hanya dikenal sebagai gerbang menuju Gunung Bromo, tetapi juga sebagai
                        kota yang hidup dengan tradisi dan kegiatan yang kaya.
                        <br> <br>
                        Dengan segala keunikan dan pesonanya, Probolinggo adalah tempat yang wajib dikunjungi. Baik
                        untuk menikmati keindahan alam, mengeksplorasi budaya, atau mencicipi kuliner lezat, kota ini
                        selalu menyimpan kejutan untuk setiap pengunjung.</p>
                        <br><br><br>
                        <h1 class="text-white  w-100"
                        style="font-family: 'Poppins', monospace;font-weight: 800">Pelajari lebih lengkap tentang sejarah Probolinggo</h1>
                        <style>
                            video{
                                height: 100%;
                                width: 100%;
                            }
                        </style>
                        <iframe style="width:100%;margin-bottom:30px;height:50vh;" src="https://www.youtube.com/embed/caDOmxRmI-g?si=DQw9ctEUsMkY9Z3d" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p class="text-center w-100" style="font-style: italic;">Sumber: <a href="https://youtu.be/caDOmxRmI-g?si=6ihvOQY_zp-OQbHB" target="_blank">
                            Pemerintah Kota Probolinggo</a></p>
                </div>
            </div>
        </section>



        <section class="section-text bg-black overflow-hidden d-flex justify-content-center align-items-center" >
            <div class="row justify-content-center row-responsive py-5 rounded" style="border:1px solid rgba(255,255,255,.3);" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <div
                    class="col-12 col-lg-12 d-flex flex-column justify-content-start align-items-start col-text-responsive">
                    <h1
                        class="text-white  w-100"
                        style="font-family: 'Poppins', monospace;font-weight: 800">
                        Letak geografis Probolinggo</h1>
                    <p style="font-family: 'Poppins';"  class="fs-5 mt-3">
                        Probolinggo terletak di pesisir utara Pulau Jawa, berbatasan dengan Laut Jawa di sebelah utara, Kabupaten Pasuruan di barat, Kabupaten Lumajang di selatan, dan Kabupaten Banyuwangi di timur. Daerah ini memiliki topografi yang bervariasi, termasuk pegunungan, dataran rendah, dan pantai, serta merupakan pintu gerbang menuju Gunung Bromo yang terkenal.</p>
                        <img src="{{asset('assets/img/308d075c47bce3a8afdfecd7cd838d15.jpg')}}" alt="" style="width: 100%">
                </div>
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
