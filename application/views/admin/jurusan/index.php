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

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- button -->
            <a href="<?= base_url('jurusan/tambah'); ?>" type="submit" class="btn btn-primary">Tambah Data Jurusan</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($jurusan as $jrs) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $jrs['nama_jurusan']; ?></td>
                                <td><?= $jrs['deskripsi']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>jurusan/edit/<?= $jrs['id_jurusan']; ?>" class="btn btn-success">Edit</a>
                                    <a href="<?= base_url(); ?>jurusan/hapus/<?= $jrs['id_jurusan']; ?> " class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>
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