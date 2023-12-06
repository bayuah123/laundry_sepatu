<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/sepatu2.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles2.css">

    <title>Responsive Halloween Website</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="assets/img/sepatu2.png" alt="" class="nav__logo-img">
                SHOELEAN
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="#category" class="nav__link">Fitur </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>

                    <li class="nav__item">
                        <a href="<?= site_url('langganan') ?>" class="nav__link"> Langganan</a>
                        
                    </li>

                    <a href="<?= site_url('form_login') ?>" class="button button--ghost">Login</a>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

                <img src="assets/img/nav-img.png" alt="" class="nav__img">
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>

        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home container" id="home">
            <div class="swiper home-swiper">
                <div class="swiper-wrapper">
                    <!-- HOME SLIDER 1 -->
                    <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__group">
                                <img src="assets/img/sepatu2.png" alt="" class="home__img">
                                <div class="home__indicator"></div>

                                <div class="home__details-img">
                                    <h4 class="home__details-title">Shoclean</h4>
                                    <span class="home__details-subtitle">Laundry Sepatu</span>
                                </div>
                            </div>

                            <div class="home__data">
                                <h3 class="home__subtitle">#1 Top Kasir Laundry Sepatu</h3>
                                <h2 class="home__title">ShoeLean</h2>
                                <p class="home__description">Adalah Software Aplikasi Kasir Online untuk usaha laundy, bisa anda gunakan sebagai Gerai perorangan atau pun Mitra yang bisa anda Franchise kan.
                                    Anda dapat menggunakan aplikasi Londrian dimanapun dan kapanpun dengan mudah dan yang pasti dapat memonitoring penjualan Anda.
                                </p>

                                <div class="home__buttons">
                                    <a href="#about" class="button">Subscribe Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- HOME SLIDER 2 -->
                    <!-- <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="assets/img/home2-img.png" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Adino & Grahami</h4>
                                        <span class="home__details-subtitle">No words can describe them</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#2 top Best duo</h3>
                                    <h1 class="home__title">BRING BACK <br> MY COTTON <br> CANDY</h1>
                                    <p class="home__description">Adino steals cotton candy from his brother and eats them all in one bite, 
                                        a hungry beast. Grahami can no longer contain his anger towards Adino.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="#" class="button">Book Now</a>
                                        <a href="#" class="button--link button--flex">Track Record <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--==================== CATEGORY ====================-->
        <section class="section category" id="category">>
            <h2 class="section__title">Fitur Utama <br> ShoeLean</h2>

            <div class="category__container container grid">
                <div class="category__data">
                    <!-- <img src="assets/img/category1-img.png" alt="" class="category__img"> -->
                    <h3 class="category__title">Tampilan</h3>
                    <p class="category__description">Memudahkan pemilik usaha dengan tampilan yang simple dan responsif baik saat anda gunakan pada mobile atau Dekstop</p>
                </div>

                <div class="category__data">
                    <!-- <img src="assets/img/laporan.png" alt="" class="category__img"> -->
                    <h3 class="category__title">Laporan </h3>
                    <p class="category__description">Tidak perlu repot melakukan pembukuan transaksi secara manual, karena semua rangkuman laba, omset, dan pengeluaran telah tercatat dan tersimpan secara online,</p>
                </div>

                <div class="category__data">
                    <!-- <img src="assets/img/data-menagement.png" alt="" class="category__img"> -->
                    <h3 class="category__title">Dashbord</h3>
                    <p class="category__description">Fitur untuk menampilkan hasil penjualan lengkap dengan grafik pernjualan harian, bulanan dan tahunan</p>
                </div>

                <div class="category__data">
                    <!-- <img src="assets/img/report.png" alt="" class="category__img"> -->
                    <h3 class="category__title">Rekap Data</h3>
                    <p class="category__description">Dilengkapi dengan fitur rekap data yang dapat anda unduh dengan format file pdf sebagai data offline anda</p>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <!-- <section class="section about" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">About Shoclean</h2>
                    <p class="about__description">Aplikasi laundry sepatu adalah software yang di khususkan bagi pengusaha laundry untuk membantu mengatur manajemen mulai dari : Transaksi laundry, record data pelanggan laundry,
                        record data order laundry, cetak nota laundry,laporan keuangan dan keuntungan laundry, laporan pengeluaran laundry.`
                    </p>
                    <a href="#" class="button">Know more</a>
                </div>

                <img src="assets/img/about-img.png" alt="" class="about__img">
            </div>
        </section> -->


        <!--==================== DISCOUNT ====================-->
        <!-- <section class="section discount">
            <div class="discount__container container grid">
                <div class="discount__data">
                    <h2 class="discount__title">Disain Menarik</h2>
                    <span> Aplikasi Shoeclean memiliki tampilan yang menarik dan kekinian.
                        <br>Dimana dan kapanpun anda bisa melakukan cek laundry anda.</span>
                </div>

                <img src="assets/img/discount-img.png" alt="" class="discount__img">
            </div>
        </section> -->

        <!--==================== NEW ARRIVALS ====================-->
        <!-- <section class="section new" id="new">
            <h2 class="section__title">Coba Sekarang </h2> -->

            <div class="new__container container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">


                        <div class="new__content swiper">
                            <div class="new__tag">PROMO</div>
                            <img src="assets/img/new6-img.png" alt="" class="new__img">
                            <h3 class="new__title">Pemula</h3>
                            <span class="new__subtitle">Coba 1 Bulan</span>

                            <div class="new__prices">
                                <h2 class="new__price">Gratis</h2>
                                <h3 class="new__discount">Rp 20.000</h3>
                            </div>

                            <div class="new__prices">
                                <span class="new__subtitle">Unlimited Akun Admin</span>
                            </div>

                            <button class="button new__button">
                                Langganan
                            </button>
                        </div>




                        <div class="new__content swiper">
                            
                            <img src="assets/img/new1-img.png" alt="" class="new__img">
                            <h3 class="new__title">Pro</h3>
                            <span class="new__subtitle">Coba 6 Bulan</span>

                            <div class="new__prices">
                                <h3 class="new__price">Rp 50.000</h3>
                            </div>
                            <br>           
                            <div class="new__prices">
                                <p class="new__subtitle">Unlimited Akun Admin</p>
                            </div>
                            <div class="new__prices">
                                <p class="new__subtitle">Mendapatkan Fitur Laporan</p>
                            </div>
                            <div class="new__prices">
                                <p class="new__subtitle">Unlimited Akun </p>
                            </div>
                            <button class="button new__button">
                                <i class='bx bx-cart-alt new__icon'></i>
                            </button>
                        </div>




                    </div>
                </div>
            </div>
        </section>

        <!--==================== FOOTER ====================-->
        <!-- <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <img src="assets/img/sepatu2.png" alt="" class="footer__logo-img">
                        Halloween
                    </a>

                    <p class="footer__description">Enjoy the scariest night <br> of your life.</p>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-instagram-alt'></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">About</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Features</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">News</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Services</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Pricing</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Discounts</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Shipping mode</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Company</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">About us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Our mision</a>
                        </li>
                    </ul>
                </div>
            </div>

            <img src="assets/img/footer1-img.png" alt="" class="footer__img-one">
            <img src="assets/img/footer2-img.png" alt="" class="footer__img-two">
        </footer> -->

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon'></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
</body>

</html>