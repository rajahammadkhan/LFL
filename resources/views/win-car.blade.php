@extends('layouts.master')

@section('top-styles')
<style>
 .campagin{
    border-radius: 15px;
    /* border: solid black 1px; */
    margin-top: 20px;
    box-shadow: 5px 5px 5px 5px #d2d2d2;
  padding:30px;
 }
 .contact-area .container .contact-form .info-form .form-btn::before {
    border-radius:30px;
    background-color:#000;
 }
 .contact-area .container .contact-form .info-form .input-box input {
    border-radius:30px;
 height: 50px;
 background-color:#fff;
 }
 .contact-area .container .contact-form .info-form .input-box.email::before {
    top:14px;
    color:#757575;
 }
 .contact-area .container .contact-form .info-form .input-box.name::before {
    top:14px;
    color:#757575;
 }
 .contact-area .container .contact-form .info-form .input-box.message::before {
    top:14px;
    color:#757575;
 }
.banner-bg::before {
    position:relative;
}
.mbf1{
        display:none;
    }
    .mrg{
        margin:0 160px !important;
    }
@media (max-width:520px){
    .mrg{
        margin:0 auto !important;
    }
    
    .mbf{
        display:none;
    }
    .mbf1{
        display:block;
    }
}
</style>
@endsection

@section('content') 
        <!--================= Banner Section Start Here =================-->
        <div class="banner banner1 mbf">
            <div class="inner-page-banner banner-bg contact-area"style="background-image: url({{url('')}}/assets/images/New.jpg);padding-top:290px;padding-bottom:290px;margin-top:10px;background-size:contain">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                    <div class="banner-content">
                        <div class="page-path">

                            <ul>
                              <!--  <li><a class="home-page-link" href="index.html">Home</a></li>
                                <li><a class="current-page" href="#">SCHEDULE</a></li>-->
                            </ul>
                        
                        </div>
                      <!--  <div class="details-video">
                    <div class="video-thumb"><img src="assets/images/about/video1.png" alt="video-thumb">
                        <div class="play-btn play-video" ><a class="popup-video" style="left:40%" href="https://www.youtube.com/watch?v=G4t6TqG5LM8" data-effect="mfp-move-horizontal"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>-->
                     <!--   <h1 class="banner-heading" style="font-size:48px;text-align:left">Buy Ticket And Win Your Dream Car</h1>
                        <a href="#" class="btn-11  "  style="margin-bottom:30px;width:40% ;color:#fff;border-radius:25px">Get Tickets</a>
-->
                    </div>
                       </div>
                     <!--  <div class="col-lg-4 mob">
                       <form class="contact-form mb-10" style="position: relative;background-color:#e41b23;padding:20px 20px;border-radius:30px">
                          <center>  <h3 class="post-title mb-35" style="font-size:20px">Buy The Ticket And Win Your Dream Car</h3></center>
                            <div class="info-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box name mb-20">
                                            <input type="text" id="validationDefault01" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box message text-input mb-20">
                                            <input type="text"  placeholder="Your phone"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="input-box email mail-input mb-20">
                                        <input type="email" id="validationDefault02" placeholder="Your E-mail"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="input-box message text-input mb-20">
                                        <input type="text"  placeholder="Your Nationalitiy"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-15">
                                      <center>  <button style="border-radius:30px;width:60%;background-color:#000;" type="submit" class="form-btn form-btn4">
                                          Buy Now
                                        </button></center>
                                    </div>
                                </div>
                            </div>
                        </form>
                            </div>-->
                       </div>

                    </div>
                </div>
            </div>
        </div>
        <!--================= Banner Section End Here =================-->
        <!--================= Banner Section Start Here =================-->
        <div class="banner banner1 mbf1">
            <div class="inner-page-banner banner-bg contact-area"style="background-image: url({{url('')}}/assets/images/artboard.png);padding-top:290px;padding-bottom:290px;margin-top:-60px;background-size: contain;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                    <div class="banner-content">
                        <div class="page-path">

                            <ul>
                              <!--  <li><a class="home-page-link" href="index.html">Home</a></li>
                                <li><a class="current-page" href="#">SCHEDULE</a></li>-->
                            </ul>
                        
                        </div>
                      <!--  <div class="details-video">
                    <div class="video-thumb"><img src="assets/images/about/video1.png" alt="video-thumb">
                        <div class="play-btn play-video" ><a class="popup-video" style="left:40%" href="https://www.youtube.com/watch?v=G4t6TqG5LM8" data-effect="mfp-move-horizontal"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>-->
                     <!--   <h1 class="banner-heading" style="font-size:48px;text-align:left">Buy Ticket And Win Your Dream Car</h1>
                        <a href="#" class="btn-11  "  style="margin-bottom:30px;width:40% ;color:#fff;border-radius:25px">Get Tickets</a>
