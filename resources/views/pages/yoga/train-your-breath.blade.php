@extends('layouts.app')
@section('seo')
<title>Train your Breath - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/yoga/Train-your-Breath-banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Train your Breath</h2>
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
                <p class="mt-3">Embark on a transformative path with Train Your Breath, seamlessly integrating Western
                    evidence-based breathing methods and ancient Indian Pranayamas for a bespoke wellness
                    journey. You will be guided by a seasoned professional who during his upbringing in the
                    majestic Indian Himalayas was introduced to the ancestry of Pranayama techniques and
                    expanded his knowledge with modern breath work practices. These sessions delve into the
                    profound advantages of mindful breathing—cultivating serenity, honing concentration, and
                    establishing a harmonious synergy between body and mind. Immerse yourself in a holistic
                    approach that synthesizes the wisdom of diverse traditions, providing a unique fusion to
                    elevate your overall well-being and nurture a lasting equilibrium.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog__item border-services-main p-3">
                        <div class="blog__item__text">
                            <h5 class="mb-4"><a class="fs-26">The Benefits of Train Your Breath</a></h5>
                            <ul>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Stress Reduction</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Improved Respiratory Health
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Mind-Body Connection
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Enhanced Focus and Concentration
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Emotional Regulation
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="py-4" style="background-color: #586e5c">
                        <div class="cancellation">
                            <h5 class="text-center text-light py-4"><b>Cancellations:</b> <i>Within twenty-four (24) hours
                                    before the start of the session.</i></h5>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-center">
                        <a href="https://widget.onlineafspraken.nl/consumer/booking/book/grid/1?key=bggh11mblr32-zbdz10&storage=clear#"
                            target="_blank" class="primary-btn mt-4 mx-2">BOOK GROUP CLASS</a>
                        @auth
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#mukeshModal"
                                class="primary-btn mt-4 mx-2">BOOK PRIVATE SESSION</a>
                            @include('includes.mukesh-form')
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="primary-btn mt-4 mx-2">LOGIN TO BOOK PRIVATE SESSION</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->
    @include('includes.blog')
@endsection
