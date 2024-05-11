@extends('layouts.master')

@section('top-styles')
@endsection

@section('content') 
        <!--================= Banner Section Start Here =================-->
        <div class="banner banner1">
            <div class="inner-page-banner banner-bg">
                <div class="container">
                    <div class="banner-content">
                        <div class="page-path">
                            <ul>
                                <li><a class="home-page-link" href="{{route('home')}}">Home</a></li>
                                <li><a class="current-page" href="{{route('contact')}}">CONTACT</a></li>
                            </ul>
                        </div>
                        <h1 class="banner-heading">CONTACT US</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Banner Section End Here =================-->


    <!--contact-area start-->
    <div class="contact-area">
        <div class="container">
            <div class="address-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="address">
                            <div class="icon"><i class="far fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h3 class="heading">
                                    HEADQUARTERS
                                </h3>
                                <p class="desc">{{getSettings('address')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="address">
                            <div class="icon"><i class="far fa-envelope-open"></i></div>
                            <div class="content">
                                <h3 class="heading">
                                    MAIL US 24/7
                                </h3>
                                <p class="desc">{{getSettings('site_email')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="address">
                            <div class="icon"><i class="far fa-phone-volume"></i></div>
                            <div class="content">
                                <h3 class="heading">
                                    Call Us
                                </h3>
                               <a style="color:#999999" href="tel:+971581649971" <p class="desc">{{getSettings('contact_no')}}</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-area-inner">
                <div class="row align-items-start">
                    <div class="col-lg-6 col-md-12">
                        <div class="map">
                            <p><iframe src="{{getSettings('google_location')}}"  height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                        </div>  
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <form class="contact-form mb-10"  id="ajax-contact">
                            <h3 class="post-title mb-35">GET IN TOUCH</h3>
                            <div class="info-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box name mb-20">
                                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box email mail-input mb-20">
                                            <input type="email" id="email" name="email" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box message mail-input mb-20">
                                            <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="input-box message text-input mb-20">
                                            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Write Your Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-15">
                                        <button type="submit" class="form-btn form-btn4">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact-area end-->


@endsection

@section('bottom-mid-scripts')
@endsection
    
@section('bottom-bot-scripts')
<script>
    $(document).ready(function() {
        $(document).on('submit', '#ajax-contact', function(event) {
            event.preventDefault();
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            var name = $("#name").val(); // Extract the value from the input field
            var email = $("#email").val(); // Extract the value from the input field
            var phone = $("#phone").val(); // Extract the value from the input field
            var comment = $("#comment").val(); // Extract the value from the input field
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('contact-us') }}",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    comment: comment,
                },
                success: function(response) {
                    if (response.success) {
                        $("#ajax-contact")[0].reset();
                        toastr.success('Request Submitted Successfully', { timeOut: 2000 })
                    }
                }
            });
        });
    });
    
    </script> 
@endsection