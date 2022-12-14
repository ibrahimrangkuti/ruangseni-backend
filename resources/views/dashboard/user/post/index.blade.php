@extends('layouts.dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Postingan</h1>
        </div>

        <a href="{{ route('user.post.create') }}" class="btn btn-primary mb-3">Buat Postingan</a>

        @include('components.alert')

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.post.index') }}" method="GET">
                            <div class="input-group mb-3">
                                <input type="search" class="form-control" placeholder="Cari postingan" name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-outline-secondary" type="submit">Search</button>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Isi Konten</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($posts as $post)
                                        @if ($post->user_id === Auth::user()->id)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
                                                    <a href="{{ route('karya.detail', $post->slug) }}">
                                                        <img src="{{ asset($post->img_url) }}" alt=""
                                                            class="img-fluid rounded" width="240">
                                                    </a>
                                                </td>
                                                <td><a
                                                        href="{{ route('karya.detail', $post->slug) }}">{{ $post->title }}</a>
                                                </td>
                                                <td><a
                                                        href="{{ route('karya.detail', $post->slug) }}">{!! Str::limit($post->body, 150) !!}</a>
                                                </td>
                                                <td>{{ $post->category->name }}</td>
                                                <td>
                                                    <div
                                                        class="@if ($post->status == 0) text-warning
                                        @elseif($post->status == 1)
                                            text-success
                                        @else
                                            text-danger @endif">
                                                        @if ($post->status == 0)
                                                            Belum Disetujui
                                                        @elseif($post->status == 1)
                                                            Sudah Disetujui
                                                        @else
                                                            Tidak Disetujui
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ route('karya.detail', $post->slug) }}"
                                                        class="btn btn-primary btn-sm">Detail</a>
                                                    <a href="{{ route('user.post.edit', $post->id) }}"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm delete"
                                                        data-id="{{ $post->id }}">Hapus</a>
                                                </td>
                                            </tr>
                                        @endif
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
@push('script')
    <script>
        $('.delete').click(function() {
            var postId = $(this).attr('data-id')
            swal({
                    title: 'Apa kamu yakin?',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: false,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = 'post/' + postId + '/delete'
                        swal('Postingan berhasil dihapus!', {
                            icon: 'success'
                        })
                    } else {
                        swal({
                            title: 'Hapus data dibatalkan!',
                            icon: 'error'
                        })
                    }
                })
        })
    </script>
@endpush
