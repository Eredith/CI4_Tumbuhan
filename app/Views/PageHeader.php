<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tumbuhan di Taman Elektro</title>
    <base href="<?php echo base_url('assets') ?>/">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="/dashboard" class="navbar-brand">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Tumbuhan Di Taman Elektro</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Home</a>
                        </li>
                        <!-- End Level two -->
                    </ul>
                    </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <?php if (session()->get('logged_in')) : ?>
                        <li class="nav-item">
                            <div class="info mt-4 pb-3 mb-3 mr-3">
                                <a href="#" class="d-block"><?php echo session()->get('email') ?></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="image mt-2 pb-3 mb-3 mr-3">
                                <img src="dist/img/user2-160x160.jpg" class=" img-fluid img-circle elevation-2" style="width: 50px; height: 50px;" alt="User Image">
                            </div>
                        </li>
                    <?php endif; ?>
                    <?php if (!session()->get('logged_in')) : ?>
                        <li class="nav-item">
                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="login mr-3">
                                    <a href="<?php echo site_url('login') ?>">
                                        <div class="btn btn-primary">
                                            <div class="fas fa-sign-in"></div>
                                        </div>
                                    </a>
                                </div>

                        </li>
                    <?php endif; ?>
                    <?php if (session()->get('logged_in')) : ?>
                        <li class="nav-item">
                            <div class="logout mt-3 pb-3 mb-3">
                                <a href="<?php echo site_url('logout') ?>">
                                    <div class="btn btn-primary">
                                        <div class="fas fa-sign-out-alt "></div>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
            </div>
            </li>
            </ul>
    </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Website Tumbuhan Taman Elektro</h1>
                        <?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-danger" id="disappearingDiv"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('pesanTumbuhan')) : ?>
                            <div class="alert alert-success" id="disappearingDiv"><?= session()->getFlashdata('pesanTumbuhan') ?></div>
                        <?php endif; ?>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Top Navigation</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/dashboard" class="nav-link">Home</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <?php if (session()->get('logged_in')) : ?>
                    <li class="nav-item">
                        <div class="info mt-4 pb-3 mb-3 mr-3">
                            <a href="#" class="d-block"><?php echo session()->get('email') ?></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="image mt-2 pb-3 mb-3 mr-3">
                            <img src="dist/img/user2-160x160.jpg" class=" img-fluid img-circle elevation-2" style="width: 50px; height: 50px;" alt="User Image">
                        </div>
                    </li>
                <?php endif; ?>
                <?php if (!session()->get('logged_in')) : ?>
                    <li class="nav-item">
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="login mr-3">
                                <a href="<?php echo site_url('login') ?>">
                                    <div class="btn btn-primary">
                                        <div class="fas fa-sign-in"></div>
                                    </div>
                                </a>
                            </div>

                    </li>
                <?php endif; ?>
                <?php if (session()->get('logged_in')) : ?>
                    <li class="nav-item">
                        <div class="logout mt-3 pb-3 mb-3">
                            <a href="<?php echo site_url('logout') ?>">
                                <div class="btn btn-primary">
                                    <div class="fas fa-sign-out-alt "></div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?> 
    </div>
    </li>
    </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/dashboard" class="brand-link">
            <span class="brand-text font-weight-light">Tumbuhan di Taman Elektro</span>
        </a>
        <div class="sidebar">
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Menu
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="/dashboard">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </a>
                        </ol>
                    </div>
                </div>
            </div>
        </div>