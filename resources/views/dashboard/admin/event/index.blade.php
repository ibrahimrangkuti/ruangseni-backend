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
                                    <th>Deskripsi</th>
                                    <th>Waktu Awal</th>
                                    <th>Waktu Akhir</th>
                                    <th width="160px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{ asset('images/download.jpg') }}" alt="" class="img-fluid"></td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis velit et repellendus eaque? Qui tempore possimus expedita fuga sed. Id.</td>
                                    <td>22-2-2022</td>
                                    <td>26-2-2022</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="{{ asset('images/download.jpg') }}" alt="" class="img-fluid"></td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis velit et repellendus eaque? Qui tempore possimus expedita fuga sed. Id.</td>
                                    <td>22-2-2022</td>
                                    <td>26-2-2022</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
