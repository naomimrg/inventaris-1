@extends('layouts.app')
@section('title', 'Daftar Aset')
@section('contents')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1></h1>
        <a href="{{ route('asets.create') }}" class="btn btn-primary">Tambah Aset</a>
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
                            <th scope="col">Tanggal Pembelian</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aset as $rs)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $rs->item_code }}</td>
                                <td>{{ Str::limit($rs->name, 55, '...') }}</td>
                                <td>{{ $rs->year_of_purchase }}</td>
                                @if ($rs->condition === 1)
                                    <td>
                                        <span class="badge badge-pill badge-success" data-toggle="tooltip"
                                            data-placement="top" title="Baik">Baik</span>
                                    </td>
                                @elseif($rs->condition === 2)
                                    <td>
                                        <span class="badge badge-pill badge-warning" data-toggle="tooltip"
                                            data-placement="top" title="Kurang Baik">Kurang Baik</span>
                                    </td>
                                @else
                                    <td>
                                        <span class="badge badge-pill badge-danger" data-toggle="tooltip"
                                            data-placement="top" title="Rusak Berat">Rusak Berat</span>
                                    </td>
                                @endif
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
    @include('asets.show')
    @include('asets.create')
    @include('asets.edit')
@endpush

