  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?php echo($title == 'Dashboard') ? '' : 'collapsed'; ?>" href="<?= base_url('/Admin/Dashboard/dashboardAdmin'); ?>">
          <i class="bi bi-house-door-fill"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php echo($title == 'Konten') ? '' : 'collapsed'; ?>" href="<?= base_url('/Admin/Konten/getAllKonten'); ?>">
          <i class="bi bi-grid"></i>
          <span>Konten</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php echo($title == 'Pengumuman') ? '' : 'collapsed'; ?>" href="<?= base_url('/Admin/Konten/getPengumuman'); ?>">
          <i class="bi bi-card-text"></i>
          <span>Pengumuman</span>
        </a>
      </li><!-- End Dashboard Nav -->

  </aside><!-- End Sidebar-->