<?php $validation = \Config\Services::validation(); 
$session=session();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-lg-7">
        <?= $session->getFlashdata('message'); ?>
    </div>

    <div class="card col-lg-7 shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('dept/employee') ?>"><i class="fas fa-arrow-left"></i> Back</a></h6>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input class="form-control" type="text" name="name"/>
                    <small class="text-danger pl-3"><?= $validation->showError('name')?></small>
                </div>
                <div class="form-group">
                    <label for="email">User Email</label>
                    <input class="form-control" type="text" name="email"/>
                    <small class="text-danger pl-3"><?= $validation->showError('email')?></small>
                </div>
                <div class="form-group">
                    <label for="role_id">User Designation</label>
                    <select class="form-control" id="designation" name="designation">
                        <option value="0">-Select-</option>
                    </select>
                </div>
                <!-- btn -->
                <input class="btn btn-success" type="submit" name="btn" value="Create" />
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->