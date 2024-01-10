<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-lg-7">
        
    </div>

    <div class="card col-lg-7 shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('admin/deptadmin/edit/') ?>"><i class="fas fa-arrow-left"></i> Back</a></h6>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $userid; ?>" />
                	<div class="form-group">
                		<img class="card-img" style="width: 10rem;" src="<?= base_url('assets/img/profile/'.$user['image']); ?>" alt="">
                	</div>
                	<div class="form-group">
                		<label for="name">Username</label>
                		<input class="form-control" type="text" name="name" value="<?= $user['name'] ?>" readonly/>
                	</div>
                	<div class="form-group">
                		<label for="email">User Email</label>
                		<input class="form-control" type="text" name="email" value="<?= $user['email'] ?>" readonly/>
                	</div>
                    <div class="form-group">
                        <label for="role_id">User Authority</label>
                        
                        <select class="form-control" id="role_id" name="role_id" readonly>
                            <?php
                                if ($user['role_id'] == 2) {
                                    $authority =  'Dept Admin';
                                } else {
                                    $authority = 'Unknown';
                                }
                            ?>
                            <option value="<?= $user['role_id'] ?>"><?= $authority?></option>
                        </select>
                    </div>
                    <div class="form-group">
                		<label for="date_created">Joined Since</label>
                        <?php
                                $newDate = date("d F Y", strtotime($user['date_created']));
                        ?>
                		<input class="form-control" type="text" name="date_created" value="<?= $newDate; ?>" readonly/>
                	</div>
                    <div class="form-group">
                        <div class="form-check">
                            <?php if ($user['is_active'] == 1) : ?>
                                <?= '<input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>' ?>
                            <?php else : ?>
                                <?= '<input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active">' ?>
                            <?php endif; ?>
                            <label class="form-check-label" for="is_active">
                            Active?
                            </label>
                        </div>
                    </div>
                <!-- btn -->
                <input class="btn btn-success" type="submit" name="btn" value="Change" />
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->