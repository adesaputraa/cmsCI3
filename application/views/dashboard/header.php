<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" type="image/png"  href="<?= base_url('favicon.png'); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <?php  
                    $id_user = $this->session->userdata('id');
                    $user = $this->db->query("select * from pengguna
                    where pengguna_id='$id_user'")->row();
                ?>
                <div class="sidebar-brand-text mx-3"><?= $user->pengguna_nama; ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dashboard/kategori') ?>">
                    <i class="fas fa-fw fa-chart-pie fa-sm "></i>
                    <span>KATEGORI</span>
                </a>
  
                <a class="nav-link" href="<?= base_url('dashboard/artikel') ?>">
                    <i class="fas fa-fw fa-paint-brush"></i>
                    <!-- fa-sm -->
                    <span>ARTIKEL</span>
                </a>

                <a class="nav-link" href="<?= base_url('pages/pages') ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>PAGES</span>
                </a>
           
                <a class="nav-link" href="<?= base_url('dashboard/pengguna') ?>">
                <i class="fas fa-fw fa-users-cog"></i>
                    <span>PENGGUNA &HAK AKSES</span>
                </a>

                <a class="nav-link" href="<?= base_url('dashboard/pengaturan') ?>">
                <i class="fas fa-fw fa-globe"></i>
                    <span>PENGGUNA WEBSITE</span>
                </a>

                
                <a class="nav-link" href="<?= base_url('dashboard/profile') ?>">
                <i class="fas fa-fw fa-user"></i>
                    <span>PROFILE</span>
                </a>

                <a class="nav-link" href="<?= base_url('dashboard/ganti_password') ?>">
                <i class="fas fa-fw fa-tools"></i>
                    <span>GANTI PASSWORD</span>
                </a>

                <a class="nav-link" href="<?= base_url('dashboard/Contact') ?>">
                <i class="fas fa-fw fa-envelope-open-text"></i>
                    <span>PESAN</span>
                </a>

                <a class="nav-link" href="<?= base_url('dashboard/keluar') ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('level') ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('assets/'); ?>img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('dashboard/keluar') ?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-fw fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>


   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apa Anda Ingin Keluar?.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('dashboard/keluar'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
