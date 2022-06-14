<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="<?= base_url('kunjungan/update') ?>" method="post">
                    <input type="hidden" name="id_berobat" value="<?= $berobat['id_berobat']; ?>">
                    <div class="form-group">
                        <label for="">Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" class="form-control" value="<?= $berobat['tgl_berobat']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <select name="pasien" id="" class="form-control" required>
                            <?php
                            foreach ($pasien as $pasien) {
                                if ($pasien['id_pasien'] == $berobat['id_pasien']) {
                                    $selected = 'selected';
                                } else {
                                    $selected = '';
                                }
                            ?>
                                <option value="<?= $pasien['id_pasien']; ?>" <?= $selected ?>><?= $pasien['nama_pasien']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Dokter</label>
                        <select name="dokter" id="" class="form-control" required>
                            <?php
                            foreach ($dokter as $dokter) {
                                if ($dokter['id_dokter'] == $berobat['id_dokter']) {
                                    $selected = 'selected';
                                } else {
                                    $selected = '';
                                }
                            ?>
                                <option value="<?= $dokter['id_dokter']; ?>" <?= $selected; ?>><?= $dokter['nama_dokter']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>