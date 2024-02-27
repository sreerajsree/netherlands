@extends('layouts.app')

@section('content')
    <section class="breadcrumb-option blog-hero set-bg" data-setbg="{{ asset('assets/img/hero/hero.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__hero__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>{{ $blog->title }}</h2>
                        <ul>
                            <li>By <span>{{ $blog->author }}</span></li>
                            <li>{{ \Carbon\Carbon::parse($blog->date)->format('d-M-Y'); }}</li>
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
                        <div class="blog__details__large">
                            <img src="{{ Storage::url('images/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="blog__details__text">
                            {!! $blog->body !!}
                        </div>  
                        <div class="blog__details__tags__share">
                            <div class="blog__details__share">
                                <a href="#"><span class="social_facebook"></span></a>
                                <a href="#"><span class="social_instagram"></span></a>
                                <a href="#"><span class="social_twitter"></span></a>
                                <a href="#"><span class="social_linkedin"></span></a>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                @if ($previous)
                                <a href="{{ URL::to('blog',$previous->slug) }}" class="blog__previous__btn">
                                    <i class="fa fa-angle-left"></i>
                                    <h6>{{ $previous->title }}</h6>
                                    <span>Previous Post</span>
                                </a>
                                @endif
                            </div>
                            <div class="col-lg-6 col-md-6">
                                @if ($next)
                                <a href="{{ URL::to('blog',$next->slug) }}" class="blog__next__btn">
                                    <i class="fa fa-angle-right"></i>
                                    <h6>{{ $next->title }}</h6>
                                    <span>Next Post</span>
                                </a>
                                @endif
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
