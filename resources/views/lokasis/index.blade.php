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
@endsection

@push('modal')
    @include('lokasis.show')
    @include('lokasis.create')
    @include('lokasis.edit')
@endpush