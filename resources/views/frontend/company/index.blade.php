@extends('layout.index')
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Company</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Feedback -->
<section class="feedback-area two pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="feedback-item">
                    <h3>Jubra Ward</h3>
                    <span>CEO at Alfa School</span>
                    <p>“I’m ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaxn ullamco laboris nisi ut at voluptatem.</p>
                    <h4>
                        <i class="flaticon-left-quote"></i>
                        Just Awesome
                    </h4>
                    <img src="{{asset('../img/home-one/feedback1.jpg')}}" alt="Feedback">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feedback-item">
                    <h3>Robin William</h3>
                    <span>Manager Support Act It</span>
                    <p>“I’m ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaxn ullamco laboris nisi ut at voluptatem.</p>
                    <h4>
                        <i class="flaticon-left-quote"></i>
                        Very Reliable
                    </h4>
                    <img src="data:image/png;base64,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" alt="Feedback">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feedback-item">
                    <h3>Tom Henry</h3>
                    <span>Director at Alfa School</span>
                    <p>“I’m ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaxn ullamco laboris nisi ut at voluptatem.</p>
                    <h4>
                        <i class="flaticon-left-quote"></i>
                        Looking Nice
                    </h4>
                    <img src="data:image/jpeg;base64,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" alt="Feedback">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feedback-item">
                    <h3>Jac Jackson</h3>
                    <span>Engineer at Alfa School</span>
                    <p>“I’m ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaxn ullamco laboris nisi ut at voluptatem.</p>
                    <h4>
                        <i class="flaticon-left-quote"></i>
                        Awesome
                    </h4>
                    <img src="{{asset('../img/home-one/feedback4.jpg')}}" alt="Feedback">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feedback -->

<!-- Footer -->
<footer class="footer-area three pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item three">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="{{asset('../img/logo-three.png')}}" alt="Logo">
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
                    <p>Copyright ©2021 Jecto. Designed By <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                </div>
            </div>
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
