<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="<?= base_url('mapel/addMapel') ?>" method="post">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode Mapel</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_mapel">
                                        <input type="text" class="form-control" name="kode_mapel">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="mapel">
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
                                        <th>Kode Mapel</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($tampil as $t) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $t['kode_mapel'] ?></td>
                                        <td><?= $t['mapel'] ?></td>
                                        <td>
                                            <a href="<?= site_url('mapel/ubah/' . $t['id_mapel']); ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger delete" data-jenis="mapel" data-id="<?= $t['id_mapel'] ?>"><i class="far fa-trash-alt"></i></a>
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







