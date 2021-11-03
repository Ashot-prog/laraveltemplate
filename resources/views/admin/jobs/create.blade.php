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
<!-- Preloader -->
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
            <img src="assets/img/logo-three.png" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav three">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo-three.png" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Home <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">Home Demo One</a>
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
                            <a href="#" class="nav-link dropdown-toggle active">Jobs <i class='bx bx-chevron-down'></i></a>
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
                                    <a href="post-a-job.html" class="nav-link active">Post A Job</a>
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
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="side-nav three">
                        <a class="login-left" href="register.html">
                            <i class="flaticon-enter"></i>
                            Login/Register
                        </a>
                        <a class="job-right" href="post-a-job.html">
                            Post A Job
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar -->

<!-- Page Title -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Post A Job</h2>
                    <ul>
                        <li>
                            <img src="assets/img/home-three/title-img-two.png" alt="Image">
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>/</span>
                        </li>
                        <li>
                            Post A Job
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Post A Job -->
<div class="post-job-area ptb-100">
    <div class="container">
        <form>
            <div class="post-item">
                <div class="section-title">
                    <h2>Post A Job</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet placeat totam laboriosam ut labore aliquid veniam repellendus similique? Id molestiae pariatur molestias, alias quia sint autem nemo architecto facere asperiores.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                First Name:
                            </label>
                            <input type="text" class="form-control" placeholder="Tom">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Last Name:
                            </label>
                            <input type="text" class="form-control" placeholder="Henry">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Email:
                            </label>
                            <input type="email" class="form-control" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Phone:
                            </label>
                            <input type="text" class="form-control" placeholder="+123-456-789">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Name Of  Company:
                            </label>
                            <select>
                                <option>Orbit Inc.</option>
                                <option>Another option</option>
                                <option>A option</option>
                                <option>Potato</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Job Title:
                            </label>
                            <input type="text" class="form-control" placeholder="Web Developer">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Job Type:
                            </label>
                            <select>
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Internship</option>
                                <option>Freelancing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Job Category:
                            </label>
                            <select>
                                <option>Digital & Creative</option>
                                <option>Sales & Marketing</option>
                                <option>Marketing & PR</option>
                                <option>IT Contractor</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Job Salary:
                            </label>
                            <select>
                                <option>500$ - 1000$</option>
                                <option>1000$ - 1500$</option>
                                <option>1500$ - 2000$</option>
                                <option>2000$ - 2500$</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Job Experience:
                            </label>
                            <select>
                                <option>0 - 1</option>
                                <option>1 - 2</option>
                                <option>2 - 3</option>
                                <option>3 - 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Job Qualification:
                            </label>
                            <select>
                                <option>Certificate</option>
                                <option>Diploma</option>
                                <option>Bachelor Degree</option>
                                <option>Master Degree</option>
                                <option>No Need</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                Job Level:
                            </label>
                            <select>
                                <option>Senior</option>
                                <option>Junior</option>
                                <option>Manager</option>
                                <option>Lead</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn">Post A Job</button>
            </div>
        </form>
    </div>
</div>
<!-- End Post A Job -->

<!-- Footer -->
<footer class="footer-area three pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item three">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="assets/img/logo-three.png" alt="Logo">
                        </a>
                        <ul>
                            <li>
                                <span>Address: </span>
                                2659 Autostrad St, London, UK
                            </li>
                            <li>
                                <span>Message: </span>
                                <a href="mailto:hello@jecto.com">hello@jecto.com</a>
                            </li>
                            <li>
                                <span>Phone: </span>
                                <a href="tel:2151234567">215 - 123 - 4567</a>
                            </li>
                            <li>
                                <span>Open: </span>
                                Mon - Fri / 9:00 AM - 6:00 PM
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item three">
                    <div class="footer-service">
                        <h3>Our Services</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">Accounting</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Teachers</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Customer Service</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Digital Marketing</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Web & Software Dev</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Science & Analytics</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="footer-item three">
                    <div class="footer-service">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>
                                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="terms-conditions.html" target="_blank">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="jobs.html" target="_blank">Jobs</a>
                            </li>
                            <li>
                                <a href="candidates.html" target="_blank">Candidates</a>
                            </li>
                            <li>
                                <a href="blog.html" target="_blank">Blog</a>
                            </li>
                            <li>
                                <a href="contact.html" target="_blank">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item three">
                    <div class="footer-newsletter">
                        <h3>Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet conscu adipiscing elit sed</p>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Your email*" name="EMAIL" required autocomplete="off">

                            <button class="btn" type="submit">
                                <i class="flaticon-send"></i>
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Copyright -->
<div class="copyright-area three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="copyright-item">
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin-square'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="copyright-item">
                    <p>Copyright @2020 Design & Developed by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Register -->


<!-- Essential JS -->
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
</body>
</html>


{{--<form action="{{route('jobs.store')}}">--}}
{{--    <input type="text" name="category">--}}
{{--    <input type="text" name="location">--}}
{{--    <input type="email" name="job_type">--}}
{{--    <input type="date" name="salary">--}}
{{--    <input type="password" name="employer">--}}
{{--    <input type="password" name="industry">--}}
{{--    <input type="password" name="level">--}}
{{--    <input type="password" name="experience">--}}
{{--    <input type="submit" value="grancum">--}}
{{--</form>--}}
