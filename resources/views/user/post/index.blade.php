@extends('layouts.index')

@section('content')
section class="section">
<div class="section-header">
    <h1>Data User</h1>
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
                                    <th>NIS</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Kelas & Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>22080806</td>
                                    <td>Luqman Syahreno</td>
                                    <td>eno.luqman@gmail.com</td>
                                    <td>11 RPL 1</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>22030406</td>
                                    <td>Ibrahim Rangkuti</td>
                                    <td>rangkutyibrahim765@gmail.com</td>
                                    <td>11 RPL 1</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>22010905</td>
                                    <td>Faril Septian Nugraha</td>
                                    <td>farilseptiannugraha@gmail.com</td>
                                    <td>11 RPL 1</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>22131206</td>
                                    <td>Rosiana Afifa Azzahra</td>
                                    <td>rosianaafifa@gmail.com</td>
                                    <td>11 RPL 1</td>
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
</div>
</section>
@endsection