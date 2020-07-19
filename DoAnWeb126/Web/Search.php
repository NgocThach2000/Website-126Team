<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
     $string = str_replace('=','',strstr($_SERVER["REQUEST_URI"], '=')); //lấy chuỗi cần tìm
     $search = to_slug($string); //Lấy slug
     if($search != ''){
        $sql = "SELECT * FROM product WHERE product.slug like '%$search%'";
        $product = $db->fetchsql($sql);
    }
?>
<?php include_once __DIR__. "/layouts/header.php" ?>
    <link href="<?php echo public_frontend() ?>css/Home.css" rel="stylesheet" /> 
    <link href="<?php echo public_frontend() ?>css/Search.css" rel="stylesheet" />  
    
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <title>Áo Nike</title>
</head>
<?php include_once __DIR__. "/layouts/singleheader.php" ?> 
            <div class="page_container2"> 
                <div class="fixwidth Link" >
                    <b><a href="Home.php">TRANG CHỦ</a></b>
                    <b><a>/</a></b>
                    <?php if(!empty($product) && $search != ''): ?>
                    <b><a><?php echo mb_strtoupper("Kết quả tìm kiếm", 'UTF-8') ?> </a></b>
                    <?php else: ?>
                        <b><a><?php echo mb_strtoupper("Không tìm thấy kết quả", 'UTF-8') ?> </a></b>
                    <?php endif ?>
                   
                </div>
        <?php if(!empty($product) && $search != ''): ?>
            <div class="main_containt clearfix fixwidth" >
                <div class="main_containt_left" >
                    <div class="Clothes_list">
                        <?php foreach($product as $item): ?>
                        <div class="Clothes_item">
                            <!--product sale-->
                            <?php if($item['sale'] != 0) : ?>
                            <div class=Big_img>
                                <a href="Details_product.php?id=<?php echo $item['id'] ?>"><img src="<?php echo uploads() ?>product/<?php echo $item['thunbar1'] ?> " class="image"/></a>
                                <span>SALE <?php echo $item['sale'] ?>%</span>
                                <div class="image2">
                                    <a href="Shoping_cart.php?id=<?php echo $item['id']?>"><img src="<?php echo public_frontend() ?>img/icons8-shopping-cart-100.png" class="icon_image" ></a>
                                </div>
                            </div>
                            <div class="clothes_all">
                            <p class="clothes_name"><?php echo $item['name'] ?></p>
                            <p class="clothes_price"><strike><?php echo formatPrice($item['price']) ?> VNĐ</strike></p>
                            <!--product normal-->
                            <?php else: ?>
                            <div class=Big_img>
                                <a href="Details_product.php?id=<?php echo $item['id'] ?>"><img src="<?php echo uploads() ?>product/<?php echo $item['thunbar1'] ?> " class="image"/></a>
                                <div class="image2">
                                    <a href="Shoping_cart.php?id=<?php echo $item['id']?>"><img src="<?php echo public_frontend() ?>img/icons8-shopping-cart-100.png" class="icon_image" ></a>
                                </div>
                            </div>
                            <div class="clothes_all">
                                <p class="clothes_name"><?php echo $item['name'] ?></p>
                                <p class="clothes_price"><?php echo formatPrice($item['price']) ?> VNĐ</p>
                            <?php endif?>
                            <a class="clothes_info" href="Details_product.php?id=<?php echo $item['id'] ?>" >Chi tiết</a>
                            </div>
                        </div>    
                        <?php endforeach ?>      
                    </div>
                </div>
            <div class="main_containt_right"> 
            <b class="Danhmuc" >DANH MỤC SẢN PHẨM</b>
                <div class="div_menu_sidebar">
                    <?php foreach($data as $key => $value): ?>
                    <ul class="menu_sidebar">
                        <li><a><?php echo $key ?> </a>
                            <?php foreach($value as $item): ?>
                            <ul>
                                <div >
                                    <li><a class="sidebar_option" href="List_category.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                </div>
                            </ul>
                            <?php endforeach ?>
                        </li>
                    </ul>
                    <?php endforeach ?>
                </div>  
            </div>
        </div>
    </div>  
<?php endif ?>
           
    <script type="text/javascript" src="js/mmenu.js"></script>
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