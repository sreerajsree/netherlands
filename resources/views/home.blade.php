@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/banner.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Home</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-form">
                    <div class="text-center">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
                    <h3>Welcome to House for Positive Change <span class="fst-italic fw-bold"
                            style="color: #af7152">{{ Auth::user()->name }}</span></h3>
                    @if (Auth::user()->role == 'admin')
                        <p class="mt-4"><a href="{{ route('dashboard') }}">Go to Dashboard</a></p>
                    @endif
                    @if (Auth::user()->role != 'admin')
                        <div class="py-5">
                            <div class="d-flex align-items-start">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-event-tab" data-toggle="pill"
                                        data-target="#v-pills-event" type="button" role="tab"
                                        aria-controls="v-pills-event" aria-selected="true" style="white-space: nowrap">Your
                                        Events</button>
                                    <button class="nav-link" id="v-pills-retreats-tab" data-toggle="pill"
                                        data-target="#v-pills-retreats" type="button" role="tab"
                                        aria-controls="v-pills-retreats" aria-selected="false" style="white-space: nowrap">Your Retreats</button>
                                </div>
                                <div class="tab-content w-100" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-event" role="tabpanel"
                                        aria-labelledby="v-pills-event-tab" tabindex="0">
                                        <div class="table-responsive">
                                            <h5 class="mb-3">Your Events</h5>
                                            <table class="table table-hover table-bordered w-100">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Event</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">No of people</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($myevents as $item)
                                                        <tr>
                                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                                            <td>{{ $item->event_name }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->nos }}</td>
                                                            <td class="d-flex">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#eventModalEdit_{{ $item->id }}"
                                                                    class="btn btn-warning me-2 btn-sm link-light"><i
                                                                        class="fa fa-pencil-square-o"
                                                                        aria-hidden="true"></i></a>
                                                                @include('includes.event-edit')
                                                                <a onclick="return confirm('Are you sure?')"
                                                                    href="{{ route('delete.eventbooking', $item->id) }}"
                                                                    class="btn btn-danger link-light btn-sm"><i class="fa fa-trash"
                                                                        aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        No Bookings found
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-retreats" role="tabpanel"
                                        aria-labelledby="v-pills-retreats-tab" tabindex="0">
                                        <div class="table-responsive">
                                            <h5 class="mb-3">Your Retreats</h5>
                                            <table class="table table-hover table-bordered w-100">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Retreat</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">No. of participants</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($myretreats as $item)
                                                        <tr>
                                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                                            <td>{{ $item->retreat_name }}</td>
                                                            <td>{{ $item->full_name }}</td>
                                                            <td>{{ $item->gender }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->nop }}</td>
                                                            <td class="d-flex">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#retreatModalEdit_{{ $item->id }}"
                                                                    class="btn btn-warning me-2 btn-sm link-light"><i
                                                                        class="fa fa-pencil-square-o"
                                                                        aria-hidden="true"></i></a>
                                                                @include('includes.retreat-edit')
                                                                <a onclick="return confirm('Are you sure?')"
                                                                    href="{{ route('delete.retreatbooking', $item->id) }}"
                                                                    class="btn btn-danger link-light btn-sm"><i class="fa fa-trash"
                                                                        aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        No Bookings found
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
