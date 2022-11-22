@extends('layouts.app')

@section('content')
    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ asset('assets/images/hero_4.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-6 mx-auto text-center">

                    <h1 class="heading" data-aos="fade-up">Detail Karya</h1>
                </div>
            </div>
        </div>


    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset($post->img_url) }}" alt="" width="100%" class="rounded shadow-lg">
                    <div class="text-center">
                        <button type="button" class="btn btn-sm btn-primary mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Launch preview image
                        </button>
                    </div>
                </div>
                <div class="col-lg-8 content-karya">
                    <h1 class="text-primary mb-3">{{ $post->title }}</h1>
                    <div class="mb-3">
                        <a href="{{ route('profile', $post->user->username) }}">{{ $post->user->name }}</a> |
                        <span>{{ $post->user->class }}</span> | <span>{{ $post->category->name }}</span>
                    </div>
                    <p>{!! $post->body !!}</p>
                    <hr class="mt-5">
                    <div class="d-inline-block">
                        @include('components.like_button')
                    </div>
                    <span class="float-end mt-3">{{ $visitsCount }} Views</span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close position-absolute p-3 btn-danger" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <img src="{{ asset($post->img_url) }}" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('script')
    {{-- <script>
        $(document).ready(function() {
            $('#btn-like').click(function() {
                var id = $('#idpost').val()
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                $.ajax({
                    url: `{{ route('post.like', 4) }}`
                    type: 'POST',
                    success: () => {
                        console.log('hello')
                    }
                })
            })
        })
    </script> --}}
@endpush
