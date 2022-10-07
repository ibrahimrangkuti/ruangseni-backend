@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data User</h1>
    </div>
    <a href="" class="btn btn-success mb-3">Import Data</a>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NIS</th>
                                    <th>Email</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1234567</td>
                                    <td>rangkutyibrahim765@gmail.com</td>
                                    <td>Ibrahim Rangkuti</td>
                                    <td>11 RPL 1</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>890101112</td>
                                    <td>farilseptian@gmail.com</td>
                                    <td>Faril Septian</td>
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
</section>
@endsection
