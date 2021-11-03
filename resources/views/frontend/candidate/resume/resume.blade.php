@extends('layout/index')
<!-- End Navbar -->

<!-- Page Title -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Single Resume</h2>
                    <ul>
                        <li>
                            <img src="{{'../img/home-three/title-img-two.png'}}" alt="Image">
                            <a href="">Home</a>
                        </li>
                        <li>
                            <span>/</span>
                        </li>
                        <li>
                            Single Resume
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Resume -->
<div class="person-details-area resume-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="resume-profile">
                        <img src="{{asset('../img/dashboard1.jpg')}}" alt="Dashboard">
                        <h2>Tom Henry</h2>
                        <span>Web Developer</span>
                    </div>
                    <div class="information widget-item">
                        <h3>Overview</h3>
                        <ul>
                            <li>
                                <img src="{{asset('../img/job-details-icon.png')}}" alt="Details">
                                <h4>Salary:</h4>
                                <span>$2,000</span>
                            </li>
                            <li>
                                <img src="{{asset('../img/job-details-icon.png')}}" alt="Details">
                                <h4>Experience:</h4>
                                <span>5 years</span>
                            </li>
                            <li>
                                <img src="{{asset('../img/job-details-icon.png')}}" alt="Details">
                                <h4>Age:</h4>
                                <span>30-35</span>
                            </li>
                            <li>
                                <img src="assets/img/job-details-icon.png" alt="Details">
                                <h4>Gender:</h4>
                                <span>Male</span>
                            </li>
                            <li>
                                <img src="assets/img/job-details-icon.png" alt="Details">
                                <h4>Languages:</h4>
                                <span>Bangla, English, Arabic, Spanish</span>
                            </li>
                            <li>
                                <img src="assets/img/job-details-icon.png" alt="Details">
                                <h4>Qualification:</h4>
                                <span>Certificate, Associate Degree</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="profile">
                        <h3>About</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search.</p>
                    </div>
                    <div class="work bottom-item">
                        <h3>Work Experience</h3>
                        <ul>
                            <li>
                                <img src="assets/img/home-three/title-img.png" alt="Icon">
                                Path Technologies, Washington, DC, USA
                            </li>
                            <li>
                                <span>04/2011 - 01/2012</span>
                            </li>
                        </ul>
                        <h4>Senior Software Engineer</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="work bottom-item bottom-item-last">
                        <ul>
                            <li>
                                <img src="assets/img/home-three/title-img.png" alt="Icon">
                                3s Software Bangladesh
                            </li>
                            <li>
                                <span>02/2015 - 02/2018</span>
                            </li>
                        </ul>
                        <h4>John Hopkins, Bangladesh</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="work bottom-item">
                        <h3>Education</h3>
                        <ul>
                            <li>
                                <img src="assets/img/home-three/title-img.png" alt="Icon">
                                Path Technologies, Washington, DC, USA
                            </li>
                        </ul>
                        <h4>MBA (2018-2019)</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="work bottom-item bottom-item-last">
                        <ul>
                            <li>
                                <img src="assets/img/home-three/title-img.png" alt="Icon">
                                Design at Institute of Technology & Marketing
                            </li>
                        </ul>
                        <h4>Section UX & UI design (2014 - 2018)</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="skills">
                        <h3>Skills</h3>

                        <div class="skill-wrap">
                            <div class="skill">
                                <h3>HTML/CSS</h3>
                                <div class="skill-bar skill1 animate__slideInLeft animate__animated">
                                    <span class="skill-count1">56%</span>
                                </div>
                            </div>
                            <div class="skill">
                                <h3>WORDPRESS</h3>
                                <div class="skill-bar skill2 animate__slideInLeft animate__animated">
                                    <span class="skill-count2">80%</span>
                                </div>
                            </div>
                            <div class="skill">
                                <h3>PHOTOSHOP</h3>
                                <div class="skill-bar skill3 animate__slideInLeft animate__animated">
                                    <span class="skill-count3">90%</span>
                                </div>
                            </div>
                            <div class="skill">
                                <h3>PHP</h3>
                                <div class="skill-bar skill4 animate__slideInLeft animate__animated">
                                    <span class="skill-count4">70%</span>
                                </div>
                            </div>
                            <div class="skill">
                                <h3>TEAM MANAGEMENT</h3>
                                <div class="skill-bar skill5 animate__slideInLeft animate__animated">
                                    <span class="skill-count5">80%</span>
                                </div>
                            </div>
                            <div class="skill">
                                <h3>SERVICE OF QUALITY</h3>
                                <div class="skill-bar skill6 animate__slideInLeft animate__animated">
                                    <span class="skill-count6">90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Resume -->

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
</div><script src="{{asset('../js/jquery-3.5.1.min.js')}}"></script>
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
    <!-- End Content -->
</body>

