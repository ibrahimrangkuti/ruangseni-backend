@extends('layouts.app')

@section('content')
<div class="hero overlay">

    <div class="img-bg rellax">
        <img src="{{ asset('assets/images/hero_4.jpg') }}" alt="Image" class="img-fluid">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-6 mx-auto text-center">

                <h1 class="heading" data-aos="fade-up">Karya</h1>
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
            <div class="col-lg-4">
                <img src="{{ asset($post->img_url) }}" alt="" width="100%">
            </div>
            <div class="col-lg-8 mt-3">
                <h1 class="text-primary mb-3">{{ $post->title }}</h1>
                <div class="mb-3">
                    <a href="">{{ $post->user->name }}</a> | <span>{{ $post->user->class }}</span>
                </div>
                <p>{{ $post->body }}</p>
                <hr class="mt-5">
                <div class="mt-3">
                    <form action="{{ route('post.like', $post->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="{{ $checkLike ? 'text-primary' : 'text-black' }}" style="border: none; background: transparent">
                            <i class="{{ $checkLike ? 'fas' : 'far' }} fa-heart" style="font-size: 18px"></i>
                            <span>{{ $totalLike }}</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
