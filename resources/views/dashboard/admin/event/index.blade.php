@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Event</h1>
    </div>
    <a href="{{ route('admin.event.create') }}" class="btn btn-primary mb-3">Tambah Event</a>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @include('components.alert')
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" height="400px">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Thumbnail</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Waktu Awal</th>
                                    <th>Waktu Akhir</th>
                                    <th width="160px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ url('/thumbnail/'.$event->thumbnail) }}" alt="" class="img-fluid rounded" width="400"></td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->category->name }}</td>
                                    <td>{{ $event->start_date }}</td>
                                    <td>{{ $event->end_date }}</td>
                                    <td>
                                        <a href="{{ route('event.detail', $event->slug) }}" class="btn btn-primary btn-sm">Detail</a>
                                        <a href="{{ route('admin.event.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('admin.event.delete', $event->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
