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
{{--<!-- End Page Title -->@foreach($users as $user)--}}
{{--    @if($application == $user)--}}

<!-- Feedback -->
<section class="feedback-area two pt-100">
    <div class="container">
        <div class="row">
            {{print_r($candidates)}}{{die()}}
                @foreach($candidates as $candidate)
                        <div class="col-lg-6">
                            <div class="feedback-item">
                                <h3>{{$candidate['name']}}{{$candidate['surname']}}</h3>
                                <span>{{$candidate['email']}}</span>
                                <p>{{$candidate['about']}}</p>
                                <a href="{{route('resume')}}">My Resume</a>
                                <h4>
                                    <i class="flaticon-left-quote"></i>
                                    birth date{{$candidate['birth_date']}}
                                </h4>
                                <img src="{{asset('../img/home-one/feedback1.jpg')}}" alt="Feedback">
                            </div>
                        </div>
                @endforeach
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
                            <input type="email" class="form-control" placeholder="Your email*" name="EMAIL" required
                                   autocomplete="off">

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
                    <p>Copyright ©2021 Jecto. Designed By <a href="https://hibootstrap.com/"
                                                             target="_blank">HiBootstrap</a></p>
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
