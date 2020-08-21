                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 ml-3 text-gray-800"><?= $title; ?></h1>

                    <!-- flash -->
                    <div class="col-md-5">
                        <?php if ($this->session->flashdata()) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data Siswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- button -->
                    <div class="col-md-4">
                        <a href="<?= base_url('siswa/tambah'); ?>" type="submit" class="btn btn-primary ml-1">Tambah Data Siswa</a>
                    </div>

                    <div class="card-body">
                        <table class="table text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">ID Kelas</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telp</th>
                                    <th scope="col">ID SPP</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <?php $i = 1 ?>
                            <?php foreach ($siswa as $s) : ?>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $s['nisn']; ?></td>
                                        <td><?= $s['nis']; ?></td>
                                        <td><?= $s['nama']; ?></td>
                                        <td><?= $s['id_kelas']; ?></td>
                                        <td><?= $s['alamat']; ?></td>
                                        <td><?= $s['no_telp']; ?></td>
                                        <td><?= $s['id_spp']; ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>siswa/ubah/<?= $s['nisn']; ?>" class="btn btn-success">Edit</a>
                                            <a href="<?= base_url(); ?>siswa/hapus/<?= $s['nisn']; ?> " class="btn btn-danger" onclick="return confrim('yakin?');">Delete</a>
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