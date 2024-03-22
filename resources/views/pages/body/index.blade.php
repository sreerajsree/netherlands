@extends('layouts.app')
@section('seo')
<title>Body fit practices - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/bodyfit.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Body fit practices</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <!-- Classes Section Begin -->
    <section class="classes spad">
        <div class="container">
            <div class="p-3 text-center">
                <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                <p class="mt-3">At House for Positive Change, we offer a range of services that aim to improve physical
                    wellness and overall well-being. Our programs are designed to help individuals achieve their
                    personal fitness goals and a state well-being. These practices include our Body Fit
                    Training, our Outdoor Yoga Condition Training and a Yoga Stretching Massage. <br><br>
                    This trio of practices nurtures physical fitness, mental well-being, and deep relaxation.
                    Experience a holistic approach to personal growth and positive change by participating in
                    our programme.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item border-services p-3">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/body/Body-Fit-Practices-Outdoor-Yoga-Condition-Training.jpg') }}"
                                alt="">
                        </div>
                        <div class="blog__item__text">
                            <h5><a href="{{ route('outdoor.yoga') }}" class="fs-26">Outdoor Yoga Condition Training</a></h5>
                            <p class="service-ch">Discover the power of Outdoor Yoga Condition Training with House for
                                Positive Change! Join our regular outdoor sessions and unlock your potential in a
                                refreshing, natural setting. Embrace fitness in the outdoors and let Mukesh inspire you to
                                thrive.</p>
                            <a href="{{ route('outdoor.yoga') }}" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item border-services p-3">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/body/Body-Fit-Practices-Yoga-Stretching-Massage.jpg') }}"
                                alt="">
                        </div>
                        <div class="blog__item__text">
                            <h5><a href="{{ route('body.yoga') }}" class="fs-26">Yoga Stretching Massage</a></h5>
                            <p class="service-ch">Feel the incredible benefits of Stretching Yoga Massage with Mukesh. Yoga
                                Stretching Massages will improve your flexibility, release tension, and enhance your overall
                                well-being. Join us for an invigorating session at House for Positive Change.</p>
                            <a href="{{ route('body.yoga') }}" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->
    @include('includes.blog')
    @include('includes.appointment')
@endsection
