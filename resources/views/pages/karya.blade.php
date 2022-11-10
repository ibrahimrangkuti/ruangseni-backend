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


        <div class="row align-items-stretch">

            @foreach($posts as $post)
            @if ($post->status == 1)

            <div class="col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="media-entry">
                    <div>
                        <a href="{{ route('karya.detail', $post->slug) }}">
                            <img src="{{ $post->img_url }}" alt="Image" class="img-fluid">
                        </a>
                        @include('components.like_button')
                    </div>
                    <div class="bg-white mt-3">
                        <span class="date">{{ $post->created_at->format('M, d-Y') }}</span>
                        <h3><a href="{{ route('karya.detail', $post->slug) }}">{{ $post->title }}</a></h3>
                        <p>{{ Str::limit($post->body, 100) }}</p>

                        <a href="{{ route('karya.detail', $post->slug) }}" class="more d-flex align-items-center float-start">
                            <span class="label">Read More</span>
                            <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

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
    </div>
</div>
@endsection
