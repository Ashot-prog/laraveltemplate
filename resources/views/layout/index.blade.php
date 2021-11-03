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
        <a href="index.html" class="logo">
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
                                    <a href="#" class="nav-link dropdown-toggle">Users <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="login.html" class="nav-link">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="register.html" class="nav-link">Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Employers <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="employers.html" class="nav-link">Employers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="employer-details.html" class="nav-link">Employer Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="dashboard.html" class="nav-link">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="single-resume.html" class="nav-link">Single Resume</a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Pricing Plans</a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a href="404.html" class="nav-link">404 Error Page</a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">Terms & COnditions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <span class="tooltip-span">Hot</span>
                            <a href="#" class="nav-link dropdown-toggle">Jobs <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="jobs.html" class="nav-link">Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="favourite-jobs.html" class="nav-link">Favourite Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="job-details.html" class="nav-link">Job Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('admin/jobregister')}}" class="nav-link">Post A Job</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <span class="tooltip-span two">New</span>
                            <a href="#" class="nav-link dropdown-toggle">Candidates <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="candidates.html" class="nav-link">Candidates</a>
                                </li>
                                <li class="nav-item">
                                    <a href="candidate-details.html" class="nav-link">Candidate Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Blog <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin/companyregister')}}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="side-nav">
                        <a class="login-left" href="admin/register">
                            <i class="flaticon-enter"></i>
                            Login/Register
                        </a>
                        <a class="job-right" href="{{asset('admin/jobregister')}}">
                            Post A Job
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