-->
                    </div>
                       </div>
                     <!--  <div class="col-lg-4 mob">
                       <form class="contact-form mb-10" style="position: relative;background-color:#e41b23;padding:20px 20px;border-radius:30px">
                          <center>  <h3 class="post-title mb-35" style="font-size:20px">Buy The Ticket And Win Your Dream Car</h3></center>
                            <div class="info-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box name mb-20">
                                            <input type="text" id="validationDefault01" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box message text-input mb-20">
                                            <input type="text"  placeholder="Your phone"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="input-box email mail-input mb-20">
                                        <input type="email" id="validationDefault02" placeholder="Your E-mail"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="input-box message text-input mb-20">
                                        <input type="text"  placeholder="Your Nationalitiy"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-15">
                                      <center>  <button style="border-radius:30px;width:60%;background-color:#000;" type="submit" class="form-btn form-btn4">
                                          Buy Now
                                        </button></center>
                                    </div>
                                </div>
                            </div>
                        </form>
                            </div>-->
                       </div>

                    </div>
                </div>
            </div>
        </div>
        <!--================= Banner Section End Here =================-->
        <!--================= Campaing Section =================-->
             <section class="contact-area">
             <div class="container">
             <div class="row justify-content-center ">
                    <div col-lg-2></div>
                    <div col-lg-8> 
                        <div class="campagin">
                           <div class="row">
                            <div class="col-lg-8">
                            <div class=" wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
    <img src="{{url('')}}/assets/images/car-pic3.png" alt="" >
      </div>
                                     <div class="col-lg-12  text-center wow fadeInUp mt-3 " data-wow-duration="0.5s" data-wow-delay="0.3s">
          <h1 style="color:#e41b23"> Win Your Dream Car</h1>
                
          </div>
          <div class="rts-latest-match mt-3 mb-4  wow fadeInUp" style="background:#fff;padding-bottom:30px;padding-top:15px;display:flex;">
          <div class="match-countdown-area mrg">
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
</div>
        <div class="row justify-content-center">
        <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11"  style="margin-bottom:30px;width:40%;border-radius:25px">Get Tickets</a>
        </div>
                            </div>
                                <div class="col-lg-4">         
 

   <div mob">
                       <form action="{{ route('win-us') }}" method="post" class="contact-form mb-10" id="ajax-win" style="position: relative;background-color:#e41b23;padding:20px 20px;border-radius:30px">
                        @csrf  
                        <center>  <h3 class="post-title mb-35" style="font-size:20px">Buy The Ticket And Win Your Dream Car</h3></center>
                            <div class="info-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box name mb-20">
                                            <input type="text" style="color: black" id="name" name="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-box message text-input mb-20">
                                            <input type="text" style="color: black" id="phone" name="phone"  placeholder="Your phone"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="input-box email mail-input mb-20">
                                        <input type="email" style="color: black" id="email" name="email" placeholder="Your E-mail"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="input-box message text-input mb-20">
                                        <input type="text" style="color: black" name="comment" id="comment"  placeholder="Your Nationalitiy"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-15">
                                      <center>  <button style="border-radius:30px;width:60%;background-color:#000;" type="submit" class="form-btn form-btn4">
                                          Buy Now
                                        </button></center>
                                    </div>
                                </div>
                            </div>
                        </form>
                           


                        </div>
                        
                        
                        
                        </div>
                           </div>
                            
                           
                            




                    </div>
                    <div col-lg-2></div>
            </div>
            
            </div>



             </section>


        <!--================= Campaing Section End Here=================-->
      <!--================= Meet And Greet Start Here =================-->
    <section class="position-relative z-index-two pt-120 pb-120 overflow-hidden" style="margin-top:20px">
    
      <div class="container">
        <div class="row">
          <div class="col-lg-4   wow fadeInUp mt-3 " style="margin-bottom:20px" data-wow-duration="0.5s" data-wow-delay="0.3s">
          <h1 style="font-weight:900;margin-top:40px" class="tx">Buy Your Ticket Now & Win A Car!</h1>
                <p class="ppp mt-2" >Are you ready for an incredible opportunity? With every Legend's Football League tournament ticket you buy, you're not just securing your spot in the stands; you're also getting a chance to win your dream car!</br>
