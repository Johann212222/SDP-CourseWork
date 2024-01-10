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
                <h6 class="m-0 font-weight-bold text-primary" style="text-align:right"><a href="<?= base_url('dept/employee/add') ?>">Add New <i class="fas fa-arrow-right"></i> </a></h6>
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
                       
                        foreach($user as $id => $um) : ?>
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
                                    <a class="badge badge-primary" style="font-size:14px;" href="<?= site_url('/dept/employee/view/'.$id); ?>">Detail</a>
                                    <a class="badge badge-success" style="font-size:14px;" href="<?= site_url('/dept/employee/edit/'.$id); ?>">Update</a>
                                    <a class="badge badge-danger" style="font-size:14px;" href="#!" onclick="deleteConfirm('<?= site_url('/dept/employee/delete/'.$id); ?>')">Delete</a>
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

</div>
<!-- End of Main Content -->

<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Deleted data cannot be recovered!</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Remove</a>
      </div>
    </div>
  </div>
</div>