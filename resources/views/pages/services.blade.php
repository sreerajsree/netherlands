@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/banner.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Services</h2>
                        <div class="breadcrumb__widget">
                            <span>At House for Positive Change, we offer multiple services. These include Yoga, Ayurvedic
                                Healthcare and Body Fit Practices. Here, you can book an appointment or class immediately,
                                or continue reading for further information about our services.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <!-- Classes Section Begin -->
    <section class="classes spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="classes__item classes__item__page services-class">
                        <div class="classes__item__pic set-bg" data-setbg="{{ asset('assets/img/services/yoga-1.jpg') }}">
                            <span>Trending</span>
                        </div>
                        <div class="classes__item__text">
                            <h4><a href="{{ route('yoga.practices') }}">Yoga</a></h4>
                            <hr>
                            <div class="content">
                                <p>Experience the transformative power of Yoga at House for Positive Change. Our program is
                                    built on four pillars: physical movements, breathing, embodiment, and relaxation. Through
                                    regular yoga practices, you'll nourish your body and mind, unlocking your full potential.
                                </p>
                                <p>Engage in physical movements that strengthen, flex and energise your body. Improve your
                                    cardiovascular health and maintain a healthy weight. Develop better posture, balance and
                                    coordination. Let us help you discover the art of conscious breathing, optimising
                                    respiratory function and promoting relaxation.</p>
                                <p>
                                    Our embodiment practices will deepen your connection with your body, fostering
                                    self-awareness and body-mind integration. Improve your posture, balance, and coordination
                                    while cultivating a positive body image and self-esteem. Our relaxation practices, including
                                    Savasana and meditation, will help you release tension and restore your well-being. We will
                                    help you reduce anxiety, improve sleep, and enhance overall mental wellness.
                                </p>
                            </div>
                            <a href="{{ route('yoga.practices') }}" class="class-btn">EXPLORE OUR YOGA PRACTICES</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="classes__item classes__item__page services-class">
                        <div class="classes__item__pic set-bg" data-setbg="{{ asset('assets/img/services/ah.jpg') }}">
                            <span>Trending</span>
                        </div>
                        <div class="classes__item__text">
                            <h4><a href="{{ route('ayu.healthcare') }}">Ayurvedic Healthcare</a></h4>
                            <hr>
                            <div class="content">
                                <p>Dive into the ultimate in holistic care of Ayurvedic massages and Ayurveda Lifestyle and
                                    Nutrition Coaching. Immerse yourself in the ancient healing traditions of Ayurveda and
                                    unlock a state of total well-being.
                                </p>
                                <p>Find yourself emerged in the world of Ayurvedic massages, many of which we offer at House for
                                    Positive Change. Indulge in treatment such as Abhyangam, Shirodhara or Pinda Svedana. Every
                                    massage is specifically tailored to your body and needs, as are the oils and herbs. After a
                                    massage at House for Positive Change, you will leave completely revitalised and relaxed.</p>
                                <p>
                                    We also encourage a deeper understanding of yourself: learn the secrets to a balanced and
                                    nourishing lifestyle. During the Lifestyle and Nutrition Coaching sessions, an experienced
                                    practitioner will assess your unique constitution, health concerns, lifestyle habits, and
                                    dietary patterns. With personalized recommendations, she will guide you on a journey towards
                                    restored balance and enhanced well-being.
                                </p>
                            </div>
                            <a href="{{ route('ayu.healthcare') }}" class="class-btn">EXPLORE OUR AYURVEDIC HEALTHCARE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="classes__item classes__item__page services-class">
                        <div class="classes__item__pic set-bg" data-setbg="{{ asset('assets/img/services/bfp.jpg') }}">
                            <span>Trending</span>
                        </div>
                        <div class="classes__item__text">
                            <h4><a href="{{ route('body.fit') }}">Body Fit Practices</a></h4>
                            <hr>
                            <div class="content">
                                <p>At House for Positive Change, we offer a diverse range of body fit practices designed to
                                    elevate your well-being. Although our focal point is personal wellbeing, our practices also
                                    focus on strength, endurance and stamina.
                                </p>
                                <p>Engage in our dynamic Body Fit Training sessions, tailored to enhance strength, endurance,
                                    and overall fitness. Immerse yourself in the serenity of Outdoor Yoga Condition Training,
                                    combining the healing power of nature with mindful movements to improve flexibility,
                                    balance, and inner harmony. Unwind and rejuvenate with our exquisite Yoga Stretching
                                    Massage, a blissful experience that promotes relaxation, releases tension, and restores
                                    energy flow throughout the body.</p>
                                <p>
                                    Whether you're seeking physical transformation, mental clarity, or a profound sense of
                                    peace, our three distinct practices provide a comprehensive approach to holistic health.
                                    Seek help from our experienced teachers at House for Positive Change and step into a world
                                    of positive change. Choose to embark on a journey towards a stronger, balanced, and more
                                    vibrant self.
    
                                </p>
                            </div>
                            <a href="{{ route('body.fit') }}" class="class-btn">EXPLORE OUR BODY PRACTICES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->
    @include('includes.blog')
    @include('includes.appointment')
@endsection
