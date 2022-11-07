@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Profil</h1>
    </div>

    @include('components.alert')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.profile.update') }}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="nis" class="form-label">NIS</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="nis" id="nis" class="form-control" value="{{ $data['nis'] }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="username"class="form-label">USERNAME</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="username" id="username" class="form-control" value="{{ $data['username'] }}">
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
                                <label for="email" class="form-label">EMAIL</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="email" id="email" class="form-control" value="{{ $data['email'] }}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="class" class="form-label">KELAS</label>
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

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.profile.changePassword') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data['id'] }}">
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="old_password" class="form-label">PASSWORD LAMA</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="password" name="old_password" id="old_password" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="new_password" class="form-label">PASSWORD BARU</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="password" name="new_password" id="new_password" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Ganti Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
