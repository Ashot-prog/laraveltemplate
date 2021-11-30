@extends('frontend.company.layout.layout')
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Message</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="feedback-area two pt-100">
    <div class="container">
        <div class="row">
            <div class="employer-item" style="padding: 1%">
                @foreach($messages as $message)
                    <div style="border: red 1px dashed;padding: 2%; margin: 1%">
                        <p>{{$message->message}}</p>
                        @if(isset($message->posters))
                            <img style="position: relative;top: 0;left: 0"
                                 src="{{asset('../images/'.substr($message->posters,2,-2))}}" alt="">
                        @endif
                    </div>
                @endforeach
            </div>
            <form action="{{asset('company/sending')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="candidate_id" value="{{$_GET['id']}}">
                <input type="text" name="message">
                <input type="file" class="form-control" name="files" placeholder="add posters">
                <input type="submit">
            </form>
        </div>
    </div>
</section>
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
