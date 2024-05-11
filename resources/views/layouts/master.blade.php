<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
    $route = Route::getCurrentRoute()->getName();
    $currentMenu = getCurrentMenu($route);

    if($currentMenu == null){
    $explodedPath = explode('/',Request::getPathInfo());

    }

    if($route == 'more_info'){
    $name = 'More Information';
    }else{
    $name = 'Blogs';
    }
    $abc= "LEGEND'S FOOTBAL LEAGUE"
    @endphp
    <title>@yield('title'){{$currentMenu->meta_title ?? $currentService->meta_title ?? $currentBlog->meta_title ?? $blog->meta_title ??  $abc ?? null}}</title>
    <meta name="description"
    content="@yield('description'){{$currentMenu->meta_description ?? $currentService->meta_description ?? $currentBlog->meta_description ?? null}}">
    <meta name="keywords"
    content="@yield('keywords'){{$currentMenu->keywords ?? $currentService->keywords ?? $currentBlog->keywords ?? null}}">
    <script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

  ttq.load('CKVLEAJC77U24LQ08H30');
  ttq.page();
}(window, document, 'ttq');
</script>
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--================= Font Awesome 5 CSS =================-->
   
    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!--================= RT Icons CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rt-icons.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <!--================= Magnific popup Plugin =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <!--================= Swiper Slider Plugin =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
    <!--================= Mobile Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/metisMenu.css">
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rtsmenu.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/variables/variable1.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    @yield('top-styles')
    <style>
        .container-fluid{
            padding-left: 0px;
            padding-right: 0px;
        }
        .mg{
                margin-left:70px;
            }
            .rts-latest-match .match-countdown-area{
                margin:0 auto;
            }
            .icc{
    margin-right:210px;
}
.position{
    font-size:22px !important;
}
#rtsHeader.rts-header1 .navbar-part .navbar-inner .header-action-items {
    margin-left:0px;
}
 
         @media (max-width:540px){
             #rtsHeader.rts-header1 .navbar-part .navbar-inner .header-action-items .search-part {
    display: block;
}
.position{
    font-size:22px !important;
}
#rtsHeader.rts-header1 .navbar-part .navbar-inner .header-action-items {
    margin-left:auto;
}
.tx{
    font-size:38px;
}
.mgbt{
    margin-left:90px;
}
.play-card {
   
}
.icc{
    margin-right:90px;
}
             .rts-latest-match .match-countdown-area{
                margin:0 auto;
            }
            .ml-32{
                margin-left:0px !important;
                
            }
            .container-fluid{
            padding-left: 15px;
            padding-right: 15px;
            } 
            .faq-content-wrapper2 {
              margin-left: 0px;
            }
            .play-btn a {
                left:50% !important;
            }
            .mob{
                margin-top:20px;
            }
            .mg{
                margin-left:0px;
            }
            .main_inner {
    display: block !important;
    align-items: center !important;
    position: relative !important;
    top: 80px  !important; 
    width: 100% !important;
    height: 120vh !important;
    padding: 35px !important;
    left:0% !important;
}
.left-side{
    width:100% !important;
}
        }
        .pd{
            padding-left:30px;
        }
        @media (max-width: 420px){
#rtsHeader.rts-header1 .navbar-part .navbar-inner {
    padding: 0 0px !important;
}
.pd{
            padding-left:0px;
        }
}
        .btn-11{
            font-size: 14px;
    width: 150px;
    height: 50px;
    line-height: 50px;
    font-weight: 500;
    color: #fff;
    background: var(--theme-color);
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    text-transform: uppercase;
    position: relative;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    margin-right: 15px;
    letter-spacing: 2px;
    margin-top: 5px;
        }
        .main_inner{
            display: flex;
            align-items: center;
            position: relative;
            top: 16px;
            left: 14%;
            width: 100%;
            height: 100vh;
        }
        .left-side{
            width: 38%;
        }
        .left-side h4{
            font-size: 32px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 10px;
        }
        .left-side h2{
            font-size: 52px;
            font-weight: 900;
            color: #fff;
            margin-bottom: 10px;
        }
        .left-side h2 span{
            color: #e41b23;
        }
        .left-side p{
            color: #fff;
            margin-bottom: 10px;
        }
        .left-side-2{
            width: 38%;
            margin-left: 30px;
        }
        .left-side-2 h4{
            font-size: 32px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 10px;
        }
        .left-side-2 h2{
            font-size: 52px;
            font-weight: 900;
            color: #fff;
            margin-bottom: 10px;
        }
        .left-side-2 h2 span{
            color: red;
        }
        .left-side-2 p{
            color: #fff;
            margin-bottom: 10px;
        }
        .right-side-2{
            margin-left: -60px;
        }
        .meet_greet_section{
            width: 100%;
            height: auto;
            margin-top: 50px;
            margin-bottom: 50px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 10px 20px;
        }
        .meet_greet_section h2{
            font-size: 32px;
            font-weight: 900;
        }
        .meet_greet_section .ppp{
            margin-top: 20px;
        }
        .inner{
            margin-top: 20px;
        }
        .inner p{
            margin-top: 10px;
        }
        .images{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 0px;
        }
        .images .im{
            width: 240px;
            height: 240px;
            border-radius: 10px;
        }
        .car-image{
           
            display: flex;
            align-items: left;
            justify-content: left;
            border-radius: 10px;
            position: relative;
          
            
        }
        .z-index-two {
    z-index: 1;
}


