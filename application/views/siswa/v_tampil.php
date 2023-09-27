<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="<?= base_url('siswa/addSiswa') ?>" method="post">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Siswa</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_siswa">
                                        <input type="text" class="form-control" name="nama_siswa">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Orang Tua</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_ortu">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No.Hanphone</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="no_hp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea name="alamat"  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button name="simpan" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table id="example" class="display">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Siswa</th>
                                        <th>Nama Ortu</th>
                                        <th>Alamat</th>
                                        <th>No.Handphone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($tampil as $t) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $t['nama_siswa'] ?></td>
                                        <td><?= $t['nama_ortu'] ?></td>
                                        <td><?= $t['alamat'] ?></td>
                                        <td><?= $t['no_hp'] ?></td>
                                        <td>
                                            <a href="<?= site_url('siswa/ubah/' . $t['id_siswa']); ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger delete" data-id="<?= $t['id_siswa'] ?>" data-nama="<?= $t['nama_siswa'] ?>"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





