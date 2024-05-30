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
    <link rel="shortcut icon" type="image/x-icon" href="assets_pages/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('assets_pages/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/magnify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_pages/css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="rbt-header-sticky">
    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-10 rbt-transparent-header">
        <div class="rbt-sticky-placeholder"></div>
        <div class="rbt-header-wrapper  header-not-transparent header-sticky">
            <div class="container">
                <div class="mainbar-row rbt-navigation-center align-items-center">
                    <div class="header-left rbt-header-content">
                        <div class="header-info">
                            <div class="logo">
                                <a href="/">
                                    <img src="assets_pages/images/logo/logo.png" alt="Education Logo Images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="/">Home</a>
                                </li>

                                <li class="has-dropdown has-menu-child-item">
                                    <a href="#">Educations
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        @foreach($niveaux as $niveau)
                                        <li class="has-dropdown">
                        <a href="{{ route('courses', $niveau->id) }}" class="niveau-link" data-niveau="{{ $niveau->id }}" data-niveau-nom="{{ $niveau->nom }}">
                            {{ $niveau->nom }}
                        </a>
                    </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="has-dropdown has-menu-child-item">
                                    <a href="#">Formations
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="has-dropdown"><a href="#">Instructor Dashboard</a>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Student Dashboard</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <!-- Navbar Icons -->
                        <ul class="quick-access" style="margin-right:20px;">
                            <li class="access-icon">
                                <a class="search-trigger-active rbt-round-btn" href="#">
                                    <i class="feather-search"></i>
                                </a>
                            </li>
                            @auth
                                <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                    <a href="#"><i class="feather-user"></i>{{ Auth::user()->name }}</a>
                                    <div class="rbt-user-menu-list-wrapper">
                                        <div class="inner">
                                            <div class="rbt-admin-profile">
                                                <div class="admin-thumbnail">
                                                    <img src="assets_pages/images/team/avatar.jpg" alt="User Images">
                                                </div>
                                                <div class="admin-info">
                                                    <span class="name">{{ Auth::user()->name }}</span>
                                                    <a class="rbt-btn-link color-primary" href="/profile_étudient">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="/profile_étudient">
                                                        <i class="feather-home"></i>
                                                        <span>Mon profile</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="feather-bookmark"></i>
                                                        <span>Favoris</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="instructor-enrolled-courses.html">
                                                        <i class="feather-shopping-bag"></i>
                                                        <span>Cours inscrits</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="instructor-order-history.html">
                                                        <i class="feather-clock"></i>
                                                        <span>Historique des commandes</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="instructor-quiz-attempts.html">
                                                        <i class="feather-message-square"></i>
                                                        <span>Question Réponse</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <hr class="mt--10 mb--10">
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="index.html">
                                                        <i class="feather-log-out"></i>
                                                        <span>Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="access-icon rbt-user-wrapper d-block d-xl-none">
                                    <a class="rbt-round-btn" href="#"><i class="feather-user"></i></a>
                                    <div class="rbt-user-menu-list-wrapper">
                                        <div class="inner">
                                            <div class="rbt-admin-profile">
                                                <div class="admin-thumbnail">
                                                    <img src="assets_pages/images/team/avatar.jpg" alt="User Images">
                                                </div>
                                                <div class="admin-info">
                                                    <span class="name">Nipa Bali</span>
                                                    <a class="rbt-btn-link color-primary" href="profile.html">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="instructor-dashboard.html">
                                                        <i class="feather-home"></i>
                                                        <span>My Dashboard</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="feather-bookmark"></i>
                                                        <span>Bookmark</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="instructor-enrolled-courses.html">
                                                        <i class="feather-shopping-bag"></i>
                                                        <span>Enrolled Courses</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="instructor-wishlist.html">
                                                        <i class="feather-heart"></i>
                                                        <span>Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="instructor-reviews.html">
                                                        <i class="feather-star"></i>
                                                        <span>Reviews</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="instructor-my-quiz-attempts.html">
                                                        <i class="feather-list"></i>
                                                        <span>My Quiz Attempts</span>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                            <hr class="mt--10 mb--10">
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="instructor-settings.html">
                                                        <i class="feather-settings"></i>
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index.html">
                                                        <i class="feather-log-out"></i>
                                                        <span>Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endauth
                        </ul>
                        <div class="rbt-btn-wrapper d-none d-xl-block">
                            <a class="rbt-btn  btn-border-gradient radius-round btn-sm hover-transform-none"
                                href="/register">
                                <span data-text="Enroll Now">Se connecter</span>
                            </a>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->
                    </div>
                </div>
            </div>
            <!-- Start Search Dropdown  -->
            <div class="rbt-search-dropdown">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="#">
                                <input type="text" placeholder="What are you looking for?">
                                <div class="submit-btn">
                                    <a class="rbt-btn btn-gradient btn-md" href="#">Search</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="rbt-separator-mid">
                        <hr class="rbt-separator m-0">
                    </div>

                    <div class="row g-4 pt--30 pb--60">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h5 class="rbt-title-style-2">Our Top Course</h5>
                            </div>
                        </div>

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="assets_pages/images/course/course-online-01.jpg" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="course-details.html">React Js</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$15</span>
                                            <span class="off-price">$25</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="assets_pages/images/course/course-online-02.jpg" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="course-details.html">Java Program</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$10</span>
                                            <span class="off-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="assets_pages/images/course/course-online-03.jpg" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="course-details.html">Web Design</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$10</span>
                                            <span class="off-price">$20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="assets_pages/images/course/course-online-04.jpg" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="course-details.html">Web Design</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$20</span>
                                            <span class="off-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                    </div>

                </div>
            </div>
            <!-- End Search Dropdown  -->
        </div>
    </header>
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets_pages/images/logo/logo.png" alt="Education Logo Images">
                        </a>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">Histudy is a education website template. You can customize all.</p>
                <ul class="navbar-top-left rbt-information-list justify-content-start">
                    <li>
                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                    </li>
                    <li>
                        <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                    </li>
                </ul>
            </div>

            <nav class="mainmenu-nav">
                <ul class="mainmenu">
                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Home <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu menu-skin-dark">
                            <div class="wrapper">
                                <div class="row row--15 home-plesentation-wrapper single-dropdown-menu-presentation">

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="01-main-demo.html"><img
                                                            src="assets_pages/images/splash/demo/h1.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="01-main-demo.html">Home Demo <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="12-marketplace.html"><img
                                                            src="assets_pages/images/splash/demo/h12.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="12-marketplace.html">Marketplace <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->
                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="04-kindergarten.html"><img
                                                            src="assets_pages/images/splash/demo/h4.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="04-kindergarten.html">kindergarten <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->
                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="13-university-classic.html"><img
                                                            src="assets_pages/images/splash/demo/h13.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="13-university-classic.html">University
                                                            Classic <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="14-home-elegant.html"><img
                                                            src="assets_pages/images/splash/demo/h14.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="14-home-elegant.html">Home Elegant <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="09-gym-coaching.html"><img
                                                            src="assets/images/splash/demo/h9.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="09-gym-coaching.html">Gym Coaching <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="03-online-school.html"><img
                                                            src="assets/images/splash/demo/h3.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="03-online-school.html">Online School
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="06-university-status.html"><img
                                                            src="assets/images/splash/demo/h6.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="06-university-status.html">University
                                                            Status <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="15-home-technology.html"><img
                                                            src="assets/images/splash/demo/h15.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="15-home-technology.html">Home Technology
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="07-instructor-portfolio.html"><img
                                                            src="assets/images/splash/demo/h7.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="07-instructor-portfolio.html">Instructor
                                                            Portfolio <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="08-language-academy.html"><img
                                                            src="assets/images/splash/demo/h8.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="08-language-academy.html">Language
                                                            Academy <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="11-single-course.html"><img
                                                            src="assets/images/splash/demo/h11.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="11-single-course.html">Single Course
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="10-online-course.html"><img
                                                            src="assets/images/splash/demo/h10.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="10-online-course.html">Online Course
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="05-classic-lms.html"><img
                                                            src="assets/images/splash/demo/h5.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="05-classic-lms.html">Classic Lms <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="02-course-school.html"><img
                                                            src="assets/images/splash/demo/h2.jpg"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="02-course-school.html">Course School
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item coming-soon">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/splash/demo/coming-soon-1.png"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="#">Coming Soon <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item coming-soon">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/splash/demo/coming-soon-2.png"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="#">Coming Soon 2 <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div
                                        class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item coming-soon">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/splash/demo/coming-soon-3.png"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="#">Coming Soon 3 <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->
                                </div>

                                <div class="load-demo-btn text-center">
                                    <a class="rbt-btn-link color-white" href="#">Scroll to view more <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="with-megamenu has-menu-child-item">
                        <a href="#">Courses <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-2">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mega-top-banner">
                                            <div class="content">
                                                <h4 class="title">Developer hub</h4>
                                                <p class="description">Start building fast, with code samples, key
                                                    resources and more.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                        <h3 class="rbt-short-title">Course Layout</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="course-filter-one-toggle.html">Filter One Toggle</a></li>
                                            <li><a href="course-filter-one-open.html">Filter One Open</a></li>
                                            <li><a href="course-filter-two-toggle.html">Filter Two Toggle</a></li>
                                            <li><a href="course-filter-two-open.html">Filter Two Open</a></li>
                                            <li><a href="course-with-tab.html">Course With Tab</a></li>
                                            <li><a href="course-with-tab-two.html">Course With Tab Two</a></li>
                                            <li><a href="course-card-2.html">Course Card Two</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                        <h3 class="rbt-short-title">Course Layout</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="course-card-3.html">Course Card Three</a></li>
                                            <li><a href="course-masonry.html">Course Masonry</a></li>
                                            <li><a href="course-with-sidebar.html">Course With Sidebar</a></li>
                                            <li><a href="course-details.html">Course Details</a></li>
                                            <li><a href="course-details-2.html">Course Details Two</a></li>
                                            <li><a href="lesson.html">Course Lesson <span
                                                        class="rbt-badge-card">New</span></a></li>
                                            <li><a href="create-course.html">Create Course <span
                                                        class="rbt-badge-card">New</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="nav-quick-access">
                                            <li><a href="#"><i class="feather-folder-minus"></i> Quick Start Guide</a>
                                            </li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> For Open Source</a>
                                            </li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> API Status</a></li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="has-dropdown has-menu-child-item">
                        <a href="#">Dashboard
                            <i class="feather-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li class="has-dropdown"><a href="#">Instructor Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="instructor-dashboard.html">Dashboard</a></li>
                                    <li><a href="instructor-profile.html">Profile</a></li>
                                    <li><a href="instructor-enrolled-courses.html">Enrolled Courses</a></li>
                                    <li><a href="instructor-wishlist.html">Wishlist</a></li>
                                    <li><a href="instructor-reviews.html">Reviews</a></li>
                                    <li><a href="instructor-my-quiz-attempts.html">My Quiz Attempts</a></li>
                                    <li><a href="instructor-order-history.html">Order History</a></li>
                                    <li><a href="instructor-course.html">My Course</a></li>
                                    <li><a href="instructor-announcements.html">Announcements</a></li>
                                    <li><a href="instructor-quiz-attempts.html">Quiz Attempts</a></li>
                                    <li><a href="instructor-assignments.html">Assignments</a></li>
                                    <li><a href="instructor-settings.html">Settings</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown"><a href="#">Student Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="student-dashboard.html">Dashboard</a></li>
                                    <li><a href="student-profile.html">Profile</a></li>
                                    <li><a href="student-enrolled-courses.html">Enrolled Courses</a></li>
                                    <li><a href="student-wishlist.html">Wishlist</a></li>
                                    <li><a href="student-reviews.html">Reviews</a></li>
                                    <li><a href="student-my-quiz-attempts.html">My Quiz Attempts</a></li>
                                    <li><a href="student-order-history.html">Order History</a></li>
                                    <li><a href="student-settings.html">Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Pages <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-4">
                            <div class="wrapper">
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <h3 class="rbt-short-title">Get Started</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="about-us-01.html">About Us</a></li>
                                            <li><a href="about-us-02.html">About Us 02</a></li>
                                            <li><a href="event-grid.html">Event Grid</a></li>
                                            <li><a href="event-list.html">Event List</a></li>
                                            <li><a href="event-sidebar.html">Event Sidebar</a></li>
                                            <li><a href="event-details.html">Event Details</a></li>
                                            <li><a href="academy-gallery.html">Academy Gallery</a></li>
                                            <li><a href="admission-guide.html">Admission Guide</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <h3 class="rbt-short-title">Get Started</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="profile.html">Profile</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="become-a-teacher.html">Become a Teacher</a></li>
                                            <li><a href="instructor.html">Instructor</a></li>
                                            <li><a href="faqs.html">FAQS</a></li>
                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="maintenance.html">Maintenance</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <h3 class="rbt-short-title">Shop Pages</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="shop.html">Shop <span class="rbt-badge-card">Sale
                                                        Anything</span></a></li>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                            <li><a href="my-account.html">My Acount</a></li>
                                            <li><a href="login.html">Login & Register</a></li>
                                            <li><a href="subscription.html">Subscription</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <div class="mega-category-item">
                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="assets/images/course/category-2.png"
                                                            alt="Course images"></div>
                                                    <a href="course-filter-one-toggle.html">
                                                        <span>Online Education</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="assets/images/course/category-1.png"
                                                            alt="Course images"></div>
                                                    <a href="course-filter-one-toggle.html">
                                                        <span>Language Club</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="assets/images/course/category-4.png"
                                                            alt="Course images"></div>
                                                    <a href="course-filter-one-toggle.html">
                                                        <span>University Status</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <a href="course-filter-one-toggle.html">
                                                        <span>Course School</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="assets/images/course/category-9.png"
                                                            alt="Course images"></div>
                                                    <a href="course-filter-one-toggle.html">
                                                        <span>Academy</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Elements <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-3">
                            <div class="wrapper">
                                <div class="row row--15 single-dropdown-menu-presentation">
                                    <div class="col-lg-4 col-xxl-4 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="style-guide.html">Style Guide <span
                                                        class="rbt-badge-card">Hot</span></a></li>
                                            <li><a href="accordion.html">Accordion</a></li>
                                            <li><a href="advancetab.html">Advance Tab</a></li>
                                            <li><a href="brand.html">Brand</a></li>
                                            <li><a href="button.html">Button</a></li>
                                            <li><a href="badge.html">Badge</a></li>
                                            <li><a href="card.html">Card</a></li>
                                            <li><a href="call-to-action.html">Call To Action</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-xxl-4 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="counterup.html">Counter</a></li>
                                            <li><a href="category.html">Categories</a></li>
                                            <li><a href="header.html">Header Style</a></li>
                                            <li><a href="newsletter.html">Newsletter</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="social.html">Social</a></li>
                                            <li><a href="list-style.html">List Style</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-xxl-4 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="progressbar.html">Progressbar</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="split.html">Split Area</a></li>
                                            <li><a href="search.html">Search Style</a></li>
                                            <li><a href="instagram.html">Instagram Style</a></li>
                                            <li><a href="#">& More Coming</a></li>

                                        </ul>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="btn-wrapper">
                                            <a class="rbt-btn btn-gradient hover-icon-reverse square btn-xl w-100 text-center mt--30 hover-transform-none"
                                                href="#">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Visit Histudy Template</span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Blog <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-3">
                            <div class="wrapper">
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                        <h3 class="rbt-short-title">Blog Styles</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog.html">Blog Grid</a></li>
                                            <li><a href="blog-grid-minimal.html">Blog Grid Minimal</a></li>
                                            <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="post-format-standard.html">Post Format Standard</a></li>
                                            <li><a href="post-format-gallery.html">Post Format Gallery</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                        <h3 class="rbt-short-title">Get Started</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="post-format-quote.html">Post Format Quote</a></li>
                                            <li><a href="post-format-audio.html">Post Format Audio</a></li>
                                            <li><a href="post-format-video.html">Post Format Video</a></li>
                                            <li><a href="#">Media Under Title <span
                                                        class="rbt-badge-card">Coming</span></a></li>
                                            <li><a href="#">Sticky Sidebar <span
                                                        class="rbt-badge-card">Coming</span></a></li>
                                            <li><a href="#">Auto Masonry <span class="rbt-badge-card">Coming</span></a>
                                            </li>
                                            <li><a href="#">Meta Overlaid <span class="rbt-badge-card">Coming</span></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                        <div class="rbt-ads-wrapper">
                                            <a class="d-block" href="#"><img src="assets/images/service/mobile-cat.jpg"
                                                    alt="Education Images"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>
                </ul>
            </nav>

            <div class="mobile-menu-bottom">
                <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center"
                        href="#">
                        <span>Enroll Now</span>
                    </a>
                </div>

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Find With Us</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                        <li><a href="https://www.facebook.com/">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li><a href="https://www.twitter.com">
                                <i class="feather-twitter"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/">
                                <i class="feather-instagram"></i>
                            </a>
                        </li>
                        <li><a href="https://www.linkdin.com/">
                                <i class="feather-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Start Side Vav -->
    <div class="rbt-cart-side-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="title">
                        <h4 class="title mb--0">Your shopping cart</h4>
                    </div>
                    <div class="rbt-btn-close" id="btn_sideNavClose">
                        <button class="minicart-close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
            </div>
            <nav class="side-nav w-100">
                <ul class="rbt-minicart-wrapper">
                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/images/product/1.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Miracle Morning</a></h6>

                            <span class="quantity">1 * <span class="price">$22</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/images/product/7.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Happy Strong</a></h6>

                            <span class="quantity">1 * <span class="price">$30</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/images/product/3.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Rich Dad Poor Dad</a></h6>

                            <span class="quantity">1 * <span class="price">$50</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/images/product/4.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Momentum Theorem</a></h6>

                            <span class="quantity">1 * <span class="price">$50</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="rbt-minicart-footer">
                <hr class="mb--0">
                <div class="rbt-cart-subttotal">
                    <p class="subtotal"><strong>Subtotal:</strong></p>
                    <p class="price">$121</p>
                </div>
                <hr class="mb--0">
                <div class="rbt-minicart-bottom mt--20">
                    <div class="view-cart-btn">
                        <a class="rbt-btn btn-border icon-hover w-100 text-center" href="#">
                            <span class="btn-text">View Cart</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                    <div class="checkout-btn mt--20">
                        <a class="rbt-btn btn-gradient icon-hover w-100 text-center" href="#">
                            <span class="btn-text">Checkout</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="/">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Toutes les Courses </li>
                            </ul>
                            <!-- End Breadcrumb Area  -->
                            <div class=" title-wrapper">
                                <h1 class="title mb--0">les Cours du '{{ $selectedNiveau }}'</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> {{ $courseCount }} Courses
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
        </div>
    </div>

    <!-- Start Card Style -->
    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row row--30 gy-5">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="rbt-sidebar-widget-wrapper">

                        <!-- Start Widget Area  -->
                       <div class="rbt-single-widget rbt-widget-search">
        <div class="inner">
            <form action="#" class="rbt-search-style-1" onsubmit="return false;">
                <input type="text" id="courseSearch" placeholder="Search Courses">
                <button class="search-btn"><i class="feather-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Année scolaire Section -->
    <div class="rbt-single-widget rbt-widget-prices">
        <div class="inner">
            <h4 class="rbt-widget-title">Année scolaire</h4>
            <ul class="rbt-sidebar-list-wrapper prices-list-check">
                @foreach($annees as $annee)
                    <li class="rbt-check-group">
                        <input id="annee-{{ $annee->id }}" type="checkbox" name="annees[]" value="{{ $annee->id }}" class="annee-checkbox">
                        <label for="annee-{{ $annee->id }}">{{ $annee->nom }}</label>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Filière Section -->
    @if(strtolower($selectedNiveau) !== 'collège' && strtolower($selectedNiveau) !== 'primaire')
        <div class="rbt-single-widget rbt-widget-categories has-show-more" id="filiereSection">
            <div class="inner">
                <h4 class="rbt-widget-title">Filière</h4>
                <ul class="rbt-sidebar-list-wrapper categories-list-check has-show-more-inner-content">
                    @foreach($filieres as $index => $filiere)
                        <li class="rbt-check-group filiere-item {{ $index >= 5 ? 'hidden' : '' }}" data-annee="{{ $filiere->annee_id }}">
                            <input id="filiere-{{ $filiere->id }}" type="checkbox" name="filieres[]" value="{{ $filiere->id }}" class="filiere-checkbox">
                            <label for="filiere-{{ $filiere->id }}">{{ $filiere->nom }}</label>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <!-- Matière Section -->
    <div class="rbt-single-widget rbt-widget-instructor">
        <div class="inner">
            <h4 class="rbt-widget-title">Matière</h4>
            <ul class="rbt-sidebar-list-wrapper instructor-list-check">
                @foreach($matieres as $matiere)
                    <li class="rbt-check-group hidden" data-annee="{{ $matiere->annee_id }}" data-filiere="{{ $matiere->id_filiere }}">
                        <input id="matiere-{{ $matiere->id }}" type="checkbox" name="matieres[]" value="{{ $matiere->id }}">
                        <label for="matiere-{{ $matiere->id }}">{{ $matiere->nom }}</label>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            function filterMatieres() {
                var selectedFiliereIds = $('.filiere-checkbox:checked').map(function() {
                    return $(this).val();
                }).get();
                
                var selectedAnneeIds = $('.annee-checkbox:checked').map(function() {
                    return $(this).val();
                }).get();
                $('.rbt-check-group[data-filiere]').each(function() {
                    var filiereId = $(this).data('filiere');
                    var anneeId = $(this).data('annee');
                    
                    if (selectedFiliereIds.includes(String(filiereId)) || selectedAnneeIds.includes(String(anneeId))) {
                        $(this).removeClass('hidden');
                    } else {
                        $(this).addClass('hidden');
                    }
                });
            }
            $('.filiere-checkbox, .annee-checkbox').on('change', function() {
                filterMatieres();
            });
        });
    </script>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="rbt-course-grid-column" id="courseList">
                        @foreach($courses as $course)
                            <div class="course-grid-3 course-item" data-name="{{ $course->name }}"
                                data-annee="{{ $course->annee_id }}" data-matiere="{{ $course->matiere_id }}"
                                data-filiere="{{ $course->filiere_id }}">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('course.show', $course->id) }}">
                                            <img src="https://imgs.search.brave.com/33c_ESRhtfu_D5m7k8qkcH1djDR2wpx9MdfEekQWsdc/rs:fit:860:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAyLzM4LzU2LzQ3/LzM2MF9GXzIzODU2/NDc1N19MN2dzeWtq/dlplMlNkdG55ZmEw/bUhkMGZPYkhVNGY1/Ry5qcGc"
                                                alt="Card image">
                                        </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <div class="rbt-card-top">
                                            <div class="rbt-bookmark-btn">
                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                        class="feather-bookmark"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="rbt-card-title"><a
                                                href="{{ route('course.show', $course->id) }}">{{ $course->name }}</a></h4>
                                        <ul class="rbt-list-style-3 color-black" style="margin-bottom:10px;margin-top:5px;">
                                            <li><i class="feather-youtube"></i> 370 Free Video</li>
                                            <li><i class="feather-book"></i> 120 PDF</li>
                                            <li><i class="feather-video"></i> Live Class</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt--60">
                            <nav>
                                <ul class="rbt-pagination" id="pagination">
                                    <li><a href="#" aria-label="Previous" id="prevBtn"><i
                                                class="feather-chevron-left"></i></a></li>
                                    <li><a href="#" aria-label="Next" id="nextBtn"><i
                                                class="feather-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Footer aera -->
    <footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo.png" alt="Edu-cause">
                                </a>
                            </div>

                            <p class="description mt--20">We’re always in search for talented
                                and motivated people. Don’t be shy introduce yourself!
                            </p>

                            <ul class="social-icon social-default justify-content-start">
                                <li><a href="https://www.facebook.com/">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.twitter.com">
                                        <i class="feather-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.instagram.com/">
                                        <i class="feather-instagram"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.linkdin.com/">
                                        <i class="feather-linkedin"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class="contact-btn mt--30">
                                <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="/contact">
                                    <div class="icon-reverse-wrapper">
                                        <span class="btn-text">Contact</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Useful Links</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="12-marketplace.html">Marketplace</a>
                                </li>
                                <li>
                                    <a href="04-kindergarten.html">kindergarten</a>
                                </li>
                                <li>
                                    <a href="13-university-classic.html">University</a>
                                </li>
                                <li>
                                    <a href="09-gym-coaching.html">GYM Coaching</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Pages</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="/home">Home</a>
                                </li>
                                <li>
                                    <a href="/education">Education</a>
                                </li>
                                <li>
                                    <a href="/formation">Formation</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Get Contact</h5>
                            <ul class="ft-link">
                                <li><span>Phone:</span> <a href="#">(406) 555-0120</a></li>
                                <li><span>E-mail:</span> <a href="mailto:hr@example.com">admin@example.com</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <p class="rbt-link-hover text-center text-lg-start">Copyright © 2024 <a
                                href="https://themeforest.net/user/rbt-themes">Allo école</a> All Rights Reserved
                        </p>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                        <ul
                            class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="privacy-policy.html">Privacy policy</a></li>
                            <li><a href="subscription.html">Subscription</a></li>
                            <li><a href="/login">Login & Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer aera -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets_pages/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets_pages/js/vendor/jquery.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="assets_pages/js/vendor/bootstrap.min.js')}}"></script>
    <!-- sal.js -->
    <script src="{{ asset('assets_pages/js/vendor/sal.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/swiper.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/magnify.min.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/jquery-appear.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/odometer.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/backtotop.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/isotop.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/imageloaded.js')}}"></script>

    <script src="{{ asset('assets_pages/js/vendor/wow.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/waypoint.min.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/easypie.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/text-type.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/jquery-one-page-nav.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/jquery-ui.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/magnify-popup.min.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/paralax-scroll.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/paralax.min.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/countdown.js')}}"></script>
    <script src="{{ asset('assets_pages/js/vendor/plyr.js')}}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets_pages/js/main.js')}}"></script>

    <!---------------------------------------- recherche ---------------------------------------->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('courseSearch');
            const courseItems = document.querySelectorAll('.course-item');

            searchInput.addEventListener('input', function () {
                const filter = searchInput.value.toLowerCase();
                courseItems.forEach(function (course) {
                    const courseName = course.getAttribute('data-name').toLowerCase();
                    if (courseName.includes(filter)) {
                        course.style.display = 'block';
                    } else {
                        course.style.display = 'none';
                    }
                });
            });
        });
    </script>

    <!---------------------------------------- Afficher plus ---------------------------------------->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const showMoreBtn = document.getElementById('showMoreBtn');
            const hiddenItems = document.querySelectorAll('.filiere-item.hidden');

            showMoreBtn.addEventListener('click', function () {
                hiddenItems.forEach(function (item) {
                    item.classList.remove('hidden');
                });
                showMoreBtn.style.display = 'none';
            });
        });
    </script>

    <!---------------------------------------- Filtrer par année scolaire ---------------------------------------->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const checkboxes = document.querySelectorAll('input[name="annees[]"]');
            const courseItems = document.querySelectorAll('.course-item');

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    filterCourses();
                });
            });

            function filterCourses() {
                const selectedAnnees = Array.from(checkboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);

                courseItems.forEach(course => {
                    const courseAnnee = course.getAttribute('data-annee');
                    if (selectedAnnees.length === 0 || selectedAnnees.includes(courseAnnee)) {
                        course.style.display = 'block';
                    } else {
                        course.style.display = 'none';
                    }
                });
            }
        });
    </script>

    <!---------------------------------------- Filtrer par Matiére , Filiére et Année scolaire ---------------------------------------->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const anneeCheckboxes = document.querySelectorAll('input[name="annees[]"]');
            const matiereCheckboxes = document.querySelectorAll('input[name="matieres[]"]');
            const filiereCheckboxes = document.querySelectorAll('input[name="filieres[]"]');
            const courseItems = document.querySelectorAll('.course-item');
            const showMoreBtn = document.getElementById('showMoreBtn');
            const hiddenFiliereItems = document.querySelectorAll('.filiere-item.hidden');

            anneeCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    filterCourses();
                });
            });

            matiereCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    filterCourses();
                });
            });

            filiereCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    filterCourses();
                });
            });

            showMoreBtn.addEventListener('click', function () {
                hiddenFiliereItems.forEach(function (item) {
                    item.classList.remove('hidden');
                });
                showMoreBtn.style.display = 'none';
            });

            function filterCourses() {
                const selectedAnnees = Array.from(anneeCheckboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);

                const selectedMatieres = Array.from(matiereCheckboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);

                const selectedFilieres = Array.from(filiereCheckboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);

                courseItems.forEach(course => {
                    const courseAnnee = course.getAttribute('data-annee');
                    const courseMatiere = course.getAttribute('data-matiere');
                    const courseFiliere = course.getAttribute('data-filiere');

                    const matchAnnee = selectedAnnees.length === 0 || selectedAnnees.includes(courseAnnee);
                    const matchMatiere = selectedMatieres.length === 0 || selectedMatieres.includes(courseMatiere);
                    const matchFiliere = selectedFilieres.length === 0 || selectedFilieres.includes(courseFiliere);

                    if (matchAnnee && matchMatiere && matchFiliere) {
                        course.style.display = 'block';
                    } else {
                        course.style.display = 'none';
                    }
                });
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const showMoreBtn = document.getElementById('showMoreBtn');
            const filiereItems = document.querySelectorAll('.filiere-item');

            let showMore = true;

            showMoreBtn.addEventListener('click', function () {
                if (showMore) {
                    filiereItems.forEach((item) => {
                        item.classList.remove('hidden');
                    });
                    showMoreBtn.textContent = 'Show Less';
                } else {
                    filiereItems.forEach((item, index) => {
                        if (index >= 5) {
                            item.classList.add('hidden');
                        }
                    });
                    showMoreBtn.textContent = 'Show More';
                }
                showMore = !showMore;
            });
        });

    </script>

    <!---------------------------------------- Pagination ---------------------------------------->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const itemsPerPage = 2;
            const courseList = document.getElementById('courseList');
            const courses = Array.from(courseList.getElementsByClassName('course-item'));
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            let currentPage = 1;

            function renderPage(pageNumber) {
                const start = (pageNumber - 1) * itemsPerPage;
                const end = start + itemsPerPage;

                courses.forEach((course, index) => {
                    if (index >= start && index < end) {
                        course.style.display = 'block';
                    } else {
                        course.style.display = 'none';
                    }
                });
            }

            function updateButtons() {
                prevBtn.disabled = currentPage === 1;
                nextBtn.disabled = currentPage === Math.ceil(courses.length / itemsPerPage);
            }

            prevBtn.addEventListener('click', function () {
                if (currentPage > 1) {
                    currentPage--;
                    renderPage(currentPage);
                    updateButtons();
                }
            });

            nextBtn.addEventListener('click', function () {
                if (currentPage < Math.ceil(courses.length / itemsPerPage)) {
                    currentPage++;
                    renderPage(currentPage);
                    updateButtons();
                }
            });

            renderPage(1);
            updateButtons();
        });

    </script>


</body>

</html>