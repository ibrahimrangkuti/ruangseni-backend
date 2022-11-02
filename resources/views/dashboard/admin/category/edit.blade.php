@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Kategori</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.category.update', $data['id']) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control mb-3" id="name" aria-describedby="emailHelp" name="name" value="{{ $data['name'] }}">
                            <label for="description" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control mb-3" id="description" aria-describedby="emailHelp" name="description" value="{{ $data['description'] }}">
                            <button class="btn btn-success" type="submit">Edit Kategori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection