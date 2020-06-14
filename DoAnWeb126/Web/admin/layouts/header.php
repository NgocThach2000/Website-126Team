<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Trang Admin</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url() ?>public/admin/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>public/admin/css/sb-admin.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url() ?>public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    </button>
                    <a class="navbar-brand" href="#">Admin</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                         <ul class="dropdown-menu">
                            <li>
                                <a href="#">Tin nhắn </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <a href="#">Thông Báo <span class="label label-default"> Thông Báo Mới Nhất</span></a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Xem Tất Cả</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Hồ Sơ</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Hộp Thư Đến</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Cài Đặt</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Đăng Xuất</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="<?php echo isset($open) && $open == 'category' ? 'active' : '' ?>">
                            <a href="<?php echo modules("category") ?>"><i class="fa fa-fw fa-list"></i> Danh Mục Sản Phẩm</a>
                        </li>
                         <li class="<?php echo isset($open) && $open == 'product' ? 'active' : '' ?>">
                            <a href="<?php echo modules("product") ?>"><i class="fa fa-fw fa-database"></i> Sản Phẩm</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'admin' ? 'active' : '' ?>">
                            <a href="<?php echo modules("admin") ?>"><i class="fa fa-fw fa-lock"></i> Admin</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'user' ? 'active' : '' ?>">
                            <a href="<?php echo modules("user") ?>"><i class="fa fa-fw fa-user"></i> Thành Viên </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">