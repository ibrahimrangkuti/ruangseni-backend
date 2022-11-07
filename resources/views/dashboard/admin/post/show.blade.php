@extends('layouts.dashboard')

@section('content')
<div class="section">
    <div class="section-header">
        <h1>Postingan oleh : {{ $post->user->name }}</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset($post->img_url) }}" alt="" class="img-fluid rounded">
                    <p class="mt-3">Kategori : {{ $post->category->name }}</p>
                    <h3>{{ $post->title }}</h3>
                    <h6 class="mt-2">{{ $post->body }}</h3>
                    <p>{{ $post->created_at->diffForHumans() }}</p>

                    @if($post->status != 1)
                    <a href="{{ route('admin.post.approve', $post->slug) }}" class="btn btn-success">Setuju</a>
                    <a href="{{ route('admin.post.disapprove', $post->slug) }}" class="btn btn-danger">Tidak setuju</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
