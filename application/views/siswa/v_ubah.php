<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="<?= base_url('siswa/ubahSiswa') ?>" method="post">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Siswa</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_siswa" value="<?= $tampil['id_siswa'] ?>">
                                        <input type="text" class="form-control" name="nama_siswa" value="<?= $tampil['nama_siswa'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Orang Tua</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_ortu" value="<?= $tampil['nama_ortu'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No.Hanphone</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="no_hp" value="<?= $tampil['no_hp'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea name="alamat"  class="form-control"><?= $tampil['alamat'] ?></textarea>
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

