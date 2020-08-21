                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 ml-3 text-gray-800"><?= $title; ?></h1>

                    <div class="col-md-5">
                        <!-- flash -->
                        <?php if ($this->session->flashdata()) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data Jurusan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- button -->
                    <div class="col-md-4">
                        <a href="<?= base_url('jurusan/tambah'); ?>" type="submit" class="btn btn-primary ml-1">Tambah Data Jurusan</a>
                    </div>

                    <div class="card-body">
                        <table class="table text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Jurusan</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <?php $i = 1 ?>
                            <?php foreach ($jurusan as $jrs) : ?>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $jrs['nama_jurusan']; ?></td>
                                        <td><?= $jrs['deskripsi']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>jurusan/edit/<?= $jrs['id_jurusan']; ?>" class="btn btn-success">Edit</a>
                                            <a href="<?= base_url(); ?>jurusan/hapus/<?= $jrs['id_jurusan']; ?> " class="btn btn-danger" onclick="return confrim('yakin?');">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </table>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->