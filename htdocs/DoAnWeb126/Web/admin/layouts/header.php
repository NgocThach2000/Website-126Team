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
        <!--Logo-->
        <link rel="SHORTCUT ICON" href="<?php echo public_frontend() ?>img/iconfinder_nike_27575.png">
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header ">
                <li class="dropdown">
                        <img src="<?php echo public_frontend() ?>img/iconfinder_nike_27575.png" width="50px" height="50px" /><h2 style="color: white; display: inline;";> SPORTER.VN</h2>
                    </li>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['groups_name'] ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Hồ Sơ</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Hộp Thư Đến</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/DoAnWeb126/Web/loginGroups/logout.php"><i class="fa fa-fw fa-power-off"></i> Đăng Xuất</a>
                            </li>
                        </ul>
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
                        <li class="<?php echo isset($open) && $open == 'transaction' ? 'active' : '' ?>">
                            <a href="<?php echo modules("transaction") ?>"><i class="fa fa-fw fa-th-list"></i> Quản Lý Đơn Hàng</a>
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
                            <a href="/DoAnWeb126/Web/loginGroups/logout.php"><i class="fa fa-fw fa-sign-out"></i> Đăng Xuất </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">