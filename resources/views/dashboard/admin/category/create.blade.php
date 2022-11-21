@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Tambah Data Kategori</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.category.create') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control mb-3" id="name" aria-describedby="emailHelp" name="name">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control ckeditor" cols="30" rows="10"></textarea>
                            <button class="btn btn-success mt-3 float-right" type="submit">Tambah Kategori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection