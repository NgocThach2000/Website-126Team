<?php 
    $open = "transaction";
    include_once __DIR__."/../../autoload/autoload.php";
    $id = intval(getInput('id'));
    $sql_show_user = "SELECT transaction.amount as tongtien, transaction.id as madonhang, transaction.created_at as thoigiandh, user.* FROM transaction, user WHERE user.id = transaction.user_id AND transaction.id = $id";
    $show_user = $db->fetchsql($sql_show_user);
    $sql_show_product = "SELECT product.*, orders.qty as quantity FROM product, orders WHERE orders.transaction_id = $id AND orders.product_id = product.id";
    $show_product = $db->fetchsql($sql_show_product);
?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Sách Hóa Đơn
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                    <a href="index.php">Danh sách đơn hàng</a>
                </li>
            </ol >
            <div class="clearfix"></div>
            <!--Thông báo lỗi-->
            <?php include_once __DIR__."/../../../partials/notification.php"; ?>
        </div>
        <?php //var_dump($transaction); ?>
    </div>
<div class="row">
        <div class="col md 12">
            <h2 style="text-align: center;">Thông Tin Khách Đặt Hàng</h2>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tên khách hàng</th>
                        <th>Ảnh đại diện</th>
                        <th>Thông tin cá nhân</th>
                        <th>Mã đơn hàng</th>
                        <th>Thời gian đặt hàng </th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <!--Show-->
                <tbody>
                    <?php foreach($show_user as $item): ?>
                    <tr>
                        <td><?php echo $item['name'] ?></td>
                        <td>
                        	<img src="<?php echo uploads()?>users/<?php echo $item['avatar'] ?>" width="80px" height="80px"/>
                        </td>
                        <td>
                            <ul>
                                <li>Giới tính: <?php echo check_gender($item['gender']); ?></li>
                                <li>Số điện thoại: <?php echo $item['phone']; ?></li>
                                <li>Địa chỉ: <?php echo $item['address'] ?></li>
                                <li>Email: <?php echo $item['email'] ?></li>
                            </ul>
                        </td>
                        <td><?php echo $item['madonhang'] ?></td>
                        <td><?php echo $item['thoigiandh'] ?></td>
                        <td><?php echo formatPrice($item['tongtien']) ?> VNĐ</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody> 
            </table>
        </div>
        <h2 style="text-align: center;" >Thông Tin Chi Tiết Đơn Hàng</h2>
        <div class="col md 12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm đã mua</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <!--Show chi tiết hóa đơn-->
                <tbody>
                    <?php $stt = 1; foreach($show_product as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td>
                            <ul>
                                <img src="<?php echo uploads()?>product/<?php echo $item['thunbar1'] ?>" width="80px" height="80px"/>
                                <img src="<?php echo uploads()?>product/<?php echo $item['thunbar2'] ?>" width="80px" height="80px"/>
                            </ul>
                        </td>
                        <td><?php echo formatPrice($item['price']) ?> VNĐ</td>
                        <td><?php echo $item['quantity'] ?></td>
                        <td><?php  $sum = $item['quantity']*$item['price'] ;echo formatPrice($sum) ?> VNĐ</td>
                    </tr>
                    <?php $stt++ ;endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php include_once __DIR__."/../../layouts/footer.php"; ?>