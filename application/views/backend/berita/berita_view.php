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
                                <h3 class="card-title">Read Berita</h3>
                                <div class="card-tools">
                                    <?php if($dataBerita->status_berita == 1){ ?>
                                        <button class="btn-sm-xs btn-primary">Publish</button>
                                    <?php }else if($dataBerita->status_berita == 2){ ?>
                                        <button class="btn-sm-xs btn-warning">Draft</button>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5><?=$dataBerita->judul_berita?></h5>
                                    <h6><?=$dataBerita->nama_petugas?>
                                        <span class="mailbox-read-time float-right"><?=$dataBerita->date_insert_berita?></span><br>
                                        <span class="mailbox-read-time float-right"><?=$dataBerita->date_update_berita?></span>
                                    </h6>
                                </div>
                                <div class="mailbox-read-message">
                                    <?=$dataBerita->konten_berita?>
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