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


<body>
    @include('alert.sweetalert')
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="./shop-grid.html">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.html">Shop Details</a></li>
                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                    <li><a href="./checkout.html">Check Out</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="./contact.html">Contact</a></li>
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
<!-- Header Section -->
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo Section -->
            <div class="col-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/logo.png" alt="Logo" width="100"></a>
                </div>
            </div>

            <!-- Navbar Section -->
            <div class="col-4">
                <nav class="header__menu">
                    <ul class="navbar-nav">
                        <li><a href="./index.html">Home</a></li>
                        <li class="active"><a href="./shop-grid.html">Shop</a></li>
                        <li><a href="#">Special Product</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Contact Info Section -->
            <div class="col-6 d-flex justify-content-end ">
                <div class="header__contact">
                    <div class="contact-icon me-3">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contact-info me-3">
                        <span>+62 1234 5678</span>
                        <p>Support 24/7 time</p>
                    </div>
                    <div class="user-icon">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
         <!-- Mobile Menu Toggle -->
         <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>









    </nav>
    <section class="hero-section">
        <div class="container">
            <div class="text-content">
                <p class="text-white">WELCOME TO MY WEBSITE</p>
                <h1 class="linear">ORGANIC FOODS AND VEGETABLES</h1>
                <p class="subtext text-white">100% NATURAL CONTAINING ORGANIC INGREDIENTS</p>
                <div class="buttons">
                    <a href="#" class="btn btn-yellow">SHOP NOW</a>
                    <a href="#" class="btn btn-green">LEARN MORE</a>
                </div>
            </div>
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
                    <!-- Circles with images and text below -->
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-2 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr4Fo2rTO4AovAp8Qpz4bg9p_UkHTmEkNXIQ&s"
                                alt="Fruit 1" class="circle img-fluid">
                            <p>Apple</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr4Fo2rTO4AovAp8Qpz4bg9p_UkHTmEkNXIQ&s"
                                alt="Fruit 2" class="circle img-fluid">
                            <p>Banana</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr4Fo2rTO4AovAp8Qpz4bg9p_UkHTmEkNXIQ&s"
                                alt="Vegetable 1" class="circle img-fluid">
                            <p>Carrot</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr4Fo2rTO4AovAp8Qpz4bg9p_UkHTmEkNXIQ&s"
                                alt="Vegetable 2" class="circle img-fluid">
                            <p>Broccoli</p>
                        </div>
                        <div class="col-6 col-md-2 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr4Fo2rTO4AovAp8Qpz4bg9p_UkHTmEkNXIQ&s"
                                alt="Fruit 3" class="circle img-fluid">
                            <p>Orange</p>
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
            <img src="img/section/map.png" alt="Company Image">
        </div>
        <div class="company-content">
            <h2>COMPANY LOCATION</h2>
            <p>Vivamus et lectus lacus. Phasellus tincidunt orci quis nisi aliquet imperdiet. Nunc at urna leo posuere
                pharetra vitae consectetur eros. Pellentesque habitant morbi tristique senectus et netus et malesuada
                fames ac turpis egestas.</p>
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




    <!-- Footer Section End -->

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


</body>

</html>
