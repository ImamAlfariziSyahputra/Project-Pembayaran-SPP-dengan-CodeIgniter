                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="card col-12">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <input type="text" class="form-control" id="tahun" name="tahun">
                                    <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="nominal">Nominal</label>
                                    <input type="text" class="form-control" id="nominal" name="nominal">
                                    <small class="form-text text-danger"><?= form_error('nominal'); ?></small>
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->