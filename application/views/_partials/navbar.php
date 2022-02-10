<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
<!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li>
            <a class="nav-link">
                <i class="nav-icon fa fa-user"></i> <?=$this->fungsi->petugas_login()->nama_petugas?>
            </a>
        </li>
        <li>
            <a href="<?= base_url()?>" target="_blank" class="nav-link">
                <i class="nav-icon fa fa-eye"></i> Lihat Web
            </a>
        </li>
        <li>
            <a href="<?= base_url('admin/Auth/logout')?>" class="nav-link">
                <i class="nav-icon fa fa-sign-out-alt"></i> Log Out
            </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->