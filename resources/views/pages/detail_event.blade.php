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
                    <p class="mb-4" data-aos="fade-up">Yuk ikuti event ini, kembangkan kreatifitasmu dan jadilah yang terbaik.</p>
                </div>
            </div>
        </div>


    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('thumbnail/' . $event->thumbnail) }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 mt-5">
                    <h1 class="text-primary">{{ $event->title }}</h1>
                    <span>{{ $event->start_date }}</span> s.d <span>{{ $event->end_date }}</span>
                    <p class="py-3">{!! $event->description !!}</p>
                    @if (Auth::check())
                        @if (Auth::user()->role == 'siswa')
                        <a href="{{ route('event.create', $event->slug) }}" class="btn btn-primary">Ikuti Event</a>
                        @endif
                    @else
                    <a href="{{ route('login.index') }}" class="btn btn-primary">Ikuti Event</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
