<<<<<<< HEAD
@extends('layouts.app')
@section('title', 'Lokasi Aset')
@section('contents')
<div class="d-flex align-items-center justify-content-between mb-3">
    <h1></h1>
    <a href="{{ route('lokasis.create') }}" class="btn btn-primary">Tambah Lokasi</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Nama</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($lokasis->count() > 0)
            @foreach($lokasis as $rs)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $rs->nama }}</td>
                <td class="align-middle">{{ $rs->deskripsi }}</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('lokasis.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                        <a href="{{ route('lokasis.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                        <form action="{{ route('lokasis.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-0">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="7">Data Lokasi Aset Tidak Ditemukan</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
=======
@extends('layouts.app', ['title' => 'Halaman Lokasi Aset', 'page_heading' => 'Lokasi Aset'])
@section('content')
    <div class="card">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>x</span>
                    </button>
                    {{ $errors->first() }}
                </div>
            </div>
        @endif

        @if (session()->has('sukses'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>x</span>
                    </button>
                    {{ session()->get('sukses') }}
                </div>
            </div>
        @endif

        <div class="row">
          <button type="button" class="btn btn-primary float-left mt-3 mx-3" data-toggle="modal"
              data-target="#lokasis_create">
              <i class="fas fa-fw fa-plus"></i>
              Tambah Data
          </button>
      </div> 
    </div>
    <div class="row px-3 py-3">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lokasi Aset</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    </div>
>>>>>>> 6300f39ae6b9f6d43af7e6b9097b125b77d7ea28
@endsection

@push('modal')
    @include('lokasis.show')
    @include('lokasis.create')
    @include('lokasis.edit')
@endpush