@extends('layouts.app', ['title' => 'Admin Dashboard', 'page_heading' => 'Dashboard'])

@section('content')
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="fas fa-columns"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Aset</h4>
        </div>
        <div class="card-body">
          {{ $aset_count }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-fw fa-check-circle"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Kerusakan Aset</h4>
        </div>
        <div class="card-body">
          {{ $totalKerusakan }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <i class="fas fa-fw fa-exclamation-circle"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Peminjaman Aset</h4>
        </div>
        <div class="card-body">
          {{ $totalPeminjaman }}
        </div>
      </div>
    </div>
  </div>
@endsection
