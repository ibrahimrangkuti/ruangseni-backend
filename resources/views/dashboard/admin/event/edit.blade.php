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
                    <form action="{{ route('admin.event.update', $data['id']) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" name="oldThumbnail" value="{{ $data['thumbnail'] }}">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control mb-3" id="title" aria-describedby="emailHelp" name="title" value="{{ $data['title'] }}">
                            <label for="description" class="form-label">Deskripsi</label>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="description" style="height: 100px" name="description">{{ $data['description'] }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Thumbnail</label>
                                <input class="form-control p-2" type="file" id="formFile" name="thumbnail">
                                <img src="{{ url('/thumbnail/'.$data->thumbnail) }}" alt="" class="img-fluid rounded mt-2" width="200">
                            </div>
                            <label for="start_date" class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control mb-3" id="start_date" aria-describedby="emailHelp" name="start_date" value="{{ $data['start_date'] }}">
                            <label for="end_date" class="form-label">Tanggal Akhir</label>
                            <input type="date" class="form-control mb-3" id="end_date" aria-describedby="emailHelp" name="end_date" value="{{ $data['end_date'] }}">
                            <div class="d-flex justify-content-end pt-3">
                                <button class="btn btn-success" type="submit">Edit Event</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
