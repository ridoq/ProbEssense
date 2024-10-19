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
    @include('landing.component.navbar')
    <div data-bs-spy="scroll" class="scrollspy-example">
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
        <section id="landingHero" style="padding: 100px 0px"
            class="landing-hero position-relative d-flex align-items-center justify-content-center">
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
    </div>
    @include('landing.component.footer')
    @include('landing.component.script')
</body>

</html>
