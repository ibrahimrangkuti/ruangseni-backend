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
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" height="400px">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Link</th>
                                    <th>Nama Pembuat</th>
                                    <th>Kategori</th>
                                    <th>Judul</th>
                                    <th>Status</th>
                                    <th>Tanggal Diposting</th>
                                    <th width="160px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>gajah.jpg</td>
                                    <td><a href="https::google.com">https::google.com</a></td>
                                    <td>Ibrahim</td>
                                    <td>Cerpen</td>
                                    <td><a href="https::google.com">Impian Keabadian</a></td>
                                    <td>Sudah disetujui</td>
                                    <td>06-10-22</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Detail</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>harimau.jpg</td>
                                    <td><a href="https::google.com">https::google.com</a></td>
                                    <td>Luqman</td>
                                    <td>Seni Lukis</td>
                                    <td><a href="https::google.com">Senja</a></td>
                                    <td>Sudah disetujui</td>
                                    <td>06-11-22</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Detail</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>kucing.jpg</td>
                                    <td><a href="https::google.com">https::google.com</a></td>
                                    <td>Akrom</td>
                                    <td>Puisi</td>
                                    <td><a href="https::google.com">Aku adalah aku</a></td>
                                    <td>Belum disetujui</td>
                                    <td>06-15-22</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Detail</a>
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
