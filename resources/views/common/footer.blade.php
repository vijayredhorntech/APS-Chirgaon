<!-- footer block -->
{{--<footer class="w3l-footer-29-main">--}}
{{--    <div class="footer-29 pt-5 pb-4">--}}
{{--        <div class="container pt-md-4">--}}
{{--            <div class="row footer-top-29">--}}
{{--                <div class="col-lg-5 col-md-4 footer-list-29">--}}
{{--                    <h6 class="footer-title-29">Contact Info </h6>--}}
{{--                    <p class="mb-2 pe-xl-5">Address : Near Satsang Road, Sunda(Chirgaon), H.P.(171208)--}}
{{--                    </p>--}}
{{--                    <p class="mb-2">Phone Number : <a href="tel:+91 88949-49194">+91 88949-49194</a></p>--}}
{{--                    <p class="mb-2">Email : <a href="mailto:apschirgaon@gmail.com">apschirgaon@gmail.com</a></p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-6 footer-list-29 mt-md-0 mt-4">--}}
{{--                    <ul>--}}
{{--                        <h6 class="footer-title-29">Quick Links</h6>--}}
{{--                        <li><a href="/about">About Us</a></li>--}}
{{--                        <li><a href="/courses">Courses</a></li>--}}
{{--                        <li><a href="/teachers">Become a Teacher</a></li>--}}
{{--                        <li><a href="/contact">Contact Us</a></li>--}}
{{--                        <li style="display: flex;flex-direction: row;"><a href="https://www.facebook.com/aphschirgaon" target="_blank" style="margin-right: 20px;font-size: 1.5rem"><i class="fa fa-facebook"></i></a> <a href="https://instagram.com/apschirgaon?igshid=ZDdkNTZiNTM=" target="_blank" style="font-size: 1.5rem"><i class="fa fa-instagram"></i></a> </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-4 col-sm-8 footer-list-29 mt-lg-0 mt-4 ps-lg-5">--}}
{{--                    <h6 class="footer-title-29">Subscribe</h6>--}}
{{--                    <form action="#" class="subscribe d-flex" method="post">--}}
{{--                        <input type="email" name="email" placeholder="Email Address" required="">--}}
{{--                        <button class="button-style"><span class="fa fa-paper-plane"--}}
{{--                                                           aria-hidden="true"></span></button>--}}
{{--                    </form>--}}
{{--                    <p class="mt-3">Subscribe to our mailing list and get updates to your email inbox.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- copyright -->--}}
{{--            <p class="copy-footer-29 text-center pt-lg-2 mt-5 pb-2">© 2023 APS Chirgaon. All rights reserved. Design--}}
{{--                by <a href="https://redhorntech.com/" target="_blank">Red Horn Tech</a></p>--}}
{{--            <!-- //copyright -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
<!-- //footer block -->


<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 ">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>Adarsh Public School, Near Satsang Road, Sunda, Chirgaon Himachal Pradesh, (171208)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>+91 88949-49194</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>apschirgaon@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-1">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{route('index')}}"><img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="margin-top: 20px">Adarsh Public School is a modern
                                school founded in the year 2009 under Society for Education and Environment Development. It is
                                surrounded by lush apple and cherry orchards crowning Chirgaon valley in Shimla Hills. Education
                                away from home has been a tradition in Indian society. We have a rich history of prominent
                                educational institutions, imparting value based education for decades and generations.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <ul class="social_icon">
                                <li><a href="https://www.facebook.com/aphschirgaon" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
{{--                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>--}}
                                <li><a href="https://instagram.com/apschirgaon?igshid=ZDdkNTZiNTM=" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
{{--                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="{{route('about')}}#about">About Us</a></li>
                            <li><a href="{{route('about')}}#team">Our Team</a></li>
                            <li><a href="{{route('gallery')}}">Our Gallery</a></li>
                            <li><a href="{{route('index')}}#news">News</a></li>
                            <li><a href="{{route('academic')}}">Academics</a></li>
                            <li><a href="{{route('contact')}}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2023, All Right Reserved <a href="www.redhorntech.com">Red Horn Tech</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('academic')}}">Academics</a></li>
                            <li><a href="{{route('gallery')}}">Gallery</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Js scripts -->
<!-- move top -->

