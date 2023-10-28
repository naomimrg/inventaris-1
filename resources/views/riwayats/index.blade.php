@extends('layouts.app', ['title' => 'Halaman Data Riwayat Aset', 'page_heading' => 'Daftar Riwayat Aset'])

@section('content')
    <div class="card">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>x</span>
                    </button>
                    {{ $errors->fipst() }}
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
              data-target="#riwayats_create">
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
                            <th scope="col">Kategori</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jenis Perubahan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Pengguna</th>
                            <th scope="col">Status</th>
                            <th scope="col">Catatan Tambahan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayat as $rs)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $rs->nama }}</td>
                                <td>{{ $rs->kode_aset }}</td>
                                <td>{{ $rs->kategori_id }}</td>
                                <td>{{ $rs->lokasi_id }}</td>
                                <td>{{ $rs->tanggal }}</td>
                                <td>{{ $rs->jenis_perubahan }}</td>
                                <td>{{ $rs->dekskripsi }}</td>
                                <td>{{ $rs->users_id }}</td>
                                <td>{{ $rs->status }}</td>
                                <td>{{ $rs->catatan_tambahan }}</td>
                                <td class="text-center">
                                    <a data-id="{{ $rs->id }}" class="btn btn-sm btn-info text-white show_modal"
                                        data-toggle="modal" data-target="#show_rs" title="Lihat Detail">
                                        <i class="fas fa-fw fa-search"></i>
                                    </a>
                                    <a data-id="{{ $rs->id }}"
                                        class="btn btn-sm btn-success text-white swal-edit-button" data-toggle="modal"
                                        data-target="#edit_rs" data-placement="top" title="Ubah data">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <a data-id="{{ $rs->id }}"
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
    @include('riwayats.show')
    @include('riwayats.create')
    @include('riwayats.edit')
@endpush
