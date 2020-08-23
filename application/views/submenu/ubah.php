                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="card col-12">
                        <div class="card-body">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
                                <div class="form-group">
                                    <label for="title">Nama Submenu</label>
                                    <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
                                    <small class="form-text text-danger"><?= form_error('title'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="menu_id">Nama Menu</label>
                                    <select class="form-control" id="menu_id" name="menu_id">
                                        <?php foreach ($menu as $m) : ?>
                                            <?php if ($m['id'] == $submenu['menu_id']) : ?>
                                                <option value="<?= $m['id']; ?>" selected><?= $m['menu']; ?></option>
                                            <?php else : ?>
                                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="url">Submenu Url</label>
                                    <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
                                    <small class="form-text text-danger"><?= form_error('url'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="icon">Submenu Icon</label>
                                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
                                    <small class="form-text text-danger"><?= form_error('icon'); ?></small>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                        <label class="form-check-label" for="is_active">
                                            Active?
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->