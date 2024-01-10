<?php $validation = \Config\Services::validation(); 
$session = session();
?>
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900"><?= $title; ?> To</h1>
                                <h5 class="mb-4"><?= session()->get('reset_email'); ?></h5>
                            </div>
                            <?= $session->getFlashdata('message'); ?>
                            <form class="user" method="post" action="<?= base_url('login/changePassword'); ?>">
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Enter new password">
                                    <small class="text-danger pl-3"><?= $validation->showError('name')?></small>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Re-enter password">
                                    <small class="text-danger pl-3"><?= $validation->showError('name')?></small>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                Change Password
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>