<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 ml-3 text-gray-800"><?= $title; ?></h1>

    <div class="col-md-5">
        <!-- flash -->
        <?php if ($this->session->flashdata()) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data SubMenu <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- button -->
            <a href="<?= base_url('submenu/tambah'); ?>" type="submit" class="btn btn-primary ml-1">Tambah Data SubMenu</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Url</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Active</th>
                            <th scope="col">Controller</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($submenu as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $sm['title']; ?></td>
                                <td><?= $sm['menu']; ?></td>
                                <td><?= $sm['url']; ?></td>
                                <td><?= $sm['icon']; ?></td>
                                <td><?= $sm['is_active']; ?></td>
                                <td><?= $sm['controller']; ?></td>
                                <td>
                                    <a href="<?= base_url() ?>submenu/ubah/<?= $sm['id']; ?>" class="badge badge-success">Edit</a>
                                    <a href="<?= base_url() ?>submenu/hapus/<?= $sm['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Delete</a>
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