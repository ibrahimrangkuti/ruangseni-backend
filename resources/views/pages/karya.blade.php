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
                    <p class="mb-4" data-aos="fade-up">"Karya seni adalah sebuah pernyataan dari jiwa seorang seniman yang tak ternilai harganya."</p>
                </div>
            </div>
        </div>


    </div>



    <div class="section">
        <div class="container">

            <div class="pilih-kategori">
                <select name="category" id="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->slug }}"
                            {{ request()->get('category') === $category->slug ? 'selected' : '' }}>{{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <a href="{{ route('karya') }}"
                    class="btn-kategori me-1 {{ !request()->has('category') ? 'btn-active' : '' }}">ALL</a>
                @foreach ($categories as $category)
                    <a href="karya?category={{ $category->slug }}"
                        class="btn-kategori me-1 {{ request()->get('category') === $category->slug ? 'btn-active' : '' }}">{{ $category->name }}</a>
                @endforeach
            </div>


            <div class="row align-items-stretch mt-5">

                @foreach ($posts as $post)
                    <div class="col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="media-entry">
                            <div>
                                <a href="{{ route('karya.detail', $post->slug) }}">
                                    <img src="{{ $post->img_url }}" alt="Image" class="img-fluid rounded">
                                </a>
                                @include('components.like_button')
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

@push('script')
    <script>
        $(document).ready(function() {
            $('#category').on('change', function() {
                let url = new URLSearchParams(window.location.search).get('category')
                const value = $('#category').val()
                window.location.href = 'karya?category=' + value
            })
        })
    </script>
@endpush
