@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit User</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('admin.user.update', $data['id']) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="nis" class="form-label">NIS</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ old('nis', $data['nis']) }}" readonly>
                                @error('nis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="name" class="form-label">Nama</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $data['name']) }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="email" class="form-label">Email</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $data['email']) }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="class" class="form-label">Kelas</label>
                            </div>
                            <div class="col-lg-9">
                                <select name="class" id="class" class="form-control @error('class') is-invalid @enderror">
                                    <option value="11 RPL 1">11 RPL 1</option>
                                    <option value="11 RPL 2">11 RPL 2</option>
                                </select>
                                @error('class')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right mb-3">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
