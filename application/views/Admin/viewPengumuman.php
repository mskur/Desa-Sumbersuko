<?php require 'headerAdmin.php'; ?>
<?php require 'sidebarAdmin.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pengumuman</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item">Konten</li>
          <li class="breadcrumb-item active">Pengumuman</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-100">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">PENGUMUMAN</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="<?= base_url('Admin/Konten/updatePengumumanAction'); ?>" method="post" enctype="multipart/form-data">
        
                        <div class="col-12">
                            <label for="isiPengumunan" class="form-label">Isi Pengumuman</label>
                            <textarea id="summernote" name="isiPengumunan">
                                <?= $pengumuman->isiPengumunan; ?>
                            </textarea>
                       
                            <?php if(form_error('isiPengumunan') != NULL) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= form_error('isiPengumunan'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form><!-- Vertical Form -->
                </div>
            </div>

        </div>
    </section>

  </main><!-- End #main -->



<?php require 'footerAdmin.php'; ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
  $('#summernote').summernote({
    placeholder: 'Tulis Konten',
    tabsize: 2,
    height: 400,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>

<script>
  function previewImage() {
  var preview = document.querySelector('#imagePreview');
  var file = document.querySelector('#gambarKonten').files[0];
  var reader = new FileReader();

  reader.onloadend = function() {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}

</script>




