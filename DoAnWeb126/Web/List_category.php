<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
    $id = intval(getInput('id'));
    $EditCategory = $db->fetchID("category", $id);
    
    if(isset($_GET['page']))
    {
        $pag = $_GET['page'];
    }
    else{
        $pag = 1;
    }
    $sql = "SELECT * FROM product WHERE category_id = $id";
    $total = count($db->fetchsql($sql));

    $product = $db->fetchJones("product",$sql, $total, $pag, 9, true);
    $sotrang = $product['page'];
    unset($product['page']);
    $path = $_SERVER['SCRIPT_NAME'];
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
                            <a><img src="<?php echo uploads() ?>product/<?php echo $item['thunbar1'] ?>"/></a>
                            <div class="clothes_all">
                            <p class="clothes_name"><?php echo $item['name'] ?></p>
                            <p class="clothes_price"><?php echo formatPrice($item['price']) ?> VNĐ</p>
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
                <div class="Danhmuc"><b>DANH MỤC SẢN PHẨM</b></div>
                <div>
                    <ul class="menu_sidebar">
                        <?php foreach($category_ao as $item): ?> 
                        <li><a href="List_category.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?><i class="fas fa-sort-down"></i></a>
                            <ul>
                                <div >
                                    <li><a class="sidebar_option" href="#">Mới</a></li>
                                    <li><a class="sidebar_option" href="#">Cũ</a></li>
                                </div>
                            </ul>
                        </li>
                        <?php endforeach ?>
                    </ul>      
                </div>
                <div class="Item_different"><b>SẢN PHẨM KHÁC</b>
                    <div class="Item_trousers clearfix">
                        <a class="icon" href="#"><img src="<?php echo public_frontend() ?>img/bannerAo.jpg" alt="icon" width="70"/>
                            <div class="Item_content"><a href="List_category.php?id=17">ÁO </a></div>
                    </div>
                    <div class="Item_trousers clearfix">
                        <a class="icon" href="#"><img src="<?php echo public_frontend() ?>img/1095278_L.jpg" alt="icon" width="70"/>
                            <div class="Item_content"><a href="List_category.php?id=21">QUẦN </a></div>
                    </div>

                    <div class="Item_trousers clearfix">
                        <a class="icon" href="#"><img src="<?php echo public_frontend() ?>img/1978458_L.jpg" alt="icon" width="70"/>
                            <div class="Item_content"><a href="List_category.php?id=25">GIÀY </a></div>
                    </div>

                    <div class="Item_trousers clearfix">
                        <a class="icon" href="#"><img src="<?php echo public_frontend() ?>img/885885_L.jpg" alt="icon" width="70"/>
                            <div class="Item_content"><a href="List_category.php?id=28">DỤNG CỤ </a></div>
                    </div>
                </div>
                                
            </div>
        </div>
            
                

    </div>


<?php include_once __DIR__. "/layouts/footer.php" ?>