That's not all! You can also win a once-in-a-lifetime meet & greet opportunity with your favorite League player. Get up close, take photos, and chat with the stars of the game.</p>
                <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11 mgbt  mt-3"  style="margin-bottom:30px;width:40% ;color:#fff;border-radius:25px;background-color:#e41b23;">Get Tickets</a>
                    
            </div>
          <div class="col-lg-8" >
          <img src="{{url('')}}/assets/images/car-pic6.png" alt="" class="car-image">
     
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

    <!--================= Match Result Section Start Here =================-->
   <!-- <div class="rts-next-match-section section-gap">
        <div class="container-fluid">
            <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">GAMES</span>
                <h1 class="section-title">PREMIER LEAGUE</h1>
                <p>It is one of the most popular football clubs that offer training programs
                    for the youth, as well as summer camps</p>
            </div>
            <ul class="table-area table-full">
            <li class="table-inner">
                    <div class="team-name">
                        <p class="mode">2v2, Double Elimination</p>
                        <h3 class="name">AL NASR STADIUM, DUBAI, UAE</h3>
                        <p class="time">NOVEMBER 18, 2023 4:00 PM</p>
                    </div>
                    <div class="team-logo-area">
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
                        <a href="#" class="btn-1">Get Tickets</a>
                        <a href="#" class="btn-2">Watch Stream</a>
                    </div>
                </li>
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode">2v2, Double Elimination</p>
                        <h3 class="name">AL NASR STADIUM, DUBAI, UAE</h3>
                        <p class="time">NOVEMBER 18, 2023 4:00 PM</p>
                    </div>
                    <div class="team-logo-area">
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
                        <a href="#" class="btn-1">Get Tickets</a>
                        <a href="#" class="btn-2">Watch Stream</a>
                    </div>
                </li>
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode">2v2, Double Elimination</p>
                        <h3 class="name">AL NASR STADIUM, DUBAI, UAE</h3>
                        <p class="time">NOVEMBER 18, 2023 4:00 PM</p>
                    </div>
                    <div class="team-logo-area">
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
                        <a href="#" class="btn-1">Get Tickets</a>
                        <a href="#" class="btn-2">Watch Stream</a>
                    </div>
                </li>
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode">2v2, Double Elimination</p>
                        <h3 class="name">AL NASR STADIUM, DUBAI, UAE</h3>
                        <p class="time">NOVEMBER 18, 2023 4:00 PM</p>
                    </div>
                    <div class="team-logo-area">
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
                        <a href="#" class="btn-1">Get Tickets</a>
                        <a href="#" class="btn-2">Watch Stream</a>
                    </div>
                </li>
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode">2v2, Double Elimination</p>
                        <h3 class="name">AL NASR STADIUM, DUBAI, UAE</h3>
                        <p class="time">NOVEMBER 18, 2023 4:00 PM</p>
                    </div>
                    <div class="team-logo-area">
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
                        <a href="#" class="btn-1">Get Tickets</a>
                        <a href="#" class="btn-2">Watch Stream</a>
                    </div>
                </li>
                <li class="table-inner">
                    <div class="team-name">
                        <p class="mode">2v2, Double Elimination</p>
                        <h3 class="name">AL NASR STADIUM, DUBAI, UAE</h3>
                        <p class="time">NOVEMBER 18, 2023 4:00 PM</p>
                    </div>
                    <div class="team-logo-area">
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
                        <a href="#" class="btn-1">Get Tickets</a>
                        <a href="#" class="btn-2">Watch Stream</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>-->
    <!--================= Match Result Section End Here =================-->
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
                                <h1 class="section-title"><span>ABOUT THE</span> <br> LEGEND'S FOOTBALL LEAGUE</h1>
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
                            <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="more-btn mgbt" style="border-radius:25px;">Buy Tickets<i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= About Section End Here =================-->
   <!-- <div class="rts-gallery-section mt-5" style="padding:20px 0px 20px 0px">
        <div class="container">
        <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">WINNERS</span>
                <h1 class="section-title">Winner</h1>
                <p>It is one of the most popular football clubs that offer training programs
                    for the youth, as well as summer camps.</p>
            </div>
            
            <div class="filterd-items fifa20">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit" href="assets/images/gallery/full1.png" title="Football.png"><img src="assets/images/gallery/1.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                            </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit" href="assets/images/gallery/full2.png" title="Football.png"><img src="assets/images/gallery/2.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit" href="assets/images/gallery/full3.png" title="Football.png"><img src="assets/images/gallery/3.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit" href="assets/images/gallery/full4.png" title="Football.png"><img src="assets/images/gallery/4.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit" href="assets/images/gallery/full5.png" title="Football.png"><img src="assets/images/gallery/5.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit" href="assets/images/gallery/full6.png" title="Football.png"><img src="assets/images/gallery/6.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
                  
        </div>
    </div>-->

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
            <div class="col-6 col-lg-4 text-center" style="position:relative;;top:-100px">
                <img src="assets/images/Cup01.png" class="img-fluid" alt="Trophy Image">
                <p style="color:#fff;font-size:40px !important" class="mt-3"><i class="fa fa-lock"></i></p>
                <h2 style="color:#fff"  class="mt-2">India</h2>
               <img src="assets/images/india.png" class="img-fluid mt-2" alt="Trophy Image">
            </div>
            <div class="col-6 col-lg-4  text-center" style="position:relative;;top:-100px">
            
                <img src="assets/images/Cup02.png" class="img-fluid" alt="Trophy Image">
                <p style="color:#fff ;font-size:40px !important" class="mt-3"><i class="fa fa-lock"></i></p>
                <h2 style="color:#fff"  class="mt-2">Saudi Arabia</h2>
                <img src="assets/images/saudi.png" class="img-fluid mt-2" alt="Trophy Image">
            </div>
            <div class="col-lg-4  text-center" style="position:relative;;top:-100px">
                <img src="assets/images/Cup03.png" class="img-fluid" alt="Trophy Image">
                <p style="color:#fff;font-size:40px !important" class="mt-3"><i class="fa fa-lock"></i></p>
                <h2 style="color:#fff" class="mt-2">United Kingdom</h2>
                <img src="assets/images/uk.png" class="img-fluid mt-2" alt="Trophy Image">
            </div>
        </div>

    </div>
    
    <section class="faq-area pt-10 pb-0 pt-md-55 pt-xs-55 mb-6" style="margin-bottom:40px;padding-top:30px" id="faq">
        <div class="container">
        <div class="section-title-area section-title-area1 text-center mb--50">
                <span class="pretitle">FAQ'S</span>
                <h1 class="section-title">FAQ'S</h1>
                
            </div>
            <div class="row align-items-center pb-90 pb-md-30 pb-xs-30">
                
                <div class="col-lg-12 col-md-12">
                    <div class="faq-content-wrapper2 faq-wrap3 pr-30 pr-lg-0 pr-md-0 pr-xs-0">
                  
                        <div class="faq-que-list faq-que2 mb-30">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01.</span> How do I participate in the match?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="fs-14">
