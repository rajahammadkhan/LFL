@extends('layouts.master')

@section('top-styles')
<style>
    .ticket_div_one{
        border: 1px solid #fff;
        width: 100%;
        height: 250px;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .left_content{
        border-right: 1px solid #fff;
        padding: 0px 40px;
    }
    .right_content{
        width: 100%;
    }
    .sports-ticket {
  padding: 110px 15px 30px;
  position: relative;
  border-radius: 30px;
  background: #e41b23;
  text-align: center;
  margin-bottom: 20px;
  border:4px solid #e41b23;
 
}

@media (max-width: 575px) {
  .sports-ticket {
    max-width: 345px;
    margin-left: auto;
    margin-right: auto;
    padding-top: 106px;
  }
}

.sports-ticket * {
  position: relative;
  z-index: 2;
}

.sports-ticket .ticket-title {
  color: #000;
  margin-bottom: 12px;
  font-size: 72px;
}

@media (max-width: 575px) {
  .sports-ticket .ticket-title {
    font-size: 72px;
  }
}

.sports-ticket .ticket-title sup {
  font-weight: 400;
  font-size: 60%;
  top: -0.6em;
}

.sports-ticket p {
  color: #000;
  margin: 0;
  margin-bottom: 12px;
}

@media (max-width: 575px) {
  .sports-ticket p {
    margin-bottom: 26px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .sports-ticket p {
    margin-bottom: 26px;
  }
}

.sports-ticket p span {
  font-weight: 700;
  color:#000;
}

.sports-ticket .custom-button {
  padding: 11px 44px;
}

.sports-ticket::before, .sports-ticket::after {
  border-radius: 30px;
}

.sports-ticket::after {
  width: calc(100% - 6px);
  height: calc(100% - 6px);
  z-index: 1;
  background-color: #ffffff;
}

.sports-ticket::before {
  height: 100%;
  width: 100%;
  background: -webkit-gradient(linear, left top, right top, color-stop(17%, #5560ff), color-stop(63%, #aa52a1), to(#ff4343));
  background: linear-gradient(90deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);
  background: -webkit-linear-gradient(90deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);
}

.sports-ticket .cate {
  display: block;
  width: auto;
  background: linear-gradient(169deg, #FFD700 17%, #aa52a1 63%, #ff4343 100%);
  background: -webkit-linear-gradient(169deg, #000 27%, #000 43%, #000 100%);
  color: #ffffff;
  z-index: 9;
  border-radius: 0 30px 30px 0;
  position: absolute;
  left: 0;
  top: 30px;
  font-size: 20px;
  text-transform: capitalize;
  padding: 11px 40px;
  max-width: 100%;
  font-weight: 700;
 
}

@media (min-width: 768px) and (max-width: 991px) {
  .sports-ticket .cate {
    font-size: 16px;
    padding: 11px 20px;
  }
}

@media (max-width: 575px) {
  .sports-ticket .cate {
    font-size: 16px;
  }
}

.sports-ticket.style-two {
  margin-bottom: 49px;
}

.sports-ticket.style-two .cate {
  padding: 11px 25px;
}

.sports-ticket .custom-button {
  position: absolute;
  bottom: 0;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(50%);
  transform: translateX(-50%) translateY(50%);
  width: 38px;
  line-height: 38px;
  height: 38px;
  border-radius: 50%;
  color: #ffffff;
  background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);
}

@media (min-width: 992px) and (max-width: 1199px) {
  .sports-ticket.style-two {
    padding-top: 100px;
    padding-bottom: 25px;
  }
  .sports-ticket.style-two .cate {
    font-size: 16px;
    padding: 8px 20px;
    font-weight: 600;
  }
}

</style>
@endsection

@section('content') 
        <!--================= Banner Section Start Here =================-->
        <div class="banner banner1">
            <div class="inner-page-banner banner-bg">
                <div class="container">
                    <div class="banner-content">
                        <div class="page-path">
                            <ul>
                                <li><a class="home-page-link" href="index.html">Home</a></li>
                                <li><a class="current-page" href="#">BUY TICKETS</a></li>
                            </ul>
                        </div>
                        <h1 class="banner-heading">BUY TICKETS</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Banner Section End Here =================-->
    <!--================= Match Result Section Start Here =================-->
    <div class="rts-match-result-section rts-match-result-section2 rts-match-schedule-section section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <img src="{{url('')}}/assets/images/team/team_logo_2.png" alt="">
                    <h2 style="color: #fff; text-align: center; margin-top: 10px;">RED DEVILS</h2>
                    <h6 style="color: #fff; text-align: center; margin-top: 5px;"></h6>
                </div>
                <div class="col-md-2">
                    <h2 style="color: #fff; text-align: center; margin-top: 50px;">V.S</h2>
                    <p style="color: #fff; text-align: center; margin-top: 10px;">16:00, 18 November,2023</p>
                </div>
                <div class="col-md-2">
                    <img src="{{url('')}}/assets/images/team/team_logo_1.png" alt="">
                    <h2 style="color: #fff; text-align: center; margin-top: 10px;">World XI</h2>
                    <h6 style="color: #fff; text-align: center; margin-top: 5px;"></h6>
                </div>
                <div class="col-md-3"></div>
            </div>
           <!-- <div class="row justify-content-center" style="margin-top: 50px;">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="ticket_div_one">
                        <div class="left_content">
                            <h1 style="color: #fff; font-size: 40px; text-align: center;">200 AED</h1>
                            <p style="font-weight: 900; color: red; text-align: center; margin-top: 10px;">GENERAL</p>
                        </div>
                        <div class="right_content">
                            <p style="color: #fff; text-align: center;"><i class="fal fa-check"></i>&nbsp;&nbsp; Regular Seating</p>
                            <p style="color: #fff; text-align: center; margin-top: 5px; margin-left: 17px;"><i class="fal fa-check"></i>&nbsp;&nbsp; 2 Snacks & Drinks</p>
                            <p style="color: #fff; text-align: center; margin-top: 5px; margin-left: 17px;"><i class="fal fa-check"></i>&nbsp;&nbsp; Photo With Player</p>
                            <a href="#" class="btn-11" style="margin-top: 10px; margin-left: 98px;">Get Tickets <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                <div class="ticket_div_one">
                        <div class="left_content">
                            <h1 style="color: #fff; font-size: 40px; text-align: center;">500 AED</h1>
                            <p style="font-weight: 900; color: red; text-align: center; margin-top: 10px;">SPECIAL</p>
                        </div>
                        <div class="right_content">
                            <p style="color: #fff; text-align: center;"><i class="fal fa-check"></i>&nbsp;&nbsp; Regular Seating</p>
                            <p style="color: #fff; text-align: center; margin-top: 5px; margin-left: 17px;"><i class="fal fa-check"></i>&nbsp;&nbsp; 2 Snacks & Drinks</p>
                            <p style="color: #fff; text-align: center; margin-top: 5px; margin-left: 17px;"><i class="fal fa-check"></i>&nbsp;&nbsp; Photo With Player</p>
                            <a href="#" class="btn-11" style="margin-top: 10px; margin-left: 98px;">Get Tickets <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>-->
         <!--   <div class="row justify-content-center" style="margin-top: 50px;">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="ticket_div_one">
                        <div class="left_content">
                            <h1 style="color: #fff; font-size: 40px; text-align: center;">1000 AED</h1>
                            <p style="font-weight: 900; color: red; text-align: center; margin-top: 10px;">PREMIUM</p>
                        </div>
                        <div class="right_content">
                            <p style="color: #fff; text-align: center;"><i class="fal fa-check"></i>&nbsp;&nbsp; Regular Seating</p>
                            <p style="color: #fff; text-align: center; margin-top: 5px; margin-left: 17px;"><i class="fal fa-check"></i>&nbsp;&nbsp; 2 Snacks & Drinks</p>
                            <p style="color: #fff; text-align: center; margin-top: 5px; margin-left: 17px;"><i class="fal fa-check"></i>&nbsp;&nbsp; Photo With Player</p>
                            <a href="#" class="btn-11" style="margin-top: 10px; margin-left: 98px;">Get Tickets <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                <div class="ticket_div_one">
                        <div class="left_content">
                            <h1 style="color: #fff; font-size: 40px; text-align: center;">2000 AED</h1>
                            <p style="font-weight: 900; color: red; text-align: center; margin-top: 10px;">VIP</p>
                        </div>
                        <div class="right_content">
                            <p style="color: #fff; text-align: center;"><i class="fal fa-check"></i>&nbsp;&nbsp; Regular Seating</p>
                            <p style="color: #fff; text-align: center; margin-top: 5px; margin-left: 17px;"><i class="fal fa-check"></i>&nbsp;&nbsp; 2 Snacks & Drinks</p>
                            <p style="color: #fff; text-align: center; margin-top: 5px; margin-left: 17px;"><i class="fal fa-check"></i>&nbsp;&nbsp; Photo With Player</p>
                            <a href="#" class="btn-11" style="margin-top: 10px; margin-left: 98px;">Get Tickets <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>-->
            <div class="row justify-content-center mb-30-none mt-3" >
                <div class="col-sm-12 col-md-12">
                     <div class="row justify-content-center mb-30-none mt-3" >
                                    <div class="col-sm-6 col-md-4">
                    <div class="sports-ticket">
                        <span class="cate">SILVER</span>
                        <h2 class="ticket-title"><sup>AED</sup>100</h2>
                       
                        <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11" style="margin-right:0;background:#000 ;border-radius:30px">Get Tickets</a>
                         <h2 class="ticket-title"style="font-size:32px;margin-top:15px">Buy Your Ticket Now & Win A Car</h2>
                       <img src="{{url('')}}/assets/images/car-pic6.png" alt="" class="car-image">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="sports-ticket">
                    <span class="cate">GOLD</span>
                        <h2 class="ticket-title"><sup>AED</sup>125</h2>
                        
                            <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11" style="margin-right:0;background:#000;border-radius:30px">Get Tickets</a>
                             <h2 class="ticket-title"style="font-size:32px;margin-top:15px">Buy Your Ticket Now & Win A Car</h2>
                       <img src="{{url('')}}/assets/images/car-pic6.png" alt="" class="car-image">
                    </div>
                    </div>
                <div class="col-sm-6 col-md-4">
                    <div class="sports-ticket">
                    <span class="cate">PLANTINUM</span>
                        <h2 class="ticket-title"><sup>AED</sup>175</h2>
                       
                        <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11" style="margin-right:0;background:#000;border-radius:30px">Get Tickets</a>
                         <h2 class="ticket-title"style="font-size:32px;margin-top:15px">Buy Your Ticket Now & Win A Car</h2>
                       <img src="{{url('')}}/assets/images/car-pic6.png" alt="" class="car-image">
                    </div>
                </div>
               
                </div>
                   
                     <div class="row justify-content-center mb-30-none mt-3" >
                <div class="col-sm-12 col-md-12">
                    
                    <div class="sports-ticket row " style=" border:4px solid #c9c9c9;background: -webkit-linear-gradient(169deg, #c9c9c9 17%, #c9c9c9 43%, #c9c9c9 100%);"> <span class="cate"style=" background: -webkit-linear-gradient(169deg, #000 17%, #000 43%, #000 100%);font-size:30px">Premium</span>
                    <div class="col-sm-12 col-md-4">   
                    <h2 class="ticket-title"><sup>AED</sup>200</h2>
                             <p ><i class="fal fa-check"></i>&nbsp;&nbsp;<span> Excellent Seating

</span></p>
                            <p ><i class="fal fa-check"></i>&nbsp;&nbsp;<span> Special Amenities</span></p>
                            <p><i class="fal fa-check"></i>&nbsp;&nbsp; <span>Special View <span></p>
                        <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11" style="background: -webkit-linear-gradient(169deg, #000 17%, #000 43%, #000 100%);border-radius:30px;margin-right:0px;margin-top:15;color:#fff"><span style="color:#fff">Get Tickets </span></a>
                       </div>
                       <div class="col-sm-12 col-md-4">  
                       
                       <h2 class="ticket-title"style="font-size:32px">Legend's Football League</h2>
                       <table class="table mt-3">
  
  <tbody>
    <tr >
      
      <td style="border-right: 1px solid #fff;
    border-bottom: 1px solid #fff;color:#000;font-size:20px"> <i class="fal fa-calendar"></i> 18 November,2023 </td>
      <td  style="
    border-bottom: 1px solid #fff;color:#000;font-size:20px"><i class="fal fa-clock"></i> 4.00 pm </td>
      
    </tr>
    <tr>
      
      <td  style="border-right: 1px solid #fff;border-bottom: 1px solid #fff;color:#000;font-size:20px"><i class="fal fa-map"></i> Alnasar stadium UAE,Dubai </td>
      <td style= "
    border-bottom: 1px solid #fff;color:#000;font-size:20px"><i class="fal fa-money"></i> <sup>AED</sup>200</td>
      
    </tr>
    
  </tbody>
</table>

                        </div>
                       <div class="col-sm-12 col-md-4">  
                       <h2 class="ticket-title"style="font-size:32px">Buy Your Ticket Now & Win A Car</h2>
                       <img src="{{url('')}}/assets/images/car-pic6.png" alt="" class="car-image">

                        </div>
                    </div>
                       

                    </div>

            </div>      
                    <div class="row justify-content-center mb-30-none mt-3" >
                <div class="col-sm-12 col-md-12">
                    
                    <div class="sports-ticket row " style=" border:4px solid #852040;background: -webkit-linear-gradient(169deg, #852040 17%, #852040 43%, #852040 100%);"> <span class="cate"style=" background: -webkit-linear-gradient(169deg, #000 17%, #000 43%, #000 100%);font-size:30px">Vip</span>
                    <div class="col-sm-12 col-md-4">   
                    <h2 class="ticket-title" style="color:#fff;"><sup>AED</sup>500</h2>
                             <p style="color:#fff;"><i class="fal fa-check"></i>&nbsp;&nbsp;<span style="color:#fff;"> Excellent Seating

</span></p>
                            <p style="color:#fff;"><i class="fal fa-check"></i>&nbsp;&nbsp;<span style="color:#fff;"> Special Amenities</span></p>
                            <p style="color:#fff;"><i class="fal fa-check"></i>&nbsp;&nbsp; <span style="color:#fff;">Special View <span></p>
                        <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11" style="border-radius:30px;background: -webkit-linear-gradient(169deg, #000 17%, #000 43%, #000 100%);margin-right:0px;margin-top:15;color:#fff"><span style="color:#fff">Get Tickets </span></a>
                       </div>
                       <div class="col-sm-12 col-md-4">  
                       
                       <h2 class="ticket-title"style="font-size:32px;color:#fff;">Legend's Football League</h2>
                       <table class="table mt-3">
  
  <tbody>
    <tr >
      
      <td style="border-right: 1px solid #000;
    border-bottom: 1px solid #000;color:#fff;font-size:20px"> <i class="fal fa-calendar"></i> 18 November,2023 </td>
      <td  style="
    border-bottom: 1px solid #000;color:#fff;font-size:20px"><i class="fal fa-clock"></i> 4.00 pm </td>
      
    </tr>
    <tr>
      
      <td  style="border-right: 1px solid #000;border-bottom: 1px solid #000;color:#fff;font-size:20px"><i class="fal fa-map"></i> Alnasar stadium UAE,Dubai </td>
      <td style= "
    border-bottom: 1px solid #000;color:#fff;font-size:20px"><i class="fal fa-money"></i> <sup>AED</sup>500</td>
      
    </tr>
    
  </tbody>
</table>

                        </div>
                       <div class="col-sm-12 col-md-4">  
                       <h2 class="ticket-title"style="font-size:32px;color:#fff;">Buy Your Ticket Now & Win A Car</h2>
                       <img src="{{url('')}}/assets/images/car-pic6.png" alt="" class="car-image">

                        </div>
                    </div>
                       </div>
                    </div>
                    <div class="sports-ticket row " style=" border:4px solid #eaca2a;background: -webkit-linear-gradient(169deg, #eaca2a 17%, #eaca2a 43%, #eaca2a 100%);"> <span class="cate"style=" background: -webkit-linear-gradient(169deg, #000 17%, #000 43%, #000 100%);font-size:25px">CORPORATE PAX 35</span>
                    <div class="col-sm-12 col-md-4">   
                    <h2 class="ticket-title"><sup>AED</sup>50,000</h2>
                             <p ><i class="fal fa-check"></i>&nbsp;&nbsp;<span> Premium Seating

</span></p>
                            <p ><i class="fal fa-check"></i>&nbsp;&nbsp;<span> Exclusive Perks</span></p>
                            <p><i class="fal fa-check"></i>&nbsp;&nbsp; <span>Premium Merchandise <span></p>
                        <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11" style="background: -webkit-linear-gradient(169deg, #000 17%, #000 43%, #000 100%);margin-right:0px;margin-top:15;color:#fff;border-radius:30px;"><span style="color:#fff">Get Tickets </span></a>
                       </div>
                       <div class="col-sm-12 col-md-4">  
                       
                       <h2 class="ticket-title"style="font-size:32px">Legend's Football League</h2>
                       <table class="table mt-3">
  
  <tbody>
    <tr >
      
      <td style="border-right: 1px solid #fff;
    border-bottom: 1px solid #fff;color:#000;font-size:20px"> <i class="fal fa-calendar"></i> 18 November,2023 </td>
      <td  style="
    border-bottom: 1px solid #fff;color:#000;font-size:20px"><i class="fal fa-clock"></i> 4.00 pm </td>
      
    </tr>
    <tr>
      
      <td  style="border-right: 1px solid #fff;border-bottom: 1px solid #fff;color:#000;font-size:20px"><i class="fal fa-map"></i> Alnasar stadium UAE,Dubai </td>
      <td style= "
    border-bottom: 1px solid #fff;color:#000;font-size:20px"><i class="fal fa-money"></i> <sup>AED</sup>50000</td>
      
    </tr>
    
  </tbody>
</table>

                        </div>
                       <div class="col-sm-12 col-md-4">  
                       <h2 class="ticket-title"style="font-size:32px">Buy Your Ticket Now & Win A Car</h2>
                       <img src="{{url('')}}/assets/images/car-pic6.png" alt="" class="car-image">

                        </div>
                    </div>
            
                                <div class="sports-ticket row " style=" border:4px solid #eaca2a;background: -webkit-linear-gradient(169deg, #eaca2a 17%, #eaca2a 43%, #eaca2a 100%);"> <span class="cate"style=" background: -webkit-linear-gradient(169deg, #000 17%, #000 43%, #000 100%);font-size:25px">CORPORATE PAX 47</span>
                    <div class="col-sm-12 col-md-4">   
                    <h2 class="ticket-title"><sup>AED</sup>70,000</h2>
                             <p ><i class="fal fa-check"></i>&nbsp;&nbsp;<span> Premium Seating

</span></p>
                            <p ><i class="fal fa-check"></i>&nbsp;&nbsp;<span> Exclusive Perks</span></p>
                            <p><i class="fal fa-check"></i>&nbsp;&nbsp; <span>Premium Merchandise <span></p>
                        <a href="https://events.q-tickets.com/uae/eventdetails/4004309302/legends-football-league" class="btn-11" style="background: -webkit-linear-gradient(169deg, #000 17%, #000 43%, #000 100%);margin-right:0px;margin-top:15;color:#fff;border-radius:30px;"><span style="color:#fff">Get Tickets </span></a>
                       </div>
                       <div class="col-sm-12 col-md-4">  
                       
                       <h2 class="ticket-title"style="font-size:32px">Legend's Football League</h2>
                       <table class="table mt-3">
  
  <tbody>
    <tr >
      
      <td style="border-right: 1px solid #fff;
    border-bottom: 1px solid #fff;color:#000;font-size:20px"> <i class="fal fa-calendar"></i> 18 November,2023 </td>
      <td  style="
    border-bottom: 1px solid #fff;color:#000;font-size:20px"><i class="fal fa-clock"></i> 4.00 pm </td>
      
    </tr>
    <tr>
      
      <td  style="border-right: 1px solid #fff;border-bottom: 1px solid #fff;color:#000;font-size:20px"><i class="fal fa-map"></i> Alnasar stadium UAE,Dubai </td>
      <td style= "
    border-bottom: 1px solid #fff;color:#000;font-size:20px"><i class="fal fa-money"></i> <sup>AED</sup>70000</td>
      
    </tr>
    
  </tbody>
</table>

                        </div>
                       <div class="col-sm-12 col-md-4">  
                       <h2 class="ticket-title"style="font-size:32px">Buy Your Ticket Now & Win A Car</h2>
                       <img src="{{url('')}}/assets/images/car-pic6.png" alt="" class="car-image">

                        </div>
                    </div>
            
            <img src="{{url('')}}/assets/images/Stadium-Pic.png" alt="" class="image-fluid">
                </div>

            </div>
        </div>
    </div>
    <!--================= Match Result Section End Here =================-->
    
@endsection

@section('bottom-mid-scripts')
@endsection
    
@section('bottom-bot-scripts')
@endsection