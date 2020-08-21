                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="card col-12">
                        <div class="card-body">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $jurusan['id_jurusan']; ?>">
                                <div class="form-group">
                                    <label for="nama">nama Jurusan</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $jurusan['nama_jurusan']; ?>">
                                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $jurusan['deskripsi']; ?>">
                                    <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->