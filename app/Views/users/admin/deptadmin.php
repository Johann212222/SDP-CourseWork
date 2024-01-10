<?php $validation = \Config\Services::validation(); 
$session = session();?>
<script>
    function deleteConfirm(url){
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= $session->getFlashdata('message'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('admin') ?>"><i class="fas fa-arrow-left"></i> Back</a></h6>
                <h6 class="m-0 font-weight-bold text-primary" style="text-align:right"><a href="<?= base_url('admin/deptadmin/add') ?>">Add New <i class="fas fa-arrow-right"></i> </a></h6>
            </div>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Institution</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                        </thead>
                    <tbody>
                        <?php $index = 1; 
                        // $db = \Config\Database::connect();
                        // $builder = $db->table('user');
                        // $query = $builder->get();
                        // $user_member= $query->getResultArray();
                        // var_dump($user_member);
                        ?>
                        <?php foreach($user_member as $id => $um) :
                            ?>
                            <tr>
                                <td><?= $index; ?></td>
                                <td><?= $um['name']; ?></td>
                                <td><?= $um['email']; ?></td>
                                <td><?= $um['institute']; ?></td>
                                <td>
                                    <?php if ($um['is_active'] == 1) {
                                        echo 'Active';
                                    } else {
                                        echo 'InActive';
                                    } 
                                    ?>
                                </td>
                                <td>
                                    <a class="badge badge-primary" style="font-size:14px;" href="<?= site_url('admin/deptadmin/view/'.$id); ?>">Detail</a>
                                    <a class="badge badge-success" style="font-size:14px;" href="<?= site_url('admin/deptadmin/edit/'.$id); ?>">Update</a>
                                    <a class="badge badge-danger" style="font-size:14px;" href="#!" onclick="deleteConfirm('<?= site_url('/admin/deptadmin/delete/'.$um['id']); ?>')">Delete</a>
                                </td>
                            </tr>
                        <?php $index++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->
hi
</div>
<!-- End of Main Content -->


