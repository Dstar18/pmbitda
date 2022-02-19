<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php');?>
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Top Navbar -->
            <?php $this->load->view('_partials/navbar.php');?>
            <!-- /Top Navbar -->

            <!-- Left Sidebar -->
            <?php $this->load->view('_partials/sidebar.php');?>
            <!-- /Left Sidebar -->
            
            <!-- Main Content -->
            <div class="content-wrapper">
                
            <!-- Breadcrumb -->
            <?php $this->load->view('_partials/breadcrumb.php');?>
            <!-- /Breadcrumb -->

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <!-- Navbar Content -->
                                    <div class="card-header">
                                        <h3 class="card-title">TAMBAH DATA PETUGAS</h3>
                                    </div>
                                    <!-- /Navbar Content -->
                                    <!-- Page Content -->

                                    <form action="<?=base_url('admin/Petugas/editPetugas') ?>" enctype="multipart/form-data" method="post">
                                    
                                        <div class="card-body">
                                                <input type="hidden" id="id_petugas" name="id_petugas" class="form-control" value="<?=$dataPetugas->id_petugas?>" readonly>
                                            <div class="form-group">
                                                <label for="nip_petugas">NIP</label>
                                                <input type="text" name="nip_petugas" class="form-control" value="<?=$dataPetugas->nip_petugas?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="nama_petugas">Nama</label>
                                                <input type="text" name="nama_petugas" class="form-control" value="<?=$dataPetugas->nama_petugas?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="email_petugas">Email</label>
                                                <input type="text" name="email_petugas" class="form-control" value="<?=$dataPetugas->email_petugas?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="nohp_petugas">No HP</label>
                                                <input type="number" name="nohp_petugas" class="form-control" value="<?=$dataPetugas->nohp_petugas?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="username_petugas">Username</label>
                                                <input type="text" name="username_petugas" class="form-control" value="<?=$dataPetugas->username_petugas?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="password_petugas">Password</label>
                                                <input type="text" name="password_petugas" class="form-control" value="<?=$dataPetugas->password_petugas?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Level</label>
                                                <select class="custom-select" id="level_petugas" name="level_petugas">
                                                    <option value="1">Admin</option>
                                                    <option value="2">Conter</option>
                                                    <option value="3">Prodi</option>
                                                    <option value="4">Keuangan</option>
                                                </select>
                                            </div>

                                           
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('admin/Petugas')?>">
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </a>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /Page Content -->
                    </div>
                </section>
            </div>
            <!-- /Main Content -->

            <!-- Footer -->
            <?php $this->load->view('_partials/footer.php');?>
            <!-- /Footer -->

        </div>

        <!-- JS -->
        <?php $this->load->view('_partials/js.php');?>
        <!-- /JS -->
        
    </body>
</html>