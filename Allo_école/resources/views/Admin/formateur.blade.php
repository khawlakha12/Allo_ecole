<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Allo Ecole</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin dashboard,dashboard design htmlbootstrap admin template,html admin panel,admin dashboard html,admin panel html template,bootstrap dashboard,html admin template,html dashboard,html admin dashboard template,bootstrap dashboard template,dashboard html template,bootstrap admin panel,dashboard admin bootstrap,bootstrap admin dashboard">

    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Choices JS -->
    <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="../assets/js/main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style Css -->
    <link href="../assets/css/styles.min.css" rel="stylesheet">

    <!-- Icons Css -->
    <link href="../assets/css/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Node Waves Css -->
    <link href="../assets/libs/node-waves/waves.min.css" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="../assets/libs/simplebar/simplebar.min.css" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="../assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="../assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="../assets/libs/choices.js/public/assets/styles/choices.min.css">

</head>

<body>

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-profile" type="button" role="tab" aria-controls="switcher-profile"
                        aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                    aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style"
                                        id="switcher-light-theme" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style"
                                        id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-vertical" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-regular" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-classic">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width"
                                        id="switcher-full-width" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width"
                                        id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                    aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio"
                                        name="header-colors" id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header"
                                        type="radio" name="header-colors" id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio"
                                        name="theme-primary" id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio"
                                        name="theme-primary" id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio"
                                        name="theme-primary" id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio"
                                        name="theme-background" id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div
                                    class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio"
                                        name="theme-background" id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center canvas-footer flex-wrap px-0 px-sm-5">
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="loader">
        <img src="../assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo"
                                    class="desktop-logo">
                                <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo"
                                    class="desktop-dark">
                                <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                                <img src="../assets/images/brand-logos/desktop-white.png" alt="logo"
                                    class="desktop-white">
                                <img src="../assets/images/brand-logos/toggle-white.png" alt="logo"
                                    class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="main-header-center  d-none d-lg-block header-link">
                        <input type="text" class="form-control" id="typehead" placeholder="Search for results..."
                            autocomplete="off">
                        <button type="button" aria-label="button" class="btn pe-1"><i class="fe fe-search"
                                aria-hidden="true"></i></button>
                        <div id="headersearch" class="header-search">
                            <div class="p-3">
                                <div class="">
                                    <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                                    <div class="ps-0">
                                        <a href="javascript:void(0)" class="search-tags"><i
                                                class="fe fe-search me-2"></i>People<span></span></a>
                                        <a href="javascript:void(0)" class="search-tags"><i
                                                class="fe fe-search me-2"></i>Pages<span></span></a>
                                        <a href="javascript:void(0)" class="search-tags"><i
                                                class="fe fe-search me-2"></i>Articles<span></span></a>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-semibold text-muted mb-3 fs-13">Apps and pages</p>
                                    <ul class="ps-0">
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="full-calendar.html"><i
                                                    class="fe fe-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Calendar</span></a>
                                        </li>
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="mail.html"><i
                                                    class="fe fe-mail me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Mail</span></a>
                                        </li>
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="buttons.html"><i
                                                    class="fe fe-globe me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Buttons</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-3">
                                    <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                    <ul class="ps-0 list-unstyled mb-0">
                                        <li class="p-1 align-items-center text-muted mb-1 search-app">
                                            <a href="javascript:void(0)"
                                                class="text-primary"><u>http://spruko/spruko.com</u></a>
                                        </li>
                                        <li class="p-1 align-items-center text-muted mb-0 pb-0 search-app">
                                            <a href="javascript:void(0)"
                                                class="text-primary"><u>http://spruko/spruko.com</u></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="py-3 border-top px-0">
                                <div class="text-center">
                                    <a href="javascript:void(0)"
                                        class="text-primary text-decoration-underline fs-15">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element header-search d-lg-none d-block">
                        <!-- Start::header-link -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                            data-bs-target="#searchModal">
                            <i class="fe fe-search header-link-icon"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element country-selector">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <img src="../assets/images/flags/us_flag.jpg" alt="img" class="rounded-circle">
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/us_flag.jpg" alt="img">
                                    </span>
                                    English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/spain_flag.jpg" alt="img">
                                    </span>
                                    Spanish
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/french_flag.jpg" alt="img">
                                    </span>
                                    French
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/germany_flag.jpg" alt="img">
                                    </span>
                                    German
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/italy_flag.jpg" alt="img">
                                    </span>
                                    Italian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="../assets/images/flags/russia_flag.jpg" alt="img">
                                    </span>
                                    Russian
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                                <i class="fe fe-moon header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                                <i class="fe fe-sun header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <i class="fe fe-shopping-cart header-link-icon"></i>
                            <span class="badge bg-secondary rounded-pill header-icon-badge"
                                id="cart-icon-badge">4</span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-16 fw-semibold">My Shopping Cart</p>
                                    <span class="badge bg-danger-transparent fs-14" id="cart-data">Hurry Up!</span>
                                </div>
                            </div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="../assets/images/ecommerce/orders/11.jpg" alt="img"
                                            class="avatar avatar-xl br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start mb-0">
                                                <div>
                                                    <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Flower
                                                        Pot for Home Decor</a>
                                                    <div class="min-w-fit-content">
                                                        <span>Status: <span class="text-success">In Stock</span></span>
                                                        <p class="fs-13 text-muted mb-0">Quantity: 01</p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end d-flex fs-16">
                                                    <span class="fs-16 text-dark mb-1">$438</span>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-cart-remove dropdown-item-close btn"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="../assets/images/ecommerce/orders/1.jpg" alt="img"
                                            class="avatar avatar-xl br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start mb-0">
                                                <div>
                                                    <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Black
                                                        Digital Camera</a>
                                                    <div class="min-w-fit-content">
                                                        <span>Status: <span class="text-danger">Out Stock</span></span>
                                                        <p class="fs-13 text-muted mb-0">Quantity: 06</p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end d-flex fs-16">
                                                    <span class="fs-16 text-dark mb-1">$867</span>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-cart-remove dropdown-item-close btn"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="../assets/images/ecommerce/orders/15.jpg" alt="img"
                                            class="avatar avatar-xl br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start mb-0">
                                                <div>
                                                    <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Stylish
                                                        Rockerz 255 Ear Pods</a>
                                                    <div class="min-w-fit-content">
                                                        <span>Status: <span class="text-success">In Stock</span></span>
                                                        <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end d-flex fs-16">
                                                    <span class="fs-16 text-dark mb-1">$323</span>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-cart-remove dropdown-item-close btn"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="../assets/images/ecommerce/orders/12.jpg" alt="img"
                                            class="avatar avatar-xl br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start mb-0">
                                                <div>
                                                    <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Women
                                                        Party Wear Dress</a>
                                                    <div class="min-w-fit-content">
                                                        <span>Status: <span class="text-success">In Stock</span></span>
                                                        <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end d-flex fs-16">
                                                    <span class="fs-16 text-dark mb-1">$867</span>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-cart-remove dropdown-item-close btn"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item border-top d-flex">
                                <a href="checkout.html" class="btn btn-primary btn-pill w-sm btn-sm  fs-16"><i
                                        class="fe fe-check-circle me-2 d-inline-flex"></i>checkout</a>
                                <h6 class="ms-auto fs-17 fw-semibold my-auto">Total: $6789</h6>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                        <i class="ri-shopping-cart-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                                    <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                    <a href="products.html" class="btn btn-primary btn-wave m-1"
                                        data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown"
                            aria-expanded="false">
                            <i class="fe fe-bell header-link-icon"></i>
                            <span class="w-9 h-9 p-0 bg-success rounded-pill header-icon-badge pulse pulse-success"
                                id="notification-icon-badge"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                                    <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md bg-primary avatar-rounded"><i
                                                    class="fe fe-mail fs-18"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center my-auto">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">New Application
                                                        received</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">3 days
                                                    ago</span>
                                            </div>
                                            <div class="ms-auto my-auto">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md bg-secondary avatar-rounded"><i
                                                    class="fe fe-check-circle fs-18"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center my-auto">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Project has
                                                        been approved</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">2
                                                    hours ago</span>
                                            </div>
                                            <div class="ms-auto my-auto">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md bg-success avatar-rounded"><i
                                                    class="fe fe-shopping-cart fs-18"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center my-auto">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Your Product
                                                        Delivered</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">30 min
                                                    ago</span>
                                            </div>
                                            <div class="ms-auto my-auto">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <span class="avatar avatar-md bg-pink avatar-rounded"><i
                                                    class="fe fe-shopping-cart fs-18"></i></span>
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center my-auto">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Friend
                                                        Requests</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">10 min
                                                    ago</span>
                                            </div>
                                            <div class="ms-auto my-auto">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top text-center">
                                <a href="notifications.html" class="">View All Notifications</a>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element message-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown2"
                            aria-expanded="false">
                            <i class="fe fe-message-square header-link-icon"></i>
                            <span class="w-9 h-9 p-0 bg-danger rounded-pill header-icon-badge pulse pulse-danger"
                                id="message-icon-badge"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Messages</p>
                                    <span class="badge bg-secondary-transparent" id="message-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-message-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="../assets/images/faces/1.jpg" alt="img"
                                                class="avatar avatar-md avatar-rounded">
                                        </div>
                                        <div class="w-100">
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Peter
                                                            Theil</a></h6>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="text-muted mb-0">
                                                        6:45am
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <span class="text-muted fw-normal fs-12">Commented on file Guest
                                                        list....</span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                            class="ti ti-x fs-16"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="../assets/images/faces/15.jpg" alt="img"
                                                class="avatar avatar-md avatar-rounded">
                                        </div>
                                        <div class="w-100">
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Abagael
                                                            Luth</a></h6>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="text-muted mb-0">10:35am</p>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <span class="text-muted fw-normal fs-12">New Meetup
                                                        Started......</span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                            class="ti ti-x fs-16"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="../assets/images/faces/12.jpg" alt="img"
                                                class="avatar avatar-md avatar-rounded">
                                        </div>
                                        <div class="w-100">
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Brizid
                                                            Dawson</a></h6>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="text-muted mb-0">02:17am</p>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <span class="text-muted fw-normal fs-12">Brizid is in the
                                                        Warehouse...</span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                            class="ti ti-x fs-16"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="../assets/images/faces/4.jpg" alt="img"
                                                class="avatar avatar-md avatar-rounded">
                                        </div>
                                        <div class="w-100">
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Shannon
                                                            Shaw</a></h6>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="text-muted mb-0">7:55pm</p>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <span class="text-muted fw-normal fs-12">New Product
                                                        Realease......</span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                            class="ti ti-x fs-16"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="../assets/images/faces/3.jpg" alt="img"
                                                class="avatar avatar-md avatar-rounded">
                                        </div>
                                        <div class="w-100">
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Cherry
                                                            Blossom</a></h6>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="text-muted mb-0">7:55pm</p>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <span class="text-muted fw-normal fs-12">You have appointment
                                                        on......</span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i
                                                            class="ti ti-x fs-16"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item2 border-top text-center">
                                <a href="chat.html" class="">View All Messages</a>
                            </div>
                            <div class="p-5 empty-item2 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-danger-transparent">
                                        <i class="ri-message-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Messages</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <a aria-label="anchor" onclick="openFullscreen();" href="#" class="header-link">
                            <i class="fe fe-minimize full-screen-open header-link-icon"></i>
                            <i class="fe fe-minimize-2 full-screen-close header-link-icon d-none"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle"
                            data-bs-toggle="offcanvas" data-bs-target="#sidebar-right">
                            <i class="fe fe-align-right header-link-icon"></i>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element main-profile-user">
                        <!-- Start::header-link|dropdown-toggle -->
                        @auth
                            <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="me-xxl-2 me-0">
                                    <img src="{{ Auth::user()->picture ?? '../assets/images/faces/default.jpg' }}"
                                            alt="img" width="32" height="32" class="rounded-circle" id="profile">
                                    </div>
                                    <div class="d-xxl-block d-none my-auto">
                                        <h6 class="fw-semibold mb-0 lh-1 fs-14">{{ Auth::user()->name}}</h6>
                                        <span class="op-7 fw-normal d-block fs-11 text-muted">{{ Auth::user()->type}}</span>
                                    </div>
                                </div>
                            </a>
                        @endauth
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">
                            <li class="drop-heading d-xxl-none d-block">
                                <div class="text-center">
                                    <h5 class="text-dark mb-0 fs-14 fw-semibold">Json Taylor</h5>
                                    <small class="text-muted">Web Designer</small>
                                </div>
                            </li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="/profile"><i
                                        class="fe fe-user fs-18 me-2 text-primary"></i>Profile</a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="mail.html"><i
                                        class="fe fe-mail fs-18 me-2 text-primary"></i>Inbox <span
                                        class="badge bg-danger ms-auto">25</span></a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="lockscreen.html"><i
                                        class="fe fe-lock fs-18 me-2 text-primary"></i>Lockscreen</a></li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fe fe-info fs-18 me-2 text-primary"></i>
                                    Log Out
                                </button>
                            </form>

                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a aria-label="anchor" href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                            data-bs-target="#switcher-canvas">
                            <i class="bx bx-cog header-link-icon"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="/admin" class="header-logo">
                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                    <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">
                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="/admin" class="side-menu__item">
                                <i class="fe fe-tv side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="/" class="side-menu__item">
                                <i class="fe fe-home side-menu__icon"></i>
                                <span class="side-menu__label">Home</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="/profile" class="side-menu__item">
                                <i class="fe fe-user side-menu__icon"></i>
                                <span class="side-menu__label">Profile</span>
                            </a>
                        </li>
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">les formations</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="/formateur" class="side-menu__item">
                                <i class="fe fe-users side-menu__icon"></i>
                                <span class="side-menu__label">Formateurs</span>
                            </a>
                            <ul class="slide-menu child1">
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-layers side-menu__icon"></i>
                                <span class="side-menu__label">Formations</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Pages</a>
                                </li>
                                <li class="slide">
                                    <a href="about-us.html" class="side-menu__item">About Us</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Blog
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="blog.html" class="side-menu__item">Blog</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-create.html" class="side-menu__item">Create Blog</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Education</span></li>
                        <!-- End::slide__category -->

                        <!-- Courses -->
                        <li class="slide has-sub">
                            <a href="#" class="side-menu__item">
                                <i class="fas fa-school side-menu__icon"></i>
                                <span class="side-menu__label">Niveaux scolaire</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide">
                                    <a href="{{ route('annees.index') }}" class="side-menu__item">Année Scolaire</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="/Filiére" class="side-menu__item">
                                <i class="fe fe-file-text side-menu__icon"></i>
                                <span class="side-menu__label">Filiére</span>
                            </a>
                            <ul class="slide-menu child1">
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="/Matiére" class="side-menu__item">
                                <i class="fe fe-file-text side-menu__icon"></i>
                                <span class="side-menu__label">Matiére</span>
                            </a>
                            <ul class="slide-menu child1">
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="/course" class="side-menu__item">
                                <i class="fe fe-file-text side-menu__icon"></i>
                                <span class="side-menu__label">Courses</span>
                            </a>
                            <ul class="slide-menu child1">
                            </ul>
                        </li>
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->
            </div>
            <!-- End::main-sidebar -->
        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title my-auto">Formateurs</h1>
                </div>
                <!-- PAGE-HEADER END -->


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="team-header">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="h5 fw-semibold mb-sm-0">Les formateurs</div>
                                        <div class="d-flex align-items-center">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search Person Name"
                                                    aria-describedby="search-team-member">
                                                <button aria-label="button" class="btn btn-light  btn-primary"
                                                    type="button" id="search-team-member"><i
                                                        class="ri-search-line"></i></button>
                                            </div>
                                            <div class="dropdown ms-2">
                                                <button aria-label="button" class="btn btn-light btn-wave" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom"
                                                            href="javascript:void(0);">Delete Team</a></li>
                                                    <li><a class="dropdown-item border-bottom"
                                                            href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Add
                                                            Member</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card ">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="avatar avatar-xxl rounded">
                                        <img src="../assets/images/faces/11.jpg" alt="" class="rounded-circle">
                                    </span>
                                </div>
                                <div class="d-flex  text-center justify-content-between mt-1 mb-3">
                                    <div class="flex-fill">
                                        <p class="mb-0 fw-semibold fs-16 text-truncate max-w-150 mx-auto">
                                            <a href="javascript:void(0);">hhh</a>
                                        </p>
                                        <p class="mb-0 fs-12 text-muted text-truncate max-w-150 mx-auto">
                                            formateur@gmail.com</p>
                                    </div>
                                </div>
                                <div class="btn-list text-center">
                                    <div class="btn-list">
                                        <button aria-label="button" type="button"
                                            class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                            <i class="ri-facebook-line fw-bold"></i>
                                        </button>
                                        <button aria-label="button" type="button"
                                            class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                            <i class="ri-twitter-line fw-bold"></i>
                                        </button>
                                        <button aria-label="button" type="button"
                                            class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                            <i class="ri-github-line fw-bold"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-block-start-dashed text-center p-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="d-flex p-3 w-100 justify-content-center border-end">
                                        <div class="text-center ">
                                            <p class="fw-semibold mb-0">Projects</p>
                                            <span class="text-muted fs-12">0</span>
                                        </div>
                                    </div>
                                    <div class="d-flex p-3 w-100 justify-content-center">
                                        <div class="text-center">
                                            <p class="fw-semibold mb-0">Position</p>
                                            <span class="text-muted fs-12">12/20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Start: pagination -->
                <div class="float-end mb-4 ms-auto">
                    <nav aria-label="Page navigation" class="pagination-style-4">
                        <ul class="pagination mb-0 gap-2">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);">
                                    Prev
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item">
                                <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                            </li>
                            <li class="page-item d-none d-sm-flex"><a class="page-link"
                                    href="javascript:void(0);">16</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a></li>
                            <li class="page-item">
                                <a class="page-link text-primary" href="javascript:void(0);">
                                    next
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End: pagination -->

            </div>
        </div>
        <!-- End::app-content -->

        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group">
                            <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i
                                    class="fe fe-search header-link-icon fs-18"></i></a>
                            <input type="search" class="form-control border-0 px-2" placeholder="Search"
                                aria-label="Username">
                            <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i
                                    class="fe fe-mic header-link-icon"></i></a>
                            <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                            <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span>
                            <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a
                                    href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                            <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a
                                    href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                            <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span>
                        </div>
                        <div class="my-4">
                            <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                                <a href="notifications.html"><span>Notifications</span></a>
                                <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert"
                                    aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                                <a href="alerts.html"><span>Alerts</span></a>
                                <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert"
                                    aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                                <a href="mail.html"><span>Mail</span></a>
                                <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert"
                                    aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group ms-auto">
                            <button class="btn btn-sm btn-primary-light">Search</button>
                            <button class="btn btn-sm btn-primary">Clear Recents</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Switcher -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar-right" aria-labelledby="offcanvasRightLabel2">
            <div class="offcanvas-header border-bottom bg-primary text-fixed-white">
                <h6 class="offcanvas-title d-inline-flex text-fixed-white" id="offcanvasRightLabel2">
                    <span class=" me-2 d-inline-flex">
                        <i class="fe fe-bell my-auto"></i> <span
                            class=" pulse w-9 h-9 bg-success rounded-circle"></span>
                    </span>
                    Notifications
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <nav class="nav nav-tabs nav-justified" role="tablist">
                    <button class="nav-link active" id="sidebar-side1" data-bs-toggle="tab"
                        data-bs-target="#sidebar-slidepane-1" type="button" role="tab"
                        aria-controls="sidebar-slidepane-1" aria-selected="true"><i
                            class="d-inline-flex fe fe-settings me-1"></i> Feeds</button>
                    <button class="nav-link" id="sidebar-side2" data-bs-toggle="tab"
                        data-bs-target="#sidebar-slidepane-2" type="button" role="tab"
                        aria-controls="sidebar-slidepane-2" aria-selected="false"><i
                            class="d-inline-flex fe fe-message-circle me-1"></i>Chat</button>
                    <button class="nav-link" id="sidebar-side3" data-bs-toggle="tab"
                        data-bs-target="#sidebar-slidepane-3" type="button" role="tab"
                        aria-controls="sidebar-slidepane-3" aria-selected="false"><i
                            class="d-inline-flex fe fe-anchor me-1"></i>Timeline</button>
                </nav>
                <div class="tab-content">
                    <div class="tab-pane fade show active border-0 p-0" id="sidebar-slidepane-1" role="tabpanel"
                        aria-labelledby="sidebar-side1" tabindex="0">
                        <div class="p-3 fw-semibold">Feeds</div>
                        <div class="py-3 px-4 pt-0">
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-primary-transparent"><i
                                            class="fe fe-user text-primary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New user registered</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-secondary-transparent"><i
                                            class="fe fe-shopping-cart text-secondary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New order delivered</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-danger-transparent"><i
                                            class="fe fe-bell text-danger"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">You have pending tasks</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-warning-transparent"><i
                                            class="fe fe-gitlab text-warning"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New version arrived</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-pink-transparent"><i
                                            class="fe fe-database text-pink"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Server #1 overloaded</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-info-transparent"><i
                                            class="fe fe-check-circle text-info"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New project launched</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 fw-semibold">Settings</div>
                        <div class="py-3 px-4 pt-0">
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-primary-transparent"><i
                                            class="fe fe-settings text-primary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">General Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-secondary-transparent"><i
                                            class="fe fe-map-pin text-secondary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Map Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-danger-transparent"><i
                                            class="fe fe-headphones text-danger"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Support Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-warning-transparent"><i
                                            class="fe fe-credit-card text-warning"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Payment Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-pink-transparent"><i
                                            class="fe fe-bell text-pink"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Notification Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i
                                                    class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade border-0 p-0" id="sidebar-slidepane-2" role="tabpanel"
                        aria-labelledby="sidebar-side2" tabindex="0">
                        <div class="p-3 fw-semibold">Today</div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/2.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Addie Minstra</div>
                                    <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/11.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Rose Bush</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/10.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Claude Strophobia</div>
                                    <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/13.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Eileen Dover</div>
                                    <p class="mb-0 fs-12 text-muted"> New product Launching...</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/12.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Willie Findit</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/15.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Manny Jah</div>
                                    <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-0 px-3">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/4.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Cherry Blossom</div>
                                    <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                </a>
                            </div>
                        </div>
                        <div class="p-3 fw-semibold">Yesterday</div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/7.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Simon Sais</div>
                                    <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/9.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Laura Biding</div>
                                    <p class="mb-0 fs-12 text-muted">Hi we can explain our new project...... </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/2.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Addie Minstra</div>
                                    <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/9.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Ivan Notheridiya</div>
                                    <p class="mb-0 fs-12 text-muted">Hi we can explain our new project......</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/14.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Dulcie Veeta</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/11.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Florinda Carasco</div>
                                    <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image"
                                    data-bs-image-src="../assets/images/faces/11.jpg"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Cherry Blossom</div>
                                    <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade border-0 p-3" id="sidebar-slidepane-3" role="tabpanel"
                        aria-labelledby="sidebar-side3" tabindex="0">
                        <ul class="task-list timeline-task">
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Finished<span
                                            class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a
                                            href="javascript:void(0)" class="fw-semibold text-primary"> Project
                                            Management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i
                                            class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i
                                            class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">New Comment<span
                                            class="text-muted fs-11 mx-2 fw-normal">05 July 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Victoria commented on Project <a
                                            href="javascript:void(0)" class="fw-semibold text-primary"> AngularJS
                                            Template</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i
                                            class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i
                                            class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">New Comment<span
                                            class="text-muted fs-11 mx-2 fw-normal">25 June 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Victoria commented on Project <a
                                            href="javascript:void(0)" class="fw-semibold text-primary"> AngularJS
                                            Template</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i
                                            class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i
                                            class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Overdue<span
                                            class="text-muted fs-11 mx-2 fw-normal">14 June 2021</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                            href="javascript:void(0)" class="fw-semibold text-primary"> Integrated
                                            management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i
                                            class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i
                                            class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Overdue<span
                                            class="text-muted fs-11 mx-2 fw-normal">29 June 2021</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                            href="javascript:void(0)" class="fw-semibold text-primary"> Integrated
                                            management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i
                                            class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i
                                            class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Finished<span
                                            class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a
                                            href="javascript:void(0)" class="fw-semibold text-primary"> Project
                                            Management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i
                                            class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i
                                            class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Switcher -->


        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 text-center">
            <div class="container">
                <span class=""> Copyright © <span id="year"></span> <a href="javascript:void(0);"
                        class="text-primary">Sash</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                        <span class="text-primary">Spruko</span>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </footer>
        <!-- Footer End -->


    </div>


    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="../assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="../assets/js/defaultmenu.min.js"></script>

    <!-- Node Waves JS-->
    <script src="../assets/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="../assets/js/sticky.js"></script>

    <!-- Simplebar JS -->
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/simplebar.js"></script>

    <!-- Color Picker JS -->
    <script src="../assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

 <!------------------------------ profile en js ------------------------------>
 <script>
document.addEventListener('DOMContentLoaded', function() {
    var storedImage = localStorage.getItem('profilePicture');
    if (storedImage) {
        document.getElementById('profile').src = storedImage;
    }
});
</script>

    <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>