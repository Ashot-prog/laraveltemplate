<?php
/**@var \App\Models\Message[] $messages */
?>

@extends('frontend.company.layout.layout')

{{--<section class="feedback-area two pt-100">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="employer-item" style="padding: 1%">--}}
{{--                @foreach($messages as $message)--}}
{{--                    <div style="border: red 1px dashed;padding: 2%; margin: 1%">--}}
{{--                        <p>{{$message->message}}</p>--}}
{{--                        @if(isset($message->posters))--}}
{{--                            <img style="position: relative;top: 0;left: 0"--}}
{{--                                 src="{{asset('../images/'.substr($message->posters,2,-2))}}" alt="">--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <form action="{{asset('company/sending')}}" method="post" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <input type="hidden" name="candidate_id" value="{{$_GET['id']}}">--}}
{{--                <input type="text" name="message">--}}
{{--                <input type="file" class="form-control" name="files" placeholder="add posters">--}}
{{--                <input type="submit">--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<div class="container" style="margin-top: 5%">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card chat-app">
                <div id="plist" class="people-list">
                    <ul class="list-unstyled chat-list mt-2 mb-0">
                        @foreach($applications as $application)
                            @if($application->candidate_id == $_GET['id'])
                                <?php $name = $application->name ?>
                            @endif
                            <a href="{{asset('company/messages?id='.$application->candidate_id)}}">
                            <li class="clearfix">
                                <div class="about">
                                    <div class="name">{{$application->name}}</div>
                                </div>
                            </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
                <div class="chat">
                    <div class="chat-header clearfix">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                </a>
                                <div class="chat-about">
                                    <h6 class="m-b-0">{{$name}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-history">
                        <ul class="m-b-0">
                            @foreach($messages as $message)
                                @if(\Illuminate\Support\Facades\Auth::id() == $message->from_id )
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time">{{ $message->passed_time }}</span>
                                        </div>
                                        <div class="message other-message float-right">
                                            {{$message->message}}
                                        </div>
                                    </li>
                                @else
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">{{ $message->passed_time }}</span>
                                        </div>
                                        <div class="message my-message">
                                            {{$message->message}}
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="chat-message clearfix">
                        <form action="{{asset('company/sending')}}" method="post">
                            @csrf
                            <div class="input-group mb-0">
                                <div class="input-group-prepend">
                                    <button><span class="input-group-text"><i class="fa fa-send"></i></span></button>
                                </div>
                                <input type="hidden" name="to_id" value="{{$_GET['id']}}">
                                <input type="text" name="message" class="form-control" placeholder="Enter text here...">
                            </div>
                        </form>
                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
