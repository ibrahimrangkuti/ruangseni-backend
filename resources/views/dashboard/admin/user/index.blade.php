@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data User</h1>
    </div>
    {{-- <a href="{{ route('admin.user.import') }}" class="btn btn-primary mb-3">Import Data</a> --}}
    <div class="mb-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#importData">Import Data</button>
        <a href="{{ route('admin.user.export') }}" class="btn btn-success">Export Data</a>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    @include('components.alert')

                    <form action="{{ route('admin.user.index') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Cari Siswa" name="search" value="{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                          </div>
                    </form>

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
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nis }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->class }}</td>
                                    <td>{{ $user->role === 'siswa' ? 'Siswa' : 'Admin' }}</td>
                                    <td>
                                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('admin.user.delete', $user->id) }}" class="btn btn-danger btn-sm">Hapus</a>
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

<div class="modal fade" tabindex="-1" role="dialog" id="importData">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Import Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('admin.user.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <input type="file" name="file" id="file" class="form-control">
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection
