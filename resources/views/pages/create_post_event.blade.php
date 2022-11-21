@extends('layouts.app')

@section('content')
    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ asset('assets/images/hero_4.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-6 mx-auto text-center">
                    <h1 class="heading" data-aos="fade-up">{{ $event->title }}</h1>
                    <p></p>
                    <p class="mb-4" data-aos="fade-up">{!! Str::limit($event->description, 200) !!} <a
                            href="{{ route('event.detail', $event->slug) }}">Lihat selengkapnya</a></p>

                </div>
            </div>
        </div>


    </div>

    <div class="section">
        <div class="container">
            <h1 class="text-primary mb-5">Buat Postingan</h1>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('event.store', $event->slug) }}" method="POST" enctype="multipart/form-data">
                        {{-- {{ dd($event->category->id) }} --}}
                        @csrf
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" name="image" id="gambar" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="body" class="form-label">Konten</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="ckeditor form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <input type="hidden" name="category_id" id="category_id" value="{{ $event->category->id }}">
                            <input type="text" class="form-control" value="{{ $event->category->name }}" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary float-end mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
