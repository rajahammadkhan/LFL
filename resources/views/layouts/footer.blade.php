
    <!--================= Footer Start Here =================-->
    <div class="footer footer1">
        <div class="container-fluid" style="padding:0 30px">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img src="{{config('lfl.file_path').getSettings('site_logo_footer')}}" alt="footer-logo">
                            </div>
                            <p class="footer-text">{{getSettings('footer_about')}}</p>
                            <div class="social-links">
                                <a href="{{getSettings('social_facebook')}}" class="platform"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="{{getSettings('social_instagram')}}" class="platform"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="{{getSettings('social_tiktok')}}" class="platform"><i class="fab fa-tiktok"></i></a>
                                <a href="{{getSettings('social_youtube')}}" class="platform"><i
                                        class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title"><span class="decorator"></span> ESSENTIAL LINKS</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="{{route('about-us')}}">About Us</a></li>
                                <li class="widget-list-item"><a href="{{route('contact')}}">Contact Us</a></li>
                                <li class="widget-list-item"><a href="{{route('buy-tickets')}}">Buy Ticket</a></li>
                                <li class="widget-list-item"><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                                <li class="widget-list-item"><a href="{{route('terms-and-conditions')}}">Terms & Condition</a></li>
                                <li class="widget-list-item"><a href="{{route('match-schedule')}}#faq">Faqs</a></li>
                                <li class="widget-list-item"><a href="#">Blogs</a></li>
                               
                                <li class="widget-list-item"><a href="{{route('match-schedule')}}">Win Car</a></li>
                              

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget address-widget">
                            <h3 class="footer-widget-title"><span class="decorator"></span> GET IN TOUCH</h3>
                            <ul>
                                <li class="widget-list-item"><i class="fas fa-envelope-open"></i><a
                                        href="mailto:{{getSettings('site_email')}}">{{getSettings('site_email')}}</a></li>
                                <li class="widget-list-item"><i class="fas fa-phone"></i><a href="tel:{{getSettings('contact_no')}}">{{getSettings('contact_no')}}</a></li>
                                <li class="widget-list-item"><i class="fas fa-map-marker-alt"></i> <span>{{getSettings('address')}} </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget news-widget">
                            <h3 class="footer-widget-title"><span class="decorator"></span> POST GALLERY</h3>
                            <div class="recent-post">
                                <div class="picture">
                                    <a href="#">
                                        <img src="assets/images/footer/01.jpg" alt="side-post-image">
                                    </a>
                                </div>
                                <div class="picture">
                                    <a href="#">
                                        <img src="assets/images/footer/02.jpg" alt="side-post-image">
                                    </a>
                                </div>
                                <div class="picture">
                                    <a href="#">
                                        <img src="assets/images/footer/03.jpg" alt="side-post-image">
                                    </a>
                                </div>
                            </div>
                            <div class="recent-post post2">
                                <div class="picture">
                                    <a href="#">
                                        <img src="assets/images/footer/04.jpg" alt="side-post-image">
                                    </a>
                                </div>
                                <div class="picture">
                                    <a href="#">
                                        <img src="assets/images/footer/05.jpg" alt="side-post-image">
                                    </a>
                                </div>
                                <div class="picture">
                                    <a href="#">
                                        <img src="assets/images/footer/06.jpg" alt="side-post-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container-fluid">
                <div class="bottom-area-inner">
                    <span class="copyright">COPYRIGHT @ <span class="brand">LEGEND'S FOOTBAL
LEAGUE </span> - <script>document.write(new Date().getFullYear())</script></span>
                    <div class="footer-bottom-links">
                        <a href="{{route('terms-and-conditions')}}">TERMS & CONDITONS</a>
                        <a href="{{route('match-schedule')}}#faq">FAQ</a>
                        <a href="#">CAREER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Footer End Here =================-->
