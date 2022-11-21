@extends('layouts.app')

@section('content')
    <div class="hero overlay">

    <div class="img-bg rellax">
        <img src="{{ asset('assets/images/hero_4.jpg') }}" alt="Image" class="img-fluid">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-6 mx-auto text-center">

                <h1 class="heading" data-aos="fade-up">Leaderboard</h1>
                <p class="mb-4" data-aos="fade-up">Jadilah yang terbaik di antara yang terbaik.</p>
            </div>
        </div>


    </div>



    <div class="section">
        <div class="container">


            @foreach ($posts as $post)
                <div class="row align-items-stretch mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3" style="max-height: 240px; overflow: hidden;">
                                        <img src="{{ $post->img_url }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 mt-3">
                                        <h2 class="fw-bold">{{ $post->title }}</h2>
                                        <p>{{ $post->user->name }} | {{ $post->user->class }}</p>
                                        <p>{!! $post->body !!}</p>
                                        <a href="" class="btn btn-primary btn-sm">Detail Karya</a>
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
