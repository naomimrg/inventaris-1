<div class="modal fade" id="riwayats_create" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="riwayats_create" method="POST" action="{{ route('riwayats.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama">Nama Aset</label>
                                <input type="text" name="nama" class="form-control" id="nama_create">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kode_aset">Kode Aset</label>
                                <input type="text" name="kode_aset" class="form-control" id="kode_aset_create">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kategori_id">Kategori</label>
                                <input type="text" name="kategori_id" class="form-control" id="kategori_id_create">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lokasi_id">Lokasi</label>
                                <input type="text" name="lokasi_id" class="form-control" id="lokasi_id_create">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal_create">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jenis_perubahan">Jenis Perubahan</label>
                                <input type="text" name="jenis_perubahan" class="form-control"
                                    id="jenis_perubahan_create">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi_create">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="users_id">Pengguna</label>
                                <input type="text" name="users_id" class="form-control" id="users_id_create">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control" id="status_create">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="catatan_tambahan">Catatan Tambahan</label>
                                <input type="text" name="catatan_tambahan" class="form-control"
                                    id="catatan_tambahan_create">
                            </div>
                        </div>
                    </div>
            </div>
            <hr>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
