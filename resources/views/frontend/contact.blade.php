@extends('layouts.frontend')
@section('content')
<div class="main-wrapper">
    <section class="inner-hero bg_img overlay--one" style="background-image: url({{asset('assets/images/frontend/breadcrumb/61023f89990b81627537289.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="page-title text-white">Contact Us</h2>
                    <ul class="page-breadcrumb justify-content-center">
                        <li><a href="{{route('front.index')}}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-100 pb-100 position-relative z-index shade--bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <span class="subtitle fw-bold text--base font-size--18px border-left">Contact with us</span>
                        <h2 class="section-title">Get in touch for any kind of help and informations</h2>
                    </div>
                </div>
            </div>
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-wrapper-content section--bg2 h-100">
                            <h4 class="title text-white mb-4">Reach Us</h4>
                            <ul class="contact-info-list">
                                <li class="single-info d-flex flex-wrap align-items-center">
                                    <div class="single-info__icon text-white d-flex justify-content-center align-items-center rounded-3">
                                        <i class="las la-map-marked-alt"></i>
                                    </div>
                                    <div class="single-info__content">
                                        <p>Pakistan , New York</p>
                                    </div>
                                </li>

                                <li class="single-info d-flex flex-wrap align-items-center">
                                    <div class="single-info__icon text-white d-flex justify-content-center align-items-center rounded-3">
                                        <i class="las la-envelope"></i>
                                    </div>
                                    <div class="single-info__content">
                                        <p><a href="https://script.viserlab.com/cdn-cgi/l/email-protection#fa9e9f9795ba9d979b9396d4999597"><span class="__cf_email__" data-cfemail="dabebfb7b59abdb7bbb3b6f4b9b5b7">[email&#160;protected]</span></a></p>
                                    </div>
                                </li>

                                <li class="single-info d-flex flex-wrap align-items-center">
                                    <div class="single-info__icon text-white d-flex justify-content-center align-items-center rounded-3">
                                        <i class="las la-phone-volume"></i>
                                    </div>
                                    <div class="single-info__content">
                                        <p><a href="tel:920320946387">+920320946387</a></p>
                                    </div>
                                </li>

                            </ul>

                            <div class="map-area mt-4">
                                <iframe src = "https://maps.google.com/maps?q=12,32&amp;hl=es;z=14&amp;output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form method="POST" action="#" class="contact-form">
                            <input type="hidden" name="_token" value="PLTOfZRSQfCu1VAToz4GCiQl3Q6t6BcqyOgvP8wx">                        <div class="row">
                                <div class="form-group col-xl-6">
                                    <label>Name <sup class="text--danger">*</sup></label>
                                    <input type="text" name="name" placeholder="Full name" value="" class="form--control" required="">
                                </div>
                                <div class="form-group col-xl-6">
                                    <label>Email <sup class="text--danger">*</sup></label>
                                    <input type="email" name="email" placeholder="Email address" value="" class="form--control" required="">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Subject <sup class="text--danger">*</sup></label>
                                    <input type="text" name="subject" placeholder="Enter Subject" value="" class="form--control" required="">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Message <sup class="text--danger">*</sup></label>
                                    <textarea name="message" placeholder="Your message" class="form--control" required=""></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn--base w-100">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
