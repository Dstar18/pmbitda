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
                    <?php
                    foreach($dataPengaturan as $rowPengaturan){ ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <!-- Navbar Content -->
                                    <div class="card-header">
                                        <h3 class="card-title">Data Pengaturan</h3>
                                        <div class="card-tools">
                                            <a href="<?= base_url('admin/Pengaturan/edit/'.$rowPengaturan->id_pengaturan)?>">
                                            <button type="button" class="btn btn-block btn-warning">
                                                Edit Data
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /Navbar Content -->
                                    <!-- Page Content -->

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="logo_pengaturan">Logo</label><br>
                                            <img src="<?= base_url()?>upload/imglogo/<?=$rowPengaturan->logo_pengaturan?>" width="200" height="175">
                                            <input type="text" id="logo_pengaturan" name="logo_pengaturan" value="<?=$rowPengaturan->logo_pengaturan?>" class="form-control" readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nama_pengaturan">Nama Website</label>
                                            <input type="text" id="nama_pengaturan" name="nama_pengaturan" value="<?=$rowPengaturan->nama_pengaturan?>" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="ketweb_pengaturan">Keterangan Web</label>
                                            <input type="text" id="ketweb_pengaturan" name="ketweb_pengaturan" value="<?=$rowPengaturan->ketweb_pengaturan?>" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="alamat_pengaturan">Alamat</label>
                                            <input type="text" id="alamat_pengaturan" name="alamat_pengaturan" value="<?=$rowPengaturan->alamat_pengaturan?>" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone_pengaturan">No Telefon</label>
                                            <input type="number" id="phone_pengaturan" name="phone_pengaturan" value="<?=$rowPengaturan->phone_pengaturan?>" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="fax_pengaturan">Fax</label>
                                            <input type="text" id="fax_pengaturan" name="fax_pengaturan" value="<?=$rowPengaturan->fax_pengaturan?>" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="email_pengaturan">Email</label>
                                            <input type="text" id="email_pengaturan" name="email_pengaturan" value="<?=$rowPengaturan->email_pengaturan?>" class="form-control" readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="jamkerja1_pengaturan">Jam Kerja 1</label>
                                            <input type="text" id="jamkerja1_pengaturan" name="jamkerja1_pengaturan" value="<?=$rowPengaturan->jamkerja1_pengaturan?>" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="jamkerja2_pengaturan">Jam Kerja 2</label>
                                            <input type="text" id="jamkerja2_pengaturan" name="jamkerja2_pengaturan" value="<?=$rowPengaturan->jamkerja2_pengaturan?>" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="jamkerja3_pengaturan">Jam Kerja 3</label>
                                            <input type="text" id="jamkerja3_pengaturan" name="jamkerja3_pengaturan" value="<?=$rowPengaturan->jamkerja3_pengaturan?>" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="ig_pengaturan">Link Instagram</label>
                                            <input type="text" id="ig_pengaturan" name="ig_pengaturan" value="<?=$rowPengaturan->ig_pengaturan?>" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="fb_pengaturan">Link Facebook</label>
                                            <input type="text" id="fb_pengaturan" name="fb_pengaturan" value="<?=$rowPengaturan->fb_pengaturan?>" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="tiktok_pengaturan">Link Tiktok</label>
                                            <input type="text" id="tiktok_pengaturan" name="tiktok_pengaturan" value="<?=$rowPengaturan->tiktok_pengaturan?>" class="form-control" readonly>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <!-- /Page Content -->
                    </div>
                    <?php }?>
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