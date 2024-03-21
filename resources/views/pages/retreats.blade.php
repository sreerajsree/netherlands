@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/Retreats.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Retreats</h2>
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
                <p class="mt-3">House for Positive Change offers transformative journeys to self-discovery and conscious
                    living. Amid the chaos of modern life, we believe in embracing life's essence by delving
                    into consciousness. Our unique programs combine indulgence and transformative challenges,
                    using practices like yoga, meditation, and silent hikes to restore physical and mental
                    balance. We aim to awaken inner consciousness, guiding participants toward liberated,
                    fulfilling lives. By harnessing consciousness's power, we invite individuals to live wisely
                    and beautifully.
                </p>
                <p>
                    Join our retreats, embark on the journey to self-discovery, nurture mind and body, and
                    unwrap life's possibilities. Time flies, and the transformative journey awaits.
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="main-image">
                        <img src="{{ asset('assets/img/retreats/Khullara-Campsite.jpg') }}" alt="Elianne">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="content">
                        <div class="section-title mb-0">
                            <img width="40" height="40" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                            <h2 class="m-0">Himalayan Bliss Odyssey Retreat</h2>
                        </div>
                        <hr>
                        <div class="date">14/03/2024 - 27/03/2024</div>
                        <p>
                            Experience tranquillity in the serene Himalayas on a transformative 14-day retreat (14-27 March,
                            2024). Beginning and ending in Rishikesh, the yoga capital, this journey balances self-discovery
                            and exploration. Hike through scenic valleys, encountering magical peaks like Nanda Devi, and
                            practice yoga and meditation in the pure Himalayan environment. The retreat also embraces the
                            untouched beauty of the Ganges, offering white-water rafting with camping on silver sandy
                            beaches. Culminating with the vibrant Holi festival, participants challenge themselves amidst
                            mountains, rivers, culture, and traditions. Highlights include Rishikesh sightseeing, yoga,
                            meditation, Ayurvedic massage, and traditional Indian cooking lessons. Practicalities cover 13
                            nights/14 days, varied accommodations, and a cost of Euro 2100 per person, including most
                            expenses. An open heart and mind are key to embracing this immersive retreat.
                        </p>
                        <a href="{{ route('himalayan') }}" class="primary-btn mt-2">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="main-image">
                        <img src="{{ asset('assets/img/retreats/Sunset-Yoga-scaled.jpg') }}" alt="Mukesh">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="content">
                        <div class="section-title mb-0">
                            <img width="40" height="40" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                            <h2 class="m-0">Know Yourself Retreat - Belgian Ardennes</h2>
                        </div>
                        <hr>
                        <div class="date">17/05/2024 - 20/05/2024</div>
                        <p>
                            The "Know Yourself Retreat" (17th - 20th of May, 2024) is a rejuvenating 4-day escape nestled in
                            the captivating High Ardennes of Belgium. The retreat unfolds in a picturesque base near St.
                            Hubert, surrounded by lush forests, rivers, and serene hills. Activities span yoga, meditation,
                            mindful walks, forest bathing, and communal cooking. The retreat's essence lies in
                            self-discovery and reflection, empowering each other, and embracing a conscious life. With
                            accommodations by a tranquil water stream, the retreat includes twin-share lodging,
                            vegetarian/vegan meals, yoga, guided hikes, campfire gatherings, and more. Embrace
                            self-awareness in the serene embrace of nature.
                        </p>
                        <a href="{{ route('belgian') }}" class="primary-btn mt-4">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.blog')
    @include('includes.appointment')
@endsection
