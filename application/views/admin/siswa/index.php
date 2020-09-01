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



    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- button -->
            <a href="<?= base_url('siswa/tambah'); ?>" type="submit" class="btn btn-primary ml-1">Tambah Data Siswa</a>
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
                            <th scope="col">Kelas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">SPP</th>
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
                                    <a href="<?= base_url() ?>siswa/ubah/<?= $s['nisn']; ?>" class="badge badge-success">Edit</a>
                                    <a href="<?= base_url(); ?>siswa/hapus/<?= $s['nisn']; ?> " class="badge badge-danger" onclick="return confirm('yakin?');">Delete</a>
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
<!-- /.container-fluid -->