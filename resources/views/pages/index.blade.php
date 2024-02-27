@extends('layouts.app')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{ asset('assets/img/hero/hero.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero__text">
                                <span>Welcome to House for Positive Change</span>
                                <h2>At House for Positive Change we seek inner <br>harmony and happiness.</h2>
                                <a href="{{ route('host.retreat') }}" class="primary-btn">HOST A RETREAT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{ asset('assets/img/hero/hero.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero__text">
                                <span>Welcome to House for Positive Change</span>
                                <h2>At House for Positive Change we seek inner <br>harmony and happiness.</h2>
                                <a href="{{ route('host.retreat') }}" class="primary-btn">HOST A RETREAT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- About Section Begin -->
    <section class="home-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home__about__pic">
                        <div class="home__about__pic__item large-item set-bg"
                            data-setbg="{{ asset('assets/img/about/about-1.jpg') }}"></div>
                        <div class="home__about__pic__item">
                            <div class="home__about__pic__item__inner set-bg"
                                data-setbg="{{ asset('assets/img/about/about-2.jpg') }}"></div>
                            <div class="home__about__pic__item__inner set-bg"
                                data-setbg="{{ asset('assets/img/about/about-3.jpg') }}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home__about__text">
                        <div class="section-title">
                            <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                            <h2>Welcome!</h2>
                        </div>
                        <p>Here at House for Positive Change, we believe that a healthy body and mind are life’s essence.
                            More than ever
                            before do we face the need for balance in our lives. Our team will immerse you in a journey that
                            enables you to
                            understand the true concept of your own well-being by learning, loving and living in harmony.
                        </p>
                        <a href="{{ route('about') }}" class="primary-btn mt-4">MORE ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="services__list">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <a href="">
                            <div class="services__item">
                                <img src="{{ asset('assets/img/services/FOUNDATION-YOGA.jpg') }}" alt="">
                                <h5>FOUNDATION YOGA</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <a href="">
                            <div class="services__item">
                                <img src="{{ asset('assets/img/services/RETREATS.jpg') }}" alt="">
                                <h5>RETREATS</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <a href="">
                            <div class="services__item">
                                <img src="{{ asset('assets/img/services/MASSAGES.jpg') }}" alt="">
                                <h5>MASSAGES</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <a href="">
                            <div class="services__item">
                                <img src="{{ asset('assets/img/services/AYURVEDIC-LIFESTYLE-NUTRITION.jpg') }}"
                                    alt="">
                                <h5>AYURVEDIC LIFESTYLE & NUTRITION COACHING</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <a href="">
                            <div class="services__item">
                                <img src="{{ asset('assets/img/services/YOGA-THERAPY.jpg') }}" alt="">
                                <h5>YOGA THERAPY</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <a href="">
                            <div class="services__item">
                                <img src="{{ asset('assets/img/services/TRAUMA-SENSITIVE-YOGA.jpg') }}" alt="">
                                <h5>TRAUMA SENSITIVE YOGA (TCTSY)</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="chooseus__text">
                        <div class="mb-5">
                            <h2><img width="30" height="30" src="{{ asset('assets/img/logo-dark.png') }}" alt="Logo"> Yoga</h2>
                            <hr>
                            <p>The practice has gained much popularity over the years. And for good reason: yoga is the core
                                of inner peace, mental clarity, physical strength and flexibility. Here at House for
                                Positive Change, we give you the opportunity to explore a variety of yoga techniques and
                                classes, each with its own health benefits.
                            </p>
                            <a href="#" class="primary-btn text-uppercase">Read More</a>
                        </div>
                        <div class="mb-5">
                            <h2><img width="30" height="30" src="{{ asset('assets/img/logo-dark.png') }}" alt="Logo"> Ayurvedic healthcare</h2>
                            <hr>
                            <p>At House for Positive Change we present a holistic approach to well-being and health with two
                                transformative approaches, offering an eye-opening journey towards a holistic well-being,
                                harmonising mind, body, and spirit. Book an Ayurvedic Massage Treatment for holistic care
                                for the body, mind, and spirit, or go even deeper and book an Ayurvedic Lifestyle and
                                Nutrition Coaching.
                            </p>
                            <a href="#" class="primary-btn text-uppercase">Read More</a>
                        </div>
                        <div>
                            <h2><img width="30" height="30" src="{{ asset('assets/img/logo-dark.png') }}" alt="Logo"> Body fit practices</h2>
                            <hr>
                            <p>Discover the transformative power of Body Fit Practices offered by House for Positive Change.
                                Choose for our Yoga Stretching Massage, Outdoor Yoga Condition Training or even a Body Fit
                                Training to boost your strength and endurance. The trio of practices aim to nurture physical
                                fitness, mental well-being, and deep relaxation.
                            </p>
                            <a href="#" class="primary-btn text-uppercase">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chooseus__pic">
                        <img src="{{ asset('assets/img/hero/yoga-pose.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->
    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>What our customers say:</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team__slider owl-carousel">
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__text">
                                <p>"One of the most important factors in the recovery for my 'running knees' and my improved
                                    flexibility following hours curved over a computer screen during lockdown, has been
                                    weekly sessions with Mukesh. His carefully designed sessions provide plenty of stretch,
                                    mobility and strength building exercises which are always different and hugely
                                    enjoyable.”</p>
                                <div class="team__item__title">
                                    <h4>Sue Aspinal - Foundational Yoga</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__text">
                                <p>“The healing Abhyanga massage by Elianne has been a blissful experience. Her skillful
                                    hands and nurturing touch melt away tension and restore balance. The combination of warm
                                    oil, gentle strokes, and personalized care leaves me feeling rejuvenated and deeply
                                    nourished. Offered with a lovely Chat and Chai, makes it even more special. ”</p>
                                <div class="team__item__title">
                                    <h4>Willem Donkers – Abhyanga massage</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__text">
                                <p>“I'd recommend Mukesh to anyone who is seeking someone to help them find a personalised,
                                    holistic and knowledgeable approach to keeping fit and healthy. You will definitely
                                    notice an all-round difference in your wellbeing. Mukesh will tailor yourBody Fit
                                    Training exactly to what you need.”</p>
                                <div class="team__item__title">
                                    <h4>Erik Hoving - Body Fit Training</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__text">
                                <p>“The moment you step into the space at House of Positive Change, you feel welcomed, safe
                                    and
                                    nourished. Elianne's soothing guidance through the Yoga Nidra meditation is like a warm
                                    blanket enveloping you. The experience leaves you feeling very rested and in a deep
                                    relaxation mode.”</p>
                                <div class="team__item__title">
                                    <h4>Sandra Delgado Quist - Yoga Nidra</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__text">
                                <p>“Elianne's Yoga Therapy sessions have been transformative for my well-being. Her
                                    expertise in
                                    tailoring practices to my specific needs, both physical and emotional, has helped me
                                    find
                                    balance and inner peace. Her calming presence and gentle guidance create a nurturing
                                    space
                                    for healing.”</p>
                                <div class="team__item__title">
                                    <h4>Bemmie Schorer - Yoga Therapy</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__text">
                                <p>“Mukesh knows exactly what the body needs. His carefully designed Yoga Stretching Massage
                                    sessions provide plenty of stretch, mobility, relief and relaxation exercises which are
                                    usually different and hugely enjoyable.”</p>
                                <div class="team__item__title">
                                    <h4>Bart van der Steenstraten - Yoga Stretching Massage</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__text">
                                <p>“Experiencing the synchronized Abhyangam massage by Elianne and her partner was pure
                                    bliss.
                                    The harmonized movements of their skilled hands created a deeply relaxing and
                                    rejuvenating
                                    sensation. It was an exquisite and transformative healing journey that I would highly
                                    recommend to anyone seeking ultimate relaxation.”</p>
                                <div class="team__item__title">
                                    <h4>Andrea Thome Van der Togt – Synchronized Abhyanga massage</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    @include('includes.blog')
    @include('includes.appointment')
@endsection
