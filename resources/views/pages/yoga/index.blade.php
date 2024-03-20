@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/yoga-practices.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Yoga practices</h2>
                        <div class="breadcrumb__widget">
                            <span>Incorporating physical movements, forms or shapes, breathing, embodiment, and relaxation
                                practices into our lifestyle is essential for optimising physical and mental health. House
                                for Positive Change offers several yoga practices that promote relaxation, self-awareness,
                                and stress reduction while enhancing respiratory function, body-mind integration, and
                                overall well-being. They provide a holistic approach to health that supports individuals in
                                achieving a balanced and harmonious state of being.</span>
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
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item border-services p-3">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/yoga/deeprest-yoga.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h5><a href="#" class="fs-26">DeepRest (Chair) Yoga</a></h5>
                            <p class="service-ch">Experience profound relaxation through Restorative Yoga and Yoga Nidra. Calm, supported
                                postures induce healing, stress relief, and deep relaxation. Explore 'yogic sleep' for
                                mindful relaxation and inner balance."DeepRest (Chair) Yoga offers holistic benefits for
                                both body and mind, making it a valuable practice for overall health and wellness.</p>
                            <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item border-services p-3">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/yoga/train-your-breath.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h5><a href="#" class="fs-26">Train your Breath</a></h5>
                            <p class="service-ch">Start your breathing journey with Train Your Breath sessions, where Western evidence-based
                                breathing techniques and ancient Indian Pranayamas are combined to your personal benefit.
                                Supported with expert guidance you will discover the profound benefits of mindful breathing,
                                fostering tranquility, focus, and a harmonious connection between body and mind.</p>
                            <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item border-services p-3">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/yoga/yoga-pi-training.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h5><a href="#" class="fs-26">YoPi Training</a></h5>
                            <p class="service-ch">Discover the perfect blend of Yoga and Pilates in our YoPi training. Enhance flexibility,
                                balance, and posture while fostering inner calm, reducing stress, and catering to all
                                fitness levels. A holistic workout awaits.</p>
                            <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item border-services p-3">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/yoga/foundational.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h5><a href="#" class="fs-26">Foundational Yoga</a></h5>
                            <p class="service-ch">Seek the transformative power of Foundational Yoga with Mukesh. Enhance your strength,
                                flexibility, and inner balance. Let us guide you through the yoga positions that form the
                                foundation of Hatha Yoga; book an appointment or join a class for this rejuvenating
                                experience.</p>
                            <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item border-services p-3">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/yoga/yoga-therapy.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h5><a href="#" class="fs-26">Yoga Therapy</a></h5>
                            <p class="service-ch">Experience the healing power of Yoga Therapy with Elianne. Tailored to your specific needs,
                                this transformative practice enhances physical, mental, and emotional well-being. Discover
                                the path to holistic healing at House for Positive Change.</p>
                            <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item border-services p-3">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/yoga/trauma.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h5><a href="#" class="fs-26">Trauma Sensitive Yoga</a></h5>
                            <p class="service-ch">Discover the healing benefits of Trauma-Sensitive Yoga with Elianne. This gentle and
                                empowering practice supports individuals in their journey of healing and recovery. Join us
                                at House for Positive Change and find solace, strength, and transformation.</p>
                            <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
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
