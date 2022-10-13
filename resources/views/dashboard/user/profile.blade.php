@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Profil</h1>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible show fade mb-3">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>x</span>
            </button>
            {{ session('success') }}
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.profile.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data['id'] }}">
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="name" class="form-label">NIS</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="nis" id="nis" class="form-control" value="{{ $data['nis'] }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="name"class="form-label">NAMA</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="name" id="name" class="form-control" value="{{ $data['name'] }}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="name" class="form-label">EMAIL</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="email" id="email" class="form-control" value="{{ $data['email'] }}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="name" class="form-label">KELAS</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="class" id="class" class="form-control" value="{{ $data['class'] }}" disabled>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Edit Profil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
