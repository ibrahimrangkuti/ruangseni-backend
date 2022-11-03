@extends('layouts.dashboard')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total User</h4>
            </div>
            <div class="card-body">
              {{ $user->count() }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-th"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Postingan</h4>
            </div>
            <div class="card-body">
              42
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-th"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Kategori</h4>
            </div>
            <div class="card-body">
              {{ $category->count() }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Event</h4>
            </div>
            <div class="card-body">
              12
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
