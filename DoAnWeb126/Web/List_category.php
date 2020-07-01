<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
    
    $id = intval(getInput('id'));
    $EditCategory = $db->fetchID("category", $id);
    //gán page
    if(isset($_GET['page']))
    {
        $pag = $_GET['page'];
    }
    else{
        $pag = 1;
    }
    $sql = "SELECT * FROM product WHERE category_id = $id";
    $total = count($db->fetchsql($sql));
    //tổng số sản phẩm hiển thị = 9
    $product = $db->fetchJones("product",$sql, $total, $pag, 9, true);
    $sotrang = $product['page'];
    unset($product['page']);
    $path = $_SERVER['SCRIPT_NAME'];
    // sổ list có cùng category_parent;


    
?>
<?php include_once __DIR__. "/layouts/header.php" ?>
    <link href="<?php echo public_frontend() ?>css/List_category.css" rel="stylesheet" />  
    
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <title>Áo Nike</title>
</head>
<?php include_once __DIR__. "/layouts/singleheader.php" ?> 

            <div class="page_container2"> 
                <div class="fixwidth Link" >
                    <b><a href="Home.php">TRANG CHỦ</a></b>
                    <b><a>/</a></b>
                    <b><a href=""><?php echo mb_strtoupper($EditCategory['name'], 'UTF-8') ?> </a></b>
                </div>
            <div class="main_containt clearfix fixwidth" >
                <div class="main_containt_left" >
                    <div class="Clothes_list">
                        <?php foreach($product as $item): ?>
                        <div class="Clothes_item">
                            <div class=Big_img>
                                <a href="Details_product.php?id=<?php echo $item['id'] ?>"><img src="<?php echo uploads() ?>product/<?php echo $item['thunbar1'] ?> " class="image"/></a>
                                <span>SALE 50%</span>
                                <div class="image2">
                                    <a href="Shoping_cart.php?id=<?php echo $item['id']?>"><img src="<?php echo public_frontend() ?>img/icons8-shopping-cart-100.png" class="icon_image" ></a>
                                </div>
                            </div>
                            <div class="clothes_all">
                            <p class="clothes_name"><?php echo $item['name'] ?></p>
                            <?php if($item['sale'] == 0) : ?>
                            <p class="clothes_price"><?php echo formatPrice($item['price']) ?> VNĐ</p>
                            <?php else: ?>
                            <p class="clothes_price"><strike><?php echo formatPrice($item['price']) ?> VNĐ</strike></p>
                            <?php endif?>
                            <a class="clothes_info" href="Details_product.php?id=<?php echo $item['id'] ?>" >Chi tiết</a>
                            </div>
                        </div>    
                        <?php endforeach ?>      
                    </div>
                    <!--Phân trang-->
                    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
                    <nav aria-label="Page navigation pagination-lg ">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="<?php echo $path ?>?id=<?php echo $id ?>&&page=<?php if($pag > 1){ echo ($pag-1); } else{ echo $pag;} ?>" tabindex="-1" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php for($i = 1; $i <= $sotrang; $i++) : ?>
                            <li class="page-item <?php echo ($i == $pag) ? 'active' : '' ?>">
                                <a class="page-link" href="<?php echo $path ?>?id=<?php echo $id ?>&&page=<?php echo $i ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <li class="page-item">
                                <a class="page-link" href="<?php echo $path ?>?id=<?php echo $id ?>&&page=<?php if($pag < $sotrang){ echo ($pag+1); } else{ echo $pag;} ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>    
                </div>
            </div>  
            <div class="main_containt_right"> 
            <b class="Danhmuc" >DANH MỤC SẢN PHẨM</b>
                        <div class="div_menu_sidebar">
                            <ul class="menu_sidebar">
                                <li><a>Áo Nike </a>
                                    <ul>
                                        <div >
                                            <li><a class="sidebar_option" href="#">Mới</a></li>
                                            <li><a class="sidebar_option" href="#">Cũ</a></li>
                                            <li><a class="sidebar_option" href="#">Bán chạy</a></li>
                                        </div>
                                    </ul>
                                </li>
                                <li><a>Áo Adidas </a>
                                    <ul>
                                        <div >
                                            <li><a class="sidebar_option" href="#">Mới</a></li>
                                            <li><a class="sidebar_option" href="#">Cũ</a></li>
                                            <li><a class="sidebar_option" href="#">Bán chạy</a></li>
                                        </div>
                                    </ul>
                                </li>
                                <li><a>Áo Thái </a>
                                    <ul>
                                        <div >
                                            <li><a class="sidebar_option" href="#">Mới</a></li>
                                            <li><a class="sidebar_option" href="#">Cũ</a></li>
                                            <li><a class="sidebar_option" href="#">Bán chạy</a></li>
                                        </div>
                                    </ul>
                                </li>
                                <li><a>Áo Bóng Đá </a>
                                    <ul>
                                        <div >
                                            <li><a class="sidebar_option" href="#">Mới</a></li>
                                            <li><a class="sidebar_option" href="#">Cũ</a></li>
                                            <li><a class="sidebar_option" href="#">Bán chạy</a></li>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                            
                          
                        </div>
                <!-- <div>
                    <ul class="menu_sidebar">
                    </ul>      
                </div> -->
                
                <div class="Item_different"><b>SẢN PHẨM KHÁC</b>
                    <div class="Item_trousers clearfix">
                        <a class="icon" href="List_category.php?id=17"><img src="<?php echo public_frontend() ?>img/bannerAo.jpg" alt="icon" width="70"/>
                            <div class="Item_content"><a href="List_category.php?id=17">ÁO </a></div>
                    </div>
                    <div class="Item_trousers clearfix">
                        <a class="icon" href="List_category.php?id=21"><img src="<?php echo public_frontend() ?>img/1095278_L.jpg" alt="icon" width="70"/>
                            <div class="Item_content"><a href="List_category.php?id=21">QUẦN </a></div>
                    </div>

                    <div class="Item_trousers clearfix">
                        <a class="icon" href="List_category.php?id=25"><img src="<?php echo public_frontend() ?>img/1978458_L.jpg" alt="icon" width="70"/>
                            <div class="Item_content"><a href="List_category.php?id=25">GIÀY </a></div>
                    </div>

                    <div class="Item_trousers clearfix">
                        <a class="icon" href="List_category.php?id=28"><img src="<?php echo public_frontend() ?>img/885885_L.jpg" alt="icon" width="70"/>
                            <div class="Item_content"><a href="List_category.php?id=28">DỤNG CỤ </a></div>
                    </div>
                </div>
                                
            </div>
        </div>

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
            
                

    </div>


<?php include_once __DIR__. "/layouts/footer.php" ?>