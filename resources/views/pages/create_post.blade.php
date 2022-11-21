@extends('layouts.app')

@section('content')
    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ asset('assets/images/hero_4.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-6 mx-auto text-center">
                    <h1 class="heading" data-aos="fade-up">{{ $user->name }}</h1>
                    <p>{{ $user->class }}</p>
                    <p class="mb-4" data-aos="fade-up">A small river named Duden flows by their place and supplies it
                        with the necessary regelialia. It is a paradisematic country, in which roasted parts of
                        sentences fly into your mouth.</p>

                </div>
            </div>
        </div>


    </div>

    <div class="section">
        <div class="container">
            <h1 class="text-primary mb-5">Buat Postingan</h1>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('store.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" name="image" id="image" class="form-control p-2">
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="body" class="form-label">Konten</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="ckeditor form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select name="category" id="category" class="form-control">
                                @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Buat Postingan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
