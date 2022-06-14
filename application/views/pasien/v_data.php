<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('pasien/add'); ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin (L/P)</th>
                                <th>Umur</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pasien as $pasien) { ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= $pasien['nama_pasien']; ?></td>
                                    <td><?= $pasien['jenis_kelamin']; ?></td>
                                    <td><?= $pasien['umur']; ?></td>
                                    <td>
                                        <a href="<?= base_url('pasien/edit/' . $pasien['id_pasien']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url('pasien/delete/' . $pasien['id_pasien']); ?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>