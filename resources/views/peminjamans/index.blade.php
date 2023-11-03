@extends('layouts.app', ['title' => 'Halaman Data Peminjaman Aset', 'page_heading' => 'Daftar Peminjaman Aset'])

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
              data-target="#peminjamans_create">
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
                            <th scope="col">Nama Aset</th>
                            <th scope="col">Kode Aset</th>
                            <th scope="col">Tanggal Peminjaman</th>
                            <th scope="col">Tanggal Perbaikan</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjamen as $pm)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $pm->nama }}</td>
                                <td>{{ $pm->kode_aset }}</td>
                                <td>{{ $pm->tanggal_peminjaman }}</td>
                                <td>{{ $pm->tanggal_pengembalian }}</td>
                                <td>{{ $pm->deskripsi }}</td>
                                <td class="text-center">
                                    <a data-id="{{ $pm->id }}" class="btn btn-sm btn-info text-white show_modal"
                                        data-toggle="modal" data-target="#show_pm" title="Lihat Detail">
                                        <i class="fas fa-fw fa-search"></i>
                                    </a>
                                    <a data-id="{{ $pm->id }}"
                                        class="btn btn-sm btn-success text-white swal-edit-button" data-toggle="modal"
                                        data-target="#edit_pm" data-placement="top" title="Ubah data">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <a data-id="{{ $pm->id }}"
                                        class="btn btn-sm btn-danger text-white swal-delete-button" data-toggle="tooltip"
                                        data-placement="top" title="Hapus data">
                                        <i class="fas fa-fw fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('modal')
    @include('peminjamans.show')
    @include('peminjamans.create')
    @include('peminjamans.edit')
@endpush
