<?php 
use App\Models\FirebaseModel;
use Config\Firebase;

//Load Database
$fb = new Firebase();
$url = $fb->databaseUrl;
$db = new FirebaseModel($url);

$validation = \Config\Services::validation(); 
$userinfo = session()->get('userinfo');
$uid = $userinfo['uid'];
$dbname = $userinfo['table'];

$retrieve = $db->retrieve("$dbname/$uid");
$userdata = json_decode($retrieve, 1);

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-md-8 mb-3">
        <div class="card shadow h-100 py-2">
            <div class="card-body">

                <form method="post" action="<?= base_url('/myprofile/edit') ?>">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $userdata['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Full name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $userdata['name']; ?>">
                            <small class="text-danger pl-3"><?= $validation->showError('name')?></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                        Photo
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/profile/') . $userdata['image']; ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Insert File</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10" style="text-align: center">
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
