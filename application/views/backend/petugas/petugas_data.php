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
                    <div class="card">
                        <!-- Navbar Content -->
                        <div class="card-header">
                            <h3 class="card-title">Data Petugas</h3>
                            <div class="card-tools">
                                <a href="<?= base_url('admin/Petugas/tambah')?>">
                                <button type="button" class="btn btn-block btn-primary">
                                    Tambah Data
                                </button>
                                </a>
                            </div>
                        </div>
                        <!-- /Navbar Content -->
                        <!-- Page Content -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>NoHP</th>
                                        <th>User</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    $i = 1;
                                    foreach($dataPetugas as $rowPetugas){?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$rowPetugas->nip_petugas?></td>
                                        <td><?=$rowPetugas->nama_petugas?></td>
                                        <td><?=$rowPetugas->email_petugas?></td>
                                        <td><?=$rowPetugas->nohp_petugas?></td>
                                        <td><?=$rowPetugas->username_petugas?></td>
                                        <td><?=$rowPetugas->password_petugas?></td>

                                        <td>
                                            <a href="<?= base_url('admin/Petugas/edit/'.$rowPetugas->id_petugas)?>">
                                                <button class="btn btn-sm btn-warning" id="btn-lihat">Edit</button>
                                            </a>
                                            
                                            <a href="<?= base_url('admin/Petugas/hapus/'.$rowPetugas->id_petugas)?>" onclick="return confirm('Anda yakin mau menghapus data ini ?')">
                                                <button class="btn btn-sm btn-danger" id="btn-delete">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
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