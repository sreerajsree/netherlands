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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-form text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Welcome to House for Positive Change <span class="fst-italic fw-bold" style="color: #af7152">{{ Auth::user()->name }}</span></h3>
                    <p class="mt-4"><a href="{{ route('dashboard') }}">Go to Dashboard</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
