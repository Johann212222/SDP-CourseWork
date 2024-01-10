<?php $validation = \Config\Services::validation(); 
$session = session();
?>
<!-- BODY FILE -->
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-admin-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                                    <?= $session->getFlashdata('message'); ?>
                                </div>
                                <form class="user" method="post" action="<?= base_url('/adminlogin'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Username"
                                        value="">
                                        <small class="text-danger pl-3"><?= $validation->showError('email')?></small>
                                    </div>
                                        <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <small class="text-danger pl-3"><?= $validation->showError('password')?></small>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        Log In
                                    </button>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

