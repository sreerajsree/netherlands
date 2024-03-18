@extends('layouts.app')

@section('content')
    <section class="breadcrumb-option blog-hero set-bg" data-setbg="{{ asset('assets/img/hero/hero.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__hero__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>{{ $event->name }}</h2>
                        <ul>
                            <li>{{ \Carbon\Carbon::parse($event->date)->format('d-M-Y') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details">
                        <div class="even-date fw-bold my-2">
                            <i class="fa fa-calendar"></i>
                            <time>
                                <span>{{ \Carbon\Carbon::parse($event->date)->format('l d M Y'); }}</span>
                            </time>
                            <i class="fa fa-clock-o ms-2"></i>
                            <time>
                                <span>{{ $event->time }}</span>
                            </time>
                        </div>
                        <div class="blog__details__large">
                            <img src="{{ Storage::url('events/' . $event->image) }}" alt="{{ $event->name }}">
                        </div>
                        <div class="blog__details__text">
                            {!! $event->body !!}
                            <div class="py-3 d-flex justify-content-center">
                                <a href="#" class="primary-btn">Sign up for Event</a>
                            </div>
                        </div>
                        <div class="row text-dark">
                            <div class="col-md-4">
                                <h5 class="fw-bold text-uppercase">Details</h5>
                                <div class="my-3">
                                    <p class="fw-bold m-0">Date:</p>
                                    <p>{{ $event->date }}</p>
                                    <p class="fw-bold m-0">Time:</p>
                                    <p>{{ $event->time }}</p>
                                    <p class="fw-bold m-0">Cost::</p>
                                    <p>{{ $event->cost }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h5 class="fw-bold text-uppercase">ORGANIZERS</h5>
                                <div class="my-3">
                                    <p>{{ $event->org_name }}</p>
                                    <p>{{ $event->org_email }}</p>
                                    <p>{{ $event->org_phone }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h5 class="fw-bold text-uppercase">Venue</h5>
                                <div class="my-3">
                                    <p>{{ $event->location }}</p>
                                    <div class="w-100">
                                        {!! $event->map !!}
                                    </div>
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
