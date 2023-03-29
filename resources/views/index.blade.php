@extends('common.master')

@section('section')

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                    <div class="col-md-6">
                        <h3 class="mb-lg-4 mb-3">Your Kids Deserve The<span class="d-block">Best Education</span>
                        </h3>
                        <p class="banner-sub">Active Learning, Expert Teachers & Safe Environment</p>
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="{{route('contact')}}" class="btn btn-style mt-lg-5 mt-4">Admission Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
                        <div class="sub-banner-image mx-auto">
                            <img src="{{asset('assets/images/boy.png')}}" class="img-fluid position-relative" alt=" ">
                        </div>
                        <div class="banner-style-1 position-absolute">
                            <div class="banner-style-2 position-relative">
                                <h4>Back to School</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->



    <!-- home 4grids block -->
    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Best Features</p>
                <h3 class="title-style">Achieve Your Goals With APS School</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box icon-box-clr-1">
                        <div class="icon"><i class="fas fa-user-friends"></i></div>
                        <h4 class="title"><a href="{{route('about')}}">Expert Teachers</a></h4>
                        <p>All of our highly trained teachers possess many years of educational experience paired with a
                            passion for growing and nurturing our students. Though the teachers lead the way, we also
                            foster self-motivation, critical thinking, and accountability in our students. Our small
                            class sizes deliver a very personalized and engaging learning experience where every student
                            is valued and recognized.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-md-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <div class="icon"><i class="fas fa-book-reader"></i></div>
                        <h4 class="title"><a href="{{route('about')}}">Quality Education</a></h4>
                        <p>A good quality education is one that provides all learners with capabilities they require to
                            become economically productive, develop sustainable livelihoods, contribute to peaceful and
                            democratic societies and enhance individual well-being. The learning outcomes that are
                            required vary according to context but at the end of the basic education cycle must include
                            threshold levels of literacy and numeracy, basic scientific knowledge and life skills
                            including awareness and prevention of disease.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <div class="icon"><i class="fas fa-user-graduate"></i></div>
                        <h4 class="title"><a href="{{route('about')}}">
                                Our Curriculum</a></h4>
                        <p>Our curriculum and programs are differentiated based on students' needs. Our supportive
                            learning environment enhances each unique student’s skill set by guiding them through
                            hands-on academic activities. Our Learning Support Team provides each student with
                            opportunity to grow in areas of strength and provide hands on engagement and learning so all
                            students can reach their full potential.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-4">
                        <div class="icon"><i class="fas fa-university"></i></div>
                        <h4 class="title"><a href="{{route('about')}}">Real World Application</a></h4>
                        <p>Real-world application is critical. Our programs are developed not only to promote student
                            success in the classroom, but far beyond it and for years to come. Henderson International
                            students are equipped with life tools. Students are confident, inspired and prepared.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home 4grids block -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
    <!-- home image with content block -->
    <section class="w3l-servicesblock pt-lg-5 pt-4 pb-5 mb-lg-5" id="about">
        <div class="container pb-md-5 pb-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="{{asset('assets/images/bestchoise.jpg')}}" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">Get a Appointment Today!</h6>
                        <p>Contact Us to know more information.</p>
                        <a href="tel:http://+91 8894949194"><i class="fas fa-phone-alt"></i>+91 88949-49194</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">We Are The Best Choice For Your Child</h3>
                    <p class="mt-4">We provide The Best Learning Platform along with Top Educator, practice section, and mock tests.</p>
                    <ul class="mt-4 list-style-lis pt-lg-1">
                        <li><i class="fas fa-check-circle"></i>Special Education</li>
                        <li><i class="fas fa-check-circle"></i>Best Quality Interaction</li>
                        <li><i class="fas fa-check-circle"></i>Systematic Learning Activated</li>
                        <li><i class="fas fa-check-circle"></i>24/7 Availability</li>
                        <li><i class="fas fa-check-circle"></i>Exponential Professional Growth & Learning Opportunities</li>
                    </ul>
                    <a href="{{asset('/contact')}}" class="btn btn-style mt-5">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //home image with content block -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>

    <!-- courses section -->
{{--    <div class="w3l-grids-block-5 home-course-bg py-5" id="courses">--}}
{{--        <div class="container py-md-5 py-4">--}}
{{--            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">--}}
{{--                <p class="text-uppercase">Best Courses</p>--}}
{{--                <h3 class="title-style">Find The Right Course For You</h3>--}}
{{--            </div>--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="coursecard-single">--}}
{{--                        <div class="grids5-info position-relative">--}}
{{--                            <img src="assets/images/c1.jpg" alt="" class="img-fluid"/>--}}
{{--                            <div class="meta-list">--}}
{{--                                <a href="courses.html">Art & Design</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="content-main-top">--}}
{{--                            <div class="content-top mb-4 mt-3">--}}
{{--                                <ul class="list-unstyled d-flex align-items-center justify-content-between">--}}
{{--                                    <li><i class="fas fa-book-open"></i> 43 Lesson</li>--}}
{{--                                    <li><i class="fas fa-star"></i> 4.5</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h4><a href="courses.html">Educational Programs</a></h4>--}}
{{--                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">--}}
{{--                                <h6>$42.00</h6>--}}
{{--                                <a class="btn btn-style-primary" href="courses.html">Know Details<i--}}
{{--                                        class="fas fa-arrow-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">--}}
{{--                    <div class="coursecard-single">--}}
{{--                        <div class="grids5-info position-relative">--}}
{{--                            <img src="assets/images/c2.jpg" alt="" class="img-fluid"/>--}}
{{--                            <div class="meta-list">--}}
{{--                                <a href="courses.html" class="sec-2">Meditation</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="content-main-top">--}}
{{--                            <div class="content-top mb-4 mt-3">--}}
{{--                                <ul class="list-unstyled d-flex align-items-center justify-content-between">--}}
{{--                                    <li><i class="fas fa-book-open"></i> 72 Lesson</li>--}}
{{--                                    <li><i class="fas fa-star"></i> 4.3</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h4><a href="courses.html">Best Meditation Classes</a></h4>--}}
{{--                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">--}}
{{--                                <h6>$36.00</h6>--}}
{{--                                <a class="btn btn-style-primary" href="courses.html">Know Details<i--}}
{{--                                        class="fas fa-arrow-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">--}}
{{--                    <div class="coursecard-single">--}}
{{--                        <div class="grids5-info position-relative">--}}
{{--                            <img src="assets/images/c3.jpg" alt="" class="img-fluid"/>--}}
{{--                            <div class="meta-list">--}}
{{--                                <a href="courses.html" class="sec-3">Games</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="content-main-top">--}}
{{--                            <div class="content-top mb-4 mt-3">--}}
{{--                                <ul class="list-unstyled d-flex align-items-center justify-content-between">--}}
{{--                                    <li><i class="fas fa-book-open"></i> 14 Lesson</li>--}}
{{--                                    <li><i class="fas fa-star"></i> 4.2</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h4><a href="courses.html">Games Program in a Week</a></h4>--}}
{{--                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">--}}
{{--                                <h6>$30.00</h6>--}}
{{--                                <a class="btn btn-style-primary" href="courses.html">Know Details<i--}}
{{--                                        class="fas fa-arrow-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="text-center mt-sm-5 mt-4 pt-sm-0 pt-1">--}}
{{--                <a class="btn btn-style btn-style-secondary mt-sm-3" href="courses.html">--}}
{{--                    Browse more courses</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- //courses section -->

    <!-- why choose block -->
    <section class="w3l-service-1 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Why Choose Us</p>
                <h3 class="title-style">Tools For Teachers And Learners</h3>
            </div>
            <div class="row content23-col-2 text-center">
                <div class="col-md-6">
                    <div class="content23-grid content23-grid1">
                        <h4><a href="{{route('about')}}">Expert Teachers</a></h4>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="content23-grid content23-grid2">
                        <h4><a href="{{route('about')}}">Safe Environment</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //why choose block -->

    <!-- stats block -->
{{--    <section class="w3-stats pt-4 pb-5" id="stats">--}}
{{--        <div class="container pb-md-5 pb-4">--}}
{{--            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">--}}
{{--                <p class="text-uppercase">Our Statistics</p>--}}
{{--                <h3 class="title-style">We are Proud to Share with You</h3>--}}
{{--            </div>--}}
{{--            <div class="row text-center pt-4">--}}
{{--                <div class="col-md-3 col-6">--}}
{{--                    <div class="counter">--}}
{{--                        <img src="assets/images/icon-1.png" alt="" class="img-fluid">--}}
{{--                        <div class="timer count-title count-number mt-sm-1" data-to="36076" data-speed="1500"></div>--}}
{{--                        <p class="count-text">Students Enrolled</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-6">--}}
{{--                    <div class="counter">--}}
{{--                        <img src="assets/images/icon-2.png" alt="" class="img-fluid">--}}
{{--                        <div class="timer count-title count-number mt-3" data-to="786" data-speed="1500"></div>--}}
{{--                        <p class="count-text">Our Branches</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-6 mt-md-0 mt-5">--}}
{{--                    <div class="counter">--}}
{{--                        <img src="assets/images/icon-3.png" alt="" class="img-fluid">--}}
{{--                        <div class="timer count-title count-number mt-3" data-to="3630" data-speed="1500"></div>--}}
{{--                        <p class="count-text">Total Courses</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-6 mt-md-0 mt-5">--}}
{{--                    <div class="counter">--}}
{{--                        <img src="assets/images/icon-4.png" alt="" class="img-fluid">--}}
{{--                        <div class="timer count-title count-number mt-3" data-to="6300" data-speed="1500"></div>--}}
{{--                        <p class="count-text">Awards Won</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- //stats block -->


    <!-- news block -->
    <div class="w3l-blog-block-5 py-5" id="news">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Our News</p>
                <h3 class="title-style">Latest <span>News</span> Posts</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="https://www.facebook.com/aphschirgaon/photos/pcb.552066320129588/552066240129596" target="_blank"><img src="{{asset('assets/images/news/marksheet.jpg')}}" style="height: 250px" alt=""/></a>
                            <div class="blog-info">
                                <h4><a href="https://www.facebook.com/aphschirgaon/photos/pcb.552066320129588/552066240129596"  target="_blank">First Place.....</a></h4>
                                <p>Maimuna Kedan, secured first position in Chhauhara block in term 1 examination of class X. </p>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Jan 03, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="https://www.facebook.com/aphschirgaon/photos/pcb.467720331897521/467719531897601/" target="_blank"><img src="{{asset('assets/images/news/teacherday.jpg')}}" style="height: 250px" alt=""/></a>
                            <div class="blog-info">
                                <h4><a href="https://www.facebook.com/aphschirgaon/photos/pcb.467720331897521/467719531897601/" target="_blank">Teachers Day Celebration.....</a></h4>
                                <p>Adarsh public school chirgaon celebrated teachers day </p>
                                <div class="d-flex align-items-center justify-content-between mt-4">

                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Sep 05, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="https://www.facebook.com/aphschirgaon/photos/pcb.452501416752746/452500736752814/" target="_blank"><img src="{{asset('assets/images/news/independence.jpg')}}" style="height: 250px" alt=""/></a>
                            <div class="blog-info">
                                <h4><a href="https://www.facebook.com/aphschirgaon/photos/pcb.452501416752746/452500736752814/" target="_blank">Independence Day.....</a></h4>
                                <p>
                                    Adarsh Public High School Chirgaon celebration
                                    Independence Day</p>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Aug 12, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="https://www.facebook.com/aphschirgaon/photos/pcb.419434123392809/419427290060159/" target="_blank"><img src="{{asset('assets/images/news/yogaday.jpg')}}" style="height: 250px" alt=""/></a>
                            <div class="blog-info">
                                <h4><a href="https://www.facebook.com/aphschirgaon/photos/pcb.419434123392809/419427290060159/" target="_blank">International Yoga Day.....</a></h4>
                                <p>Adarsh public school chirgaon celebrated international yoga. </p>
                                <div class="d-flex align-items-center justify-content-between mt-4">

                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Jun 21, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- //news block -->

    <!-- call block -->
    <section class="w3l-call-to-action-6">
        <div class="container py-md-5 py-sm-4 py-5">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="left-content-call">
                    <h3 class="title-big">Call To Enroll Your Child</h3>
                    <p class="text-white mt-1">Begin the change today!</p>
                </div>
                <div class="right-content-call mt-lg-0 mt-4">
                    <ul class="buttons">
                        <li class="phone-sec me-lg-4"><i class="fas fa-phone-volume"></i>
                            <a class="call-style-w3 " style="margin-left: 10px" href="tel:+91 88949 49194">+91 88949 49194</a>
                        </li>
                        <li><a href="{{route('contact')}}" class="btn btn-style btn-style-2 mt-lg-0 mt-3">Join for free</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //call block -->

@endsection
