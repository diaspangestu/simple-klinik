<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('obat/add'); ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Obat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($obat as $obat) { ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= $obat['nama_obat']; ?></td>
                                    <td>
                                        <a href="<?= base_url('obat/edit/' . $obat['id_obat']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url('obat/delete/' . $obat['id_obat']); ?>" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')">Hapus</a>
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