<?php 
use App\Models\FirebaseModel;
use Config\Firebase;

//Load Database
$fb = new Firebase();
$url = $fb->databaseUrl;
$db = new FirebaseModel($url);

$validation = \Config\Services::validation(); 
$session = session();
$userinfo = $session->get('userinfo');
$uid = $userinfo['uid'];
$dbname = $userinfo['table'];

$retrieve = $db->retrieve("$dbname/$uid");
$userdata = json_decode($retrieve, 1);

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-md-6">
        <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('home') ?>"><i class="fas fa-arrow-left"></i> Back</a></h6>
    </div>
    <?= $session->getFlashdata('message'); ?>
    <div class="col-md-6 mb-3">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $userdata['image']; ?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $userdata['name']; ?></h5>
                            <p class="card-text"><?= $userdata['email']; ?></p>
                            <p class="card-text">
                            <?php
                                $newDate = date("d F Y", strtotime($userdata['date_created']));
                            ?>
                            <small class="text-muted">Joined Since <?= $newDate; ?></small></p>
                            
                        </div>
                        
                    </div>
                    
                </div>
                <h6 class="m-0 font-weight-bold text-primary" style="text-align:right"><a href="<?= base_url('myprofile/edit') ?>">Edit</a></h6>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

      
