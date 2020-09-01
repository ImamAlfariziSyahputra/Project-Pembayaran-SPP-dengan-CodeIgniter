<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 ml-3 text-gray-800"><?= $title; ?></h1>

    <!-- flash -->
    <div class="col-md-5">
        <?php if ($this->session->flashdata()) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Kelas <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- button -->
            <a href="<?= base_url('kelas/tambah'); ?>" type="submit" class="btn btn-primary ml-1">Tambah Data Kelas</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($kelas as $kls) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $kls['nama_kelas']; ?></td>
                                <td><?= $kls['nama_jurusan']; ?></td>
                                <td>
                                    <a href="<?= base_url() ?>kelas/ubah/<?= $kls['id_kelas']; ?>" class="btn btn-success">Edit</a>
                                    <a href="<?= base_url(); ?>kelas/hapus/<?= $kls['id_kelas']; ?> " class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>
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