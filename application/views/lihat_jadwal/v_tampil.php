<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card mt-3">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table id="example" class="display">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Tutor</th>
                                        <th>Hari</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Siswa</th>
                                        <th>Mapel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) { ?>
                                        <tr>
                                            <td>
                                                <?= $no++; ?>
                                            </td>
                                            <td>
                                                <?= $t['nama_tutor'] ?>
                                            </td>
                                            <td>
                                                <?= $t['hari'] ?>
                                            </td>
                                            <td>
                                                <?= $t['jam_mulai'] ?>
                                            </td>
                                            <td>
                                                <?= $t['jam_selesai'] ?>
                                            </td>
                                            <td>
                                                <?= $t['nama_siswa'] ?>
                                            </td>
                                            <td>
                                                <?= $t['mapel'] ?>
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







