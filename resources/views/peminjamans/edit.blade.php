<div class="modal fade" id="peminjamans_edit" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
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
                <form name="peminjamans_edit">
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
                                <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                                <input type="date" name="tanggal_peminjaman" class="form-control"
                                    id="tanggal_peminjaman">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                                <input type="date" name="tanggal_pengembalian" class="form-control"
                                    id="tanggal_pengembalian">
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" id="keterangan">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button data-id="" type="submit" class="btn btn-primary"
                                    id="swal-update-button">Ubah Data</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>
