<!-- Modal -->
<div class="modal fade" id="kerusakans_show" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="asets_id"><b>Nama Aset</b></label>
                        <input type="text" name="" class="form-control" id="asets_id" placeholder=""
                            disabled>
                    </div>
                    <div class="col-lg-12">
                        <label for="lokasis_id"><b>Lokasi</b></label>
                        <input type="text" name="" class="form-control" id="lokasis_id" placeholder=""
                            disabled>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="deskripsi_kerusakan"><b>Deskripsi Kerusakan</b></label>
                    <input type="text" name="" class="form-control" id="deskripsi_kerusakan" placeholder=""
                        disabled>
                </div>
            </div>
            <div class="col-lg-12">
                <label for="users_id"><b>Nama Pelapor</b></label>
                <input type="text" name="" class="form-control" id="users_id" placeholder="" disabled>
            </div>
        </div>
<<<<<<< HEAD
        <div class="col mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasi_id" class="form-control" placeholder="Lokasi" value="{{ $kerusakans->lokasi_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi Kerusakan</label>
            <textarea class="form-control" name="deskripsi_kerusakan" placeholder="Deskripsi Kerusakan" readonly>{{ $kerusakans->deskripsi_kerusakan }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Pelapor</label>
            <input type="text" name="users_id" class="form-control" placeholder="Nama Pelapor" value="{{ $kerusakans->deskripsi_kerusakan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $kerusakans->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $kerusakans->updated_at }}" readonly>
=======
        <div class="col-lg-12">
            <label for="created_at"><b>Tanggal Laporan</b></label>
            <input type="text" name="" class="form-control" id="created_at" placeholder="" disabled>
>>>>>>> 6300f39ae6b9f6d43af7e6b9097b125b77d7ea28
        </div>
    </div>
</div>
<hr>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
</div>
</div>
</div>
</div>
