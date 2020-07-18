<?php 
    require_once __DIR__. "/autoload/autoload.php"; 
    $sum = 0;
    $sum1=0;
    if(!isset($_SESSION['user_id'])){
        echo "<script>alert('Bạn chưa đăng nhập');location.href='Home.php'</script>";
    }
    $dataTran = 
    [
        "user_id" 	=> postInput('user_id'),
        "amount"	=> postInput('amount')
    ];
    //
    if($_SERVER["REQUEST_METHOD"] == "POST"){  
        
        $id_tran = $db->insert("transaction", $dataTran);
        if($id_tran > 0)
        {
            foreach($_SESSION['cart'] as $key => $value)
            {
                $dataOrder = [
                    'transaction_id' => $id_tran,
                    'product_id' => $key,
                    'qty' => $value['qty'],
                    'price' => $value['price']
                ];
                $id_insert = $db->insert("orders", $dataOrder);
            }
        }
        if(isset($id_tran)){
            $_SESSION['success'] = "Đặt hàng thành công!";
            echo "<script>alert('Đơn hàng đã được đặt');location.href='Home.php'</script>";
            unset($_SESSION['cart']);
        }
        else{
            $_SESSION['error'] = "Đặt hàng thất bại";
        }
        
    }
?>
<link href="<?php echo public_frontend() ?>css/shoppingcart.css" rel="stylesheet" /> 
<link href="<?php echo public_frontend() ?>css/Home.css" rel="stylesheet" /> 
<div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    </head>
<?php require_once __DIR__."/layouts/header.php";
?>
<?php require_once __DIR__."/layouts/singleheader.php" ?>
 
 
<div class="col-md-12 bor">
    <?php if (isset($_SESSION['success'])):?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $_SESSION['success'];unset($_SESSION['success'])?>
        </div>
    <?php endif?>
    <section class="box-main1">
            <h3 class="title-main"><a href="">Giỏ hàng của bạn </a> </h3>
            <table class="table table-hover" id ="shopingcart_info">
                <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm </th>
                            <th>Hình ảnh </th>
                            <th>Số lượng </th>
                            <th>Giá  </th>
                            <th>Tổng tiền </th>
                            <th>Thao tác </th>
                        </tr>
                <thead>
                <tbody id="tbody">
                    <!--Neu san pham có tồn tại trong giỏ hàng thì mới show-->
                    <?php if(isset($_SESSION['cart'])): ?>
                    <?php  $stt=1; foreach ($_SESSION['cart'] as $key => $value): ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $value['name'] ?></td>
                                <td><img src="<?php echo uploads() ?>product/<?php echo $value['thunbar1'] ?>"width ="80px"
                                height="80px">
                                </td>
                                <td>
                                    <input type="number" name ="qty" value="<?php echo $value['qty'] ?>" class="form-controlqty" id="qty" min="0" max="<?php echo $value['number'] ?>">
                                </td>

                                <td><?php echo formatPrice($value['price']) ?> VNĐ</td>
                                <td><?php echo formatPrice($value['price']* $value['qty']) ?> VNĐ</td>
                                <td>
                                    <a href="remove.php?key=<?php echo $key?>" class="btn btn-danger"><i class="fa fa-remove"></i>Xóa</a>
                                    <a href="#" class="btn btn-info updatecart" data-key=<?php echo $key ?>><i class="fa fa-refresh"></i>Cập nhật</a>
                                </td>
                                <?php $sum += $value['price']*$value['qty'];$_SESSION['tongtien']=$sum; ?> 
                                <?php $sum1 +=$value['qty'];$_SESSION['a']=$sum1; ?> 
                                
                            </tr>
                           
                    <?php $stt ++; endforeach ?>
                    <?php endif ?>
                    <tr>
                        <td class='totalprice'>
                                <?php
                                if ($sum1<1){
                                    echo 'Chưa có sản phẩm';
                                }
                                else {  
                                    echo 'Tổng tiền: ';
                                    echo  formatPrice($_SESSION['tongtien']) ;
                                    echo ' VNĐ';
                                }
                                ?>
                        </td>
                    <tr>
                    <tr>
                        <td class='totalprice'>
                        <a href="Home.php" class="btn btn-primary"><?php if($sum1>=1){echo'Tiếp tục mua hàng';} else{ echo'Bắt đầu mua sắm';}?></a>
                            <!--<input type="button" value='?php if($sum1>=1){echo'Tiếp tục mua hàng';} else{ echo'Bắt đầu mua sắm';}?>' class='btn btn-info updatecart'/>-->
                            <!--<input type="button" value='?php if($sum1>=1){echo'Thanh toán';} else{ echo'Đăng xuất';}?>'class='btn btn-danger'/>-->
                            
                            <?php if($sum1>=1): ?>
                                <form method="POST" enctype="multipart/form-data" > 
                                <input class="Hideinput" type="number" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                                <input class="Hideinput" type="number" name="amount" value="<?php echo $_SESSION['tongtien'] ?>">
                                <input type="submit" class="btn btn-success" value="Tiến hành đặt hàng">
                                </form>
                            <?php else: ?>
                            <a href="Logout.php" class="btn btn-danger">Đăng xuất</a>
                            <?php endif ?>
                                
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>


<?php require_once __DIR__."/layouts/footer.php" ?>