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
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($siswa as $s) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $s['nisn']; ?></td>
                                <td><?= $s['nis']; ?></td>
                                <td><?= $s['nama']; ?></td>
                                <td><?= $s['nama_kelas']; ?></td>
                                <td><?= $s['alamat']; ?></td>
                                <td><?= $s['no_telp']; ?></td>
                                <td><?= $s['nominal']; ?></td>
                                <td>
                                    <a href="<?= base_url('pembayaran/bayar/') . $s['nisn'] ?>" class="btn btn-success">Bayar</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>