                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="card col-12">
                        <div class="card-body">
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $siswa['nisn']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select class="form-control" id="kelas" name="kelas">
                                        <?php foreach ($kelas as $kls) : ?>
                                            <?php if ($kls['id_kelas'] == $siswa['id_kelas']) : ?>
                                                <option value="<?= $kls['id_kelas']; ?>" selected><?= $kls['nama_kelas']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $kls['id_kelas']; ?>"><?= $kls['nama_kelas']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $siswa['alamat']; ?></textarea>
                                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="no">No Telp</label>
                                    <input type="text" class="form-control" id="no" name="no" value="<?= $siswa['no_telp']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nominal">Nominal</label>
                                    <select class="form-control" id="nominal" name="nominal">
                                        <?php foreach ($spp as $s) : ?>
                                            <?php if ($s['id_spp'] == $siswa['id_spp']) : ?>
                                                <option value="<?= $s['id_spp']; ?>" selected><?= $s['nominal']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $s['id_spp']; ?>"><?= $s['nominal']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->