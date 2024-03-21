@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/yoga/Foundational-Yoga.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Foundational Yoga</h2>
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
                <p class="mt-3">Foundational Yoga provides a system of increasing awareness and decreasing stress (related
                    diseases) by using the base exercises of yoga: posture and movement, breath awareness and
                    breathing exercises, relaxation and concentration, self-enquiry, and meditation. It removes
                    energy blockages in the physical body and improves coordination, self-awareness, and
                    self-confidence.
                </p>
                <p>
                    Also known as beginner's yoga or Hatha yoga, the practice focuses on the fundamental poses,
                    alignment principles, and breathing techniques of yoga. It serves as a strong foundation for
                    building a yoga practice. Foundational Yoga emphasizes correct alignment in each pose. By
                    learning and practicing proper alignment, you can improve your posture, prevent injuries,
                    and develop a solid foundation for more advanced poses. During the classes we also encourage
                    you to listen to your body and honour its needs. Foundational Yoga cultivates body
                    awareness, helping you recognise areas of tension, tightness, or imbalance. This awareness
                    allows you to practice self-care, modify poses as needed, and prevent injuries. <br><br>
                    The poses we practice during Foundational Yoga don’t require any previous fitness skills,
                    fancy equipment or time in a studio. They do, however, call for guidance and practice in
                    order to be performed properly. During our Foundational Yoga classes, we will guide you
                    through the grounding poses of Hatha Yoga and teach you how to continue the yoga practice
                    yourself.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog__item border-services-main p-3">
                        <div class="blog__item__text">
                            <h5 class="mb-4"><a class="fs-26">The benefits of Foundational Yoga</a></h5>
                            <ul>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Learning proper alignment</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">increased flexibility
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">increased strength
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">form a good mind/body connection
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">improved balance and coordination
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">enhanced breath control
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">body-awareness and self care
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">better stress management
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">emotional wellbeing
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">improved posture and spinal health
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">increased vitality
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
                            <p class="m-0 text-brown fw-bold">Individual sessions:</p>
                            <ul class="p-3">
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png"
                                        alt="star--v1" />
                                    <span class="ms-3">Introduction class - € 45</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png"
                                        alt="star--v1" />
                                    <span class="ms-3">Single session (75 minutes) - € 60
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png"
                                        alt="star--v1" />
                                    <span class="ms-3">4x strip card (75 minute sessions; valid for one month) - € 200
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
