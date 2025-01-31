<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!--Owl Carousel CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
    integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{url('')}}/assets/css/style.css" />

  <title>Gala Dinner</title>
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PZBV82MC');</script>
<!-- End Google Tag Manager -->

</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZBV82MC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div class="container desktop">
    <div class="banner py-4">
      <img class="img-fluid" src="{{url('')}}/assets/images/banner.webp" alt="Banner">
    </div>
    
        <div class="text-center mt-3 mb-4"><a href="https://wa.link/inj8sb"><img
          class="top-wa-btn animate__animated animate__bounceIn animate__infinite animate__slow"
          src="{{url('')}}/assets/images/wa-btn.webp" alt="WhatsApp"></a></div>

    <div class="plans text-center ">
      <!-- <h6>Are you ready for an unforgettable night in football? </h6> -->
      <h2>GET READY FOR A <br>
        NIGHT TO REMEMBER!</h2>

      <video width="100%" height="auto" id="myVideo" controls poster="{{url('')}}/assets/images/video-thumbnail.webp"
        onclick="togglePlayPause()">
        <source src="{{url('')}}/assets/GALA-NIGHT-ENG-FB.mp4" type="video/mp4">
        <source src="{{url('')}}/assets/GALA-NIGHT-ENG-FB.mp4" type="video/ogg">
        Your browser does not support the video tag.
      </video>

      <p class="text-center mt-5">
        Meet and greet with your favourite Football Superstar and get an opportunity to get
        your
        hands on signed
        memorabilia at the Gala Night of Legends Football League.

        <br><br>

        Get your front-row ticket to football history! This is a night you certainly don’t want to miss out on.
        So, don’t just watch history unfold, <span>be a part of it!</span>
      </p>

      <h2 class="mt-5">PACKAGES DETAIL</h2>

      <div class="d-flex align-items-center justify-content-center gap-5">
        <a href="#"><img class="img-fluid " src="{{url('')}}/assets/images/Silver_plan.webp" alt="Plan"></a>
        <a href="#"><img class="img-fluid " src="{{url('')}}/assets/images/Vvip_plan.webp" alt="Plan"></a>
        <a href="#"><img class="img-fluid " src="{{url('')}}/assets/images/Gold_plan.webp" alt="Plan"></a>
      </div>
    </div>

    <div class="about-us mt-5 text-center ">
      <h4>About Us</h4>
      <p class="mt-4">Welcome to Legend’s Football League Gala Night, a night you will not want to miss out on! Our Gala
        Night gives
        you a ONCE IN A LIFE TIME opportunity to meet legends of the game like Kaka, Roberto Carlos, Drogba and more in
        this night to remember. Get your front-row ticket to football history! </p>
    </div>

    <div class="register mt-5">
      <div class="row align-items-center ">
        <!--<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">-->
        <!--  <div class="bg py-5 px-4">-->
        <!--    <h5 class="ps-3">What’s Included?</h5>-->
        <!--    <ol class="mt-4">-->
        <!--      <li>Exclusive Dinner with Football Stars</li>-->
        <!--      <li>Free Match Tickets for Legends Football League</li>-->
        <!--      <li>Chance to Win Signed Merchandise</li>-->
        <!--      <li>Networking Opportunities</li>-->
        <!--    </ol>-->

        <!--    <a href="#" class="mt-5 ms-3">But Ticket</a>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="bg p-4 pt-1">
            <form action="{{route('gala-night')}}" method="post">
            @csrf  
              <div class="input-wrapper">
                <label class="name-label" for="name">Name</label>
                <input type="text" name="name" placeholder="Alex Xela" required>
              </div>

              <div class="input-wrapper">
                <label class="email-label" for="email">Email Address</label>
                <div class="position-relative">
                  <i class="fas fa-envelope envelope"></i>
                  <input type="email" name="email" placeholder="example@xyz.com" class="email" required>
                </div>
              </div>

              <div class="input-wrapper mb-4">
                <label class="phone-label" for="number">Phone Number</label>
                <div class="position-relative">
                  <img class="img-fluid flag" src="{{url('')}}/assets/images/flag.webp" alt="Flag">
                  <input type="number" name="phone" placeholder="589792820" class="number" required>
                </div>
              </div>

              <div class="mt-0 d-flex align-items-center gap-3">
                <input class="form-check-input checkbox" name="apply" type="checkbox" value="1" id="flexCheckDefault">
                <label class="checkbox-label" for="flexCheckDefault">T&C’s Apply</label>
              </div>

              <button type="submit" class="mt-4">Register Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer my-5">
      <div class="contact text-center d-flex flex-column align-items-center justify-content-center  gap-3">
        <a href="tel:+971542630384">+971 542630384</a>
        <a href="mailto:info@legendsfleague.com">info@legendsfleague.com</a>
      </div>

      <div class="social text-white d-flex align-items-center justify-content-center gap-3 mt-5">
        <a href="#">
          <div class="img-bg"><img width="12" src="{{url('')}}/assets/images/facebook.webp" alt="Social-link"></div>
        </a>
        <a href="#">
          <div class="img-bg"><img width="22" src="{{url('')}}/assets/images/twitter.webp" alt="Social-link"></div>
        </a>
        <a href="#">
          <div class="img-bg"><img width="22" src="{{url('')}}/assets/images/insta.webp" alt="Social-link"></div>
        </a>
        <a href="#">
          <div class="img-bg"><img width="22" src="{{url('')}}/assets/images/linkedin.webp" alt="Social-link"></div>
        </a>
      </div>

      <p class="mt-5">© 2023 Legendsfleague.com</p>
    </footer>
  </div>

  <div class="container mobile">
    <div class="banner py-4">
      <img class="img-fluid" src="{{url('')}}/assets/images/mobile-banner.webp" alt="Banner">
    </div>
    
        <div class="text-center mb-4"><a href="https://wa.link/inj8sb"><img
          class="top-wa-btn animate__animated animate__bounceIn animate__infinite animate__slow"
          src="{{url('')}}/assets/images/wa-btn.webp" alt="WhatsApp"></a></div>

    <div class="plans text-center ">
      <!-- <h6>Are you ready for an unforgettable night in football? </h6> -->
      <h2>GET READY FOR A <br>
        NIGHT TO REMEMBER!</h2>

      <video width="100%" height="auto" id="myVideo" controls poster="{{url('')}}/assets/images/video-thumbnail.webp"
        onclick="togglePlayPause()">
        <source src="{{url('')}}/assets/GALA-NIGHT-ENG-FB.mp4" type="video/mp4">
        <source src="{{url('')}}/assets/GALA-NIGHT-ENG-FB.mp4" type="video/ogg">
        Your browser does not support the video tag.
      </video>

      <p class="text-center mt-5">
        Meet and greet with your favourite Football Superstar and get an opportunity to get
        your
        hands on signed
        memorabilia at the Gala Night of Legends Football League.

        <br><br>

        Get your front-row ticket to football history! This is a night you certainly don’t want to miss out on.
        So, don’t just watch history unfold, <br><span>be a part of it!</span>
      </p>

      <h2 class="mt-5">PACKAGES DETAIL</h2>

      <div class="d-flex align-items-center justify-content-center">
        <a href="#"><img class="img-fluid " src="{{url('')}}/assets/images/Silver_plan.webp" alt="Plan"></a>
        <a href="#" class="vvip"><img class="img-fluid " src="{{url('')}}/assets/images/Vvip_plan.webp" alt="Plan"></a>
        <a href="#"><img class="img-fluid " src="{{url('')}}/assets/images/Gold_plan.webp" alt="Plan"></a>
      </div>
    </div>

    <div class="about-us mt-5 text-center ">
      <h4>About Us</h4>
      <p class="mt-4">Welcome to Legend’s Football League Gala Night, a night you will not want to miss out on! Our Gala
        Night gives
        you a ONCE IN A LIFE TIME opportunity to meet legends of the game like Kaka, Roberto Carlos, Drogba and more in
        this night to remember. Get your front-row ticket to football history! </p>
    </div>

    <div class="register mt-5">
      <div class="row align-items-center ">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="bg p-4 pt-1">
            <form action="{{route('gala-night')}}" method="post">
                @csrf 
              <div class="input-wrapper">
                <label class="name-label" for="name">Name</label>
                <input type="text" name="name" placeholder="Alex Xela" required>
              </div>

              <div class="input-wrapper">
                <label class="email-label" for="email">Email Address</label>
                <div class="position-relative">
                  <i class="fas fa-envelope envelope"></i>
                  <input type="email" name="email" placeholder="example@xyz.com" class="email" required>
                </div>
              </div>

              <div class="input-wrapper mb-4">
                <label class="phone-label" for="number">Phone Number</label>
                <div class="position-relative">
                  <img class="img-fluid flag" src="{{url('')}}/assets/images/flag.webp" alt="Flag">
                  <input type="number" name="phone" placeholder="589792820" class="number" required>
                </div>
              </div>

              <div class="mt-0 d-flex align-items-center gap-2">
                <input class="form-check-input checkbox" name="apply" type="checkbox" value="1" id="flexCheckDefault">
                <label class="checkbox-label" for="flexCheckDefault">T&C’s Apply</label>
              </div>

              <button class="mt-4">Register Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer my-5">
      <div class="contact text-center d-flex flex-column align-items-center justify-content-center  gap-3">
        <a href="tel:+971542630384">+971 542630384</a>
        <a href="mailto:info@legendsfleague.com">info@legendsfleague.com</a>
      </div>

      <div class="social text-white d-flex align-items-center justify-content-center gap-3 mt-5">
        <a href="#">
          <div class="img-bg"><img width="10" src="{{url('')}}/assets/images/facebook.webp" alt="Social-link"></div>
        </a>
        <a href="#">
          <div class="img-bg"><img width="20" src="{{url('')}}/assets/images/twitter.webp" alt="Social-link"></div>
        </a>
        <a href="#">
          <div class="img-bg"><img width="20" src="{{url('')}}/assets/images/insta.webp" alt="Social-link"></div>
        </a>
        <a href="#">
          <div class="img-bg"><img width="20" src="{{url('')}}/assets/images/linkedin.webp" alt="Social-link"></div>
        </a>
      </div>

      <p class="mt-5">© 2023 Legendsfleague.com</p>
    </footer>
  </div>
  
  <a href="https://wa.link/inj8sb" class="wa_logo" style="position: fixed; right: 30px; bottom:30px;"><img width="60" class="animate__animated animate__bounceIn animate__infinite animate__slow" src="{{url('')}}/assets/images/wa_logo.webp" alt="WhatsApp logo"></a>
@endsection

@section('bottom-mid-scripts')
@endsection
    
@section('bottom-bot-scripts')
<script src="{{url('')}}/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{url('')}}/assets/js/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
  integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  var video = document.getElementById("myVideo");

  function togglePlayPause() {
    if (video.paused) {
      video.play();
    } else {
      video.pause();
    }
  }

  // JavaScript to reset the marquee position when it reaches the end
  const marquee = document.querySelector('marquee');

  marquee.addEventListener('finish', function () {
    marquee.start();
  });
</script>
@endsection