@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/yoga/yoga-therapy.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Yoga Therapy</h2>
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
                <p class="mt-3">Yoga Therapy uses body postures (asanas), pranayama, chanting and meditation to create a
                    personalized approach to health. Yoga Therapy is rooted in traditional yoga principles,
                    Ayurvedic medicine, but also influenced by the latest medical research in the field of
                    conventional medicine to provide you with a personalized approach that considers you as an
                    individual for your individual needs and doesn’t simply look at the disease.
                </p>
                <p>
                    The yoga therapist will create a personalized yoga practice designed to suit your abilities,
                    medical challenges, interests, and time. This may include postures, breathing techniques,
                    meditation and relaxation techniques, as well as the application of yogic principles such as
                    gratitude and non-harming to promote behavioural changes.
                </p>
                <p>
                    For example, with lower back pain, there are very specific yoga positions and postures for
                    strengthening and supporting the back and even soothing the symptoms of a herniated disc.
                    Likewise, with Post-Traumatic Stress Disorder (PTSD), there are gentle, specialized ways of
                    regulating the nervous system and fostering the return of an awareness of the body. Specific
                    yoga postures can also be used to reduce heightened sensory arousal and promote emotional
                    regulation with autistic clients.
                </p>
                <p>
                    No yoga experience is required for Yoga Therapy. And despite the common misconception that
                    you need to be flexible to practice yoga, Yoga Therapy can help people who have limited
                    mobility, as well as people who are active. All you need to be able to do to practice yoga
                    is breathe.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog__item border-services-main p-3">
                        <div class="blog__item__text">
                            <h5 class="mb-4"><a class="fs-26">What can Yoga Therapy help you with?</a></h5>
                            <ul>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">Stress/chronic fatigue/burn-out</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">restlessness of the mind, depression and anxiety, fear,
                                        irritability, or anger
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">loneliness, sadness, or grief - insomnia
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">lower backache/pain in the sacral area, upper shoulders
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">stiff or painful neck
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">digestive issues
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">musculoskeletal injuries
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">SI joint syndrome/disc herniation/sciatica/osteopenia or
                                        osteoporosis
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">rheumatoid arthritis/osteoarthritis
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">chronic conditions, i.e., pain, autoimmune disease, heart disease
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">hormonal imbalances
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">postnatal issues
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3">high blood pressure/respiratory and cardio-circulatory conditions
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png"
                                        alt="star--v1" />
                                    <span class="ms-3">recovering from cancer or from a debilitating condition
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
                            <p class="text-brown">Intake session (90 minutes): € 95</p>
                            <p class="m-0 text-brown fw-bold">Individual sessions:</p>
                            <ul class="p-3">
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png"
                                        alt="star--v1" />
                                    <span class="ms-3">Single session (60 minutes) - € 80</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png"
                                        alt="star--v1" />
                                    <span class="ms-3">5x strip card (60 minute sessions; valid for half a year): € 350
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png"
                                        alt="star--v1" />
                                    <span class="ms-3">10x strip card (60 minute sessions; valid for a year): € 675
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
