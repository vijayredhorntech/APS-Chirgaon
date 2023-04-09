@extends('common.master')

@section('section')

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact block -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Get In Touch</p>
                <h3 class="title-style">Contact Us</h3>
            </div>
            <div class="row contact-block">
                <div class="col-md-7 contact-right">
{{--                    <form action="{{route('contactDetails')}}" method="POST" class="signin-form">--}}
                    <form action="#"  class="signin-form">
                        @csrf
                        <div class="input-grids">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="name" id="name" placeholder="Your Name"
                                           class="contact-input" required=""/>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="email" id="email" placeholder="Your Email"
                                           class="contact-input" required=""/>
                                </div>
                            </div>
                            <input type="text" name="subject" id="subject" placeholder="Subject"
                                   class="contact-input" required=""/>
                        </div>
                        <div class="form-input">
                            <textarea name="message" id="message" placeholder="Type your message here"
                                      required=""></textarea>
                        </div>
                        <div class="mb-4">
                            <p class="text-danger">{{session('complainError')}}</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-success">{{session('complainSuccess')}}</p>
                        </div>
                        <div class="text-start">
                            <button class="btn btn-style btn-style-3">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 ps-lg-5 mt-md-0 mt-5">
                    <div class="contact-left">
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>School Address</h6>
                                    <p>Near Satsang Road, Sunda(Chirgaon), H.P.(171208)</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+91 88949-49194"></a> +91 88949-49194</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:apschirgaon@gmail.com" class="mail">apschirgaon@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Customer Support</h6>
                                    <p><a href="mailto:apschirgaon@gmail.com" class="mail">apschirgaon@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1085.0013194441635!2d77.86881418845451!3d31.23206890388952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3905fd7ded61e957%3A0x2527b5b38ed1912d!2sAdarsh%20Public%20School%20Chirgaon!5e1!3m2!1sen!2sin!4v1679482463003!5m2!1sen!2sin"
            width="70%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- //contact block -->
@endsection
