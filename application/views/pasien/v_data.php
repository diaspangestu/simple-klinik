<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('dokter/add'); ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokter</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($dokter as $dokter) { ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= $dokter['nama_dokter']; ?></td>
                                    <td>
                                        <a href="<?= base_url('dokter/edit/' . $dokter['id_dokter']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url('dokter/delete/' . $dokter['id_dokter']); ?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')">Hapus</a>
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