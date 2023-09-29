<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="<?= base_url('penjadwalan/addPenjadwalan') ?>" method="post">
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group row">
                                        <label class="form-label">Hari</label>
                                        <input type="hidden" name="id_jadwal">
                                            <select name="hari" class="form-control">
                                                <option>-- Silahkan Pilih --</option>
                                                <option value="Minggu">Minggu</option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jum'at">Jum'at</option>
                                                <option value="Sabtu">Sabtu</option>
                                            </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label">Jam Mulai</label>
                                        <input type="time" class="form-control" name="jam_mulai">
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label">Jam Selesai</label>
                                        <input type="time" class="form-control" name="jam_selesai">
                                    </div>
                                </div>
                                <div class="col-5 ml-5">
                                    <div class="form-group row">
                                        <label class="form-label">Nama Tutor</label>
                                        <input type="text" class="form-control" name="nama_tutor">
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label">ID Siswa</label>
                                         <select name="id_siswa" class="form-control select2bs4">
                                                <?php foreach ($siswa as $s): ?>
                                                <option value="<?= $s['id_siswa']; ?>">
                                                    <?= $s['id_siswa']; ?> - <?= $s['nama_siswa']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label">ID Mapel</label>
                                        <select name="id_mapel" class="form-control select2bs4">
                                            <?php foreach ($mapel as $s): ?>
                                                <option value="<?= $s['id_mapel']; ?>">
                                                    <?= $s['id_mapel']; ?> - <?= $s['mapel']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    
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
                                        <th>Hari</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Nama Tutor</th>
                                        <th>ID Siswa</th>
                                        <th>ID Mapel</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($tampil as $t) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $t['hari'] ?></td>
                                        <td><?= $t['jam_mulai'] ?></td>
                                        <td><?= $t['jam_selesai'] ?></td>
                                        <td><?= $t['nama_tutor'] ?></td>
                                        <td><?= $t['id_siswa'] ?></td>
                                        <td><?= $t['id_mapel'] ?></td>
                                        <td>
                                            <a href="#" class="btn btn-danger delete" data-jenis="jadwal" data-id="<?= $t['id_jadwal'] ?>"><i class="far fa-trash-alt"></i></a>
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







