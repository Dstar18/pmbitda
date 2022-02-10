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

            <!-- Main Content -->
            <section class="content">
                <form action="<?=base_url('admin/Halaman/editHalaman')?>" enctype="multipart/form-data" method="POST">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Halaman</h3>
                                </div>
                                <div class="card-body">

                                        <input type="hidden" id="idHalaman" name="idHalaman" class="form-control" value="<?=$dataHalaman->id_halaman?>" readonly>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="judulHalaman" placeholder="Judul Halaman" value="<?=$dataHalaman->judul_halaman?>" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="ketjudulHalaman" placeholder="keterangan Judul" value="<?=$dataHalaman->ketjudul_halaman?>" required>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="kontenHalaman" id="compose-textarea" class="form-control" style="height: 300px"><?=$dataHalaman->konten_halaman?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-primary card-outline">
                                <div class="card-body">

                                    <a href="<?= base_url('admin/Halaman')?>">
                                        <button type="button" class="btn btn-danger btn-block">Cancel</button>
                                    </a><p></p>                                    
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Content -->
                    </div>
                </div>
                </form>
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