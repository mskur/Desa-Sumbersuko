<?php require 'headerAdmin.php'; ?>
<?php require 'sidebarAdmin.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <a href="<?= base_url('SuperAdmin/User/addUser');?>" class="btn btn-primary mb-3">Add User</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Level</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($allUser as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->nama; ?></td>
                            <td><?= $user->level; ?></td>
                            <td>
                                <form class="d-inline-block" action="<?= base_url('SuperAdmin/User/editUser');?>" method="post">
                                    <input type="hidden" name="username" value="<?= $user->username; ?>">
                                    <button type="submit" name="update" class="btn btn-warning">Update</button>
                                </form>
                                
                                <form class="d-inline-block" action="<?= base_url('SuperAdmin/User/deleteUser');?>" method="post">
                                    <input type="hidden" name="username" value="<?= $user->username; ?>">
                                    <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus user <?= $user->username; ?>');">Delete</button>
                                </form>
                            </td>
                            
                        </tr>
                    <?php endforeach; ?>
                        


                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



<?php require 'footerAdmin.php'; ?>