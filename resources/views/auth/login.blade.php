<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/pages/authentication/card/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 13:02:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid bg-300 dark__bg-1200">
        <div class="bg-holder bg-auth-card-overlay" style="background-image:url(../../../assets/img/bg/37.png);"></div>
        <!--/.bg-holder-->
        <div class="row flex-center position-relative min-vh-100 g-0 py-5">
          <div class="col-11 col-sm-10 col-xl-8">
            <div class="card border border-200 auth-card">
              <div class="card-body pe-md-0">
                <div class="row align-items-center gx-0 gy-7">
                  <div class="col-auto bg-100 dark__bg-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                    <div class="bg-holder" style="background-image:url(../../../assets/img/bg/38.png);"></div>
                    <!--/.bg-holder-->
                    <div class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
                      <h3 class="mb-3 text-black fs-1">Admin Login</h3>
                      <p class="text-700">Silakan login sebagai admin untuk mengakses dashboard Asasta Indonesia.</p>
                    </div>
                    <div class="position-relative z-index--1 mb-6 d-none d-md-block text-center mt-md-15">
                        <img class="auth-title-box-img d-dark-none" src="../../../assets/img/spot-illustrations/auth.png" alt="" />
                        <img class="auth-title-box-img d-light-none" src="../../../assets/img/spot-illustrations/auth-dark.png" alt="" />
                    </div>
                  </div>
                  <div class="col mx-auto">
                    <div class="auth-form-box">
                        <div class="text-center mb-7">
                            <a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                                <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block mb-n5">
                                    <img src="{{ asset('img/storyset/WhatsApp_Image_2024-12-05_at_12.20.38-removebg-preview.png') }}" alt="phoenix" width="100"  />
                                </div>
                            </a>
                            <h3 class="text-1000">Sign In</h3>
                            <p class="text-700">Silakan masuk untuk mengakses halaman admin</p>
                        </div>
                        <form method="POST" action="{{ route('postlogin') }}">
                            @csrf
                            <div class="mb-3 text-start">
                                <label class="form-label" for="email">Alamat Email</label>
                                <div class="form-icon-container">
                                    <input class="form-control form-icon-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus id="email" type="email" placeholder="Email" />
                                    <span class="fas fa-user text-900 fs--1 form-icon"></span>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 text-start">
                                <label class="form-label" for="password">Password</label>
                                <div class="form-icon-container">
                                    <input class="form-control form-icon-input @error('password') is-invalid @enderror" name="password" autocomplete="current-password" id="password" type="password" placeholder="Password" />
                                    <span class="fas fa-key text-900 fs--1 form-icon"></span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row flex-between-center mb-7">
                                {{-- <div class="col-auto">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked" />
                                        <label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-auto"><a class="fs--1 fw-semi-bold" href="{{ route('password.request') }}">Forgot Password?</a></div> --}}
                            </div>
                            <button class="btn btn-primary w-100 mb-3">Login</button>
                            {{-- <div class="text-center"><a class="fs--1 fw-bold" href="{{ route('register') }}">Buat akun Baru</a></div> --}}
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/pages/authentication/card/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 13:02:10 GMT -->
</html>
