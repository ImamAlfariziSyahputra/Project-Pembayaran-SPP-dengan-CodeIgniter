<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card col-12">
        <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id_user" value="<?= $user['id']; ?>">
                <div class="form-group">
                    <label for="petugas">Nama Petugas</label>
                    <input type="text" class="form-control" id="petugas" name="petugas" value="<?= $user['name']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nisn">Nama Siswa</label>
                    <select class="form-control" id="nisn" name="nisn" readonly>
                        <?php foreach ($siswas as $s) : ?>
                            <?php if ($s['nisn'] == $siswa['nisn']) : ?>
                                <option value="<?= $s['nisn']; ?>" selected><?= $s['nama']; ?></option>
                            <?php else : ?>
                                <option value="<?= $s['nisn']; ?>"><?= $s['nama']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tgl_bayar">Tanggal Bayar</label>
                    <input type="text" class="form-control" id="tgl_bayar" name="tgl_bayar" value="<?= date('j'); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="bulan_bayar">Bulan Bayar</label>
                    <input type="text" class="form-control" id="bulan_bayar" name="bulan_bayar" value="<?= date('F'); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="tahun_bayar">Tahun Bayar</label>
                    <input type="text" class="form-control" id="tahun_bayar" name="tahun_bayar" value="<?= date('Y'); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_spp">Nominal</label>
                    <select class="form-control" id="id_spp" name="id_spp" readonly>
                        <?php foreach ($spp as $s) : ?>
                            <?php if ($s['id_spp'] == $siswa['id_spp']) : ?>
                                <option value="<?= $s['id_spp']; ?>" selected><?= $s['nominal']; ?></option>
                            <?php else : ?>
                                <option value="<?= $s['id_spp']; ?>"><?= $s['nominal']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah_bayar">Jumlah Bayar</label>
                    <input type="text" class="form-control" id="jumlah_bayar" name="jumlah_bayar">
                    <small class="form-text text-danger"><?= form_error('jumlah_bayar'); ?></small>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary">Bayar</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->