To participate, simply purchase a ticket for your entry to the big match. 
</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02.</span> How do I participate in the Car Raffle Draw at the match? 
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="fs-14">To participate, purchase a ticket to the match. Your entry will be included in the draw, and a winner will be chosen randomly.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03.</span> What is the cost of a ticket? 
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="fs-14">Please refer to the ‘Buy Tickets’ section of the website for all ticket pricing details.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                            <span>04.</span> How is the winner selected for the Car Raffle Draw? 
                                        </button>
                                    </h2>
                                    <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="fs-14">The winner of the draw will be chosen entirely by chance. The drawing process is typically conducted using a random number generator or a similar impartial method to ensure fairness.</br>
The company’s decision will be final in such matters and the draw will be under the supervision of the competent authorities (Department of Economic Development).
</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                            <span>05.</span> How do I know if this Raffle competition is fair? 
                                        </button>
                                    </h2>
                                    <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="fs-14">Yes, the Car Raffle Competition is fair because the draw will be under the supervision of the competent authorities (Department of Economic Development).

</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree4">
                                            <span>06.</span> How will I know if I've won the Car Raffle Draw?  
                                        </button>
                                    </h2>
                                    <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="fs-14">Winner will be announced at the conclusion of the match. Additionally, the results will be posted on the website and social media channels.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                            <span>07.</span> Are there any age or location restrictions for participating in the Car Raffle Draw?
                                        </button>
                                    </h2>
                                    <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree5" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="fs-14">There are no age restrictions. However, you need to purchase a ticket to the match to get a chance to win. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                            <span>08.</span> How do I claim my prize if I win? 
                                        </button>
                                    </h2>
                                    <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree6" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="fs-14">Prize claiming instructions will be provided upon notification of your win.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                            <span>09.</span> Is there a limit to the number of tickets I can purchase for the competition?
                                        </button>
                                    </h2>
                                    <div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="fs-14">The competition may have restrictions on the maximum number of tickets that can be purchased by a single participant. Please refer to the competition rules for this information.

