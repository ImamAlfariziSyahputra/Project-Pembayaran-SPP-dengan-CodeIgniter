                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="card col-12">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama Kelas</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select class="form-control" id="jurusan" name="jurusan">
                                        <?php foreach ($jurusan as $j) : ?>
                                            <?php if ($j['nama_jurusan'] == $jurusan['jurusan']) : ?>
                                                <option value="<?= $j['id_jurusan']; ?>" selected><?= $j['nama_jurusan']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $j['id_jurusan']; ?>"><?= $j['nama_jurusan']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->