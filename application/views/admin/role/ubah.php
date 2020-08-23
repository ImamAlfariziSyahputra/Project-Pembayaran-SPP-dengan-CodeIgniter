                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $role['id']; ?>">
                            <div class="form-group">
                                <label for="role">Nama Role</label>
                                <input type="text" class="form-control" id="role" name="role" value="<?= $role['role']; ?>">
                                <small class="form-text text-danger"><?= form_error('role'); ?></small>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                        </form>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->