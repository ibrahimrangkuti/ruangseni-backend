@extends('layouts.app')

@section('content')
    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ asset('assets/images/hero_4.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-6 mx-auto text-center">

                    <h1 class="heading" data-aos="fade-up">Event</h1>
                    <p class="mb-4" data-aos="fade-up">Yuk ikuti event ini, kembangkan kreatifitasmu dan jadilah yang
                        terbaik.</p>
                </div>
            </div>
        </div>


    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <img src="{{ asset('thumbnail/' . $event->thumbnail) }}" alt="" width="400"
                        class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-lg-6 mt-5">
                    <h1 class="text-primary">{{ $event->title }}</h1>
                    <hr>
                    <p>{!! $event->description !!}</p>
                    @if (Auth::check())
                        @if (Auth::user()->role == 'siswa')
                            <a href="{{ route('event.create', $event->slug) }}" class="btn btn-primary">Ikuti Event</a>
                        @endif
                    @else
                        <a href="{{ route('login.index') }}" class="btn btn-primary">Ikuti Event</a>
                    @endif
                </div>
            </div>
            <hr style="color: #c4c4c4">
            <div class="d-flex justify-content-between text-muted">
                <span>Mulai: {{ $event->start_date }}</span>
                <span>Selesai: {{ $event->end_date }}</span>
            </div>
            <hr style="color: #c4c4c4">
            <h6 class="mb-3">Semua Postingan Event <b>{{ $event->title }}</b></h6>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="media-entry">
                            <div>
                                <a href="{{ route('karya.detail', $post->slug) }}">
                                    <img src="{{ asset($post->img_url) }}" alt="Image" class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="bg-white mt-3">
                                <span class="date">{{ $post->created_at->format('M, d-Y') }}</span>
                                <h3><a
                                        href="{{ route('karya.detail', $post->slug) }}">{{ Str::limit($post->title, 30) }}</a>
                                </h3>
                                <p>{!! Str::limit($post->body, 40) !!}</p>

                                <a href="{{ route('karya.detail', $post->slug) }}"
                                    class="more d-flex align-items-center float-start">
                                    <span class="label">Read More</span>
                                    <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
