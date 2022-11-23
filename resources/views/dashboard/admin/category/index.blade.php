@extends('layouts.dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Kategori</h1>
        </div>
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
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
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th width="160px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{!! $category->description !!}</td>
                                            <td>
                                                <a href="{{ route('admin.category.edit', $category->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm delete"
                                                    data-id="{{ $category->id }}">Hapus</a>
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

@push('script')
    <script>
        $('.delete').click(function() {
            var categoryId = $(this).attr('data-id')
            swal({
                    title: 'Apa kamu yakin?',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: false,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = 'category/' + categoryId + '/delete'
                        swal('Kategori berhasil dihapus!', {
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
