@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Postingan</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @include('components.alert')
                    <form action="{{ route('admin.post.index') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Cari postingan" name="search" value="{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                          </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" height="200px">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Nama Pembuat</th>
                                    <th>Kategori</th>
                                    <th>Judul</th>
                                    <th>Status</th>
                                    <th>Tanggal Diposting</th>
                                    <th width="160px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset($post->img_url) }}" alt="" class="img-fluid rounded" width="130"></td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <div class="@if($post->status == 0)
                                            text-warning
                                        @elseif($post->status == 1)
                                            text-success
                                        @else
                                            text-danger
                                        @endif">
                                            @if($post->status == 0)
                                            Belum Disetujui
                                            @elseif($post->status == 1)
                                            Sudah Disetujui
                                            @else
                                            Tidak Disetujui
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.post.show', $post->id) }}" class="btn btn-warning btn-sm">Detail</a>
                                        <a href="{{ route('admin.post.delete', $post->id) }}" class="btn btn-danger btn-sm">Hapus</a>
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
