@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/yoga/yoga-pi.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>YoPi Training</h2>
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
                <p class="mt-3">YoPi, a fusion of Yoga and Pilates, harmoniously blends the mindfulness and breath control
                    of Yoga with the core strength, stability, and controlled movements of Pilates. This synergy
                    enhances your physical fitness, boosting flexibility, balance, and posture by combining
                    Yoga's deep stretches with Pilates' core-toning exercises. Controlled breathing techniques
                    from both disciplines promote inner calm, mental clarity, and reduce stress. YoPi is
                    suitable for all fitness levels, accommodating both beginners and seasoned practitioners.
                    It's a dynamic workout that not only strengthens your body but also nurtures your mental and
                    spiritual well-being. Experience the union of physical and mental wellness in the practice
                    of YoPi.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog__item border-services-main p-3">
                        <div class="blog__item__text">
                            <h5 class="mb-4"><a class="fs-26">The Benefits of YoPi Training</a></h5>
                            <ul>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3"><b>Flexibility:</b> YoPi Training involves a variety of poses and
                                        stretches that help improve flexibility and range of motion in the joints and
                                        muscles.</span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3"><b>Strength:</b> Many YoPi Training movements require the
                                        engagement of
                                        various muscle groups, leading to increased strength, particularly in the core,
                                        legs, and upper body.
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
                                    <span class="ms-3"><b>Stress Reduction:</b> YoPi Training incorporates breathing
                                        techniques and mindfulness, which can help reduce stress and promote relaxation.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3"><b>Balance and Posture:</b> YoPi Training helps improve balance and
                                        posture by enhancing body awareness and alignment.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3"><b>Mind-Body Connection:</b> YoPi Training incorporates mindfulness
                                        and deep breathing, promoting relaxation and stress reduction.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3"><b>Cardiovascular Health:</b> Certain dynamic forms of YoPi
                                        Training provide a cardiovascular workout, benefiting heart health.
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2"><img width="22" height="22"
                                        src="https://img.icons8.com/ios-glyphs/22/40C057/checked--v1.png" alt="star--v1" />
                                    <span class="ms-3"><b>Emotional Well-being:</b> YoPi encourages self-acceptance,
                                        emotional healing, and a positive outlook on life.
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
