<style>
    .Tcenter
    {
       text-align: center;
    }
</style>
<?php
    $open = "dashboard";
    include_once __DIR__."/../../autoload/autoload.php";
    //băt đầu tính tổng danh thu
    $transaction = $db->fetchAll("transaction");
    $TongDoanhThu = 0;
    $TongSoDonHang = 0;
    foreach($transaction as $item)
    {
        if($item['status'] == 1){
            $TongDoanhThu += $item['amount'];
            $TongSoDonHang++;
        }
        else{
            $TongSoDonHang++;
        }
    }
    //kết thúc tính tổng danh thu
    
    //băt đầu tính tổng khách hàng
    $user = $db->fetchAll("user");
    $TongSoKhachHang = 0;
    foreach($user as $item)
    {
        $TongSoKhachHang++;
    }
    //kết thúc tính tổng khách hàng
    
    //băt đầu tính tổng thành viên
    $groups = $db->fetchAll("groups");
    $TongSoThanhVien = 0;
    foreach($groups as $item)
    {
        $TongSoThanhVien++;
    }
    //kết thúc tính tổng thành viên
?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header Tcenter">
            <div class="bnt btn-primary">Chào Mừng Bạn Đến Với Trang Administrator</div>
        </h1>  
    </div>
</div>
<h3 class="page-header Tcenter">
    <div class="Tcenter">Bảng Điều Khiển (126 Team)</div>
</h3>  

<!--other-->
<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-4x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Số Lượng Thành Viên</div>
                                        <div class="huge"><?php echo $TongSoThanhVien ?></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem Chi Tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-4x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Số Lượng Khách Hàng</div>
                                        <div class="huge"><?php echo $TongSoKhachHang ?></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem Chi Tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-4x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Tổng Số Đơn Hàng</div>
                                        <div class="huge"><?php echo $TongSoDonHang ?></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem Chi Tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-usd fa-4x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Tổng Doanh Thu</div>
                                        <div><?php echo formatPrice($TongDoanhThu) ?> VNĐ</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem Chi Tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<!-- Page Footer-->
<?php include_once __DIR__."/../../layouts/footer.php"; ?>