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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        type="text/css">
</head>

<body>
    @include('user.layout.navbar')

    @yield('main')
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
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
