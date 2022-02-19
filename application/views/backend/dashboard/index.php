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
                        <!-- Page Content -->
                        <div class="container-fluid">
                            <div class="row">
                                <!-- small box 1 -->
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3><?=$dataInfo->total?></h3>
                                                <p>Data Info Pendaftaran</p>
                                            </div>
                                            <a href="<?= base_url('admin/InfoPendaftaran')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- /small box 1 -->
                                <!-- small box 2 -->
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3><?=$dataJalur->total?></h3>
                                                <p>Data Jalur Pendaftaran</p>
                                            </div>
                                            <a href="<?= base_url('admin/JalurPendaftaran')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- /small box 2 -->
                                <!-- small box 3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3><?=$dataPengumuman->total?></h3>
                                                <p>Data Pengumuman</p>
                                            </div>
                                            <a href="<?= base_url('admin/Pengumuman')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- /small box 3 -->
                                <!-- small box 3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-danger">
                                            <div class="inner">
                                                <h3><?=$dataUnggah->total?></h3>
                                                <p>Data Unggah</p>
                                            </div>
                                            <a href="<?= base_url('admin/Unggah')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- /small box 3 -->
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
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>

        <!-- JS -->
        <?php $this->load->view('_partials/js.php');?>
        <!-- /JS -->
    </body>
</html>