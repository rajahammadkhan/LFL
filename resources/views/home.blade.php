@extends('layouts.master')

@section('top-styles')
<style>
    .rts-latest-match .latest-match-inner::after {
        left:50%;
    }
    @media (max-width:430px){
        .cen{
            text-align:center;
        }
         .left-side h4{
             padding-top:20px;
         }
        .left-side h2{
            font-size:40px !important;
        }
        .left-side p {
            padding-top:10px;
            padding-bottom:30px;
        }
    }
   
</style>
@endsection

@section('content')

        <!--================= Banner Section Start Here =================-->
        <section class="back-banner">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="main_inner cen">
                        <div class="left-side">
                                <h4>Legend's</h4>
                                <h2><span>Football</span> League</h2>
                                <p>Get ready for an electrifying football revolution like never before! Legend's Football League kicks off on November 18, 2023, at Dubai's iconic Al-Nasr Stadium.</p>
                                <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11"style="border-radius:25px;background-color:#e41b23;">Get Tickets <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <div class="right-side">
                            <img src="{{url('')}}/assets/images/banner/banner_1.gif" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
               <!-- <div class="carousel-item">
                <div class="main_inner">
                    <div class="right-side-2">
                        <img src="{{url('')}}/assets/images/banner/banner_2.gif" class="d-block w-100" alt="...">
                    </div>
                        <div class="left-side-2">
                                <h4>Best Soccer</h4>
                                <h2><span>Football</span> Lovers</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, quisquam voluptatem est harum temporibus eum animi quam!</p>
                                <a href="#" class="btn-11">Get Tickets <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>-->
        <!--    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>-->
        </div>
        </section>
        <!--================= Banner Section End Here =================--> 
<!--================= Latest Match Start Here =================-->
    <div class="rts-latest-match" style="padding: 0px 60px 0px 60px;">
        <div class="container-fluid">
            <div class="latest-match-inner">
                <div class="club-area">
                    <div class="club-logo"><img src="assets/images/items/clubs.png" alt=""></div>
                    <div class="content">
                        <h3 class="club-text">RED DEVILS</h3>
                        <span class="match-type">SEMI FINAL</span>
                    </div>
                </div>
                <div class="match-countdown-area">
                    <div class="countdown">
                        <div class="countdown-el days-c">
                            <span class="value" id="days"></span>
                        </div>
                        <span class="letter">D</span>
                        <div class="countdown-el hours-c">
                            <span class="value" id="hours"></span>
                        </div>
                        <span class="letter">H</span>
                        <div class="countdown-el mins-c">
                            <span class="value" id="mins"></span>
                        </div>
                        <span class="letter">M</span>
                        <div class="countdown-el seconds-c">
                            <span class="value" id="seconds"></span>
                        </div>
                        <span class="letter">S</span>
                    </div>
                </div>
                <div class="club-area">
                    <div class="content text-end ml--40  mr--0">
                        <h3 class="club-text">WORLD 11</h3>
                        <span class="match-type">SEMI FINAL</span>
                    </div>
                    <div class="club-logo ml--40 ml-32 mr--0"><img src="assets/images/items/clubs2.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    
    <!--================= Latest Match End Here =================-->

    <!--================= Meet And Greet Start Here =================-->
    <section class="position-relative z-index-two pt-120 pb-120 overflow-hidden" style="margin-top:20px">
    
      <div class="container">
        <div class="row">
          <div class="col-lg-4   wow fadeInUp mt-3 " style="margin-bottom:20px" data-wow-duration="0.5s" data-wow-delay="0.3s">
          <h1 class="tx"style="font-weight:900;margin-top:40px">Buy Your Ticket Now & Win A Car!</h1>
                <p class="ppp mt-2" >Are you ready for an incredible opportunity? With every Legend's Football League tournament ticket you buy, you're not just securing your spot in the stands; you're also getting a chance to win your dream car!</br>
