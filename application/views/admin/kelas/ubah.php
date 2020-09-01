<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card col-12">
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $kelas['id_kelas']; ?>">
                <div class="form-group">
                    <label for="nama">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $kelas['nama_kelas']; ?>">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <?php foreach ($jurusan as $j) : ?>
                            <?php if ($j['id_jurusan'] == $kelas['id_jurusan']) : ?>
                                <option value="<?= $j['id_jurusan']; ?>" selected><?= $j['nama_jurusan']; ?></option>
                            <?php else : ?>
                                <option value="<?= $j['id_jurusan']; ?>"><?= $j['nama_jurusan']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </select>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->