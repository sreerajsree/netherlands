@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/Retreats.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Events</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event-cards spad">
        <div class="container">
            <div class="p-3 text-center">
                <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                <p class="mt-3">Here at House for Positive Change, we offer several workshops and organise events to allow
                    our community to connect, learn and thrive together. Join us during one of our many events,
                    such as our Men's Circle and Satsanga Evenings, or follow a workshop offered by our
                    experienced teachers, or through House for Positive Change.
                </p>
            </div>
            <div class="row">
                @forelse ($events as $item)
                    <article class="card fl-left">
                        <section class="date">
                            <time datetime="{{ \Carbon\Carbon::parse($item->date)->format('d-M-Y'); }}">
                                <span>{{ \Carbon\Carbon::parse($item->date)->format('d'); }}</span><span>{{ \Carbon\Carbon::parse($item->date)->format('M'); }}</span>
                            </time>
                        </section>
                        <section class="card-cont">
                            {{-- <small>dj khaled</small> --}}
                            <h3>{{ $item->name }}</h3>
                            <div class="even-date">
                                <i class="fa fa-calendar"></i>
                                <time>
                                    <span>{{ \Carbon\Carbon::parse($item->date)->format('l d M Y'); }}</span>
                                    <span>{{ $item->time }}</span>
                                </time>
                            </div>
                            <div class="even-info">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    {{ $item->location }}
                                </p>
                            </div>
                            <a href="{{ route('view.event',[$item->date,$item->slug]) }}">READ MORE</a>
                        </section>
                    </article>
                    @empty
                    <p>No Events Found</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
