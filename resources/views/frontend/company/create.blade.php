@extends('frontend.company.layout.layout')
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

<!-- Register -->
<div class="user-form-area">
    <div class="container-fluid p-0">
        <div class="row m-0 align-items-center">
            <div class="col-lg-6 p-0">
                <div class="user-img">
                    <img src="{{asset('/img/new.png')}}" alt="User">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="user-content">
                    <div class="top">
                        <h2>Company Register</h2>
                        <form action="{{asset('/company')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="CompanyName" name="companyName">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Level" name="level">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Experience" name="experience">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phoneNumber" placeholder="PhoneNumber">
                            </div>
                            <button type="submit" class="btn">Register Here</button>
                        </form>
                    </div>
                    <div class="end">
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
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
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
