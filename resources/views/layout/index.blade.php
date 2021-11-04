<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('../css/meanmenu.css')}}">
    <!-- Nice Select JS -->
    <link rel="stylesheet" href="{{asset('../css/nice-select.min.css')}}">
    <!-- Boxicon CSS -->
    <link rel="stylesheet" href="{{asset('../css/boxicons.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('../fonts/flaticon.css')}}">
    <!-- Popup CSS -->
    <link rel="stylesheet" href="{{asset('../css/magnific-popup.min.css')}}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{asset('../css/odometer.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('../css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/owl.theme.default.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('../css/animate.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('../css/responsive.css')}}">

    <title>Jecto - Job Board and Portal HTML Template</title>

    <link rel="icon" type="image/png" href="{{asset('../img/favicon.png')}}">
</head>
<body>
<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner"></div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- Navbar -->
<div class="navbar-area fixed-top">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="/" class="logo">
            <img src="{{asset('../img/logo-three.png')}}" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('../img/logo.png')}}" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle active">Home <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link active">Home Demo One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link">Home Demo Two</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">Home Demo Three</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Pages <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Users <i
                                            class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{asset('/login')}}" class="nav-link">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{asset('/register')}}" class="nav-link">Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('createresum')}}" class="nav-link">Add resume</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('myresume')}}" class="nav-link">My Resume</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('/about')}}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <span class="tooltip-span">Hot</span>
                            <a href="#" class="nav-link dropdown-toggle">Jobs <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{asset('/jobs')}}" class="nav-link">Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('jobregister')}}" class="nav-link">Post A Job</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('/blog')}}" class="nav-link dropdown-toggle">Blog </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('contact')}}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="side-nav">
                        <a class="job-right" href="{{asset('jobregister')}}">
                            Post A Job
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<script src="{{asset('../js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('..resources/js/popper.min.js')}}"></script>
<script src="{{asset('..resources/js/bootstrap.min.js')}}"></script>
<!-- Form Validator JS -->
<script src="{{asset('../js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('../js/contact-form-script.js')}}"></script>
<!-- Ajax Chip JS -->
<script src="{{asset('../js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Meanmenu JS -->
<script src="{{asset('../js/jquery.meanmenu.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('../js/jquery.nice-select.min.js')}}"></script>
<!-- Mixitup JS -->
<script src="{{asset('../js/jquery.mixitup.min.js')}}"></script>
<!-- Popup JS -->
<script src="{{asset('../js/jquery.magnific-popup.min.js')}}"></script>
<!-- Odometer JS -->
<script src="{{asset('../js/odometer.min.js')}}"></script>
<script src="{{asset('../js/jquery.appear.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('../js/owl.carousel.min.js')}}"></script>
<!-- Progressbar JS -->
<script src="{{asset('../js/progressbar.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('../js/custom.js')}}"></script>
