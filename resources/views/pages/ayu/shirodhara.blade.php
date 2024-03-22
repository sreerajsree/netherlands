@extends('layouts.app')
@section('seo')
<title>Shirodara - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/ayu/shirodhara.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Shirodara</h2>
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
                <p class="mt-3">Shirodhara is an ancient Ayurvedic therapy that involves a steady stream of warm oil
                    gently poured onto the forehead. This deeply relaxing treatment is known to calm the mind, promote
                    mental clarity, and induce a profound sense of tranquility. The rhythmic flow of oil over the "third
                    eye" area stimulates the pineal gland, enhancing the production of melatonin and serotonin, which aid in
                    sleep regulation and mood improvement. Shirodhara also helps alleviate stress, anxiety, and headaches,
                    while nourishing the scalp and hair. Its holistic benefits make it a sought-after therapy for
                    rejuvenation and balancing the mind-body connection.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog__item border-services-main p-3">
                        <div class="blog__item__text">
                            <h5 class="mb-4"><a class="fs-26">The benefits of Shirodara</a></h5>
                            <ul class="text-capitalize">
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Stress reduction</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">intense relaxation
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">improved sleep quality
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">improve mental clarity
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">improved concentration
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">headache and migraine relief
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">improved hair and scalp health
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
                            <p class="text-brown">Online Ayurvedic Consultation for a treatment plan (45 minutes): € 85</p>
                            <p class="m-0 text-brown fw-bold">Treatment by a massage therapist:</p>
                            <ul class="p-3">
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">45 minutes - € 90</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">4x strip card (45 minutes; valid for one month) - €300</span>
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
                                While Shirodara is generally safe and beneficial for many individuals, there are certain
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
                                    <span class="ms-3">Head Injuries, open wounds, or recent surgery</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Menstruation and pregnancy</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">High blood pressure</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Chronic migraine
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Severe anxiety or mental disorders
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Recent eye injury
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Severe skin conditions
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Cervical spondylosis
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Ear infections, congestion or cold
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="18" height="18"
                                        src="https://img.icons8.com/color/18/star--v1.png" alt="star--v1" />
                                    <span class="ms-3">Chemotherapy or radiation
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
