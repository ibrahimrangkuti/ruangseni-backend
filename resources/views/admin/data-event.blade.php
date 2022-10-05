@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Event</h1>
    </div>

    <div class="d-flex mb-5">
        <a href="tambah.html" class="btn btn-primary">Tambah Data</a>
        <a href="" class="btn btn-success mx-2">Import Data</a>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="../assets/images/karya-1.jpg" alt="" width="100px" class="rounded"></td>
                                        <td>Lorem ipsum</td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit molestiae, blanditiis dolor soluta beatae quod atque voluptatem magnam incidunt officia ab, nihil mollitia. Quae voluptate autem molestiae. Alias, fugiat quasi!
                                        </td>
                                        <td>Seni Lukis</td>
                                        <td>11/09/22 - 18/09/22</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm m-2">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm m-2">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="../assets/images/karya-2.jpg" alt="" width="100px" class="rounded"></td>
                                        <td>Lorem ipsum</td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit molestiae, blanditiis dolor soluta beatae quod atque voluptatem magnam incidunt officia ab, nihil mollitia. Quae voluptate autem molestiae. Alias, fugiat quasi!
                                        </td>
                                        <td>Seni Lukis</td>
                                        <td>11/09/22 - 18/09/22</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm m-2">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm m-2">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="../assets/images/karya-3.jpg" alt="" width="100px" class="rounded"></td>
                                        <td>Lorem ipsum</td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit molestiae, blanditiis dolor soluta beatae quod atque voluptatem magnam incidunt officia ab, nihil mollitia. Quae voluptate autem molestiae. Alias, fugiat quasi!
                                        </td>
                                        <td>Seni Lukis</td>
                                        <td>11/09/22 - 18/09/22</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm m-2">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm m-2">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection