@extends('layouts.app')
@section('seo')
<title>Know Yourself Retreat - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/belgian.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Know Yourself Retreat</h2>
                        <p class="main-date">17/05/2024 - 20/05/2024</p>
                        <div class="breadcrumb__widget">
                            <span>The "Know Yourself Retreat" is rejuvenating 4-day escape nestled in the High Ardennes of
                                Belgium. The retreat will take place from the 17th until the 20th of May, and will aid you
                                to the path of self growth. The retreat unfolds in a picturesque base near St. Hubert,
                                surrounded by lush forests, rivers, and serene hills. Activities span yoga, meditation,
                                mindful walks, forest bathing, and communal cooking. The retreat's essence lies in
                                self-discovery and reflection, empowering each other, and embracing a conscious life. With
                                accommodations by a tranquil water stream, the retreat includes twin-share lodging,
                                vegetarian/vegan meals, yoga, guided hikes, campfire gatherings, and more. Embrace
                                self-awareness in the serene embrace of nature.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <section class="classes spad retreats">
        <div class="container">
            <div class="faq">
                <div class="d-flex justify-content-center my-4">
                    <a href="{{ route('retreat.signup') }}" class="primary-btn">SIGN UP FOR THE RETREAT</a>
                </div>
                <div class="section-title">
                    <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                    <h2>Quick itinerary:</h2>
                </div>
                <div class="faq__accordion">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-heading active">
                                <a data-toggle="collapse" data-target="#collapseOne">
                                    <span>Day 01: Arrive at location</span>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>At 17:00 hrs you will arrive at our retreat location. Opening ceremony with
                                        introduction and briefing about the coming days. Get together to prepare food
                                        together. A short silent walk to help you settle in. Time for you to relax and get
                                        recharged for the next day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseTwo">
                                    <span>Day 02: Indulge in serenity</span>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Morning movements followed by a healthy breakfast. A beautiful hike in the serenity
                                        of the nearby river and forests followed by some mindful activities and having our
                                        freshly cooked lunch. Return to the base and enjoy the moment of cooking our dinner
                                        together. Time for pure relaxation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseThree">
                                    <span>Day 03: Forest bathing</span>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Today is a day to take a bath in the forest. Let the external nature teach you how to
                                        consciously connect with what’s around you. Energize with our jointly home cooked
                                        meals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseFour">
                                    <span>Day 04: Sharing experiences</span>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Get into the flow of energy with some body movement exercises and a fuelling
                                        breakfast. This day is to share what we have learned and what we are going to bring
                                        or will change in our life to live more consciously. Depart to your home sweet home
                                        or further destination with invigorating self-teaching memories of the retreat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__details">
                <div class="blog__details__pic">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="retreat-image height-retreat">
                                <img src="{{ asset('assets/img/retreats/plant.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="retreat-content bg-main-green height-retreat">
                                <h2>A quick glance</h2>
                                <hr>
                                <p>Duration: 3 nights, 4 days</p>
                                <p>Check in: May 17, 17:00 hrs</p>
                                <p>Check out: May 20, 12:00 hrs</p>
                                <p>Food: vegetarian and/or vegan</p>
                                <p>Waking grade: easy</p>
                                <p class="pt-2">Activities: yoga, breathing practices, seated meditation sessions,
                                    meditative walk, forest bathing, cooking together, campfire gatherings, group
                                    discussions, guided hikes, and many more untold activities</p>
                                <p class="pt-2">
                                    What to expect: Body movements like Yoga and Body Fit Training, mindful and meditation
                                    activities, forest walks, river walks, campfire gatherings, group discussions, guided
                                    hikes, cooking together, empowering each other, learning about ourselves
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__details__pic">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="retreat-content bg-main-green height-retreat">
                                <h2>How to book</h2>
                                <hr>
                                <p>To reserve your place on any of the trips organized by House For Positive Change, you
                                    will need to complete the booking / registration form and send a bank transfer for the
                                    amount of € 150 per person as non-refundable trip deposit. Upon receipt of the trip
                                    deposit, the detailed itinerary along with necessary notes and equipment checklist will
                                    be sent.</p>
                                <p>Further payments:</p>
                                <div class="ms-3">
                                    <p>- 50% of the trip cost will need to be sent by bank transfer 90 days before trip departure</p>
                                    <p>- Final payment will need to be sent 60 days before trip departure</p>
                                </div>
                                <p>Please note that on all payments made by bank transfer, bank charges will have to be borne by the clients.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="retreat-content bg-main-green height-retreat">
                                <h2>Cancellation</h2>
                                <hr>
                                <p>
                                    If it becomes necessary to cancel your trip, you must notify House For Positive Change, immediately in writing to the email provided by House For Positive Change. Once we receive your notice, cancellation will take effect.
                                </p>
                                <p>
                                    Please note that the following charges will apply on cancellation:
                                </p>
                                <div class="ms-3">
                                    <p>- If cancellation takes place between 90 and 60 days prior to departure, 50% of the first down payment will be forfeited</p>
                                    <p>- If cancellation takes place less than 60-30 days prior to departure, 75% of the tour price will be forfeited</p>
                                    <p>- If cancellation takes place less than 30 days prior to departure, 100% of the tour price will be forfeited</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__details__pic">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="retreat-image p-10px">
                                <img class="m-0" src="{{ asset('assets/img/retreats/trees.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="retreat-content bg-main-green p-10px">
                                <h2>Costs</h2>
                                <hr>
                                <p>Cost: € 785 per person</p>
                                <p>Private accommodation: an additional € 340 per person
                                </p>
                                <p>This price includes:</p>
                                <div class="ms-3">
                                    <p>- 3 nights accommodation on twin share basis</p>
                                    <p>- All vegetarian/vegan meals: 3 breakfast, 2 lunches, 3 dinners, tea and snacks</p>
                                    <p>- Yoga, Body Fit Training, breathing practices and meditation exercises</p>
                                    <p>- Campfire (sessions)</p>
                                    <p>- Guided hikes</p>
                                    <p>- Group discussions</p>
                                </div>
                                <p>This price excludes:</p>
                                <div class="ms-3">
                                    <p>- Any kind of transportation to and from the location</p>
                                    <p>- Any kind of insurances</p>
                                    <p>- Any kind of expenses which are not mentioned in the above inclusions</p>
                                    <p>- Except for tea and water, any kind of beverages</p>
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
