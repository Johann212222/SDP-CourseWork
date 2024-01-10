
<?php $validation = \Config\Services::validation(); ?>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
          <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                    </div>
                    <form class="user" method="post" action="/login/registration">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" 
                        value="">
                        <small class="text-danger pl-3"><?= $validation->showError('name')?></small>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nic" name="nic" placeholder="National ID No."
                        value="">
                        <small class="text-danger pl-3"><?= $validation->showError('nic')?></small>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address"
                        value="">
                        <small class="text-danger pl-3"><?= $validation->showError('email')?></small>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                          <small class="text-danger pl-3"><?= $validation->showError('password1')?></small>
                        </div>
                        <div class="col-sm-6">
                          <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Confirm Password">
                        </div>
                        <?php if($validation->getError('passconf') && !$validation->getError('password1')) {?>
                          <small class="text-danger pl-3"><?= $validation->showError('password2')?></small>
                          <?php }?>
                      </div>
                      <button type="submit" class="btn btn-danger btn-user btn-block">
                        Register Account
                      </button>
                    </form>
                    <hr>
                    <div class="text-center">
                      <a class="small" href="<?= base_url('login/forgotpassword'); ?>">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="<?= site_url('login'); ?>">Already have an account? Sign In Now!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>