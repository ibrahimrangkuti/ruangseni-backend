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
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset($post->img_url) }}" alt="Image" class="img-fluid">
                        <div class="media-entry">
                            <div>
                                <a href="{{ route('karya.detail', $post->slug) }}">
                                </a>
                                <div class="mt-3">
                                    <i class="far fa-heart" style="font-size: 18px"></i>
                                    <span>1.234</span>
                                </div>
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