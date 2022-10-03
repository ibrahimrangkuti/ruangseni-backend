@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Tambah Postingan</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Judul</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan Judul">
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Tambahkan Media</label>
                            <input type="file" class="form-control p-2" id="file">
                            {{-- <label class="input-group-text" for="inputGroupFile02"></label> --}}
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" placeholder="Masukkan Deskripsi" id="deskripsi" style="height: 100px" id="deskripsi"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex mb-5 justify-content-end">
        <a href="" class="btn btn-primary">Posting</a>
    </div>
</section>
@endsection