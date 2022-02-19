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
                                        <h3 class="card-title">Edit Data Pengaturan</h3>
                                    </div>
                                    <!-- /Navbar Content -->
                                    <!-- Page Content -->

                                    <form action="<?=base_url('admin/Pengaturan/editPengaturan') ?>" enctype="multipart/form-data" method="post">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="pengaturanNama">Nama Website</label>
                                                <input type="hidden" name="id_pengaturan" value="<?=$dataPengaturan->id_pengaturan?>" class="form-control">
                                                <input type="text" name="nama_pengaturan" value="<?=$dataPengaturan->nama_pengaturan?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="pengaturanLogo">Logo</label>
                                                <input type="file" name="logo_pengaturan" class="form-control" >
                                                <input type="text" name="logo_pengaturan_old" class="form-control" value="<?=$dataPengaturan->logo_pengaturan?>"  readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="ketweb_pengaturan">Keterangan Web</label>
                                                <input type="text" name="ketweb_pengaturan" value="<?=$dataPengaturan->ketweb_pengaturan?>" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="alamat_pengaturan">Alamat</label>
                                                <input type="text" id="alamat_pengaturan" name="alamat_pengaturan" value="<?=$dataPengaturan->alamat_pengaturan?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="phone_pengaturan">No Telefon</label>
                                                <input type="number" id="phone_pengaturan" name="phone_pengaturan" value="<?=$dataPengaturan->phone_pengaturan?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="fax_pengaturan">Fax</label>
                                                <input type="text" id="fax_pengaturan" name="fax_pengaturan" value="<?=$dataPengaturan->fax_pengaturan?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="email_pengaturan">Email</label>
                                                <input type="text" id="email_pengaturan" name="email_pengaturan" value="<?=$dataPengaturan->email_pengaturan?>" class="form-control">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="jamkerja1_pengaturan">Jam Kerja 1</label>
                                                <input type="text" id="jamkerja1_pengaturan" name="jamkerja1_pengaturan" value="<?=$dataPengaturan->jamkerja1_pengaturan?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="jamkerja2_pengaturan">Jam Kerja 2</label>
                                                <input type="text" id="jamkerja2_pengaturan" name="jamkerja2_pengaturan" value="<?=$dataPengaturan->jamkerja2_pengaturan?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="jamkerja3_pengaturan">Jam Kerja 3</label>
                                                <input type="text" id="jamkerja3_pengaturan" name="jamkerja3_pengaturan" value="<?=$dataPengaturan->jamkerja3_pengaturan?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="ig_pengaturan">Link Instagram</label>
                                                <input type="text" id="ig_pengaturan" name="ig_pengaturan" value="<?=$dataPengaturan->ig_pengaturan?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="fb_pengaturan">Link Facebook</label>
                                                <input type="text" id="fb_pengaturan" name="fb_pengaturan" value="<?=$dataPengaturan->fb_pengaturan?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="tiktok_pengaturan">Link Tiktok</label>
                                                <input type="text" id="tiktok_pengaturan" name="tiktok_pengaturan" value="<?=$dataPengaturan->tiktok_pengaturan?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="tiktok_pengaturan">Link YouTube</label>
                                                <input type="text" id="youtube_pengaturan" name="youtube_pengaturan" value="<?=$dataPengaturan->youtube_pengaturan?>" class="form-control">
                                            </div>

                                           
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('admin/Pengaturan')?>">
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