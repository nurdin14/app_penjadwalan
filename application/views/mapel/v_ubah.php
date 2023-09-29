<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="<?= base_url('mapel/ubahMapel') ?>" method="post">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode Mapel</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_mapel" value="<?= $tampil['id_mapel'] ?>">
                                        <input type="text" class="form-control" name="kode_mapel" value="<?= $tampil['kode_mapel'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="mapel" value="<?= $tampil['mapel'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button name="simpan" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

