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