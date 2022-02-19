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
            <section class="content row">
            
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Read Pengumuman</h3>
                                <div class="card-tools">
                                    <?php if($dataPengumuman->status_pgm == 1){ ?>
                                        <button class="btn-sm-xs btn-primary">Publish</button>
                                    <?php }else if($dataPengumuman->status_pgm == 2){ ?>
                                        <button class="btn-sm-xs btn-warning">Draft</button>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5><?=$dataPengumuman->judul_pgm?></h5>
                                    <h5><?=$dataPengumuman->ketJudul_pgm?></h5>
                                    <h6><?=$dataPengumuman->nama_petugas?>
                                        <span class="mailbox-read-time float-right"><?=$dataPengumuman->date_insert_pgm?></span><br>
                                        <span class="mailbox-read-time float-right"><?=$dataPengumuman->date_update_pgm?></span>
                                    </h6>
                                </div>
                                <div class="mailbox-read-message">
                                    <center>
                                        <img src="<?= base_url()?>upload/coverpengumuman/<?=$dataPengumuman->cover_pgm?>" width="450" height="275">
                                    </center>
                                    <?=$dataPengumuman->konten_pgm?>
                                </div>
                            </div>
                        </div>
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