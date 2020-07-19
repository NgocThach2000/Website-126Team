<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
    $id = intval(getInput('id'));
    $product = $db->fetchID("product", $id);

    $cateid = intval($product['category_id']);
    $sql = "SELECT * FROM product WHERE category_id = $cateid ORDER BY RAND() LIMIT 2";
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
                        <a><img class="img_main1" src="<?php echo uploads_product() ?><?php echo $product['thunbar1'] ?>" /></a>
                        <a><img class="img_main2" src="<?php echo uploads_product() ?><?php echo $product['thunbar2'] ?>" /></a>
                    </div>

                    <div class="main_containt_right " >
                        <div class="content_detail"><b><?php echo $product['content'] ?></b></div>
                        <div class="content_detail_two"> <?php echo $product['name'] ?> All Size </div>
                        <?php if($product['sale'] == 0): ?>
                        <div class="price"><h4>Giá: <?php echo formatPrice($product['price']) ?> VNĐ</h4></div>
                        <?php else: ?>
                        <div class="price"><h4><strike><?php echo formatPrice($product['price']) ?> VNĐ</strike> </h4> <h4><?php echo formatPriceSale($product['price'], $product['sale'])?> đ</h4></div>   
                        <?php endif ?>
                        <div class="size">
                        <label  for="sizeT">SIZE: </label>
                        <select id="sizeT">
                        <option> <?php echo $product['size'] ?> </option>
                        </select>
                        </div>
                        <div class=cart_call>
                            <div class="cart1" ><a style="text-decoration: none;" href="Shoping_cart.php?id=<?php echo $product['id']?>"><img src="<?php echo public_frontend() ?>img/icons8-shopping-cart-100.png" width="30"></img></a></div>
                            <div class="call1" ><a style="text-decoration: none; color: black;" href="#"><img src="<?php echo public_frontend() ?>img/icon-call-nh.png" width="24">1900 1000</img></a></div>
                        </div>
                        
                                    
              

                        <div class="Item_different"><b>SẢN PHẨM KHÁC</b>
                        <!--Product Random-->
                        <?php foreach($attachedproducts as $item): ?>
                        <div class="Clothes_item2">
                            <div >
                                <a href="Details_product.php?id=<?php echo $item['id'] ?>"><img src="<?php echo uploads_product() ?><?php echo $item['thunbar1'] ?>"  class="image"/></a>
                            </div>
                            </div>
                            <div class="clothes_all2">
                                <p class="clothes_name2"><?php echo $item['name'] ?></p>
                                <p class="clothes_price2"><?php echo formatPriceSale($item['price'], $item['sale'])?> VNĐ</p>
                                <a class="clothes_info2" href="Details_product.php?id=<?php echo $item['id'] ?>" >Chi tiết</a>
                            </div>
                        </div>
                        <?php endforeach ?>   
                        <!--end Product Random-->
                        </div>
                    </div>
                </div>

            <script>
            $(document).ready(function() {
            $("#my-menu").mmenu();
            });
            $('.menu_sidebar >li').click(function(){
                if(!$(this).hasClass('liactive_side')){
                    $(this).addClass('liactive_side');
                }
                else{
                    $(this).removeClass('liactive_side');
                }
                $(this).find('ul').toggle();
            });
        </script>

<?php include_once __DIR__. "/layouts/footer.php" ?>