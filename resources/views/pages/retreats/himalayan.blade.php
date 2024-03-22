@extends('layouts.app')
@section('seo')
    <title>Himalayan Bliss Odyssey Retreat - House for Positive Change</title>
    <meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/himalayan.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Himalayan Bliss Odyssey Retreat</h2>
                        <p class="main-date">14/03/2024 - 27/03/2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <section class="classes spad retreats">
        <div class="container">
            <div class="p-3 text-center">
                <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                <p class="mt-3">Experience tranquillity in the serene Himalayas on a transformative 14-day retreat.
                    Beginning and ending in Rishikesh, the yoga capital, this journey balances self-discovery
                    and exploration. Hike through scenic valleys, encountering magical peaks like Nanda Devi,
                    and practice yoga and meditation in the pure Himalayan environment. The retreat also
                    embraces the untouched beauty of the Ganges, offering white-water rafting with camping on
                    silver sandy beaches. Culminating with the vibrant Holi festival, participants challenge
                    themselves amidst mountains, rivers, culture, and traditions. Highlights include Rishikesh
                    sightseeing, yoga, meditation, Ayurvedic massage, and traditional Indian cooking lessons. An
                    open heart and mind are key to embracing this immersive retreat.
                </p>
            </div>
            <div class="faq">
                <div class="d-flex justify-content-center my-4">
                    @auth
                        <a href="{{ route('retreat.signup') }}" class="primary-btn">SIGN UP FOR THE RETREAT</a>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" class="primary-btn">SIGN UP FOR THE RETREAT</a>
                    @endguest
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
                                    <span>Day 01:</span>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Welcome to Rishikesh, the Yoga capital of the world. Opening ceremony with evening
                                        meditation, followed by a healthy vegetarian dinner. Overnight stay in a hotel at
                                        Rishikesh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseTwo">
                                    <span>Day 02:</span>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Morning Yoga practice by the bank of Ganges with a healthy breakfast. Rishikesh
                                        sightseeing and massage. Visit to the holy Ganges fire ceremony. Evening yoga and
                                        meditation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseThree">
                                    <span>Day 03:</span>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Awaken with sun. Early morning body practices and breakfast. Approx. 8 hrs drive to
                                        the unique village of Joshimath. Evening yoga stretching and breathing practice.
                                        Enjoy the home cooked dinner and rest well.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseFour">
                                    <span>Day 04:</span>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Time to explore the active movements in the trails of Himalayas. Morning yoga and
                                        home cooked breakfast. A magnificent trek for 5-6 hrs with the great views of the
                                        valley and peaks of the Himalayas. Evening meditation and a well-deserved dinner
                                        cooked by our outdoor chef. Taali.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseFive">
                                    <span>Day 05:</span>
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Wake up with the silence and charming singing of the birds. Active body movement
                                        practice and action packed breakfast. Meditative walk among oak, rhododendron,
                                        Himalayan birch and pine forests to our campsite Khullara, which is an open meadow
                                        with astounding views of surrounding Himalayan peaks. Enjoy home-cooked dinner in a
                                        peaceful setting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseSix">
                                    <span>Day 06:</span>
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Morning easy yoga session and breakfast. Today we do a return hike from our base to
                                        Kuari pass and after enjoying the enchanting views from the pass we return back to
                                        our base. Evening meditation followed by dinner. Time to watch millions of stars.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseSeven">
                                    <span>Day 07:</span>
                                </a>
                            </div>
                            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Rest day to explore yourself in the divine land of yoga. After morning practices,
                                        find a peaceful corner for yourself in the surroundings of the campsite and inspire
                                        your own inner being with the company of the divine Himalayas. Evening yoga and
                                        meditation with dinner under the stars of Himalayas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseEight">
                                    <span>Day 08:</span>
                                </a>
                            </div>
                            <div id="collapseEight" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Morning yoga practice and breakfast. Today we leave the high ground of the Himalayas
                                        with a change in our lives. A 4-5 hrs downhill trek to the Dhak village via meadows
                                        and forests. Depending on the time we visit the hot water springs nearby and rest of
                                        the time we explore the local life of the village with our own cooked dinner.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseNine">
                                    <span>Day 09:</span>
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Morning yoga practice and breakfast. Today we leave the high ground of the Himalayas
                                        with a change in our lives. A 4-5 hrs downhill trek to the Dhak village via meadows
                                        and forests. Depending on the time we visit the hot water springs nearby and rest of
                                        the time we explore the local life of the village with our own cooked dinner.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseNine">
                                    <span>Day 10:</span>
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Feel the fresh air and the mist on the river. Morning practices and time to row your
                                        boat again. The easy section of the river passes through some of the remote
                                        locations of the river Ganges, providing the hidden beauty of the river. Enjoy the
                                        river lunch with some river fun activities. Time to enjoy a sound sleep in the
                                        glamping tents with a delicious dinner.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseEleven">
                                    <span>Day 11:</span>
                                </a>
                            </div>
                            <div id="collapseEleven" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Feel the power of the rapids of white water of Ganges. An thrilling and action packed
                                        day. We finish our trip in Rishikesh. Get a good shower. Evening visit to the centre
                                        for the pre-Holi festival celebration. Dinner and overnight stay in Rishikesh.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseTwelve">
                                    <span>Day 12:</span>
                                </a>
                            </div>
                            <div id="collapseTwelve" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Enjoy the colour festival Holi. Dance, get in colour and enjoy the vibes of the
                                        festival to its best. Evening to be spent in leisure. Dinner and overnight stay at a
                                        hotel in Rishikesh.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseThirteen">
                                    <span>Day 13:</span>
                                </a>
                            </div>
                            <div id="collapseThirteen" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>A morning yoga and meditation session. Explore Rishikesh city on your own. Time to
                                        buy some gifts and souvenirs for your loved ones. Group dinner and overnight stay in
                                        Rishikesh.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseFourteen">
                                    <span>Day 13:</span>
                                </a>
                            </div>
                            <div id="collapseFourteen" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Morning yoga and breakfast. Depart with newly refreshed vibes from the retreat.
                                        Retreat ends with beautiful memories.
                                    </p>
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
                                <img src="{{ asset('assets/img/retreats/holi.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="retreat-content bg-main-green height-retreat">
                                <h2>A quick glance</h2>
                                <hr>
                                <p>Dates: 14/03/2024 - 27/03/2024</p>
                                <p>Duration: 13 nights, 14 days</p>
                                <p>Food: vegetarian and/or vegan (no alcohol)</p>
                                <p>Retreat type: yoga, meditation, culture, spiritual, adventure, etc.</p>
                                <p>Highest point: 3680m</p>
                                <p>Highest sleeping point: 3300m</p>
                                <p class="pt-3">Highlights: intro to Rishikesh (“the birthplace of yoga”) - beatles
                                    Ashram - traditional
                                    Indian cooking lesson - daily yoga and meditation in pure Himalayan valleys - Ganges -
                                    aarti fire ceremony in Rishikesh - Ayurvedic massage - local traditional vegetarian
                                    -Garhwali food - color festival Holi - breathtaking Himalayan views - multi-days
                                    whitewater rafting on the Ganges
                                    Warning: sometimes no reception (emergency phone only), and roads are wild</p>
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
                                    <p>- 50% of the trip cost will need to be sent by bank transfer 90 days
                                        before trip
                                        departure</p>
                                    <p>- Final payment will need to be sent 60 days before trip departure</p>
                                </div>
                                <p>Please note that on all payments made by bank transfer, bank charges will have to be
                                    borne by the clients.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="retreat-content bg-main-green height-retreat">
                                <h2>Cancellation</h2>
                                <hr>
                                <p>
                                    If it becomes necessary to cancel your trip, you must notify House For Positive Change,
                                    immediately in writing to the email provided by House For Positive Change. Once we
                                    receive your notice, cancellation will take effect.
                                </p>
                                <p>
                                    Please note that the following charges will apply on cancellation:
                                </p>
                                <div class="ms-3">
                                    <p>- If cancellation takes place between 90 and 60 days prior to departure, 50% of the
                                        first down payment will be forfeited</p>
                                    <p>- If cancellation takes place less than 60-30 days prior to departure, 75% of the
                                        tour price will be forfeited</p>
                                    <p>- If cancellation takes place less than 30 days prior to departure, 100% of the tour
                                        price will be forfeited</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__details__pic">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="retreat-image p-10px">
                                <img class="m-0" src="{{ asset('assets/img/retreats/shiva.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="retreat-content bg-main-green p-10px">
                                <h2>Costs</h2>
                                <hr>
                                <p>Cost: € 2100 per person</p>
                                <p>Private accommodation at hotel in Rishikesh and Joshimath: additional € 350 per person
                                </p>
                                <p>Single tent for river and trek trip: additional € 180 per person</p>
                                <p>This price includes:</p>
                                <div class="ms-3">
                                    <p>- 13 nights / 14 days retreat</p>
                                    <p>- Everyday yoga and meditation</p>
                                    <p>- All accommodation on twin share basis (hotel, lodge, guest house, homestay, and
                                        glamping camping)</p>
                                    <p>- All transportation as per retreat itinerary</p>
                                    <p>- Dehradun Airport & Haridwar Railway Station transfers</p>
                                    <p>- Hiking in Chopta Valley, Garhwal Himalayas and North India</p>
                                    <p>- All meals (when we leave Rishikesh)</p>
                                    <p>- 1 cooking lesson</p>
                                    <p>- 1 Ayurvedic massage</p>
                                    <p>- Porters and ponies</p>
                                    <p>- English speaking yoga/hiking guides</p>
                                    <p>- White water rafting down the Ganges</p>
                                    <p>- All national park fees</p>
                                </div>
                                <p>This price excludes:</p>
                                <div class="ms-3">
                                    <p>- Sleeping bag & items of personal clothing</p>
                                    <p>- Air fares, visas, insurance, laundry, phone calls, beverages and bottled water,
                                        souvenirs, and other expenses of a personal nature</p>
                                    <p>- Tips for guides, cooks & porters</p>
                                    <p>- Any costs arising out of unforeseen circumstances such as bad weather, landslides,
                                        road conditions and any other circumstances beyond our control</p>
                                    <p>- Any costs arising out of emergency evacuations, search & rescue,
                                        medical/hospitalization expenses</p>
                                    <p>- Any kind of insurances</p>
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
