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
              <a href="<?= base_url('Admin/Konten/addKonten');?>" class="btn btn-primary mb-3">Add Konten</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Konten</th>
                    <th scope="col">Isi Konten</th>
                    <th scope="col">Publish</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($allKonten as $konten) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $konten->judulKonten; ?></td>
                            <td><?=substr($konten->isiKonten, 0, 100); ?></td>
                            <td><?= $konten->tanggalKonten; ?></td>
                            <td>
                                <form class="d-inline-block" action="<?= base_url('Admin/Konten/editKonten');?>" method="post">
                                    <input type="hidden" name="id" value="<?= $konten->id; ?>">
                                    <button type="submit" name="update" class="btn btn-warning">Update</button>
                                </form>
                                
                                <form class="d-inline-block" action="<?= base_url('Admin/Konten/deleteKonten');?>" method="post">
                                    <input type="hidden" name="id" value="<?= $konten->id; ?>">
                                    <input type="hidden" name="gambarKonten" value="<?= $konten->gambarKonten?>">
                                    <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus konten <?= $konten->judulKonten; ?>?');">Delete</button>
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