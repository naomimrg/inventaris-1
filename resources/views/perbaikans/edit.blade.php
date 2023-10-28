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
