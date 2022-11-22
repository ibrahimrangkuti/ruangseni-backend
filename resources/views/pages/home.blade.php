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
                    <img src="https://source.unsplash.com/800x800?art" alt="" class="img-fluid float-end rounded me-5"
                        width="420px">
                </div>
                <div class="col-lg-4 order-lg-1">

                    <div class="ms-5">
                        <h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">Eksplor Dunia Lebih Luas Lagi
                            Melalui Seni!</h2>

                        <p data-aos="fade-up" data-aos-delay="200">Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                            Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                        <p data-aos="fade-up" data-aos-delay="300">A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in which roasted
                            parts of sentences fly into your mouth.</p>
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
                            <a href="#">
                                <img src="{{ asset('thumbnail/' . $event->thumbnail) }}" alt="Image" class="img-fluid">
                            </a>
                            <div class="bg-white m-body">
                                <span class="date">{{ $event->start_date }}</span>
                                <h3><a href="#">{{ $event->title }}</a></h3>
                                <p>{!! Str::limit($event->description, 100) !!}</p>

                                <a href="single.html" class="more d-flex align-items-center float-start">
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

    <div class="section bg-light">




        <h2 class="heading mb-5 text-center">Siswa Teratas</h2>

        <div class="text-center mb-5">
            <div id="prevnext-testimonial">
                <span class="prev me-3" data-controls="prev">
                    <span class="icon-chevron-left"></span>

                </span>
                <span class="next" data-controls="next">
                    <span class="icon-chevron-right"></span>

                </span>
            </div>
        </div>

        <div class="wide-slider-testimonial-wrap">
            <div class="wide-slider-testimonial">
                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            <img src="assets/images/person_1.jpg" alt="Free template by TemplateUX">
                            <h3>Ibrahim Rangkuti</h3>
                            <p class="position mb-5">11 RPL 1</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;Segala sesuatu memiliki kesudahan, yang sudah berakhir biarlah berlalu dan yakinlah semua
                        akan baik-baik saja.&rdquo;</p>
                    </blockquote>
                </div>

                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            <img src="assets/images/person_2.jpg" alt="Free template by TemplateUX">
                            <h3>Luqman Syahreno</h3>
                            <p class="position mb-5">11 RPL 1</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;Setiap detik sangatlah berharga karena waktu mengetahui banyak hal, termasuk rahasia
                        hati.".&rdquo;</p>

                    </blockquote>
                </div>

                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            <img src="assets/images/person_3.jpg" alt="Free template by TemplateUX">
                            <h3>Faril Septian Nugraha</h3>
                            <p class="position mb-5">11 RPL 1</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;Bukan bahagia yang menjadikan kita bersyukur, tetapi dengan bersyukurlah yang akan menjadikan
                        hidup kita bahagia.&rdquo;</p>
                    </blockquote>
                </div>

                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            <img src="assets/images/person_1.jpg" alt="Free template by TemplateUX">
                            <h3>Akrom Fadhil</h3>
                            <p class="position mb-5">11 RPL 1</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;Matahari akan tenggelam sore ini, namun esok pagi ia akan terbit lagi. Hari ini mungkin doa
                        dan harapanmu belum terkabul. Namun esok hari, boleh jadi akan terkabul.&rdquo;</p>
                    </blockquote>
                </div>

                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            <img src="assets/images/person_2.jpg" alt="Free template by TemplateUX">
                            <h3>Farhan Septiansyah Efendi</h3>
                            <p class="position mb-5">11 RPL 1</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;Karena perjuangan adalah tanda perjalananmu menuju sukses&rdquo;</p>

                    </blockquote>
                </div>

            </div>
        </div>



    </div>
@endsection
