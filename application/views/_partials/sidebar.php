  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Brand Logo -->
    <a href="<?= base_url('admin/Dashboard')?>" class="brand-link">
      <img src="<?= base_url()?>upload/imglogo/<?=$this->fungsi->pengaturan_web()->logo_pengaturan?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?=$this->fungsi->pengaturan_web()->nama_pengaturan?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              
                <!-- Menu Dashboard -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Dashboard')?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Menu Jalur Pendaftaran -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/JalurPendaftaran')?>" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Jalur Pendaftaran</p>
                    </a>
                </li>

                <!-- Menu Info Pendaftaran -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/InfoPendaftaran')?>" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Info Pendaftaran</p>
                    </a>
                </li>

                <!-- Menu Pengumuman -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Pengumuman')?>" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Pengumuman</p>
                    </a>
                </li>

                <!-- Menu Unggah File -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/unggah')?>" class="nav-link">
                        <i class="nav-icon fas fa-upload"></i>
                        <p>Unggah File</p>
                    </a>
                </li>

                <!-- Menu Pengaturan -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Pengaturan')?>" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>Pengaturan</p>
                    </a>
                </li>

                <!-- Menu Data Petugas -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Petugas')?>" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>Data Petugas</p>
                    </a>
                </li>

            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>