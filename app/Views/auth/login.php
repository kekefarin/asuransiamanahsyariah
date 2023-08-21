<?= $this->extend('layout/template_auth');?>
<?= $this->section('content-auth');?>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                        </div>
                        <?php if (session()->getFlashdata('type')) :?>
                        <div class="alert <?= session()->getFlashdata('type')?> alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('pesan')?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif?>
                        <form class="user" action="<?= base_url('login')?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('username') ? 'is-invalid' : '')?>" id="" name="username" placeholder="Username">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username')?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user <?= ($validation->hasError('password') ? 'is-invalid' : '')?>" id="" name="password" placeholder="Password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password')?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">Masuk</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small text-success" href="<?= base_url('register')?>">Akun Baru!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection();?>
