<?php $validation = \Config\Services::validation(); 
$session = session();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="col-md-6">
        <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('home') ?>"><i class="fas fa-arrow-left"></i> Back</a></h6>
    </div>
    <div class="col-md-6">
        <?= $session->getFlashdata('message'); ?>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <form action="<?= base_url('myprofile/changepassword'); ?>" method="post">
                    <div class="form-group">
                        <label for="current_password">Old Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                        <small class="text-danger pl-3"><?= $validation->showError('current_password')?></small>
                    </div>
                    <div class="form-group">
                        <label for="new_password1">New Password</label>
                        <input type="password" class="form-control" id="new_password1" name="new_password1">
                        <small class="text-danger pl-3"><?= $validation->showError('new_password1')?></small>
                    </div>
                    <div class="form-group">
                        <label for="new_password2">Repeat New Password</label>
                        <input type="password" class="form-control" id="new_password2" name="new_password2">
                        <small class="text-danger pl-3"><?= $validation->showError('new_password2')?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->