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
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $userdata['name']; ?></span>
                    <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/').$userdata['image']; ?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url('myprofile'); ?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        My Profile
                    </a>
                    <a class="dropdown-item" href="<?= base_url('myprofile/changepassword'); ?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Change Password
                    </a>
                    <div class="dropdown-divider"></div>
                    <!-- <a class="dropdown-item" href="<?= base_url('/emp/logout'); ?>" data-toggle="modal" data-target="#logoutModal"> -->
                    <a class="dropdown-item" href="<?= base_url('/emp/logout'); ?>">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Sign Out
                    </a>
                </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->