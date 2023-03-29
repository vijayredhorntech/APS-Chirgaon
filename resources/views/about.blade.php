@extends('common.master')

@section('section')
    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">About Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- home image with content block -->
    <section class="w3l-servicesblock py-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="{{asset('assets/images/building.jpg')}}" alt=""
                             style="height: 500px; width: auto;object-fit: cover" class="img-fluid radius-image">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">About A.P.S. Chirgaon</h3>
                    <p class="mt-4">Adarsh Public School is a modern
                        school founded in the year 2009 under Society for Education and Environment Development. It is
                        surrounded by lush apple and cherry orchards crowning Chirgaon valley in Shimla Hills. Education
                        away from home has been a tradition in Indian society. We have a rich history of prominent
                        educational institutions, imparting value based education for decades and generations.

                        Adarsh Public School is a high achieving, happy, vibrant, and forward-thinking school in which
                        children excel themselves, both academically and socially.
                    </p>
                    <ul class="mt-4 list-style-lis pt-lg-1">
                        <li><i class="fas fa-check-circle"></i>Personalization</li>
                        <li><i class="fas fa-check-circle"></i>Globalization</li>
                        <li><i class="fas fa-check-circle"></i>Critical Thinking</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="w3l-servicesblock  mb-lg-5" id="visions">
        <div class="container py-md-5 ">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="{{asset('assets/images/about/vision.jpg')}}" style="height: 300px;width: auto; object-fit: cover"
                             alt="" class="img-fluid radius-image">
                    </div>
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">Our Vision</h6>
                        <p>A.P.S. Chirgaon cultivates confident, well-rounded <br> students that contribute wisdom,<br>
                            compassion, and leadership <br>to a global society.</p>

                    </div>
                </div>
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="{{asset('assets/images/about/mission.jpg')}}" style="height: 300px;width: auto; object-fit: cover"
                             alt="" class="img-fluid radius-image">
                    </div>
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">Our Mission</h6>
                        <p>Our graduates are prepared to excel academically,<br> contribute to society, and lead
                            meaningful, <br> fulfilled lives. This is accomplished <br> through critical thinking.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //home image with content block -->

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

    <!-- staffMessage block -->
    <section class="w3l-index4 py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="content-slider text-center">
                <div class="clients-slider">
                    <div class="mask">
                        <ul>

                            <li class="anim1">
                                <img src="{{asset('assets/images/about/chairman.jpg')}}" class="img-fluid rounded-circle"
                                     alt="client image"/>
                                <blockquote class="quote"><q>Dear students, parents, and faculty members,

                                        As the chairman of our school, I am thrilled to welcome you all to our school.
                                        Our school is a place where we believe that education is not just about
                                        academics, but also about character building and preparing our students for the
                                        challenges of the future.

                                        We have a team of dedicated faculty members who are committed to providing the
                                        highest quality of education to our students. Our curriculum is designed to
                                        challenge our students and provide them with the skills and knowledge they need
                                        to succeed in their academic and professional lives.
                                    </q></blockquote>
                                <div class="source">-Mr. Raj Kumar</div>
                                <h3 style="font-style: italic;color: yellow">Chairman</h3>
                            </li>
                            <li class="anim2">
                                <img src="{{asset('assets/images/about/amit.jpg')}}" class="img-fluid rounded-circle"
                                     alt="client image"/>
                                <blockquote class="quote"><q>Dear students, parents, and staff,

                                        I am delighted to welcome you to our school. As the principal of this
                                        institution, I am honored to lead a team of dedicated educators who are
                                        committed to providing our students with an exceptional learning experience.

                                        Our school is a vibrant community that values academic excellence, innovation,
                                        and creativity. We provide a safe and inclusive environment where every student
                                        is valued and respected. Our curriculum is designed to develop critical thinking
                                        skills, foster a love for learning, and prepare our students for success in the
                                        future.
                                    </q></blockquote>
                                <div class="source">-Mr. Amit Motiyan</div>
                                <h3 style="font-style: italic;color: yellow">Principal</h3>
                            </li>
                            <li class="anim3">
                                <img src="{{asset('assets/images/about/chairman.jpg')}}" class="img-fluid rounded-circle"
                                     alt="client image"/>
                                <blockquote class="quote"><q>Dear students, parents, and faculty members,

                                        As the chairman of our school, I am thrilled to welcome you all to our school.
                                        Our school is a place where we believe that education is not just about
                                        academics, but also about character building and preparing our students for the
                                        challenges of the future.

                                        We have a team of dedicated faculty members who are committed to providing the
                                        highest quality of education to our students. Our curriculum is designed to
                                        challenge our students and provide them with the skills and knowledge they need
                                        to succeed in their academic and professional lives.
                                    </q></blockquote>
                                <div class="source">-Mr. Raj Kumar</div>
                                <h3 style="font-style: italic;color: yellow">Chairman</h3>
                            </li>
                            <li class="anim4">
                                <img src="{{asset('assets/images/about/amit.jpg')}}" class="img-fluid rounded-circle"
                                     alt="client image"/>
                                <blockquote class="quote"><q>Dear students, parents, and staff,

                                        I am delighted to welcome you to our school. As the principal of this
                                        institution, I am honored to lead a team of dedicated educators who are
                                        committed to providing our students with an exceptional learning experience.

                                        Our school is a vibrant community that values academic excellence, innovation,
                                        and creativity. We provide a safe and inclusive environment where every student
                                        is valued and respected. Our curriculum is designed to develop critical thinking
                                        skills, foster a love for learning, and prepare our students for success in the
                                        future.
                                    </q></blockquote>
                                <div class="source">-Mr. Amit Motiyan</div>
                                <h3 style="font-style: italic;color: yellow">Principal</h3>
                            </li>
                            <li class="anim5">
                                <img src="{{asset('assets/images/about/chairman.jpg')}}" class="img-fluid rounded-circle"
                                     alt="client image"/>
                                <blockquote class="quote"><q>Dear students, parents, and faculty members,

                                        As the chairman of our school, I am thrilled to welcome you all to our school.
                                        Our school is a place where we believe that education is not just about
                                        academics, but also about character building and preparing our students for the
                                        challenges of the future.

                                        We have a team of dedicated faculty members who are committed to providing the
                                        highest quality of education to our students. Our curriculum is designed to
                                        challenge our students and provide them with the skills and knowledge they need
                                        to succeed in their academic and professional lives.
                                    </q></blockquote>
                                <div class="source">-Mr. Raj Kumar</div>
                                <h3 style="font-style: italic;color: yellow">Chairman</h3>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //staffMessage block -->

    <!-- team block -->
{{--        <section class="w3l-team-13 py-5" id="team">--}}
{{--            <div class="container py-md-5 py-4">--}}
{{--                <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">--}}
{{--                    <p class="text-uppercase">Our Team</p>--}}
{{--                    <h3 class="title-style">Meet our Teachers</h3>--}}
{{--                </div>--}}
{{--                <div class="row text-center left-side">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <div class="image-one">--}}
{{--                            <a href="#team">--}}
{{--                                <img src="assets/images/team1.png" class="arrow-png img-responsive" />--}}
{{--                                <h4>Emma Watson</h4>--}}
{{--                                <div class="buttons-teams2 mt-2">--}}
{{--                                    <a href="#team"><i class="fab fa-facebook-square"></i></a>--}}
{{--                                    <a href="#team"><i class="fab fa-twitter-square"></i></a>--}}
{{--                                    <a href="#team"><i class="fab fa-google-plus-square"></i></a>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <div class="image-one">--}}
{{--                            <a href="#team">--}}
{{--                                <img src="assets/images/team2.png" class="arrow-png img-responsive">--}}
{{--                                <h4>Enrique Lal</h4>--}}
{{--                                <div class="buttons-teams2 mt-2">--}}
{{--                                    <a href="#team"><i class="fab fa-facebook-square"></i></a>--}}
{{--                                    <a href="#team"><i class="fab fa-twitter-square"></i></a>--}}
{{--                                    <a href="#team"><i class="fab fa-google-plus-square"></i></a>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-6 mt-lg-0 mt-4">--}}
{{--                        <div class="image-one">--}}
{{--                            <a href="#team">--}}
{{--                                <img src="assets/images/team3.png" class="arrow-png img-responsive">--}}
{{--                                <h4>Smith Ker</h4>--}}
{{--                                <div class="buttons-teams2 mt-2">--}}
{{--                                    <a href="#team"><i class="fab fa-facebook-square"></i></a>--}}
{{--                                    <a href="#team"><i class="fab fa-twitter-square"></i></a>--}}
{{--                                    <a href="#team"><i class="fab fa-google-plus-square"></i></a>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-6 mt-lg-0 mt-4">--}}
{{--                        <div class="image-one">--}}
{{--                            <a href="#team">--}}
{{--                                <img src="assets/images/team4.png" class="arrow-png img-responsive">--}}
{{--                                <h4>Forkler Lee</h4>--}}
{{--                                <div class="buttons-teams2 mt-2">--}}
{{--                                    <a href="#team"><i class="fab fa-facebook-square"></i></a>--}}
{{--                                    <a href="#team"><i class="fab fa-twitter-square"></i></a>--}}
{{--                                    <a href="#team"><i class="fab fa-google-plus-square"></i></a>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    <!-- //team block -->--}}
{{----}}
    <!-- team block -->
    <section class="w3l-team-13 py-5" id="team">
        <div class="container">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Our Team</p>
                <h3 class="title-style">Teaching Staff</h3>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="{{asset('assets/images/teachers/chairman.jpg')}}">
                        </div>
                        <div class="team-content">
                            <h3 style="color: black" class="name">Mr. Raj Kumar</h3>
                            <h4 class="title">Chairman</h4>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"
                                   aria-hidden="true"></a></li>
                            <li><a href="#" class="fa fa-instagram"
                                   aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="{{asset('assets/images/teachers/amit.jpg')}}">
                        </div>
                        <div class="team-content">
                            <h3 style="color: black" class="name">Mr. Amit Motiyan</h3>
                            <h4 class="title">Principal</h4>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"
                                   aria-hidden="true"></a></li>
                            <li><a href="#" class="fa fa-instagram"
                                   aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="{{asset('assets/images/teachers/shashtri.jpg')}}">
                        </div>
                        <div class="team-content">
                            <h3 style="color: black" class="name">Mr. Shishu Pal</h3>
                            <h4 class="title">Shashtri</h4>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"
                                   aria-hidden="true"></a></li>
                            <li><a href="#" class="fa fa-instagram"
                                   aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="{{asset('assets/images/teachers/jagdish.jpg')}}">
                        </div>
                        <div class="team-content">
                            <h3 style="color: black" class="name">Mr. Jagdish</h3>
                            <h4 class="title">Clerk</h4>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"
                                   aria-hidden="true"></a></li>
                            <li><a href="#" class="fa fa-instagram"
                                   aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="{{asset('assets/images/teachers/divya.png')}}">
                        </div>
                        <div class="team-content">
                            <h3 style="color: black" class="name">Divya</h3>
                            <h4 class="title">T.G.T. Medical</h4>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"
                                   aria-hidden="true"></a></li>
                            <li><a href="#" class="fa fa-instagram"
                                   aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="{{asset('assets/images/teachers/asha.png')}}">
                        </div>
                        <div class="team-content">
                            <h3 style="color: black" class="name">Mrs. Asha</h3>
                            <h4 class="title">T.G.T. Arts</h4>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"
                                   aria-hidden="true"></a></li>
                            <li><a href="#" class="fa fa-instagram"
                                   aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="{{asset('assets/images/teachers/pravesh.jpg')}}">
                        </div>
                        <div class="team-content">
                            <h3 style="color: black" class="name">Mr. Pravesh</h3>
                            <h4 class="title">Language Teacher</h4>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"
                                   aria-hidden="true"></a></li>
                            <li><a href="#" class="fa fa-instagram"
                                   aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="{{asset('assets/images/teachers/pawan.jpg')}}">
                        </div>
                        <div class="team-content">
                            <h3 style="color: black" class="name">Mr. Pawan</h3>
                            <h4 class="title">T.G.T. Medical</h4>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"
                                   aria-hidden="true"></a></li>
                            <li><a href="#" class="fa fa-instagram"
                                   aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>

            </div>




            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <h3 class="title-style">Non Teaching Staff</h3>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="{{asset('assets/images/teachers/peon.png')}}">
                        </div>
                        <div class="team-content">
                            <h3 style="color: black" class="name">Mrs. Ranjeeta</h3>
                            <h4 class="title">Peon</h4>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"
                                   aria-hidden="true"></a></li>
                            <li><a href="#" class="fa fa-twitter"
                                   aria-hidden="true"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team block -->





    <!-- about-2 section -->
    <section class="w3l-about-2 pb-5 pt-4">
        <div class="container pb-md-5 pb-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-4 text-center pe-lg-4">
                    <img src="{{asset('assets/images/about/safe.jpg')}}" style="height: 500px;width: auto;object-fit: cover" alt=""
                         class="img-fluid radius-image m-auto"/>
                </div>
                <div class="col-lg-6 about-2-secs-left ps-lg-5">
                    <p class="text-uppercase">Our Environment</p>
                    <h3 class="title-style mb-sm-3 mb-2">Active Learning, Expert Teachers & Safe Environment</h3>
                    <p>Active Learning, Expert Teachers & Safe Environment are three essential components of an effective and successful educational experience.

                        Active Learning is an approach to education that emphasizes student-centered, hands-on learning experiences. This approach encourages students to engage in active exploration, critical thinking, and problem-solving. It also promotes collaboration and communication among students, leading to a deeper understanding of the subject matter. In an active learning environment, students are more motivated and engaged, leading to better retention of knowledge and a more enjoyable learning experience.</p>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-style btn-style-3" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about-2 section -->

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
                            <a class="call-style-w3" href="tel:+91 88949 49194">+91 88949-49194</a>
                        </li>
                        <li><a href="{{route('contact')}}" class="btn btn-style btn-style-2 mt-lg-0 mt-3">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //call block -->

@endsection
