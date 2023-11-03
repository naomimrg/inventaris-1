<div class="modal fade" id="asets_create" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
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
                <form name="asets_create" method="POST" action="{{ route('asets.store') }}"> 
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
                                <label for="tanggal_pembelian">Tanggal Pembelian</label>
                                <input type="date" name="tanggal_pembelian" class="form-control" id="tanggal_pembelian_create">
                            </div>
                        </div>
                        <div class="col-lg-6"> 
                            <div class="form-group">
                                <label for="kategori_id">Kategori Aset</label>
                                <input type="text" name "kategori_id" class="form-control" id="kategori_id_create">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lokasi_id">Lokasi</label>
                                <input type="text" name="lokasi_id" class="form-control" id="lokasi_id_create">
                            </div>
                        </div>
                        <div class="col-lg-6"> 
                            <div class="form-group">
                                <label for="harga">Harga Aset</label>
                                <input type="number" name="harga" class="form-control" id="harga_create">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kondisi">Kondisi Aset</label>
                                <select class="select2-select-dropdown" id="kondisi_create" style="width: 100%;">
                                    <option selected>Pilih</option>
                                    <option value="1">Baik</option>
                                    <option value="2">Kurang Baik</option>
                                    <option value="3">Rusak Ringan</option>
                                </select>
                            </div>
                        </div>
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
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" id="description" placeholder="Deskripsi"></textarea>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
