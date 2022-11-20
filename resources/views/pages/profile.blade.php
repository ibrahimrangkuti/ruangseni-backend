@extends('layouts.app')

@section('content')
    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ asset('assets/images/hero_4.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-6 mx-auto text-center">
                    <h1 class="heading" data-aos="fade-up">{{ $user->name }}</h1>
                    <p>{{ $user->class }}</p>
                    <p class="mb-4" data-aos="fade-up">A small river named Duden flows by their place and supplies it
                        with the necessary regelialia. It is a paradisematic country, in which roasted parts of
                        sentences fly into your mouth.</p>

                </div>
            </div>
        </div>


    </div>

    <div class="section">
        <div class="container">
            @if (Auth::check())
                @if (Auth::user()->username === $user->username)
                    <a href="{{ route('create.post', $user->username) }}" class="btn btn-primary mb-5">Buat Postingan</a>
                @endif
            @endif
            <h2 class="mb-5">{{ $totalPost }} Postingan</h1>
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('karya.detail', $post->slug) }}">
                                        <img src="{{ asset($post->img_url) }}" alt="Image" class="img-fluid">
                                    </a>
                                    <div class="media-entry">
                                        <div>
                                            <a href="{{ route('karya.detail', $post->slug) }}">
                                            </a>
                                            @include('components.like_button')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2 class="mb-5">{{ $totalPostEvent }} Postingan yang telah mengikuti event</h2>
            <div class="row">
                @foreach ($joinEvent as $post)
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('karya.detail', $post->slug) }}">
                                    <img src="{{ asset($post->img_url) }}" alt="Image" class="img-fluid">
                                </a>
                                <div class="media-entry">
                                    <div>
                                        <a href="{{ route('karya.detail', $post->slug) }}">
                                        </a>
                                        @include('components.like_button')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
