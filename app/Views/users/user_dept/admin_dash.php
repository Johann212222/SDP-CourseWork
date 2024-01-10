<?php $validation = \Config\Services::validation();
use App\Models\FirebaseModel;
use Config\Firebase; 
//Load Database
$fb = new Firebase();
$url = $fb->databaseUrl;
$db = new FirebaseModel($url);

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
    <?php
        $institute = $userdata['institute'];
        
            if ($institute>0) {
                
                //DB query
                $tableName = "institute";
                $conditionField = "id"; 
                $conditionValue = $institute;
                $fetchedData = $db->fetchWithCondition($tableName,$conditionField, $conditionValue);
                $title_prefix = reset($fetchedData)['name'];
            }else{
                $title_prefix = "Unknown Department";
            }

        ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_prefix.' '.$title; ?></h1>

    <div class="col-md-6">
        <?= $session->getFlashdata('message'); ?>
    </div>
    <div>
        <h5><a href="<?=base_url('dept/employee')?>">View Employee</a></h5>

    </div>

    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

      
