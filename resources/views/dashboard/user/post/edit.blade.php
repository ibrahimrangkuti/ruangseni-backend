@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Postingan</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="hidden" name="oldImage" value="{{ $post->img_url }}">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" name="image" id="image" class="form-control p-2">
                            <label for="image" class="form-label mt-3">Gambar Lama</label>
                            <img src="{{ asset( $post->img_url ) }}" alt="" class="img-fluid rounded d-block" width="200">
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="body" class="form-label">Konten</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ $post->body }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select name="category" id="category" class="form-control">
                                @foreach ($categories as $category)
                                    @if (old('category_id', $post->category_id) == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Edit Postingan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
