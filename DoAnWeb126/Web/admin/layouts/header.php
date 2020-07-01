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
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    </button>
                    <a class="navbar-brand" href="#">Administrator</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <img src="<?php echo public_frontend() ?>img/iconfinder_nike_27575.png" width="50px" height="50px" /><h2 style="color: white; display: inline;";> SPORTER.VN</h2>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="<?php echo isset($open) && $open == 'dashboard' ? 'active' : '' ?>">
                            <a href="<?php echo modules("dashboard") ?>"><i class="fa fa-fw fa-dashboard"></i> Bảng Điều Khiển</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'category_parent' ? 'active' : '' ?>">
                            <a href="<?php echo modules("category_parent") ?>"><i class="fa fa-fw fa-list"></i> Danh Mục Cha</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'category' ? 'active' : '' ?>">
                            <a href="<?php echo modules("category") ?>"><i class="fa fa-fw fa-bars"></i> Danh Mục Sản Phẩm</a>
                        </li>
                         <li class="<?php echo isset($open) && $open == 'product' ? 'active' : '' ?>">
                            <a href="<?php echo modules("product") ?>"><i class="fa fa-fw fa-database"></i> Sản Phẩm</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'groups' ? 'active' : '' ?>">
                            <a href="<?php echo modules("groups") ?>"><i class="fa fa-fw fa-lock"></i> Thành Viên</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'user' ? 'active' : '' ?>">
                            <a href="<?php echo modules("user") ?>"><i class="fa fa-fw fa-user"></i> Người Dùng </a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'banner_slide_show' ? 'active' : '' ?>">
                            <a href="<?php echo modules("banner_slide_show") ?>"><i class="fa fa-fw fa-sliders"></i> Chuyển Cảnh </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>Home.php"><i class="fa fa-fw fa-sign-out"></i> Đăng Xuất </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">