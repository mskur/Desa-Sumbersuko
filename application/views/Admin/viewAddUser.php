<?php require 'headerAdmin.php'; ?>
<?php require 'sidebarAdmin.php'; ?>

<main id="main" class="main">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Multi Columns Form</h5>

              <form class="row g-3 " action="<?= base_url('SuperAdmin/User/addUserAction'); ?>" method="POST">
                <div class="col-md-12">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                    <?php if(form_error('nama') != NULL) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= form_error('nama'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-6">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username">
                    <?php if(form_error('username') != NULL) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= form_error('username'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-6">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                    <?php if(form_error('password') != NULL) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= form_error('password'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-6">
                  <label for="level" class="form-label">Level</label>
                  <select id="level" class="form-select" name="level">
                    <option selected>Choose...</option>
                    <option value="superadmin">Super Admin</option>
                    <option value="admin">Admin</option>
                  </select>
                </div>
                
                <div class="text-center pt-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>
</main><!-- End #main -->


<?php require 'footerAdmin.php'; ?>