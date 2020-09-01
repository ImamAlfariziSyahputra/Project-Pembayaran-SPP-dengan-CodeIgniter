<div class="row no-gutters">
    <div class="col-md-6 text-white bg-primary kiri">
        <img src="<?= base_url('assets/img/people.png'); ?>" class="">
        <p class="display-4 text-center px-5">Aplikasi Pembayaran SPP</p>
    </div>
    <div class="col-md-6 bg-white kanan">
        <div class="row no-gutters">
            <div class="col-md-7 form">
                <div class="text-center">
                    <p class="h3 text-gray-900 mb-4">Halaman Login</p>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Login
                    </button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center">
                    <a class="small" href="<?= base_url('auth/register'); ?>">Create an Account!</a>
                </div>
            </div>
        </div>
    </div>
</div>