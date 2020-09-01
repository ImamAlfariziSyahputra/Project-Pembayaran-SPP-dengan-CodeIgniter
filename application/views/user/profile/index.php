<section id="banner">
    <div class="container-fluid">
        <div class="row no-gutters pt-5" >
            <div class="col-md-6 text-center pl-5">
                <img src="<?= base_url('assets/img/me.png'); ?>" class="img-fluid" width="400">
            </div>
            <div class="col-md-6">
                <div class="row no-gutters mt-5">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" width="200" class="rounded-circle">
                    </div>
                    <div class="col-md-8 text-left mt-3">
                        <h1 class="display-4"><?= $user['name']; ?></h1>
                        <p class="lead pl-1"><?= $user['email']; ?></p>
                        <p class="pl-1"><small class="">Member sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?= base_url('assets/img/wave2.png'); ?>" class="bottom-img mt-5">
</section>