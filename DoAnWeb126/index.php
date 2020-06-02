<?php 
    require_once "./Web/autoload/autoload.php";
?>
<!DOCTYPE html>
<html>
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="<?php echo public_frontend() ?>slick/slick.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo public_frontend() ?>slick/slick-theme.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo public_frontend() ?>css/Sport.css" rel="stylesheet" />
    <link href="<?php echo public_frontend() ?>css/mmenu.css" rel="stylesheet" />
    <link href="<?php echo public_frontend() ?>css/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>   
    <!--tạo 1 div tổng quát: layout lớn-->
    <div class="page_container">
        <!--div menu header-->
        
        <div class=big_menu_header>
            <div class="menu_header clearfix">
                <ul class="menu_hmain menuheader_left clearfix">
                    <li class="showmenu_mobile"><a href="#my-menu"></a></li>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#"><img src="<?php echo public_frontend() ?>img/iconfinder_nike_27575.png"alt="icon" width="22"/></a> </li>
                </ul>
                <ul class="menu_hmain menuheader_right clearfix">
                    <li class="li_co_cap"><a href="#">Help</a>
                        <ul class="menu_con">
                            <li><a href="#">Order status</a></li>
                            <li><a href="#">Delivery</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </li>
                    <li class="li_co_cap"><a href="#"><img src="<?php echo public_frontend() ?>img/icons8-shopping-cart-50.png" alt="icon" width="22"/></a>
                        <ul class="menu_con">
                            <li><a href="#">Số lượng:0</a></li>                            
                        </ul>
                    </li>                    
                </ul>
            </div>
            
            <div class="menu_header2 clearfix"> <!-- div con dùng float thì thêm class clearfix ở div cha -->            
                <a href="#" id="logo"><img src="<?php echo public_frontend() ?>img/iconfinder_nike_27575.png" alt="icon" width="50"></a>
                <div id="menu_contain">
                    <ul class="menu_hmain menuheader_mid clearfix">
                        <li class="li_co_cap"><a href="#" id="Ao">Áo</a>
                            <ul class="menu_con">
                                <li><a href="#">Áo Nike</a></li>
                                <li><a href="#">Áo Adidas</a></li>
                                <li><a href="#">Áo Thái</a></li>
                                <li><a href="#">Áo bóng đá</a></li>
                            </ul>
                        </li>
                        <li class="li_co_cap"><a href="#">Quần</a>
                            <ul class="menu_con">
                                <li><a href="#">Quần Nike</a></li>
                                <li><a href="#">Quần Adidas</a></li>
                                <li><a href="#">Quần Thái</a></li>
                                <li><a href="#">Quần bóng đá</a></li>
                            </ul>
                        </li>
                        <li class="li_co_cap"><a href="#"><b>Giày</b></a>
                            <ul class="menu_con">
                                <li><a href="#">Giày thể thao</a></li>
                                <li><a href="#">Giày bóng đá</a></li>
                            </ul>
                        </li>
                        <li class="li_co_cap"><a href="#">Dụng cụ hỗ trợ</a>
                            <ul class="menu_con">
                                <li><a href="#">Túi thể thao</a></li>
                                <li><a href="#">Băng tay</a></li>
                                <li><a href="#">Băng gối</a></li>
                                <li><a href="#">Băng chân</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><b>Sale</b></a></li>
                    </ul>
                </div>
                <form method="" action="" class="form_search">                
                    <input type="text" id="fname" name="fname"  placeholder="Search"><br>
                </form>
            </div>
        </div>      
        <!---BOX INTRO-->      
            <div class="boxintro_main">
                <div class="auto_intro">
                    <div class="boxintro_item">
                        QUẦN ÁO THỂ THAO NAM CAO CẤP CHÍNH HÃNG
                    </div>
                    <div class="boxintro_item">
                        QUẦN ÁO THỂ THAO NAM CAO CẤP CHÍNH HÃNG

                    </div>
                </div>
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
                    <a href="#"> <img class="img_con_1" src="<?php echo public_frontend() ?>img/dri-fit-elite-mens-basketball-shorts-8p91Nb.jpg" alt="main" width="700" ></a>
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

                <div class="main_content6">
                    <h3 class="content_4">
                        <b>SALE</b>
                    </h3>
                    <a href="#"> 
                        <img class="img_con_6" src="<?php echo public_frontend() ?>img/dri-fit-older-basketball-shorts-gzR0ZG.jpg"  width="400">                        
                    </a>
                    <button class="button">Shop</button>
                </div>
            </div>
        </div>


    </div>

        <div class="footer">  <!-- Footer1-->
            <div class="fixwidth clearfix">
                <div class="content_footer">
                    <div class="content_foot">
                        <b>VỀ SPORTER.VN</b>
                    </div>
                    <p>Hệ thống bán lẻ đồ thể thao Sporter là đơn vị chuyên sản xuất và phân phối các sản phẩm thể thao chuyên nghiệp. Tại đây bạn có thể dễ dàng mua Quần áo và dụng cụ thể thao chất lượng cao, chính hãng... </p>
                    <p><a class="Hotline">HOTLINE:19001000</a></p>
                    <div class="img_icon">
                        <a href="#"> <img class="icon1" src="<?php echo public_frontend() ?>img/icons8-facebook-100.png"></a>
                        <a href="#"> <img class="icon2" src="<?php echo public_frontend() ?>img/icons8-instagram-50.png"></a>
                        <a href="#"> <img class="icon3" src="<?php echo public_frontend() ?>img/icons8-twitter-48.png"></a>
                
                    </div>
                </div>    <!-- -->
            
                <div class="content_footer2">  <!-- Footer2 -->
                    <div class="content_foot2">
                        <b>ĐĂNG KÝ NHẬN KHUYẾN MÃI</b>
                    </div>
                    <p>Hãy nhập email của bạn để chúng tôi gửi email ngay khi có thông tin về những chương trình khuyến mãi mới.</p>
                    <form method="" action="" class="form_search2">                
                        <input type="text" id="fname" name="fname"  placeholder="Nhập email của bạn"><br>
                        <button class="button5">Đăng ký</button>
                    </form>
                </div>   

                <div class="footer_right">
                    <div class="boxfooter_fanpage">
                        <div class="chat_facebook">
                            <div class="fb-page fb_iframe_widget" data-href=" https://www.facebook.com/BeoBeoRestaurant/" data-tabs="timeline" data-width="500" data-height="230" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=423&amp;height=230&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBeoBeoRestaurant%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width=500"><span style="vertical-align: bottom; width: 423px; height: 230px;"><iframe name="f2ba25d82703e8c" width="500px" height="230px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.10/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df3456ddd5625608%26domain%3Dbeoquan.vn%26origin%3Dhttp%253A%252F%252Fbeoquan.vn%252Ff1ecc8a51423df8%26relation%3Dparent.parent&amp;container_width=423&amp;height=230&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBeoBeoRestaurant%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width=500" style="border: none; visibility: visible; width: 423px; height: 230px;" class=""></iframe></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer2">
            <div class="content_footer3 ">
                <ul class="content_foot3 clearfix">
                    <li><a href="#"> <img class="icon4" src="<?php echo public_frontend() ?>img/icons8-location-48.png"  width="18" > </a></li>
                    <li>VietNam</li>
                    <li class="copyright">©2020 Nike, Inc. All Rights Reserved</li>
                </ul> 
            </div>              
        </div>   <!-- -->
    </div>    

    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
            <a href="tel:0987654321" class="pps-btn-img">
                <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
            </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:0987654321">
                <span class="text-hotline">1900.1000</span>
            </a>
        </div>
    </div>
    <div class="mappage">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501707.73905572796!2d106.40345095850728!3d10.765916392492459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eefdb25d923%3A0x4bcf54ddca2b7214!2sHo%20Chi%20Minh%20City%2C%20Vietnam!5e0!3m2!1sen!2s!4v1588424894071!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div> 
    
    <div class="loadmenu">
        <nav id="my-menu">
            <ul id="">
                <li class=""><a href="#" id="Ao">Áo</a>
                    <ul class="">
                        <li><a href="#">Áo Nike</a></li>
                        <li><a href="#">Áo Adidas</a></li>
                        <li><a href="#">Áo Thái</a></li>
                        <li><a href="#">Áo bóng đá</a></li>
                    </ul>
                </li>
                <li class=""><a href="#">Quần</a>
                    <ul class="">
                        <li><a href="#">Quần Nike</a></li>
                        <li><a href="#">Quần Adidas</a></li>
                        <li><a href="#">Quần Thái</a></li>
                        <li><a href="#">Quần bóng đá</a></li>
                    </ul>
                </li>
                <li class=""><a href="#"><b>Giày</b></a>
                    <ul class="">
                        <li><a href="#">Giày thể thao</a></li>
                        <li><a href="#">Giày bóng đá</a></li>
                    </ul>
                </li>
                <li class=""><a href="#">Dụng cụ hỗ trợ</a>
                    <ul class="">
                        <li><a href="#">Túi thể thao</a></li>
                        <li><a href="#">Băng tay</a></li>
                        <li><a href="#">Băng gối</a></li>
                        <li><a href="#">Băng chân</a></li>
                    </ul>
                </li>
                <li><a href="#"><b>Sale</b></a></li>
            </ul>
        </nav>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                var top =  $(window).scrollTop();
                var height_menu = $('.big_menu_header').height();
                if(top > height_menu){
                    $('.big_menu_header').addClass('fixed_menu');
                }else{
                    $('.big_menu_header').removeClass('fixed_menu');
                }
                //console.log(height_menu);
            });
        });
    </script>
    

    <script type="text/javascript" src="<?php echo public_frontend() ?>slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.auto_intro').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            speed:1000,
            });                
        });
    </script>   

    <script type="text/javascript" src="<?php echo public_frontend() ?>js/mmenu.js"></script>
    <script>
        $(document).ready(function() {
           $("#my-menu").mmenu();
        });
    </script>
</body>
</html>