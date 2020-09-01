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


                    <div class="row">
                        <div class="col-md-5">
                            <form action="<?= base_url('pembayaran'); ?>" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari Berdasarkan NISN..." name="keyword" autocomplete="off" autofocus>
                                    <div class="input-group-append">
                                        <input class="btn btn-primary" type="submit" name="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID User</th>
                                        <th scope="col">NISN</th>
                                        <th scope="col">Tanggal Bayar</th>
                                        <th scope="col">Bulan Dibayar</th>
                                        <th scope="col">Tahun Dibayar</th>
                                        <th scope="col">ID SPP</th>
                                        <th scope="col">Jumlah Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($siswa)) : ?>
                                        <tr>
                                            <td colspan="4">
                                                <div class="alert alert-danger" role="alert">
                                                    Data not found
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php $i = 1 ?>
                                    <?php foreach ($siswa as $s) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $s['id_user']; ?></td>
                                            <td><?= $s['nisn']; ?></td>
                                            <td><?= $s['tgl_bayar']; ?></td>
                                            <td><?= $s['bulan_bayar']; ?></td>
                                            <td><?= $s['tahun_bayar']; ?></td>
                                            <td><?= $s['id_spp']; ?></td>
                                            <td><?= $s['jumlah_bayar']; ?></td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>





                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->