<h4>For more information please email us at:info@legendsfleague.com</h4>
</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
                    
                </div>
            </div>
        </div>
    </section>

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
                    <!--    <div class="swiper-slide">
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
@endsection

@section('bottom-mid-scripts')
@endsection
    
@section('bottom-bot-scripts')
<script>
    // $(document).ready(function() {
    //     $(document).on('submit', '#ajax-win', function(event) {
    //         event.preventDefault();
    //         toastr.options.closeButton = true;
    //         toastr.options.progressBar = true;
    //         var name = $("#name").val(); // Extract the value from the input field
    //         var email = $("#email").val(); // Extract the value from the input field
    //         var phone = $("#phone").val(); // Extract the value from the input field
    //         var comment = $("#comment").val(); // Extract the value from the input field
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             }
    //         });
    //         $.ajax({
    //             url: "{{ route('win-us') }}",
    //             type: "POST",
    //             data: {
    //                 name: name,
    //                 email: email,
    //                 phone: phone,
    //                 comment: comment,
    //             },
    //             success: function(response) {
    //                 if (response.success) {
    //                     $("#ajax-win")[0].reset();
    //                     toastr.success('Request Submitted Successfully', { timeOut: 2000 })
    //                 }
    //             }
    //         });
    //     });
    // });
    
    </script> 
@endsection