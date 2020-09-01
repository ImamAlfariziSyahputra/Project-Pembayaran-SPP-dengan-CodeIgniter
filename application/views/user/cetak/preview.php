<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 ml-3 text-gray-800">Histori Pembayaran</h1>

    <div class="card-body">
        <table class="table text-center" width="100%" cellspacing="0" border="1">
            <thead class="thead-dark">
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
                <?php $i = 1 ?>
                <?php foreach ($pembayaran as $p) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $p['name']; ?></td>
                        <td><?= $p['nisn']; ?></td>
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



<!-- /.container-fluid -->

<!-- End of Main Content -->