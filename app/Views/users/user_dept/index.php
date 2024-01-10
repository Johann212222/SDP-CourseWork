<?php $validation = \Config\Services::validation(); 
$session = session();?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php
            if ($session->get('userdata')['institute']>0) {
                $db = db_connect();
                $builder = $db->table('institute');
                $query = $builder->getwhere(['id' => $session->get('userdata')['institute']]);
                $institute = $query->getResultArray();
                $title_prefix = $institute[0]['name'];
            }else{
                $title_prefix = "Unknown Department";
            }

        ?>
    <h1 class="h3 mb-4 text-gray-800"><?= $title_prefix.' '.$title; ?></h1>

    <div class="col-md-6">
        <?= $session->getFlashdata('message'); ?>
    </div>
    <div>

    </div>

    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

      
