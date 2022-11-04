@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Tambah Data Event</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control mb-3" id="title" aria-describedby="emailHelp" name="title">
                            <label for="description" class="form-label">Deskripsi</label>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="description" style="height: 100px" name="description"></textarea>
                              </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Thumbnail</label>
                                <input class="form-control p-2" type="file" id="formFile" name="thumbnail">
                            </div>
                            <label for="title" class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control mb-3" id="title" aria-describedby="emailHelp" name="title">
                            <label for="title" class="form-label">Tanggal Akhir</label>
                            <input type="date" class="form-control mb-3" id="title" aria-describedby="emailHelp" name="title">
                            <button class="btn btn-success" type="submit">Tambah Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection