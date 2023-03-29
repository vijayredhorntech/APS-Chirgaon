@extends('common.master')

@section('section')
    <!-- inner banner -->
    <section class="inner-gallery-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Gallery</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <div class="gallery-container">

        <div class="gallery-columns" id="first-column">
            <img src="{{asset('assets/images/gallery/g1.jpg')}}">
            <img src="{{asset('assets/images/gallery/g2.jpg')}}">
            <img src="{{asset('assets/images/gallery/g9.jpg')}}">
        </div>
        <div class="gallery-columns">
            <img src="{{asset('assets/images/gallery/g3.jpg')}}">
            <img src="{{asset('assets/images/gallery/g6.jpg')}}">
            <img src="{{asset('assets/images/gallery/g10.jpg')}}">

        </div>
        <div class="gallery-columns">
            <img src="{{asset('assets/images/gallery/g5.jpg')}}">
            <img src="{{asset('assets/images/gallery/g4.jpg')}}">
            <img src="{{asset('assets/images/gallery/g11.jpg')}}">
        </div>
        <div class="gallery-columns">
            <img src="{{asset('assets/images/gallery/g7.jpg')}}">
            <img src="{{asset('assets/images/gallery/g8.jpg')}}">
            <img src="{{asset('assets/images/gallery/g12.jpg')}}">
        </div>
    </div>

@endsection
