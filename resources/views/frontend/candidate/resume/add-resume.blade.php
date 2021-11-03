@extends('layout/index')
<!-- End Navbar -->

<!-- Page Title -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Resume</h2>
                    <ul>
                        <li>
                            <img src="assets/img/home-three/title-img-two.png" alt="Image">
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>/</span>
                        </li>
                        <li>
                            Resume
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Dashboard -->
<div class="dashboard-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="profile-item">
                    <img src="assets/img/dashboard1.jpg" alt="Dashboard">
                    <h2>Tom Henry</h2>
                    <span>Web Developer</span>
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class='bx bx-user'></i>
                        My Profile
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <div class="profile-list">
                            <i class='bx bxs-inbox'></i>
                            Applied Jobs
                        </div>
                    </a>
                    <a href="single-resume.html">
                        <div class="profile-list">
                            <i class='bx bx-note'></i>
                            My Resume
                        </div>
                    </a>
                    <a  href="login.html">
                        <div class="profile-list">
                            <i class='bx bx-log-out'></i>
                            Logout
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="profile-content">
                            <form action="{{asset('myresume')}}">
                                <div class="profile-content-inner">
                                    <h2>Basic Info</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Your Name:</label>
                                                <input type="text" class="form-control" placeholder="Tom Henry">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Your Email:</label>
                                                <input type="email" class="form-control" placeholder="hello@jecto.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Phone:</label>
                                                <input type="text" class="form-control" placeholder="+123 - 456 - 789">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Date Of Birth:</label>
                                                <input type="text" class="form-control" placeholder="01/01/1995">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Job Title:</label>
                                                <input type="text" class="form-control" placeholder="Web Developer">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Position:</label>
                                                <input type="text" class="form-control" placeholder="Team Leader">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Salary:</label>
                                                <input type="text" class="form-control" placeholder="$1500/per month">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Cover Picture</label>
                                                <input type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content-inner">
                                    <h2>Education</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Title:</label>
                                                <input type="text" class="form-control" placeholder="Under Graduate">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Degree:</label>
                                                <input type="text" class="form-control" placeholder="BSC in Computer Science">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Institute:</label>
                                                <input type="text" class="form-control" placeholder="Jecto University & Technology, UK">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Year:</label>
                                                <input type="text" class="form-control" placeholder="2015 - 2020">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content-inner">
                                    <h2>Social Links</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Facebook:</label>
                                                <input type="text" class="form-control" placeholder="https://www.facebook.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Twitter:</label>
                                                <input type="text" class="form-control" placeholder="https://www.twitter.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Instagram:</label>
                                                <input type="text" class="form-control" placeholder="https://www.instagram.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Linkedin:</label>
                                                <input type="text" class="form-control" placeholder="https://www.linkedin.com">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn dashboard-btn">Save Your Information</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="employer-item">
                            <a href="">
                                <img src="{{asset('/img/home-one/job1.png')}}" alt="Employer">
                                <h3>Product Designer</h3>
                                <ul>
                                    <li>
                                        <i class="flaticon-send"></i>
                                        Los Angeles, CS, USA
                                    </li>
                                    <li>5 months ago</li>
                                </ul>
                                <p>We are Looking for a skilled Ul/UX designer amet conscu adiing elitsed do eusmod tempor</p>
                                <span class="span-one">Accounting</span>
                                <span class="span-two">FULL TIME</span>
                            </a>
                        </div>
                        <div class="employer-item">
                            <a href="">
                                <img src="{{asset('../img/home-one/job2.png')}}" alt="Employer">
                                <h3>Sr. Shopify Developer</h3>
                                <ul>
                                    <li>
                                        <i class="flaticon-send"></i>
                                        Houston, TX, USA
                                    </li>
                                    <li>4 months ago</li>
                                </ul>
                                <p>Responsible for managing skilled Ul/UX designer amet conscu adiing elitsed do eusmod</p>
                                <span class="span-one">Accounting</span>
                                <span class="span-two two">FULL TIME</span>
                            </a>
                        </div>
                        <div class="employer-item">
                            <a href="">
                                <img src="{{asset('../img/home-one/job3.png')}}" alt="Employer">
                                <h3>Tax Manager</h3>
                                <ul>
                                    <li>
                                        <i class="flaticon-send"></i>
                                        Ho Chi Minh City, Vietnam
                                    </li>
                                    <li>6 months ago</li>
                                </ul>
                                <p>International collaborative a skilled Ul/UX designer amet conscu adiing elitsed do eusmod</p>
                                <span class="span-one two">Broardcasting</span>
                                <span class="span-two three">FREELANCER</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dashboard -->

<!-- Footer -->

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
<!-- End Copyright -->


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
    <!-- Page Header Start -->

    <!-- Content section End -->