That's not all! You can also win a once-in-a-lifetime meet & greet opportunity with your favorite League player. Get up close, take photos, and chat with the stars of the game.</p>
                <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11  mt-3 mgbt"  style="margin-bottom:30px;width:40% ;color:#fff;border-radius:25px;background-color:#e41b23;">Get Tickets</a>
                    
            </div>
          <div class="col-lg-8" >
          <img src="{{url('')}}/assets/images/car-pic6.png" alt="" class="   car-image">
     
          </div>
        </div>
        <div class="row mb-none-30 justify-content-xl-start justify-content-center mt-3" style="margin-bottom:30px;margin-right:20px">
       <div class="col-xl-2 col-lg-2 "></div>
      <div class="col-xl-3 col-lg-3 col-sm-6 mb-3">
        <div class="play-card bg_img"  style="background-color: #fff;
    box-shadow: 2px 3px 4px 5px #aaaaaa">
            <div style="display:flex">
              <img src="{{url('')}}/assets/images/icons/car.png" style="width:40px;height:40px" alt="image-icon">
              <div class="play-card__content">
              <h6 class="play-card__title" style="margin:10px;color:#000;">Win Your Dream Car </h6>
              </div>
            </div>
            
          </div><!-- play-card end -->
        </div>
        <div class="col-xl-3 col-lg-3 col-sm-6 mb-3">
        <div class="play-card bg_img"  style="background-color: #fff;
    box-shadow: 2px 3px 4px 5px #aaaaaa;">
        <div style="display:flex">
              <img src="{{url('')}}/assets/images/icons/football.png" style="width:40px;height:40px" alt="image-icon">
              <div class="play-card__content">
              <h6 class="play-card__title" style="margin:10px;color:#000">Meet Your Football Hero </h6>
              </div>
            </div>
         
           
          </div><!-- play-card end -->
        </div>
        <div class="col-xl-3 col-lg-3 col-sm-6 mb-3">
          <div class="play-card bg_img"  style="background-color: #fff;
    box-shadow: 2px 3px 4px 5px #aaaaaa;">
          <div style="display:flex">
              <img src="{{url('')}}/assets/images/icons/cup.png" style="width:40px;height:40px" alt="image-icon">
              <div class="play-card__content">
              <h6 class="play-card__title" style="margin:10px;color:#000;">Drive Away In Style</h6>
              </div>
            </div>
           
          </div><!-- play-card end -->
           
          </div>
          <div class="col-lg-3"></div>
        </div>
     <!--   <div class="row mb-none-30 justify-content-xl-start justify-content-center" style="margin-bottom:60px;">
             <div class="col-xl-3">
             <div class="button-area">
                        
                        <a href="#" class="btn_buy">Buy Now</a>
                    </div>
             </div>
             <div class="col-xl-6 rts-latest-match  " style="background:#fff;">
             <div class="match-countdown-area ">
                    <div class="countdown">
                        <div class="countdown-el days-c">
                            <span class="value" id="days1"></span>
                        </div>
                        <span class="letter">D</span>
                        <div class="countdown-el hours-c">
                            <span class="value" id="hours2"></span>
                        </div>
                        <span class="letter">H</span>
                        <div class="countdown-el mins-c">
                            <span class="value" id="min3"></span>
                        </div>
                        <span class="letter">M</span>
                        <div class="countdown-el seconds-c">
                            <span class="value" id="seconds4"></span>
                        </div>
                        <span class="letter">S</span>
                    </div>
                </div>
             </div>

         </div>-->
      </div>
    </section>

   <!-- <section class="meet_greet_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Buy The Ticket And Win Your Dream Car</h2>
                <p class="ppp">With every ticket you purchase you will get chance to win tour dream car and meet & greet with your favorite Legend's player</p>
                <div class="inner">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{url('')}}/assets/images/icons/car_icon.jpg" alt="">
                    </div>
                    <div class="col-md-9">
                        <h3>Win Your Dream Car</h3>
                        <p>Buy the ticket now, watch the match and win your dream car after the, the winner will be announced on field same day</p>
                    </div>
                </div>
                </div>
                <div class="inner">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{url('')}}/assets/images/icons/Trophy_icon.jpg" alt="">
                    </div>
                    <div class="col-md-9">
                        <h3>Meet & Greet with your Legend's</h3>
                        <p>If you are the lucky winner you will get chance to meet & greet with your favorite Legend's</p>
                    </div>
                </div>
                </div>
                <div class="inner">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{url('')}}/assets/images/icons/watch_icon.jpg" alt="">
                    </div>
                    <div class="col-md-9">
                        <h3>Watch & Win</h3>
                        <p>Buy the ticket now, watch the match and be the lucky winner from anywhere in the world</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="images">
                    <img src="{{url('')}}/assets/images/Match.jpg" alt="" class="im">
                    <img src="{{url('')}}/assets/images/Meet-Greet.jpg" alt="" class="im">
                </div>
                <img src="{{url('')}}/assets/images/Dream-car.jpg" alt="" class="car-image">
            </div>
        </div>
    </div>
    </section>-->

    <!--================= Meet And Greet End Here =================-->

    <!--================= Gallery Start Here =================-->
  <!--  <div class="rts-gallery-section">
        <div class="container">
            <div class="gallery-area">
                <div class="gallery-item text-center">
                    <a href="#0" class="gallery-picture"><img src="assets/images/gallery/img8.jpg" alt=""></a>
                    <a href="#0" class="gallery-picture1"><img src="assets/images/gallery/img8-small.jpg" alt=""></a>
                    <div class="contents-wrapper">
                        <div class="contents text-start">
                            <div class="d-block">
                                <p class="tag">FOOTBALL</p>
                                <a href="#" class="gallery-title">THE WORLD CUP – WHAT TO EXPECT FROM</a>
                            </div>
                            <div class="author-info">
                                <div class="content">
                                    <a href="#" class="read-more">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item text-center active mid">
                    <a href="#0" class="gallery-picture"><img src="assets/images/gallery/img9.jpg" alt=""></a>
                    <a href="#0" class="gallery-picture1"><img src="assets/images/gallery/img9-small.jpg" alt=""></a>
                    <div class="contents-wrapper">
                        <div class="contents text-start">
                            <div class="d-block">
                                <p class="tag">FOOTBALL</p>
                                <a href="#" class="gallery-title">THE WORLD CUP – WHAT TO EXPECT FROM</a>
                            </div>
                            <div class="author-info">
                                <div class="content">
                                    <a href="#" class="read-more">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-item text-center">
                    <a href="#0" class="gallery-picture"><img src="assets/images/gallery/img10.jpg" alt=""></a>
                    <a href="#0" class="gallery-picture1"><img src="assets/images/gallery/img10-small.jpg" alt=""></a>
                    <div class="contents-wrapper">
                        <div class="contents text-start">
                            <div class="d-block">
                                <p class="tag">FOOTBALL</p>
                                <a href="#" class="gallery-title">THE WORLD CUP – WHAT TO EXPECT FROM</a>
                            </div>
                            <div class="author-info">
                                <div class="content">
                                    <a href="#" class="read-more">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--================= Gallery Section End Here =================-->

    <!--================= Next Match Section Start Here =================-->
    <div class="rts-next-match-section section-gap">
        <div class="container-fluid">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">GAMES</span>
                <h1 class="section-title">LEGEND'S LEAGUE</h1>
                <p>Join us as we redefine the game, write new Legend's, and electrify the world with the Legend's.</p>
            </div>
            <ul class="table-area table-full">
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode"></p>
                        <h3 class="name">AL NASR STADIUM, DUBAI, UAE</h3>
                        <p class="time">NOVEMBER 18, 2023 4:00 PM</p>
                    </div>
                    <div class="team-logo-area">
                        <a href="#" class="text-center">
                            <img src="assets/images/team/clubs2.png" alt="">
                            <p class="team">RED DEVILS</p>
                        </a>
                        <span class="versus">VS</span>
                        <a href="#" class="text-center">
                            <img src="assets/images/team/clubs.png" alt="">
                            <p class="team">WORLD 11</p>
                        </a>
                    </div>
                    <div class="button-area">
                        <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-1" style="border-radius:25px;">Get Tickets</a>
                        <a href="#" class="btn-2" style="border-radius:25px;">Watch Stream</a>
                    </div>
                </li>
             <!--   <li class="table-inner">
                    <div class="team-name">
                        <p class="mode"></p>
                        <h3 class="name">INDIA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                        <p class="time">Comming Soon</p>
                    </div>
                    <div class="team-logo-area mg">
                        <a href="#" class="text-center">
                            <img src="assets/images/team/clubs.png" alt="">
                            <p class="team">RED DEVILS</p>
                        </a>
                        <span class="versus">VS</span>
                        <a href="#" class="text-center">
                            <img src="assets/images/team/clubs2.png" alt="">
                            <p class="team">WORLD 11</p>
                        </a>
                    </div>
                    <div class="button-area">
                        <a href="#" class="btn-1" style="border-radius:25px;">Get Tickets</a>
                        <a href="#" class="btn-2" style="border-radius:25px;">Watch Stream</a>
                    </div>
                </li>
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode"></p>
                        <h3 class="name">SAUDI ARABIA</h3>
                        <p class="time">Comming Soon</p>
                        
                    </div>
                    <div class="team-logo-area mg">
                        <a href="#" class="text-center">
                            <img src="assets/images/team/clubs.png" alt="">
                            <p class="team">RED DEVILS</p>
                        </a>
                        <span class="versus">VS</span>
                        <a href="#" class="text-center">
                            <img src="assets/images/team/clubs2.png" alt="">
                            <p class="team">WORLD 11</p>
                        </a>
                    </div>
                    <div class="button-area">
                        <a href="#" class="btn-1" style="border-radius:25px;">Get Tickets</a>
                        <a href="#" class="btn-2" style="border-radius:25px;">Watch Stream</a>
                    </div>
                </li>
                 <li class="table-inner">
                    <div class="team-name">
                        <p class="mode"></p>
                        <h3 class="name">UNITED KINGDOM</h3>
                        <p class="time">Comming Soon</p>
                    </div>
                    <div class="team-logo-area mg">
                        <a href="#" class="text-center">
                            <img src="assets/images/team/clubs.png" alt="">
                            <p class="team">RED DEVILS</p>
                        </a>
                        <span class="versus">VS</span>
                        <a href="#" class="text-center">
                            <img src="assets/images/team/clubs2.png" alt="">
                            <p class="team">WORLD 11</p>
                        </a>
                    </div>
                    <div class="button-area">
                        <a href="#" class="btn-1" style="border-radius:25px;">Get Tickets</a>
                        <a href="#" class="btn-2" style="border-radius:25px;">Watch Stream</a>
                    </div>
                </li>-->
            </ul>
        </div>
    </div>
    <!--================= Next Match Section End Here =================-->
      <div class="container-fluid"  style="overflow:hidden">
    <div class="section-title-area section-title-area1 text-center " style="margin-bottom:10rem">
                <span class="pretitle">GAMES</span>
                <h1 class="section-title">Upcoming Matches</h1>
                
            </div>
            
        <div class="row mt-5" style="background-color:#e41b23;padding-bottom:0px">
            <div class="col-6 col-lg-4  text-center" style="position:relative;;top:-100px">
                <img src="assets/images/Cup01.png" class="img-fluid" alt="Trophy Image">
                <p style="color:#fff;font-size:40px !important" class="mt-3"><i class="fa fa-lock"></i></p>
                <h2 style="color:#fff"  class="mt-2">India</h2>
               <img src="assets/images/india.png" class="img-fluid mt-2" alt="Trophy Image">
            </div>
            <div class="col-6 col-lg-4 text-center" style="position:relative;;top:-100px">
            
                <img src="assets/images/Cup02.png" class="img-fluid" alt="Trophy Image">
                <p style="color:#fff ;font-size:40px !important" class="mt-3"><i class="fa fa-lock"></i></p>
                <h2 style="color:#fff"  class="mt-2">Saudi Arabia</h2>
                <img src="assets/images/saudi.png" class="img-fluid mt-2" alt="Trophy Image">
            </div>
            <div class="col-xs-6 col-lg-4  text-center" style="position:relative;;top:-100px">
                <img src="assets/images/Cup03.png" class="img-fluid" alt="Trophy Image">
                <p style="color:#fff;font-size:40px !important" class="mt-3"><i class="fa fa-lock"></i></p>
                <h2 style="color:#fff" class="mt-2">United Kingdom</h2>
                <img src="assets/images/uk.png" class="img-fluid mt-2" alt="Trophy Image">
            </div>
        </div>

    </div>

    <!--================= About Section Start Here =================-->
    <div class="rts-about-section section-gap">
        <div class="shape1"><img src="assets/images/about/shape2.png" alt=""></div>
        <div class="shape2"><img src="assets/images/about/shape1.png" alt=""></div>
        <div class="container-1">
            <div class="about-inner">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <div class="about-thumb">
                            <div class="img1"><img src="assets/images/gallery/img4n.jpg" alt="about-thumb"></div>
                            <div class="img2"><img src="assets/images/gallery/img5n.jpg" alt="about-thumb"></div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="contents">
                            <div class="section-title-area section-title-area1 text-start">
                                <span class="pretitle">GAMES</span>
                                <h1 class="section-title"><span>ABOUT THE</span> <br> Legend's FOOTBALL LEAGUE</h1>
                                <p>The Legend's Football League is proud to present an innovative and groundbreaking concept to the Middle East. Our mission is to unite renowned football stars from around the globe, creating an unforgettable match that will be etched in the memories of fans for years to come.
                                </p>
                            </div>
                            <ul>
                                <li class="player">
                                    <p class="sub">Dubai</p>
                                    <h3 class="title">UAE</h3>
                                </li>
                                <li class="player player1">
                                    <p class="sub">15000</p>
                                    <h3 class="title">Stadium Capacity</h3>
                                </li>
                                <li class="player player2">
                                    <p class="sub">Win</p>
                                    <h3 class="title">Exciting Prizes!</h3>
                                </li>
                            </ul>
                            <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="more-btn mgbt" style="border-radius:25px;">Buy Tickets <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= About Section End Here =================-->

    <!--================= Sponsors Section Start Here =================-->
    <div class="rts-sponsors-section section-gap">
        <div class="container">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">SPONSOR</span>
                <h1 class="section-title">HAPPY SPONSORS & COLLABORATORS</h1>
                <p>Thank you, dear sponsors, for your unwavering support that fuels the excitement of the Legend's Football League. Your partnership makes it all possible!</p>
            </div>
            <div class="sponsors-section-inner">
                <div class="swiper rts-brandSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/1.png" alt="sponsor"></div>
                            </a>
                        </div>
                     <!--   <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/2.png" alt="sponsor"></div>
                            </a>
                        </div>-->
                       
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/4.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/5.png" alt="sponsor"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/6.png" alt="sponsor"></div>
                            </a>
                        </div>
                         <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/b88.png" alt="sponsor"></div>
                            </a>
                        </div>
                         <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/b7.png" alt="sponsor"></div>
                            </a>
                        </div>
                         <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/b6.png" alt="sponsor"></div>
                            </a>
                        </div>
                         <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/b5.png" alt="sponsor"></div>
                            </a>
                        </div>
                        
                         <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/b4.png" alt="sponsor"></div>
                            </a>
                        </div>
                         <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/b3.png" alt="sponsor"></div>
                            </a>
                        </div>
                         <div class="swiper-slide">
                            <a href="#0" class="sponsor-single">
                                <div class="sponsors-logo"><img src="assets/images/brands/b2.png" alt="sponsor"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Sponsors Table Section End Here =================-->
   

    <!--================= Video Section Start Here =================-->
    <div class="rts-video-section">
        <div class="container">
            <div class="video-section-inner text-center">
                <div class="play-video">
                    <a class="popup-video" href="https://www.youtube.com/watch?v=G4t6TqG5LM8"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--================= VIdeo Section End Here =================-->


    <!--================= Team Section Start Here =================-->
    <div class="rts-team-section section-gap">
        <div class="container">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">PLAYERS</span>
                <h1 class="section-title" style="line-height:0.2;text-align:center"> <img src="assets/images/team/clubs2.png" alt="">RED DEVILS SQUAD</h1>
                <p>Join us as we redefine the game, write new Legend's, and electrify the world with the Legend's.</p>
            </div>
            <div class="team-section-inner">
                <div class="swiper rts-teamSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/1.jpg" alt=""></a>
                                    <div class="number">11</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Midfielder, Defender</p>
                                    <a href="#" class="name">Antonio Valencia</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/2.jpg" alt=""></a>
                                    <div class="number">7</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Right-Back</p>
                                    <a href="#" class="name">Danny Simpson</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/jesper-blomqvist.jpg" alt=""></a>
                                    <div class="number">9</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Midfielder</p>
                                    <a href="#" class="name">Jesper Blomqvist</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/louis-saha.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Striker</p>
                                    <a href="#" class="name">Louis Saha</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/5.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">MID-FIELDER</p>
                                    <a href="#" class="name">Dimitar Berbatov</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/Miralem-Pjanic.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">MID-FIELDER</p>
                                    <a href="#" class="name">Miralem Pjanic</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/Nathan-Dyer.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">MID-FIELDER</p>
                                    <a href="#" class="name">Nathan Dyer</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/8.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Defender</p>
                                    <a href="#" class="name">Mikael Silvestre</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/Nicky-Butt.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">MID-FIELDER</p>
                                    <a href="#" class="name">Nicky Butt</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/Ryan-Giggs.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">MID-FIELDER</p>
                                    <a href="#" class="name">Ryan Giggs</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/Julio-Cesar.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Goalkeeper</p>
                                    <a href="#" class="name">Julio Cesar</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/wes-morgan.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Defenderr</p>
                                    <a href="#" class="name">Wes Morgan</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/14.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Defender</p>
                                    <a href="#" class="name">Wes Brown</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Team Section End Here =================-->
 <!--================= Team Section Start Here =================-->
 <div class="rts-team-section section-gap" style="padding:50px 0">
        <div class="container">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">PLAYERS</span>
                <h1 class="section-title"> <img src="assets/images/team/clubs.png" alt="">World XI SQUAD</h1>
                <p>Join us as we redefine the game, write new Legend's, and electrify the world with the Legend's.</p>
            </div>
            <div class="team-section-inner">
                <div class="swiper rts-teamSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/15.jpg" alt=""></a>
                                    <div class="number">11</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Right Back</p>
                                    <a href="#" class="name">Bacary Sagna</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/16.jpg" alt=""></a>
                                    <div class="number">7</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Right Back</p>
                                    <a href="#" class="name">Clarence Seedorf</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/17.jpg" alt=""></a>
                                    <div class="number">9</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Goalkeeper</p>
                                    <a href="#" class="name">David James</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/18.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Striker</p>
                                    <a href="#" class="name">Drogba</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/Bernard-Mendy.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Defender</p>
                                    <a href="#" class="name">Bernard Mendy</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/20.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Midfielder, Forward</p>
                                    <a href="#" class="name">Kaka</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/David-Trezeguet.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Striker</p>
                                    <a href="#" class="name">David Trezeguet</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/22.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Midfielder, Forward</p>
                                    <a href="#" class="name">Rivaldo</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/23.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Centre-Back</p>
                                    <a href="#" class="name">Robert Huth</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/24.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Midfielder, Forward</p>
                                    <a href="#" class="name">Robert Pires</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/25.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Defender</p>
                                    <a href="#" class="name">Roberto Carlos</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/Florent-Malouda.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Midfielder</p>
                                    <a href="#" class="name">Florent Malouda</a>
                                </div>
                            </div>
                        </div>
                         <div class="swiper-slide">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="assets/images/team/Samir-Nasri.jpg" alt=""></a>
                                    <div class="number">10</div>
                                    
                                </div>
                                <div class="profile">
                                    <p class="position">Winger</p>
                                    <a href="#" class="name">Samir Nasri</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Team Section2 End Here =================-->
    <!--================= Newsletter Section Start Here =================-->
   <!-- <div class="rts-newsletter-section">
        <div class="container">
            <div class="newsletter-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="newsletter-box">
                            <div class="shape">
                                <img src="assets/images/team/shape.png" alt="">
                            </div>
                            <div class="section-title-area section-title-area1 text-start mb--50">
                                <h1 class="section-title">SUBSCRIBE NEWSLETTER</h1>
                                <p>Empus justo tortor nunc ullamcorper curabitur ultrices duis cum lobortis Montes
                                    facilisi vitae litora non dis at class</p>
                            </div>
                            <form>
                                <div class="form">
                                    <input type="text" class="form-control" id="username" placeholder="Enter Your Email"
                                        required />
                                </div>
                                <div class="button">
                                    <button type="submit" class="btn">SUBSCRIBE <i
                                            class="fal fa-long-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image">
                            <img src="assets/images/team/player3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--================= Newsletter Section End Here =================-->


    <!--================= Blog Section Start Here =================-->
    <div class="rts-blog-section section-gap">
        <div class="container">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">INSIGHTS</span>
                <h1 class="section-title">OUR LATEST NEWS</h1>
                <p>Introducing the Legends League Tournament Where Football Legends Come Alive</p>
            </div>
            <div class="blog-area">
                <div class="row">
                   
                    <div class="col-xl-2 col-md-6">
                        
                    </div>
                     <div class="col-xl-8 col-md-6">
                        <div class="blog-item">
                            <div class="blog-picture"><img src="assets/images/blog/blog1q.png" alt=""></div>
                            <div class="contents-wrapper">
                                <div class="contents">
                                    <div class="d-block">
                                        <a href="{{route('blog-details')}}" class="blog-catagory">Legend's Football League</a>
                                        <a href="{{route('blog-details')}}" class="blog-title">PRE-LAUNCH PRESS CONFERENCE</a>
                                    </div>
                                  <!--  <div class="author-info">
                                        <div class="author-dp"><img src="assets/images/items/author2.png"
                                                alt="author-dp"></div>
                                        <div class="content">
                                            <a href="#0" class="author-name">CLUB DA AUTHOR</a>
                                            <div class="blog-date">
                                                <div class="date">June 21, 2022</div>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= BLog Details Section End Here =================-->


    <!--================= Product-details Section Start Here =================-->
    <div class="product-details-popup-wrapper">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">
                    <div class="product-thumb-area">
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img
                                    src="assets/images/products/gloves.png" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img
                                    src="assets/images/products/product1.png" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img
                                    src="assets/images/products/product2.png" alt="product-thumb-filter"></div>
                        </div>
                        <div class="cursor"></div>
                        <div class="thumb-wrapper one filterd-items figure">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url(assets/images/products/prod.jpg)"><img
                                    src="assets/images/products/prod.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url(assets/images/products/prod.jpg)"><img
                                    src="assets/images/products/prod.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url(assets/images/products/prod.jpg)"><img
                                    src="assets/images/products/prod.jpg" alt="product-thumb">
                            </div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Dress</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                        <p>
                            Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                            completely modern design and you feel comfortable to put on this hijab.
                            Buy it at the best price.
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01" />
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="cart.html" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                                Add To
                                Cart</a>
                            <a href="wishlist.html" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                            <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                            <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="#0"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="#0"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="platform" href="#0"><i
                                    class="fab fa-behance"></i></a>
                            <a class="platform" href="#0"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="platform" href="#0"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Product-details Section End Here =================-->

@endsection

@section('bottom-mid-scripts')
@endsection
    
@section('bottom-bot-scripts')
@endsection