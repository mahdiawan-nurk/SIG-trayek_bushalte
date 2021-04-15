<!doctype html>
<html class="no-js" lang="en">

<?php $url=base_url().'admin/'; ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?=$url?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$url?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=$url?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?=$url?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=$url?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?=$url?>vendors/jqvmap/dist/jqvmap.min.css">
    <!-- css cdn datatables -->
    <link rel="stylesheet" href="<?=$url?>vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

    <script src="<?=$url?>vendors/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=$url?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url();?>leaflet/leaflet.css" />
    <script src="<?= base_url(); ?>leaflet/leaflet.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?=base_url()?>admin/utama"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <?php if ($this->session->userdata('level')==1): ?>
                     <li >
                        <a href="<?=base_url()?>admin/berita"> <i class="menu-icon fa fa-list"></i>Berita (Postingan) </a>
                    </li>
                    <li >
                        <a href="<?=base_url()?>admin/databus"> <i class="menu-icon fa fa-truck"></i>Informasi Bus </a>
                    </li>
                    <li >
                        <a href="<?=base_url()?>admin/datatrayek"> <i class="menu-icon fa fa-arrows-h"></i>Data Trayek </a>
                    </li>
                    <li >
                        <a href="<?=base_url()?>admin/datarute"> <i class="menu-icon fa fa-arrows-h"></i>Data Rute </a>
                    </li>
                    <li >
                        <a href="<?=base_url()?>admin/datahalte"> <i class="menu-icon fa fa-map-marker"></i>Data Halte </a>
                    </li>
                <?php endif ?>
                
                 <?php if ($this->session->userdata('level')==2): ?>
                    <li >
                        <a href="<?=base_url()?>admin/databus"> <i class="menu-icon fa fa-truck"></i>Trayek Bus</a>
                    </li>
                    <li >
                        <a href="<?=base_url()?>admin/datahalte"> <i class="menu-icon fa fa-arrows-h"></i>Lokasi Halte </a>
                    </li>
                    <li >
                        <a href="<?=base_url()?>admin/datarute"> <i class="menu-icon fa fa-arrows-h"></i>Peta </a>
                    </li>
                    <li >
                        <a href="<?=base_url()?>admin/datahalte"> <i class="menu-icon fa fa-map-marker"></i>Pemesanan Bus </a>
                    </li>
                <?php endif ?>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">


                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                        id="message"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti-email"></i>
                        <span class="count bg-primary">9</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">You have 4 Mails</p>
                        <a class="dropdown-item media bg-flat-color-1" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Jonathan Smith</span>
                                <span class="time float-right">Just now</span>
                                <p>Hello, this is an example msg</p>
                            </span>
                        </a>
                        <a class="dropdown-item media bg-flat-color-4" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Jack Sanders</span>
                                <span class="time float-right">5 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </span>
                        </a>
                        <a class="dropdown-item media bg-flat-color-5" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Cheryl Wheeler</span>
                                <span class="time float-right">10 minutes ago</span>
                                <p>Hello, this is an example msg</p>
                            </span>
                        </a>
                        <a class="dropdown-item media bg-flat-color-3" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Rachel Santos</span>
                                <span class="time float-right">15 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-5" >
            <div class="user-area dropdown ">


                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="<?=$url?>images/admin.jpg" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                    <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                    <a class="nav-link" href="<?=base_url()?>secure/logout"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>



        </div>
    </div>

</header><!-- /header -->
<!-- Header-->

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <?=  $this->load->view($page); ?>

</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->


<script src="<?=$url?>vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="<?=$url?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=$url?>assets/js/main.js"></script>


<script src="<?=$url?>vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="<?=$url?>assets/js/dashboard.js"></script>
<script src="<?=$url?>assets/js/widgets.js"></script>
<script src="<?=$url?>vendors/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="<?=$url?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="<?=$url?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?=$url?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=$url?>vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=$url?>assets/js/init-scripts/data-table/datatables-init.js"></script>
<script>

</script>

</body>

</html>
