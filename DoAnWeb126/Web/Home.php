<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
    $banner_ = $db->fetchAll("banner_slide_show");
    $sql = "SELECT * FROM product WHERE product.category_id BETWEEN 25 AND 33";
    $product = $db->fetchsql($sql);
?>
<?php include_once __DIR__."/layouts/header.php" ?>
    <link href="<?php echo public_frontend() ?>css/Home.css" rel="stylesheet" /> 
        <title>Trang chủ</title> 
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    </head>
<?php include_once __DIR__."/layouts/singleheader.php" ?>

         <!--SLIDER-->
         <div id="slider">
             <?php foreach($banner_ as $item): ?>
            <a><img src="<?php echo uploads() ?>banner_slide_shows/<?php echo $item['thunbar'] ?>" alt="<?php echo $item['name'] ?>" height="890"/></a>
            <?php endforeach ?>
        </div>
        <div class="main_page">
            <div class="main_content fixwidth" >
                <h1 class="Shirt">
                    <b>ÁO THỂ THAO</b>
                </h1>
                <div id="cf">
                    <a href="#"> <img class="img_con" src="<?php echo public_frontend() ?>images/32x32/ecopetit.cat-ronaldo-4k-wallpaper-2314365.png" alt="main"></a> 
                </div>
                <button class="button">Shop</button>  
            </div>
            <div class="main_content2 fixwidth clearfix">
                <h2 class="Shirt">
                    <b>QUẦN THỂ THAO</b>
                </h2>            
                <div class="img_main_2"> 
                    <a href="#"> <img class="img_con_1" src="<?php echo public_frontend() ?>/img/dri-fit-elite-mens-basketball-shorts-8p91Nb.jpg" alt="main" width="700" ></a>
                    <button class="button">Shop</button>  
                </div>
                <div class="img_main_3">
                    <a href="#"> <img class="img_con_2" src="<?php echo public_frontend() ?>img/gyakusou-knit-trousers-qZqZwK.jpg" alt="main" width="700" ></a>
                    <button class="button">Shop</button>
                </div>            
            </div>

            <div class="main_content3 fixwidth">
                <h2 class="Shirt">
                    <b>QUẦN ÁO BÓNG ĐÁ</b>
                </h2>         
                <a href="#"> <img class="img_con_3" src="<?php echo public_frontend() ?>img/file_52498fc5199bf6961575655.jpg" alt="main" ></a>           
                <button class="button">Shop</button>                
            </div>
        <div class="SDS clearfix">
            <div class="fixwidth main_content_grid">
                <div class="main_content4">
                    <h3 class="content_4">
                        <b>DỤNG CỤ HỖ TRỢ</b>
                    </h3>            
                    <a href="#"> 
                        <img class="img_con_4"  src="<?php echo public_frontend() ?>img/Quấn-Bảo-Vệ-Khuỷu-Tay-Aolikes-1-Cặp.jpg"  width="400">                                            
                    </a>
                    <button class="button">Shop</button>   
                </div>

                <div class="main_content5">
                    <h3 class="content_4">
                        <b>GIÀY</b>
                    </h3>
                    <a href="#"> 
                        <img class="img_con_5" src="<?php echo public_frontend() ?>img/superrep-go-training-shoe-SMnpt6.jpg"  width="400">                        
                    </a>
                    <button class="button">Shop</button>
                </div>            
            </div>
        </div>

        <div class="khoi-slide ">          
            <div class="cac-slide">
                <?php foreach($product as $item): ?>                
                <div class="slide"><img src="<?php echo uploads() ?>product/<?php echo $item['thunbar1'] ?>" width="300" ></div>
                <?php endforeach ?>
            </div>
        </div>

        <script>
        $(document).ready(function(){  //dong chay
            $('.cac-slide').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplay: false,
            autoplaySpeed: 1000,
            speed:2000,
            arrows:true,
            });    
                      
        });
        </script>
</div>

<?php include_once __DIR__."/layouts/footer.php" ?>