<<<<<<< HEAD
@extends('layouts.app')
@section('title', 'Edit Data Perbaikan Aset')
@section('contents')
    <hr />
    <form action="{{ route('perbaikans.edit', $perbaikans->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $perbaikans->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Aset</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $perbaikans->kode_aset }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal Permintaan Perbaikan</label>
                <input type="date" name="title" class="form-control" placeholder="Title" value="{{ $perbaikans->tanggal_permintaan_perbaikan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <input type="date" name="title" class="form-control" placeholder="Title" value="{{ $perbaikans->tanggal_pengembalian }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <textarea class="form-control" name="keterangan" placeholder="Deskripsi" >{{ $perbaikans->keterangan }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">User</label>
                <textarea class="form-control" name="keterangan" placeholder="Deskripsi" >{{ $perbaikans->keterangan }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
=======
<div class="modal fade" id="perbaikans_edit" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="perbaikans_edit">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama">Nama Aset</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="kode_aset">Kode Aset</label>
                                <input type="text" name="kode_aset" class="form-control" id="kode_aset">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tanggal_permintaan_perbaikan">Tanggal Permintaan Perbaikan</label>
                                <input type="date" name="tanggal_permintaan_perbaikan" class="form-control"
                                    id="tanggal_permintaan_perbaikan">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="date" name="status" class="form-control"
                                    id="status">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button data-id="" type="submit" class="btn btn-primary" id="swal-update-button">Ubah
                                Data</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
>>>>>>> 6300f39ae6b9f6d43af7e6b9097b125b77d7ea28
