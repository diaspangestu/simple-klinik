<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('kunjungan/add'); ?>" class="btn btn-success btn-sm float-right">Kunjungan Baru</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Dokter</th>
                                <th>Rekam Medis</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($kunjungan as $kunjungan) { ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= $kunjungan['tgl_berobat']; ?></td>
                                    <td><?= $kunjungan['nama_pasien']; ?></td>
                                    <td><?= $kunjungan['umur']; ?></td>
                                    <td><?= $kunjungan['jenis_kelamin']; ?></td>
                                    <td><?= $kunjungan['nama_dokter']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>kunjungan/rekam/<?= $kunjungan['id_berobat']; ?>" class="btn btn-success btn-sm">Rekam</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('kunjungan/edit/' . $kunjungan['id_berobat']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url('kunjungan/delete/' . $kunjungan['id_berobat']); ?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')">Hapus</a>
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