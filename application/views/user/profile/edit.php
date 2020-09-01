
    <section id="banner">
        <div class="container-fluid">
            <div class="row no-gutters pt-5" style="height: 569px;">
                <div class="col-md-5 text-center pl-5">
                    <img src="<?= base_url('assets/img/peopleedit.png'); ?>" class="img-fluid" width="400">
                </div>
                <div class="col-md-7">
                    <div class="row no-gutters">
                        <div class="col-md">
                            <h1 class="text-center">Ubah Profile</h1>
                            <form action="<?= base_url('user/ubahprofile'); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['name']; ?>">
                                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2">Gambar</div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                    <label class="custom-file-label" for="gambar">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Ubah Profil</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <img src="<?= base_url('assets/img/wave2.png'); ?>" class="bottom-img"> -->
    </section>
