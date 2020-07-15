<?php 
    require_once __DIR__. "/autoload/autoload.php"; 
    $sum = 0;
    if(!isset($_SESSION['user_id'])){
        echo "<script>alert('Bạn chưa đăng nhập');location.href='Home.php'</script>";
    }
?>
<link href="<?php echo public_frontend() ?>css/shoppingcart.css" rel="stylesheet" /> 
<?php require_once __DIR__."/layouts/header.php";
?>
<?php require_once __DIR__."/layouts/singleheader.php" ?>
 
 
<div class="col-md-9 bor">
    <?php if (isset($_SESSION['success'])):?>
        <div class="alert alert -success">
            <strong style="color:#3c763d">Success!!</strong>
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
                            <th>Gía  </th>
                            <th>Tổng tiền </th>
                            <th>Thao tác </th>
                        </tr>
                <thead>
                <tbody id="tbody">
              
                    <?php  $stt=1; foreach ($_SESSION['cart'] as $key => $value): ?>
                    
                            <tr>
                               
                                <td><?php echo $stt ?></td>
                                <td><?php echo $value['name'] ?></td>
                                <td><img src="<?php echo uploads() ?>product/<?php echo $value['thunbar1'] ?>"width ="80px"
                                height="80px">
                                </td>
                                <td>
                                    <input type="number" name ="qty" value="<?php echo $value['qty'] ?>" class="form-controlqty" id="qty" min="0">
                                </td>
                         
                                <td><?php echo formatPrice($value['price']) ?></td>
                                <td><?php echo formatPrice($value['price']* $value['qty']) ?></td>
                                <td>
                                    <a href="remove.php?key=<?php echo $key?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>Remove</a>
                                    <a href="#" class="btn btn-xs btn-info updatecart" data-key=<?php echo $key ?>><i class="fa fa-refresh"></i>Update</a>
                                </td>
                                <?php $sum += $value['price']*$value['qty'];$_SESSION['tongtien']=$sum; ?> 
                                
                            </tr>
                           
                    <?php $stt ++; endforeach ?>
                            <tr>
                            <td class="totalprice">Tổng tiền: <?php echo formatPrice($_SESSION['tongtien'])  ?></td>
                            </tr>
                  
                </tbody>
            </table>
        </section>
    </div>


<?php require_once __DIR__."/layouts/footer.php" ?>