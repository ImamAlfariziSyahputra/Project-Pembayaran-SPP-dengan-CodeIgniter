
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 ml-3 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- button -->
            <a href="<?= base_url('cetak/xls'); ?>" type="submit" class="btn btn-success float-right">
                Generate XLS
                <i class="fas fa-fw fa-file-excel"></i>
            </a>
            <a href="<?= base_url('cetak/pdf'); ?>" type="submit" class="btn btn-primary float-right mr-3">
                Generate PDF
                <i class="fas fa-fw fa-file-pdf"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Petugas</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Tanggal Bayar</th>
                            <th scope="col">Bulan Dibayar</th>
                            <th scope="col">Tahun Dibayar</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Jumlah Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
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