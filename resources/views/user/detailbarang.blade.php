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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        type="text/css">
</head>

<body>
    @include('alert.sweetalert')
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="bg">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/navbar/company.png" alt="Company Logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Special Product</a>
                        </li>
                        <li class="nav-item">
                            <div class="contact-info">
                                <span class="icon">&#128100;</span>
                                <div class="contact-text">
                                    <p class="text-white">+62 1234 5678</p>
                                    <p class="text-white">support 24/7</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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

    <!-- Footer Section Begin -->
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <!-- Bagian kiri (Let's Talk) -->
                <div class="col-md-6">
                    <h3>Let's Talk</h3>
                    <p>Every project starts with a chat. Joven leads our client conversations and will be happy to
                        discuss your project. He will also pull in the right people from the team when needed.</p>
                </div>
                <!-- Bagian kanan (Email, Phone, Address dan Icons) -->
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li>
                            <strong class="contact-label">Email:</strong>
                            <a href="mailto:hello@buuuk.com" class="text-white contact-value">hello@buuuk.com</a>
                        </li>
                        <li>
                            <strong class="contact-label">Phone:</strong>
                            <a href="tel:+6598735984" class="text-white contact-value">(+65) 98735984</a>
                        </li>
                        <li>
                            <strong class="contact-label">Address:</strong>
                            <span class="text-white contact-value">
                                1 Paya Lebar Link, #04-01, Paya Lebar Quarter, Singapore, 408533
                            </span>
                        </li>
                    </ul>

                    <!-- Social media icons dengan jarak antar ikon -->
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white social-icon"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-white social-icon"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-white social-icon"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-white social-icon"><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>

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
