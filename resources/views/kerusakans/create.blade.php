<div class="modal fade" id="kerusakans_create" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
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
                <form name="kerusakans_create" method="POST" action="{{ route('kerusakans.store') }}"> 
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="user_id">Nama Pengguna</label>
                                <input type="text" name="user_id" class="form-control" id="user_id_create">
                            </div>
                        </div>
                        <div class="col-lg-6"> 
                            <div class="form-group">
                                <label for="asets_id">Nama Aset</label>
                                <input type="text" name="asets_id" class="form-control" id="asets_id_create">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tanggal_laporan">Tanggal Laporan</label>
                                <input type="date" name="tanggal_laporan" class="form-control" id="tanggal_laporan_create">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lokasis_id">Lokasi</label>
                                <input type="text" name="lokasis_id" class="form-control" id="lokasis_id_create">
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
