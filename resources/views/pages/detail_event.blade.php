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
            <div class="col-lg-6">
                <img src="{{ asset('thumbnail/'. $event->thumbnail) }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-lg-6 mt-5">
                <h1 class="text-primary">{{ $event->title }}</h1>
                <span>{{ $event->start_date }}</span> s.d <span>{{ $event->end_date }}</span>
                <p class="py-3">{{ $event->description }}</p>
                <a href="{{ route('event.create', $event->slug) }}" class="btn btn-primary">Ikuti Event</a>
            </div>
        </div>
    </div>
</div>
@endsection
