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


            <div class="row align-items-stretch">
                @foreach ($events as $event)
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="media-entry">
                            <a href="{{ route('event.detail', $event->slug) }}">
                                <img src="{{ asset('thumbnail/' . $event->thumbnail) }}" alt="Image" class="img-fluid">
                            </a>
                            <div class="bg-white m-body">
                                <span class="date">17/09/22 - 24/09/22</span>
                                <h3><a href="index.html">{{ $event->title }}</a></h3>
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
