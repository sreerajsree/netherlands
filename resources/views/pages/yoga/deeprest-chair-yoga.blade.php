@extends('layouts.app')
@section('seo')
<title>DeepRest Chair Yoga - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/yoga/yoga-practices.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>DeepRest (Chair) Yoga</h2>
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
                <p class="mt-3">DeepRest (Chair) Yoga is a harmonious blend of Restorative Yoga and Yoga Nidra. In this
                    practice, you'll experience profound relaxation as your body is fully supported by props in
                    calming, seated, and lying postures, held for extended periods. This class is a sanctuary
                    for healing, stress relief, and deep relaxation. With Yoga Nidra, known as "yogic sleep,"
                    you'll enter a conscious state of relaxation where you'll learn to balance between
                    wakefulness and slumber. By guiding your awareness inward, we help you release tension,
                    clear mental clutter, and uncover your true, unified nature. DeepRest (Chair) Yoga is your
                    path to holistic well-being.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog__item border-services-main p-3">
                        <div class="blog__item__text">
                            <h5 class="mb-4"><a class="fs-26">The benefits of DeepRest (Chair) Yoga</a></h5>
                            <ul>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Profound Relaxation: Experience deep relaxation of body and mind,
                                        reducing stress and tension.</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Enhanced Focus: Improve attention span and mental clarity.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Stress Reduction: Effective stress management, promoting emotional
                                        well-being.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Quality Sleep: Promote better sleep patterns and address sleep
                                        disturbances.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Emotional Balance: Reduce anxiety, worry, and impulsivity.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Cognitive Enhancement: Enhance memory retention, recall,
                                        decision-making, and problem-solving abilities.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Physical Healing: Support the immune system and boost energy
                                        levels.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Heart and Brain Health: Decrease the risk of heart and
                                        brain-related
                                        issues.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Mood and Awareness: Cultivate positive moods and heightened
                                        awareness.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Pain Relief: Reduce chronic pain and contribute to overall
                                        well-being
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
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#elianneModal"
                                class="primary-btn mt-4 mx-2">BOOK PRIVATE SESSION</a>
                            @include('includes.elianne-form')
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
