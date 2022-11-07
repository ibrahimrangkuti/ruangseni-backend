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
                <p class="mb-4" data-aos="fade-up">A small river named Duden flows by their place and supplies it
                    with the necessary regelialia. It is a paradisematic country, in which roasted parts of
                    sentences fly into your mouth.</p>
            </div>
        </div>
    </div>


</div>

<div class="section">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Postingan oleh : {{ $post->user->name }}</h1>
                <h3>Kelas : {{ $post->user->class }}</h3>
                <img src="{{ asset($post->img_url) }}" alt="" class="img-fluid rounded mt-5">
                <p class="mt-3">Kategori : {{ $post->category->name }}</p>
                <h3>{{ $post->title }}</h3>
                <h6 class="mt-2 mb-3">{{ $post->body }}</h3>
                {{-- <a href="{{ route('like', $post->id) }}" class="btn btn-primary mb-3 "><i class="far fa-heart"></i> {{ $like->count() }}</a> --}}
                <p>{{ $post->created_at->diffForHumans() }}</p>
                <a href="{{ route('karya') }}">Kembali</a>
            </div>
        </div>
    </div>
</div>
<script>
    function likePost(id, el) {
        fetch('/like/' + id)
            .then(response => response.json())
            .then(data => {
                el.innerText = (data.status == 'LIKE') ? 'unlike' : 'like'
            });
    }
</script>
@endsection
