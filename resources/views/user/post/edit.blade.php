@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Tambah Postingan</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NIS</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex mb-5">
        <a href="" class="btn btn-primary">Tambah</a>
    </div>
</section>
@endsection