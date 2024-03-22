@extends('layouts.app')
@section('seo')
<title>Our blog - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/blog.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Our blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card blog__item__pic border-0">
                            <div class="blog__item__pic">
                                <img src="{{ Storage::url('images/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="card-img-top">
                            </div>
                            <div class="card-body p-0 d-flex flex-column blog__item__text">
                                <ul>
                                    <li><i
                                            class="fa fa-calendar-o"></i>{{ \Carbon\Carbon::parse($item->date)->format('d-M-Y') }}
                                    </li>
                                </ul>
                                <h5 class="card-title"><a
                                        href="{{ route('view.blog', $item->slug) }}">{{ $item->title }}</a></h5>
                                <p class="card-text mb-4">{{ $item->description }}</p>
                                <a href="{{ route('view.blog', $item->slug) }}"
                                    class="blog_read_more mt-auto align-self-start">READ MORE <span
                                        class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('includes.appointment')
@endsection
