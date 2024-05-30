<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Allo école</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets_user/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets_user/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets_user/css/vendor/slick.css">
    <link rel="stylesheet" href="assets_user/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets_user/css/plugins/sal.css">
    <link rel="stylesheet" href="assets_user/css/plugins/feather.css">
    <link rel="stylesheet" href="assets_user/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets_user/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="assets_user/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets_user/css/plugins/magnify.css">
    <link rel="stylesheet" href="assets_user/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets_user/css/plugins/animation.css">
    <link rel="stylesheet" href="assets_user/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets_user/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets_user/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="assets_user/css/plugins/plyr.css">
    <link rel="stylesheet" href="assets_user/css/style.css">
</head>

<body class="rbt-header-sticky">

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-10">
        <div class="rbt-btn-wrapper d-none d-xl-block" style="margin-top: 20px; margin-left: 20px;">

        </div>

    </header>
    <!-- Mobile Menu Section -->
    <a class="close_side_menu" href="javascript:void(0);"></a>
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="gy-5 row--30 d-flex justify-content-center align-items-center">

                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto" id="login-form">
                        <a class="" href="/" style="display: inline-flex; align-items: center;margin-bottom:20px;">
                            <i class="fas fa-arrow-left" style="margin-right: 5px;"></i><span> Je souhaite revenir à la
                                page d'accueil</span>
                        </a>
                        <h3 class="title">Login</h3>
                        <form action="/login" method="POST" class="max-width-auto">
                            @csrf
                            <div class="form-group">
                                <input name="email" type="email" />
                                <label>email *</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password">
                                <label>Password *</label>
                                <span class="focus-border"></span>
                            </div>

                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <div class="rbt-checkbox">
                                        <input type="checkbox" id="rememberme" name="rememberme">
                                        <label for="rememberme">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rbt-lost-password text-end">
                                        <a class="rbt-btn-link" href="#">Oublié le mot de passe</a>
                                    </div>
                                </div>
                                <p style="margin-top:7px;"> Je n'ai pas de compte <a class="rbt-btn-link" href=""
                                        id="show-register"><span> Register</span></a></p>
                            </div>

                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Log In</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="rbt-contact-form contact-form-style-1 max-width-auto" style="display:none;"
                        id="register-form">
                        <a class="" href="/" style="display: inline-flex; align-items: center;margin-bottom:20px;">
                            <i class="fas fa-arrow-left" style="margin-right: 5px;"></i><span> Je souhaite revenir à la
                                page d'accueil</span>
                        </a>
                        <h3 class="title">Register</h3>
                        <form action="/register" method="POST" class="max-width-auto">
                            @csrf
                            <div style="display: flex; gap: 25px;">
                                <div class="form-group">
                                    <input name="prenom" type="text" style="width: 100%;">
                                    <label>Prénom *</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input name="nom" type="text" style="width: 100%;">
                                    <label>Nom *</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" />
                                <label>Email address *</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password">
                                <label>Password *</label>
                                <span class="focus-border"></span>
                            </div>

                            <div class="form-group">
                                <input name="password_confirmation" type="password">
                                <label>Confirm Password *</label>
                                <span class="focus-border"></span>
                            </div>
                            <p style="margin-top:7px;"> J'ai un compte <a class="rbt-btn-link" href=""
                                    id="show-login"><span> Login</span></a></p>
                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Register</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.getElementById("show-register").addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById("login-form").style.display = 'none';
            document.getElementById("register-form").style.display = 'block';
        });
        document.getElementById("show-login").addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById("login-form").style.display = 'block';
            document.getElementById("register-form").style.display = 'none';
        });
    </script>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-style-1 ptb--20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <p class="rbt-link-hover text-center text-lg-start">Copyright © 2023 <a
                            href="https://themeforest.net/user/rbt-themes">Rainbow-Themes.</a> All Rights Reserved</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <ul
                        class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="privacy-policy.html">Privacy policy</a></li>
                        <li><a href="subscription.html">Subscription</a></li>
                        <li><a href="login.html">Login & Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets_user/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets_user/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets_user/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="assets_user/js/vendor/sal.js"></script>
    <script src="assets_user/js/vendor/swiper.js"></script>
    <script src="assets_user/js/vendor/magnify.min.js"></script>
    <script src="assets_user/js/vendor/jquery-appear.js"></script>
    <script src="assets_user/js/vendor/odometer.js"></script>
    <script src="assets_user/js/vendor/backtotop.js"></script>
    <script src="assets_user/js/vendor/isotop.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>

    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/magnify-popup.min.js"></script>
    <script src="assets/js/vendor/paralax-scroll.js"></script>
    <script src="assets/js/vendor/paralax.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <script src="assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="assets_user/js/main.js"></script>
</body>

</html>