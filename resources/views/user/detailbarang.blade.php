<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/landing.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        type="text/css">
</head>

<style>
    .scroll-container {
        overflow-x: auto;
        white-space: nowrap;
        width: 100%;
        scroll-behavior: smooth;
    }

    .scroll-container .row {
        display: flex;
        flex-wrap: nowrap;
        gap: 16px;
    }

    .scroll-container .col-6 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .circle {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .scroll-container .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    .hilang {
        display: none;
    }

    @media (min-width: 768px) {
        .hilang {
            display: block;
        }
    }
</style>

<body>
    @include('alert.sweetalert')
    {{-- <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div> --}}
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="{{ request()->routeIs('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Product</a>
                </li>
                <li class="{{ request()->routeIs('special_product_list') ? 'active' : '' }}"><a
                        href="{{ route('special_product_list') }}">Special Product</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                            <li class="{{ request()->routeIs('shop') ? 'active' : '' }}"><a
                                    href="{{ route('shop') }}">Product</a></li>
                            <li class="{{ request()->routeIs('special_product_list') ? 'active' : '' }}"><a
                                    href="{{ route('special_product_list') }}">Special Product</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <a href=""><i class="bi bi-person-fill hilang"></i></a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Product</span>
                        </div>
                        <ul>
                            <li>
                                <p>Spices</p>
                            </li>
                            <li>
                                <p>Seeds</p>
                            </li>
                            <li>
                                <p>Nuts</p>
                            </li>
                            <li>
                                <p>Special Product</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        {{-- <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div> --}}
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    </nav>
    <section class="hero-section">
        <div class="contain">
            <!-- Konten Teks -->
            <div class="text-content">
                <p class="text-white">WELCOME TO MY WEBSITE</p>
                <h1 class="linear">ORGANIC FOODS AND VEGETABLES</h1>
                <p class="subtext text-white">100% NATURAL CONTAINING ORGANIC INGREDIENTS</p>
                <div class="buttons">
                    <a href="#" class="btn btn-yellow">SHOP NOW</a>
                    <a href="#" class="btn btn-green">LEARN MORE</a>
                </div>
            </div>
            <!-- Konten Gambar -->
            <div class="image-content">
                <div class="organic-badge">100% Organic</div>
                <img src="img/navbar/keranjang.png" alt="Organic Basket">
            </div>
        </div>
    </section>

    </div>

    <section class="img-circle my-5">
        <div class="container text-center">
            <div class="row">
                <!-- Circle text on top -->
                <div class="circle-text mb-5 text-left col-12">
                    <p class="p1">POPULAR FOODS AND VEGETARIANS</p>
                    <p class="p2">QUALITY FRUITS AND VEGETABLES</p>
                </div>
                <div class="w-100 d-none d-md-block"></div>
                <div class="col-12">
                    <!-- Horizontal Scroll Wrapper -->
                    <div id="scrollWrapper" class="scroll-container">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-2 text-center">
                                <img src="img/hero/coriander.jpg" alt="Fruit 1" class="circle img-fluid">
                                <p>Coriander</p>
                            </div>
                            <div class="col-6 col-md-2 text-center">
                                <img src="img/hero/pecan.jpg" alt="Fruit 2" class="circle img-fluid">
                                <p>Pecan</p>
                            </div>
                            <div class="col-6 col-md-2 text-center">
                                <img src="img/hero/red_ginger.jpg" alt="Vegetable 1" class="circle img-fluid">
                                <p>Red Ginger</p>
                            </div>
                            <div class="col-6 col-md-2 text-center">
                                <img src="img/hero/turmeric.jpg" alt="Vegetable 2" class="circle img-fluid">
                                <p>Turmeric</p>
                            </div>
                            <div class="col-6 col-md-2 text-center">
                                <img src="img/hero/clove.jpg" alt="Fruit 3" class="circle img-fluid">
                                <p>Clove</p>
                            </div>
                            <div class="col-6 col-md-2 text-center">
                                <img src="img/hero/white_ginger.jpg" alt="Fruit 3" class="circle img-fluid">
                                <p>White Ginger</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Our Company Section -->
    <section class="about-section">
        <div class="about-image">
            <img src="img/section/buah.png" alt="About Image">
        </div>
        <div class="about-content">
            <h2>ABOUT OUR COMPANY</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac efficitur dui. Praesent dui erat,
                porttitor nec ante id, aliquam finibus dolor. Sed luctus neque a nunc dignissim euismod. Sed ultrices eo
                tortor fermentum lacinia.</p>
            <p>Vivamus et lectus lacus. Phasellus tincidunt orci quis nisi aliquet imperdiet. Nunc at urna leo posuere
                pharetra vitae consectetur eros. Pellentesque habitant morbi tristique senectus et netus et malesuada
                fames ac turpis egestas.</p>
        </div>
    </section>

    <!--kota -->
    <div class="trade-show-container">
        <div class="header">
            <h1>2024 Trade Show Participation</h1>
            <i class="bi bi-instagram"></i>
        </div>
        <ul class="participation-list">
            <li>
                <h2>Lorem Ipsum is Not Simply Random Text.</h2>
                <p>6 March 2024</p>
                <p>Booth #1718</p>
            </li>
            <li>
                <h2>Lorem Ipsum is Not Simply Random Text.</h2>
                <p>6 March 2024</p>
                <p>Booth #1718</p>
            </li>
            <li>
                <h2>Lorem Ipsum is Not Simply Random Text.</h2>
                <p>6 March 2024</p>
                <p>Booth #1718</p>
            </li>
            <li>
                <h2>Lorem Ipsum is Not Simply Random Text.</h2>
                <p>6 March 2024</p>
                <p>Booth #1718</p>
            </li>
        </ul>
    </div>

    <!-- Visi & Misi Section -->
    <section class="visi-misi-section">
        <div class="visi-misi-content">
            <h2>VISI</h2>
            <p>Vivamus at lectus lacus. Phasellus tincidunt orci quis nisi aliquet imperdiet. Nunc at urna a leo posuere
                pharetra vitae consectetur eros. Pellentesque habitant morbi tristique senectus et netus et malesuada
                fames ac turpis egestas.</p>

            <h2>MISI</h2>
            <p>Vivamus at lectus lacus. Phasellus tincidunt orci quis nisi aliquet imperdiet. Nunc at urna a leo posuere
                pharetra vitae consectetur eros. Pellentesque habitant morbi tristique senectus et netus et malesuada
                fames ac turpis egestas.</p>
        </div>
        <div class="visi-misi-image">
            <img src="img/section/jual.png" alt="Visi Misi Image">
            <div class="image-background"></div>
        </div>
    </section>

    <!-- Company Location -->
    <section class="company-section">
        <div class="company-image">
            <img src="img/section/map.png" alt="Company Location Image">
        </div>
        <div class="company-content">
            <h2>COMPANY LOCATION</h2>
            <p>
                Vivamus et lectus lacus. Phasellus tincidunt orci quis nisi aliquet imperdiet. Nunc at urna leo posuere
                pharetra vitae consectetur eros. Pellentesque habitant morbi tristique senectus et netus et malesuada
                fames ac turpis egestas.
            </p>
        </div>
    </section>

    <!-- Legal -->
    <section class="legality">
        <div class="card">
            <div class="card-body">
                <h2>LEGALITY NUMBER</h2>
                <p>Vivamus et lectus lacus. Phasellus tincidunt orci quis nisi aliquet imperdiet. Nunc at urna leo
                    posuere pharetra vitae consectetur eros. Pellentesque habitant morbi tristique senectus et netus et
                    malesuada fames ac turpis egestas.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-section contact-detail">
                <h3>CONTACT DETAIL</h3>
                <p>PT SINGARAJA NUSANTARA JAWARA</p>
                <p>Jl. Raya Suharto 01 Sukorajo</p>
                <p>Central Java Indonesian</p>
                <p>No.Tlp: 087855841237</p>
                <p>Email: singaraja.nj@gmail.com</p>
            </div>
            <div class="footer-section quick-links">
                <h3>QUIKS LINK</h3>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li><a href="#">PAGES</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
            <div class="footer-section certification-event">
                <h3>CERTIFICATION & EVENT</h3>
                <div class="cert-images">
                    <img src="img/cert1.png" alt="Certification 1">
                    <img src="img/cert2.png" alt="Certification 2">
                    <img src="img/cert3.png" alt="Certification 3">
                    <img src="img/cert4.png" alt="Certification 4">
                    <img src="img/cert5.png" alt="Certification 5">
                    <img src="img/cert6.png" alt="Certification 6">
                    <img src="img/cert7.png" alt="Certification 7">
                    <img src="img/cert8.png" alt="Certification 8">
                </div>
            </div>

        </div>
    </footer>

    <!-- Js Plugins -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        // Enable drag-to-scroll
        const scrollWrapper = document.getElementById('scrollWrapper');

        let isDown = false;
        let startX;
        let scrollLeft;

        scrollWrapper.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - scrollWrapper.offsetLeft;
            scrollLeft = scrollWrapper.scrollLeft;
            scrollWrapper.style.cursor = "grabbing";
        });

        scrollWrapper.addEventListener('mouseleave', () => {
            isDown = false;
            scrollWrapper.style.cursor = "default";
        });

        scrollWrapper.addEventListener('mouseup', () => {
            isDown = false;
            scrollWrapper.style.cursor = "default";
        });

        scrollWrapper.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - scrollWrapper.offsetLeft;
            const walk = (x - startX) * 2;
            scrollWrapper.scrollLeft = scrollLeft - walk;
        });
    </script>
</body>

</html>
