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
                    <p class="mb-4" data-aos="fade-up">Yuk ikuti event ini, kembangkan kreatifitasmu dan jadilah yang
                        terbaik.</p>
                </div>
            </div>
        </div>


    </div>



    <div class="section">
        <div class="container">


            @foreach ($posts as $post)
                <div class="d-flex row justify-content-between mb-4">

                    <div class="col-lg-12">
                        <div class="card">
                            <span class="bg-primary"
                                style="border-radius: 100%;  position: absolute; padding: 20px 26px; z-index: 100; color: white">{{ $loop->iteration }}</span>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ asset($post->img_url) }}" alt=""
                                            class="shadow rounded img-fluid">
                                    </div>
                                    <div class="col-md-6 mt-5">
                                        <h2>{{ $post->title }}</h2>
                                        <p>{!! Str::limit($post->body, 400) !!}</p>
                                    </div>
                                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                                        <h5>{{ $post->like_count === null ? '0' : $post->like_count }} Likes</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- <nav class="mt-5" aria-label="Page navigation example" data-aos="fade-up" data-aos-delay="100">
                <ul class="custom-pagination pagination">
                    <li class="page-item prev"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item next"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav> --}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
