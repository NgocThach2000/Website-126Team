<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT transaction.* ,user.name as nameuser FROM transaction, user WHERE transaction.user_id = $user_id AND $user_id = user.id";
    $transaction = $db->fetchsql($sql);
?>

<link href="<?php echo public_frontend() ?>css/Order.css" rel="stylesheet" />
<style>
    .Tcenter{
        text-align: center;
    }
</style>
<div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    </head>
<?php include_once __DIR__."/layouts/header.php";
?>
<?php include_once __DIR__."/layouts/singleheader.php" ?>
 
 
<div class="col-md-12 bor">
    <?php if (isset($_SESSION['success'])):?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $_SESSION['success'];unset($_SESSION['success'])?>
        </div>
    <?php endif?>
    <section class="box-main1">
            <h3 class="title-main Tcenter"><a class="text-primary">Đơn Hàng Của Tôi</a></h3>
            <table class="table table-hover" id ="shopingcart_info">
                <thead>
                        <tr>
                            <th class="Tcenter">STT</th>
                            <th class="Tcenter">Khách Hàng </th>
                            <th class="Tcenter">Mã Đơn Hàng</th>
                            <th class="Tcenter">Đã Mua</th>
                            <th class="Tcenter">Trạng Thái </th>
                            <th class="Tcenter">Thời Gian Đặt Hàng</th>
                            <th class="Tcenter">Thành Tiền </th>
                        </tr>
                <thead>
                <tbody id="tbody">
                <?php $stt = 1; foreach($transaction as $item): ?>
                    <tr>
                        <td class="Tcenter"><?php echo $stt ?></td>
                        <td class="Tcenter"><?php echo $item['nameuser'] ?></td>
                        <td class="Tcenter"><?php echo $item['id'] ?></td>
                        <?php 
                            $product_id = $item['id'];
                            $sql_show_product = "SELECT product.*, orders.qty as quantity FROM product, orders WHERE orders.transaction_id = $product_id AND orders.product_id = product.id";
                            $show_product = $db->fetchsql($sql_show_product);
                        ?>
                        <td>
                            <?php foreach($show_product as $value): ?>
                            <ol>
                                <li >Tên Sản Phẩm: <?php echo $value['name'] ?></li>
                                <li >Giá sản phẩm: <?php echo formatPrice($value['price']) ?> VNĐ</li>
                                <li >
                                    <img src="<?php echo uploads()?>product/<?php echo $value['thunbar1'] ?>" width="100px" height="100px"/>
                                    <img style="margin-left: 10%;" src="<?php echo uploads()?>product/<?php echo $value['thunbar2'] ?>" width="100px" height="100px"/>
                                </li>
                                <li >Số lượng: <?php echo $value['quantity'] ?></li>
                                <li class="Tcenter text-danger">Tổng: <?php $sum = $value['quantity']*$value['price']; echo formatPrice($sum) ?> VNĐ</li>
                                <hr>
                            </ol>
                            <?php endforeach; ?>
                        </td>
                        <td class="Tcenter">
                            <a class="btn btn-<?php echo $item['status'] == 1 ? 'primary' : 'warning' ?>"><?php echo $item['status'] == 0 ? 'Đã Tiếp Nhận' : 'Đang Giao' ?></a>
                        </td>
                        <td class="Tcenter"><?php echo $item['created_at'] ?></td>
                        <td class="Tcenter text-danger" style="font-size: 200%;"><?php echo formatPrice($item['amount']) ?> VNĐ</td>
                    </tr>
                    <?php $stt++; endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>


<?php include_once __DIR__."/layouts/footer.php" ?>