.ppp{
    font-size:20px;
    margin-top:10px;
}

.play-elements {
    position: absolute;
    top: 0px;
    right: 0;
    text-align: right;
    z-index: -1;
    width:35%;
}

@media (max-width: 575px) {
    .play-elements {
        display: none;
    }
    .back-banner {
    width: 100%;
    height: 85vh !important;
    
        
    }
    .left-side h4 {
        font-size:40px;
    }
}
@media (max-width: 380px){
.back-banner {
    width: 100%;
    height: 100vh !important;
}
        
    }

@media (max-width: 1199px) {
    .play-elements img {
        width: 60%;
    }
}

@media (max-width: 767px) {
    .play-elements img {
        width: 45%;
    }
}

.play-card {
    padding: 10px 10px;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.play-card:hover {
    -webkit-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
}

.play-card:hover .play-card__icon::after {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0;
}

.play-card__icon {
    position: relative;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 50px;
    margin: 0 auto;
    
    border-radius: 40%;
    -webkit-border-radius: 40%;
    -moz-border-radius: 40%;
    -ms-border-radius: 4%;
    -o-border-radius: 40%;
    z-index: 1;
}



.play-card__icon .play-card__number {
    position: absolute;
    bottom: -6px;
    right: -21px;
    width: 30px;
    height: 30px;
    
    background-color: #000;
    border-radius: 10%;
    -webkit-border-radius: 10%;
    -moz-border-radius: 10%;
    -ms-border-radius: 10%;
    -o-border-radius: 10%;
    text-align: center;
    line-height: 44px;
    font-size: 22px;
    color: #ffffff;
}

.play-card__content {
    text-align: center;
   
}

.play-card__content p {
    margin-top: 10px;
    color:#fff;
    font-size:12px !important;
}

.play-card__title {
    
   
    font-family: "Josefin Sans", sans-serif;
    color: #ffffff;
    
    font-size:0.8rem !important;
}
.play-card__title h6{
    font-size:0.8rem !important;
}

.btn_buy{
    padding: 15px 30px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    background: #e41b23;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    text-transform: uppercase;
    position: relative;
    -webkit-transition-property: color;
    border: none;
    transition-property: color;
    -webkit-transition-duration: 0.3s;
    letter-spacing: 2px;
    transition-duration: 0.3s;
    margin-top: -10px;
}
/* how to play section css end */
.rts-sponsors-section .sponsor-single .sponsors-logo {
    opacity: 1 !important;
}
.rts-team-section .team-section-inner .team-wraper .player-card {
    padding:0px 0px;
}
.rts-next-match-section .table-area .button-area .btn-1::before {
    border-radius:25px;
}
.rts-next-match-section .table-area .button-area .btn-2::before {
    border-radius:25px;
}
.rts-about-section .about-inner .contents .more-btn::before {
    border-radius:25px; 
}
.rts-about-section .about-inner .contents ul .player::before {

content: "\f3c5";
}

.rts-about-section .about-inner .contents ul .player1::before {

content: "\f500";
position: absolute;
background: #fff;
font-family: "Font Awesome 5 Pro";
width: 40px;
height: 40px;
line-height: 40px;
text-align: center;
display: block;
border-radius: 50%;
left: 0;
top: 50%;
-webkit-transform: translateY(-50%);
transform: translateY(-50%);
}
.rts-about-section .about-inner .contents ul .player2::before {

content: "\f091";
position: absolute;
background: #fff;
font-family: "Font Awesome 5 Pro";
width: 40px;
height: 40px;
line-height: 40px;
text-align: center;
display: block;
border-radius: 50%;
left: 0;
top: 50%;
-webkit-transform: translateY(-50%);
transform: translateY(-50%);
}
    </style>
</head>
<body>
      <div>
        @section('header')
          @include('layouts/header')
        @show

          @yield('content')

        @section('footer')
          @include('layouts/footer')
        @show
      </div>



    <!--================= Scroll to Top Start =================-->
    <div class="scroll-top-btn scroll-top-btn1"><i class="fas fa-angle-up arrow-up"></i><i
            class="fas fa-circle-notch"></i></div>
    <!--================= Scroll to Top End =================-->
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '692960455696515');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=692960455696515&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    <!--================= Jquery latest version =================-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <!--================= Bootstrap latest version =================-->
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <!--================= Wow.js =================-->
    <script src="assets/js/vendors/wow.min.js"></script>
    <!--================= Swiper Slider =================-->
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <!--================= Zoom Plugin =================-->
    <script src="assets/js/vendors/zoom.js"></script>
    <!--================= counter up Plugin =================-->
    <script src="assets/js/vendors/jquery.counterup.min.js"></script>
    <!--================= Timer Plugin =================-->
    <script src="assets/js/vendors/timer.js"></script>
    <!--================= metisMenu Plugin =================-->
    <script src="assets/js/vendors/metisMenu.min.js"></script>
    <!--================= Main Menu Plugin =================-->
    <script src="assets/js/vendors/rtsmenu.js"></script>
    <!--================= Mobile Menu Plugin =================-->
    <script src="assets/js/vendors/metisMenu.min.js"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="assets/js/vendors/isotope.pkgd.min.js"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <!--================= Main Script =================-->
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @yield('bottom-mid-scripts')
    @yield('bottom-bot-scripts')
</body>

</html>