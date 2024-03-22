@extends('layouts.app')
@section('seo')
<title>Private Sessions - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/private-sessions.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Private Sessions</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <section class="classes spad people">
        <div class="container">
            <div class="p-3 text-center">
                <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                <p class="mt-3">Joining a group class may be too big a step. For example, if you are uncertain about your
                    level of practice or because you have a health problem. Or maybe you don’t have time for a
                    group class or prefer to practice at home or at work at your own time. A private session
                    will help you develop self-confidence and relaxation in your body, mind and yoga practices.
                    A private session is a perfect tool to restore the balance between body and mind. You gain
                    awareness of patterns and habits causing pain and unbalance in your career, your
                    relationships or your health. Private Yoga sessions are also recommended for people
                    struggling with: stress, burnout management, injuries, backpain, lack of energy, undesirable
                    posture, indigestion, PTSD management, emotional disbalance and many other benefits.
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="main-image">
                        <img src="{{ asset('assets/img/team/Elianne.jpg') }}" alt="Elianne">
                    </div>
                </div>
                <div class="col-md-8">
                    <div>
                        <div class="section-title text-start">
                            <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                            <h3>Elianne
                                van Waalwijk van Doorn</h3>
                        </div>
                        <ul>
                            <li><img width="20" height="20" src="{{ asset('assets/img/logo.png') }}"
                                    alt="Logo"><a href="{{ route('ayu.healthcare') }}">Ayurvedic Healthcare</a></li>
                            <li><img width="20" height="20" src="{{ asset('assets/img/logo.png') }}"
                                    alt="Logo"><a href="{{ route('yoga.therapy') }}">Yoga Therapy</a></li>
                            <li><img width="20" height="20" src="{{ asset('assets/img/logo.png') }}"
                                    alt="Logo"><a href="{{ route('dc.yoga') }}">DeepRest (Chair) Yoga</a></li>
                            <li><img width="20" height="20" src="{{ asset('assets/img/logo.png') }}"
                                    alt="Logo"><a href="{{ route('trauma.yoga') }}">Trauma Sensitive Yoga</a></li>
                        </ul>
                        @auth
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#elianneModal"
                                class="primary-btn mt-4 mx-2">Let's Connect - Elianne</a>
                            @include('includes.elianne-form')
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="primary-btn mt-4 mx-2 text-uppercase">LOGIN TO Connect - Elianne</a>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="row align-items-center pt-4">
                <div class="col-md-8">
                    <div>
                        <div class="section-title text-start">
                            <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                            <h3>Mukesh
                                Joshi</h3>
                        </div>
                        <ul>
                            <li><img width="20" height="20" src="{{ asset('assets/img/logo.png') }}"
                                    alt="Logo"><a href="{{ route('yopi.yoga') }}">YoPi Training</a></li>
                            <li><img width="20" height="20" src="{{ asset('assets/img/logo.png') }}"
                                    alt="Logo"><a href="{{ route('tyb.yoga') }}">Train your Breath</a></li>
                            <li><img width="20" height="20" src="{{ asset('assets/img/logo.png') }}"
                                    alt="Logo"><a href="{{ route('foundational.yoga') }}">Foundational Yoga</a></li>
                            <li><img width="20" height="20" src="{{ asset('assets/img/logo.png') }}"
                                    alt="Logo"><a href="{{ route('body.yoga') }}">Yoga Stretching Massage</a></li>
                        </ul>
                        @auth
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#elianneModal"
                                class="primary-btn mt-4 mx-2">Let's Connect - Mukesh</a>
                            @include('includes.elianne-form')
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="primary-btn mt-4 mx-2 text-uppercase">LOGIN TO Connect - Mukesh</a>
                        @endguest
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-image">
                        <img src="{{ asset('assets/img/team/Mukesh.jpg') }}" alt="Mukesh">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.blog')
    @include('includes.appointment')
@endsection
