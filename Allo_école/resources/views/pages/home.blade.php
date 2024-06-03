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
    <link rel="stylesheet" href="assets_pages/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets_pages/css/vendor/slick.css">
    <link rel="stylesheet" href="assets_pages/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/sal.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/feather.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/magnify.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/animation.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="assets_pages/css/plugins/plyr.css">
    <link rel="stylesheet" href="assets_pages/css/style.css">
    <style>
        .icon1 {
            display: flex;
            align-items: center;
            font-size: 24px;
            color: orange;
        }

        .icon2 {
            display: flex;
            align-items: center;
            font-size: 24px;
            color: red;
        }

        .icon3 {
            display: flex;
            align-items: center;
            font-size: 24px;
            color: blue;
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
                                                <a href="{{ route('courses', $niveau->id) }}" class="niveau-link"
                                                    data-niveau="{{ $niveau->id }}" data-niveau-nom="{{ $niveau->nom }}">
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
    <!-- Mobile Menu Section -->
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
                        <a href="/">Home <i class="feather-chevron-down"></i></a>
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
                                                            src="assets_pages/images/splash/demo/h9.jpg"
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
                                                            src="assets_pages/images/splash/demo/h3.jpg"
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
                                                            src="assets_pages/images/splash/demo/h6.jpg"
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
                                                            src="assets_pages/images/splash/demo/h15.jpg"
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
                                                            src="assets_pages/images/splash/demo/h7.jpg"
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
                                                            src="assets_pages/images/splash/demo/h8.jpg"
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
                                                            src="assets_pages/images/splash/demo/h11.jpg"
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
                                                            src="assets_pages/images/splash/demo/h10.jpg"
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
                                                            src="assets_pages/images/splash/demo/h5.jpg"
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
                                                            src="assets_pages/images/splash/demo/h2.jpg"
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
                                                    <a href="#"><img
                                                            src="assets_pages/images/splash/demo/coming-soon-1.png"
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
                                                    <a href="#"><img
                                                            src="assets_pages/images/splash/demo/coming-soon-2.png"
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
                                                    <a href="#"><img
                                                            src="assets_pages/images/splash/demo/coming-soon-3.png"
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
                                                    <div class="image"><img
                                                            src="assets_pages/images/course/category-2.png"
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
                                                    <div class="image"><img
                                                            src="assets_pages/images/course/category-1.png"
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
                                                    <div class="image"><img
                                                            src="assets_pages/images/course/category-4.png"
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
                                                    <div class="image"><img
                                                            src="assets_pages/images/course/category-9.png"
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
                                <img src="assets_pages/images/product/1.jpg" alt="Product Images">
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
                                <img src="assets_pages/images/product/7.jpg" alt="Product Images">
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
                                <img src="assets_pages/images/product/3.jpg" alt="Product Images">
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
                                <img src="assets_pages/images/product/4.jpg" alt="Product Images">
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

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-3 header-transperent-spacer">
        <div class="wrapper">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7 order-2 order-lg-1">
                        <div class="banner-content ">
                            <div class="inner">

                                <h1 class="title">Bienvenue dans Allo école <br /> éducation en ligne</h1>
                                <p class="description">Nous sommes expérimentés dans les plateformes éducatives et les
                                    stratégies compétentes pour le succès de notre apprentissage en ligne.</p>
                                <div class="rating mb--20">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="rbt-like-total">
                                    <div class="profile-share">
                                        <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img
                                                src="assets_pages/images/testimonial/client-03.png" alt="education"></a>
                                        <a href="#" class="avatar" data-tooltip="Mark" tabindex="0"><img
                                                src="assets_pages/images/testimonial/client-04.png" alt="education"></a>
                                        <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0"><img
                                                src="assets_pages/images/testimonial/client-06.png" alt="education"></a>
                                        <div class="more-author-text">
                                            <h5 class="total-join-students">Rejoignez plus de +30 000 étudiants</h5>
                                            <p class="subtitle">Ayez de nouvelles idées chaque semaine.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="shape-wrapper" id="scene">
                            <img src="étudient.png" alt="Hero Image" style="background:transparent;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-wrapper">
                <div class="left-shape">
                    <img src="assets_pages/images/banner/right-shape.png" alt="Banner Images">
                </div>
                <div class="top-shape">
                    <img src="assets_pages/images/banner/top-shape.png" alt="Banner Images">
                </div>
                <div class="marque-images edumarque"></div>
            </div>
        </div>
        <!-- End Banner Area -->
        <div class="service-wrapper bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-pink-opacity">Fonctionnalité Allo école</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row row--15 mt_dec--30">
                            <!-- Start Single Card  -->
                            <div class="col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                                <div class="rbt-flipbox">
                                    <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-1">
                                        <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                            <div class="icon1">
                                                <i data-feather="file"></i>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="#">Cours PDF</a></h5>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima
                                                    error reiciendis.</p>
                                                <a class="rbt-btn-link stretched-link" href="#">Encore plus<i
                                                        class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                            <ul class="rbt-list-style-3 color-white">
                                                <li><i class="feather-youtube"></i> 570 PDF</li>
                                                <li><i class="feather-book"></i> 35 Cours</li>
                                                <li><i class="feather-video"></i> Live Class</li>
                                                <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                            </ul>
                                            <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                                <span data-text="Learn More">Encore plus</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Card  -->
                            <!-- Start Single Card  -->
                            <div class="col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                                <div class="rbt-flipbox">
                                    <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-2">
                                        <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                            <div class="icon2">
                                                <i data-feather="video"></i>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="#">Cours en vidéo</a></h5>
                                                <p>Convenient practice dolor sit adipisicing elit. Minima error
                                                    reiciendis.</p>
                                                <a class="rbt-btn-link stretched-link" href="#">Encore plus<i
                                                        class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>

                                        <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                            <ul class="rbt-list-style-3 color-white">
                                                <li><i class="feather-youtube"></i> 370 Vidéo gratuite</li>
                                                <li><i class="feather-book"></i> 120 Cours</li>
                                                <li><i class="feather-video"></i> Live Class</li>
                                                <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                            </ul>
                                            <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                                <span data-text="Learn More">Encore plus</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Card  -->
                            <!-- Start Single Card  -->
                            <div class="col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                                <div class="rbt-flipbox">
                                    <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-4">
                                        <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                            <div class="icon3">
                                                <i data-feather="book"></i>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="#">Les formations</a></h5>
                                                <p>Live Class dolor sit, amet consectetur adipisicing elit. Minima error
                                                    reiciendis.</p>
                                                <a class="rbt-btn-link stretched-link" href="#">Encore plus<i
                                                        class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>

                                        <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                            <ul class="rbt-list-style-3 color-white">
                                                <li><i class="feather-youtube"></i> 124 Formations</li>
                                                <li><i class="feather-book"></i> 56 Formateurs</li>
                                                <li><i class="feather-video"></i> Live Class</li>
                                                <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                            </ul>
                                            <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                                <span data-text="Learn More">Encore plus</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Card  -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="rbt-counterup-area bg_image bg_image_fixed bg_image--18 ptb--170 ptb_md--50 ptb_sm--50 bg-black-overlay"
            data-black-overlay="1">
            <div class="conter-style-2">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                            <div class="rbt-counterup style-2">
                                <div class="inner">
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="500">00</span>
                                        </h3>
                                        <span class="subtitle">étudiants</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                            <div class="rbt-counterup style-2">
                                <div class="inner">
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="800">00</span>
                                        </h3>
                                        <span class="subtitle">Cours et vidéo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                            <div class="rbt-counterup style-2">
                                <div class="inner">
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="1000">00</span>
                                        </h3>
                                        <span class="subtitle">Formations</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                            <div class="rbt-counterup style-2">
                                <div class="inner">
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="100">00</span>
                                        </h3>
                                        <span class="subtitle">Formateurs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rbt-banner-area rbt-banner-3 header-transperent-spacer" style="">
            <div class="wrapper">
                <div class="container">
                    <div class="row " style="margin-left:9%;">
                        <div class="col-lg-5 order-1 order-lg-2">
                            <div class="text-wrapper">
                                <p>Allo école est un site dev support pédagogique. Nous proposons une sélection de
                                    contenus pédagogiques
                                    conformes aux programmes offociels.
                                </p>
                                <p>Pour chaque matière, Allo école propose un suivi chronologique par chapitre,
                                    comprenant des cours,
                                    des exercices corrigés et des examens. Nous utilisons les derniéres technologies Web
                                    pour assurer
                                    une présentation claire et ergonomique.
                                </p>
                                <a href="/register" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Registre</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 order-2 order-lg-1" style="margin-right:5%;border:0.5 px solid; border-radius: 5px;">
                            <div class="shape-wrapper" id="scene">
                                <img src="https://foundr.com/wp-content/uploads/2023/04/How-to-create-an-online-course.jpg"
                                    alt="Texte Image"  style="margin-top:2%;border:4px solid  #2f57ef; border-radius: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Newsletter Area  -->
            <div class="rbt-newsletter-area bg-color-white rbt-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h2 class="title">Pour rejoindre l'équipe des professeurs, saisissez email <br />
                                    Laissez-nous vous contacter </h2>
                                <form action="#" class="newsletter-form-1 mt--50 radius-round">
                                    <input class="rbt-border" type="email" placeholder="Enter Your E-Email">
                                    <button type="submit"
                                        class="rbt-btn btn-md btn-gradient hover-icon-reverse radius-round">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Envoyer</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Newsletter Area  -->
            <!-- End CallTo Action Area  -->
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
                                        <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round"
                                            href="/contact">
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
                                        <li><span>E-mail:</span> <a href="mailto:hr@example.com">admin@example.com</a>
                                        </li>
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
                                        href="https://themeforest.net/user/rbt-themes">Allo école</a> All Rights
                                    Reserved
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
            <script src="https://unpkg.com/feather-icons"></script>
            <script>
                feather.replace();
            </script>
            <!-- Modernizer JS -->
            <script src="assets_pages/js/vendor/modernizr.min.js"></script>
            <!-- jQuery JS -->
            <script src="assets_pages/js/vendor/jquery.js"></script>
            <!-- Bootstrap JS -->
            <script src="assets_pages/js/vendor/bootstrap.min.js"></script>
            <!-- sal.js -->
            <script src="assets_pages/js/vendor/sal.js"></script>
            <script src="assets_pages/js/vendor/swiper.js"></script>
            <script src="assets_pages/js/vendor/magnify.min.js"></script>
            <script src="assets_pages/js/vendor/jquery-appear.js"></script>
            <script src="assets_pages/js/vendor/odometer.js"></script>
            <script src="assets_pages/js/vendor/backtotop.js"></script>
            <script src="assets_pages/js/vendor/isotop.js"></script>
            <script src="assets_pages/js/vendor/imageloaded.js"></script>

            <script src="assets_pages/js/vendor/wow.js"></script>
            <script src="assets_pages/js/vendor/waypoint.min.js"></script>
            <script src="assets_pages/js/vendor/easypie.js"></script>
            <script src="assets_pages/js/vendor/text-type.js"></script>
            <script src="assets_pages/js/vendor/jquery-one-page-nav.js"></script>
            <script src="assets_pages/js/vendor/bootstrap-select.min.js"></script>
            <script src="assets_pages/js/vendor/jquery-ui.js"></script>
            <script src="assets_pages/js/vendor/magnify-popup.min.js"></script>
            <script src="assets_pages/js/vendor/paralax-scroll.js"></script>
            <script src="assets_pages/js/vendor/paralax.min.js"></script>
            <script src="assets_pages/js/vendor/countdown.js"></script>
            <script src="assets_pages/js/vendor/plyr.js"></script>
            <!-- Main JS -->
            <script src="assets_pages/js/main.js"></script>
</body>

</html>