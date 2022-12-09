@extends('layouts.app')

@section('content')
    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ asset('assets/images/hero_4.jpg') }}" alt="Image" class="img-fluid">
        </div>

        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-5">
                    <h1 class="heading" data-aos="fade-up">Tunjukkan Kreatifitas mu Pada Dunia!</h1>
                </div>


            </div>
        </div>


    </div>


    <div class="section section-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
                    <img src="https://source.unsplash.com/800x800?art" alt=""
                        class="img-fluid float-end rounded me-5" width="420px">
                </div>
                <div class="col-lg-4 order-lg-1">

                    <div class="ms-5">
                        <h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">Eksplor Dunia Lebih Luas Lagi
                            Melalui Seni!</h2>

                        <p data-aos="fade-up" data-aos-delay="200"> "Jika seni bertujuan untuk memelihara akar dari budaya
                            kita, masyarakat harus membiarkan seniman bebas mengikuti visi mereka masing-masing kemanapun
                            hal itu membawa mereka." - John F. Kennedy</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="section section-3" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row align-items-center justify-content-between  mb-5">
                <div class="col-lg-5" data-aos="fade-up">
                    <h2 class="heading mb-3">Karya Siswa</h2>
                </div>
                <div class="col-lg-5 text-md-end" data-aos="fade-up" data-aos-delay="100">
                    <div id="destination-controls">
                        <span class="prev me-3" data-controls="prev">
                            <span class="icon-chevron-left"></span>

                        </span>
                        <span class="next" data-controls="next">
                            <span class="icon-chevron-right"></span>

                        </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="destination-slider-wrap @if ($posts->count() <= 5) container @endif">
            <div class="destination-slider">
                @foreach ($posts as $post)
                    <div class="destination">
                        <a href="{{ route('karya.detail', $post->slug) }}">
                            <div class="thumb">
                                <img src="{{ $post->img_url }}" alt="Image" class="img-fluid">
                            </div>
                        </a>
                        @include('components.like_button')
                        <div class="mt-4">
                            <h3><a href="{{ route('karya.detail', $post->slug) }}">{{ Str::limit($post->title, 15) }}</a>
                            </h3>
                            <a href="{{ route('profile', $post->user->username) }}">{{ $post->user->name }}</a>
                            <span class="text-muted">{{ $post->user->class }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="section">
        <div class="container">

            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="0">

                    <h2 class="heading mb-5">Event Terbaru</h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                @foreach ($events as $event)
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="media-entry">
                            <a href="{{ route('event.detail', $event->slug) }}">
                                <img src="{{ asset('thumbnail/' . $event->thumbnail) }}" alt="Image" class="img-fluid">
                            </a>
                            <div class="bg-white m-body">
                                <span class="date">{{ $event->start_date }}</span>
                                <h3><a href="#">{{ $event->title }}</a></h3>
                                <p>{!! Str::limit($event->description, 100) !!}</p>

                                <a href="{{ route('event.detail', $event->slug) }}"
                                    class="more d-flex align-items-center float-start">
                                    <span class="label">Lihat Detail</span>
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
