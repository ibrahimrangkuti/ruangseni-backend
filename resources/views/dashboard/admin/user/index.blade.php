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
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <?php $no = 1; ?>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $user->nis }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->class }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
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
