<section id="banner">
    <div class="container-fluid">
        <div class="row no-gutters pt-5" style="height: 569px;">
            <div class="col-md-4 text-center">
                <img src="<?= base_url('assets/img/history.png'); ?>" class="img-fluid pt-4" width="400">
            </div>
            <div class="col-md-8">
                <div class="row no-gutters">
                    <div class="col-md">
                        <!-- card -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <!-- button -->
                                <a href="<?= base_url('cetak/xls'); ?>" type="submit" class="btn btn-success float-right">
                                    Cetak XLS
                                    <i class="fas fa-fw fa-file-excel"></i>
                                </a>
                                <a href="<?= base_url('cetak/pdf'); ?>" type="submit" class="btn btn-primary float-right mr-3">
                                    Cetak PDF
                                    <i class="fas fa-fw fa-file-pdf"></i>
                                </a>
                            </div>
                            <div class="card-body bg-light text-dark">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-dark" style="background-color: #ffd55c;">
                                            <tr>
                                                <th scope=" col">No</th>
                                                <th scope="col">Petugas</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Tanggal Bayar</th>
                                                <th scope="col">Bulan Dibayar</th>
                                                <th scope="col">Tahun Dibayar</th>
                                                <th scope="col">Nominal</th>
                                                <th scope="col">Jumlah Bayar</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            <?php $i = 1 ?>

                                            <?php foreach ($pembayaran as $p) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?= $p['name']; ?></td>
                                                    <td><?= $p['nama']; ?></td>
                                                    <td><?= $p['tgl_bayar']; ?></td>
                                                    <td><?= $p['bulan_bayar']; ?></td>
                                                    <td><?= $p['tahun_bayar']; ?></td>
                                                    <td><?= $p['nominal']; ?></td>
                                                    <td><?= $p['jumlah_bayar']; ?></td>
                                                </tr>
                                                <?php $i++ ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <img src="<?= base_url('assets/img/wave2.png'); ?>" class="bottom-img"> -->
</section>