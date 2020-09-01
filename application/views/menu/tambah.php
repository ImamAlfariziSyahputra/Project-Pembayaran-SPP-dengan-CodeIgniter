<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="menu">Nama Menu</label>
                <input type="text" class="form-control" id="menu" name="menu">
                <small class="form-text text-danger"><?= form_error('menu'); ?></small>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->