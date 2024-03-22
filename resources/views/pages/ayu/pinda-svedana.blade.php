@extends('layouts.app')
@section('seo')
<title>Pinda Svedana - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/ayu/pinda.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Pinda Svedana</h2>
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
                <p class="mt-3">Pinda Svedana is a massage treatment where medicated herbal bags heated up or dipped in
                    warm oil are massaged throughout the body, relieving muscle pain and strengthening the tissues.
                    Concluding with a warm (steam) bath, the medicated oil and substances of the poultices can penetrate
                    even deeper into your skin.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog__item border-services-main p-3">
                        <div class="blog__item__text">
                            <h5 class="mb-4"><a class="fs-26">The benefits of Pinda Svedana Massage</a></h5>
                            <ul class="text-capitalize">
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Muscle relaxation</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">improved joint mobility and joint flexibility
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">detoxification of the body
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">improved blood circulation
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">relief from rheumatic conditions
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="blog__item border-services-main p-3">
                        <div class="blog__item__text">
                            <h5 class="mb-4"><a class="fs-26">Our prices</a></h5>
                            <p class="text-brown">Online Ayurvedic Consultation for a massage treatment plan (45 minutes): €
                                85</p>
                            <p class="m-0 text-brown fw-bold">Treatment by a massage therapist:</p>
                            <ul class="p-3">
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">60 minutes - €90</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">4x Strip Card (60 Minutes; Valid for One Month) - € 300</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="py-4" style="background-color: #586e5c">
                        <div class="cancellation">
                            <h4 class="text-center text-light py-4"><b>Before your appointment:</b></h4>
                            <p class="text-light">
                                While Pinda Svedana is generally safe and beneficial for many individuals, there are certain
                                contraindications to be aware of. Please contact us if you have any of the following
                                conditions:
                            </p>
                            <ul class="p-3 text-light">
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Fever, flu, or infections</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Open wounds, or recent surgery</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Menstruation and pregnancy</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                    src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                <span class="ms-3">Severe pain</span>
                            </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Cardiovascular conditions
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Respiratory disorders
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Digestive disturbances
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-center">
                        @auth
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#ayuModal"
                                class="primary-btn mt-4 mx-2 text-uppercase">Book your treatment</a>
                            @include('includes.ayu-form')
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="primary-btn mt-4 mx-2 text-uppercase">LOGIN TO Book your
                                treatment</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->
    @include('includes.blog')
@endsection
