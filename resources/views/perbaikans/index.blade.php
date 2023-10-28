@extends('layouts.app', ['title' => 'Halaman Data Perbaikan Aset', 'page_heading' => 'Daftar Perbaikan Aset'])

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
              data-target="#perbaikans_create">
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
                            <th scope="col">Tanggal Permintaan Perbaikan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Status</th>
                            <th scope="col">User</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perbaikans as $ps)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $ps->nama }}</td>
                                <td>{{ $ps->kode_aset }}</td>
                                <td>{{ $ps->tanggal_permintaan_perbaikan }}</td>
                                <td>{{ $ps->deskripsi }}</td>
                                <td>{{ $ps->status }}</td>
                                <td>{{ $ps->users_id }}</td>
                                <td class="text-center">
                                    <a data-id="{{ $ps->id }}" class="btn btn-sm btn-info text-white show_modal"
                                        data-toggle="modal" data-target="#show_ps" title="Lihat Detail">
                                        <i class="fas fa-fw fa-search"></i>
                                    </a>
                                    <a data-id="{{ $ps->id }}"
                                        class="btn btn-sm btn-success text-white swal-edit-button" data-toggle="modal"
                                        data-target="#edit_ps" data-placement="top" title="Ubah data">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <a data-id="{{ $ps->id }}"
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
    @include('perbaikans.show')
    @include('perbaikans.create')
    @include('perbaikans.edit')
@endpush
