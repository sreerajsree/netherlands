@extends('layouts.app')
@section('seo')
<title>About us - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/about.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>About us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <section class="pricing spad pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <p>
                            House for Positive Change began as a dream: to provide a transformative community and
                            space where individuals could embark on their journey of personal growth and well-being.
                            Inspired by the desire to create our own positive impact on the world, we, Elianne van
                            Waalwijk van Doorn and Mukesh Joshi, pushed through and pursued this vision. Despite the
                            challenges of quarantaine, we founded House for Positive Change early 2020 and opened a new
                            home base in Voorschoten two years later.
                        </p>
                        <p>
                            Our company aims to offer a sanctuary for anyone seeking inner balance, prosperity and
                            happiness. We offer a diverse range of holistic services, including yoga, meditation, therapies,
                            massage, Ayurvedic coaching, workshops and retreats. And, the latest shoot to our tree is the
                            socio-cultural project called ‘I AM CHANGE’. At House for Positive Change, we believe that
                            everyone is unique. So too are the programmes and experiences offered: prior to the start of a
                            program, your individual needs and requirements are assessed through a personal consultation.
                            From there you will be assisted in your journey into the understanding of the true concept of
                            your own wellbeing and happiness.
                        </p>
                        <p>
                            With a commitment to fostering a supportive and nurturing environment,
                            House for Positive Change has become a haven for individuals seeking positive
                            transformation, self-discovery and happiness. Our foundations are still very grounded to this
                            vision. After all, House for Positive Change will forever pursue our personal mantra:
                        </p>
                    </div>
                    <div class="section-title">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2><span style="font-weight:normal;">"Live life.</span>
                            <span style="color: #e18e23">Time flies."</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-6 p-0">
                <div class="gallery__pic">
                    <img src="{{ asset('assets/img/gallery/gallery-1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-0">
                <div class="gallery__pic">
                    <img src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-0">
                <div class="gallery__pic">
                    <img src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-0">
                <div class="gallery__pic">
                    <img src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <section class="spad pb-0" id="meet_the_team">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0">
                <div class="col-12 col-lg-6">
                    <div class="card bg-light p-3 m-0">
                        <div class="row gy-3 gy-md-0 about-team">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/about/About-Elianne.jpg') }}"
                                    class="img-fluid rounded-start about-height" alt="About-Elianne">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-0">
                                    <h2 class="card-title h4 mb-3">Elianne van Waalwijk van Doorn</h2>
                                    <p class="card-text lead">Co-founder of House for Positive Change, Yoga Teacher, Yoga
                                        Therapist, Trauma Sensitive Yoga Facilitator, Ayurvedic Therapies and Lifestyle &
                                        Nutrition Coaching</p>
                                    <p class="mt-5"><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#Elianne">READ ELIANNE'S STORY</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Elianne" tabindex="-1" role="dialog" aria-labelledby="ElianneModal"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg about-story">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel">About - Elianne van Waalwijk van Doorn</h1>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="d-flex mx-auto" src="{{ asset('assets/img/about/About-Elianne.jpg') }}"
                                    alt="About-Elianne">
                                <div class="content">
                                    <p>
                                        Elianne is connected to yoga in heart and soul. She was introduced to yoga in 2016
                                        which, after having experienced a life changing event, marked the beginning of her
                                        lifelong inner journey. She has studied and teaches multiple forms of yoga and
                                        meditation: Ashtanga Vinyasa, Restorative Yoga, Yoga Nidra, Ayurveda Yoga,
                                        Children’s and Teens (Trauma Sensitive) Yoga. Elianne was introduced to Trauma
                                        Informative Yoga through her study Yoga Therapy. It immediately stole her heart and
                                        she decided to dive deeper into it, leading to her certification in 2021 as a Trauma
                                        Sensitive Yoga-facilitator.
                                    </p>
                                    <p>
                                        Being a qualified Ayurveda Lifestyle and Nutrition Coaching, Elianne is dedicated to
                                        help and support her clients to introduce (oftentimes simple to modest) changes in
                                        their day-to-day lives and benefitting the health and wellbeing. Her Ayurvedic
                                        Massage Therapies make treatment plans even more complete. Currently, she is
                                        completing her Ayurveda Practitioner Studies at Delight Academy in Amsterdam.
                                    </p>
                                    <p>
                                        Elianne leads retreats, workshops, immersions, trainings, and courses in and outside
                                        Netherlands. She works as a yoga teacher and yoga therapist from her own studio, at
                                        primary and secondary schools, companies, with GP’s and hospitals and travels to
                                        refugee camps and other places with concentrations of homeless and internally
                                        displaced people. Elianne is a mother of four children, loves nature, animals,
                                        exploring the outdoors, gardening, cooking, arts, music and travelling. Listening to
                                        the sounds of nature and (making) music gives her tremendous joy and creates her
                                        space of rest.
                                    </p>
                                    <p>
                                        Elianne is passionate about discovering and learning from other cultures and eager
                                        to support a healthy balance of body, mind, and soul by actively contributing her
                                        knowledge, experience and intuition in her yoga teachings and therapeutic work.
                                    </p>
                                    <a href="https://nl.linkedin.com/in/elianne-van-waalwijk-van-doorn-705276285"
                                        target="_blank" class="primary-btn mt-4">FIND ELIANNE ON <i
                                            class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> LINKEDIN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card bg-light p-3 m-0">
                        <div class="row gy-3 gy-md-0 about-team">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/about/About-Mukesh.jpg') }}"
                                    class="img-fluid rounded-start about-height" alt="About-Mukesh">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-0">
                                    <h2 class="card-title h4 mb-3">Mukesh Joshi</h2>
                                    <p class="card-text lead">
                                        Mukesh
                                        Joshi
                                        Co-founder of House for Positive Change, Yoga Teacher, Personal Trainer, Outdoor
                                        Yoga and Condition Trainer, Yoga Stretching Massager, Men’s Circles Teacher, Retreat
                                        Organiser</p>
                                    <p class="mt-5"><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#Mukesh">READ MUKESH' STORY</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Mukesh" tabindex="-1" role="dialog" aria-labelledby="MukeshModal"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg about-story">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel">About - Mukesh Joshi</h1>
                                <button type="button" class="btn-close" data-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="d-flex mx-auto" src="{{ asset('assets/img/about/About-Mukesh.jpg') }}"
                                    alt="About-Mukesh">
                                <div class="content">
                                    <p>
                                        Joy, lightness and physical strength are the driving forces behind Mukesh’s yoga
                                        practice. His Foundational Yoga classes include elements from various practices:
                                        Pavanamuktasana joint loosening warmups, a Hatha inspired flow, ancient Indian
                                        martial arts techniques from Kalaripayattu and mindful observation of stillness and
                                        movement. Together with the use of strong motivational language and sound in the
                                        form of his own voice recited mantras, he invites you to an inward journey beyond
                                        the stories of the mind.
                                    </p>
                                    <p>
                                        Coming from Rishikesh, India -the Yoga Capital of the world- Mukesh was infatuated
                                        with the principles of yogic life from his birth. His ancestors were great authentic
                                        yoga practitioners and provided him with the platform in which he could root his own
                                        practice.
                                    </p>
                                    <p>
                                        Physical practice has always been an important part of Mukesh’s life. Growing up on
                                        the bank of the Ganges River amidst the magnificent Himalayas, he was destined to
                                        become a White Water and Mountain guide. In his spare time, Mukesh did boxing and
                                        spent many hours in the gym. But, in his search for authenticity in life he started
                                        moving into the practice of yoga. It showed him how to combine physical practices
                                        with the principles and traditions of the ancient Indian philosophy into which he
                                        was born and raised.
                                    </p>
                                    <p>
                                        Besides teaching yoga and various other practices, Mukesh performs Yoga Stretching
                                        Massage. This therapeutic massage technique helps the body and mind to restore,
                                        strengthen and energise, connect to the here and now and bring deep relaxation.
                                    </p>
                                    <p>
                                        Organising and leading retreats is Mukesh’s greatest passion. Many years of
                                        experience in this specialist field have brought him to the finest level of being
                                        able to carefully design unique adventures in the wild which brings the best out of
                                        people. Mukesh is also a father of one, a great cook, loves exploring nature and the
                                        wild into its extremities and travels as much as he can to discover the world.
                                    </p>
                                    <p>
                                        The main purpose of his work is to share peace of mind and joy with people and pick
                                        them up where they are. “No need to fit into any form or image. We’re all spirits
                                        with our own human experiences.”
                                    </p>
                                    <a href="https://www.linkedin.com/in/mukesh-joshi-28b507281/" target="_blank"
                                        class="primary-btn mt-4">FIND MUKESH ON <i class="fa fa-linkedin-square fa-lg"
                                            aria-hidden="true"></i> LINKEDIN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.blog')
    @include('includes.appointment')
@endsection
