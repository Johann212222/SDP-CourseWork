<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                            </div>
                            <!-- Add Display Message -->
                            <form class="user" method="post" action="<?= base_url('login/forgotpassword'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter email address..."
                                    value="">
                                    <!-- Add error message -->
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                Reset Password
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('login') ?>">Back to login page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>