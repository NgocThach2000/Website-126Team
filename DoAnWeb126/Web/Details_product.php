<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
    $id = intval(getInput('id'));
    $product = $db->fetchID("product", $id);

    $cateid = intval($product['category_id']);
    $sql = "SELECT * FROM product WHERE category_id = $cateid ORDER BY ID DESC LIMIT 4";
    $attachedproducts = $db->fetchsql($sql);
?>
<?php include_once __DIR__. "/layouts/header.php" ?>

    <link href="<?php echo public_frontend() ?>css/Details_product.css" rel="stylesheet" /> 
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <title>Chi tiết</title>
</head>
<?php include_once __DIR__."/layouts/singleheader.php" ?>
            <div class="page_container2"> 
                <div class="main_containt clearfix fixwidth" >
                    <div class="main_containt_left" >
                        <a><img class="img_main" src="<?php echo uploads_product() ?><?php echo $product['thunbar1'] ?>" /></a>
                        <a><img class="img_main_2" src="<?php echo uploads_product() ?><?php echo $product['thunbar2'] ?>" /></a>
                    </div>

                    <div class="main_containt_right " >
                        <div class="content_detail"><b><?php echo $product['content'] ?></b></div>
                        <div class="content_detail_two"> <?php echo $product['name'] ?> All Size </div>
                        <?php if($product['sale'] == 0): ?>
                        <div class="price"><h4><?php echo formatPrice($product['price']) ?> đ</h4></div>
                        <?php else: ?>
                        <div class="price"><h4><strike><?php echo formatPrice($product['price']) ?> đ</strike> </h4> <h4><?php echo formatPriceSale($product['price'], $product['sale'])?> đ</h4></div>   
                        <?php endif ?>
                        <div class="size">
                        <label  for="sizeT">SIZE: </label>
                        <select id="sizeT">
                        <option> <?php echo $product['size'] ?> </option>
                        </select>
                        </div>
                        <div class=cart_call>
                            <div class="cart1" ><a style="text-decoration: none;" href="Shoping_cart.php"><img src="<?php echo public_frontend() ?>img/icons8-shopping-cart-100.png" width="30"></img></a></div>
                            <div class="call1" ><a style="text-decoration: none; color: black;" href="#"><img src="<?php echo public_frontend() ?>img/icon-call-nh.png" width="24">1900 1000</img></a></div>
                        </div>
                        <b class="Danhmuc" >DANH MỤC SẢN PHẨM</b>
                        <div class="div_menu_sidebar">
                            <!-- <ul class="menu_sidebar">
                                
                            </ul> -->
                        </div>

                        <div class="Item_different"><b>SẢN PHẨM KHÁC</b>

                        <div class="Clothes_item2">
                            <div class="Big_img2">
                                <a><img src="<?php echo public_frontend() ?>img/dri-fit-camo-training-t-shirt-XDtSHr.jpg"  class="image"/></a>
                                
                                </div>
                            </div>
                            <div class="clothes_all2">
                            <p class="clothes_name2">Áo Juvetus</p>
                            <p class="clothes_price2">100.000 VNĐ</p>
                            <a class="clothes_info2" href="#" >Chi tiết</a>
                            </div>
                        </div>    
                        
                        </div>
                    </div>
                </div>
<?php include_once __DIR__. "/layouts/footer.php" ?>