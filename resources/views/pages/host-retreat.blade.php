@extends('layouts.app')
@section('seo')
<title>Host a Retreat - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/host-a-retreat.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Host a Retreat</h2>
                        <div class="breadcrumb__widget">
                            <span>Namaste!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <section class="classes spad pb-0">
        <div class="container">
            <div class="retreat-host">
                <p class="fst-italic">Is it your dream to host an unforgettable retreat in Rishikesh
                    the birthplace of yoga in the Indian Himalayas?</p>
                <p>We are busy creating a beautiful opportunity for you as host and for your own students.
                    Want to know more? Feel free to contact us at: <a href="mailto:info@houseforpositivechange.com">info@houseforpositivechange.com</a></p>
            </div>
        </div>
    </section>
    @include('includes.blog')
    @include('includes.appointment')
@endsection
