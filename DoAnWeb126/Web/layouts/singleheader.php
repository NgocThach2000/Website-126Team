
<body>   
    <!--tạo 1 div tổng quát: layout lớn-->
    <div class="page_container">
        <!--div menu header-->
        
        <div class=big_menu_header>
            <div class="menu_header clearfix">
                <ul class="menu_hmain menuheader_left clearfix">
                    <li class="showmenu_mobile"><a href="#my-menu"></a></li>
                    <li class="homeres"><a class="Trangchu" href="Home.php">Trang chủ</a></li>
                    <li><a class="iconTrangchu" href="Home.php"><img src="<?php echo public_frontend() ?>img/iconfinder_nike_27575.png"alt="icon" width="22"/></a> </li>
                </ul>
                <ul class="menu_hmain menuheader_right clearfix">
                    
                    <li class="li_co_cap"><a href="Shoping_cart.php"><img src="<?php echo public_frontend() ?>img/icons8-shopping-cart-50.png" alt="icon" width="22"/></a>
                        <ul class="menu_con">
                            <li><a href="Shoping_cart.php">Số lượng:0</a></li>                            
                        </ul>
                    </li>    
                    <li class="li_co_cap"><a class="login"  href="Login.php">Đăng nhập / Đăng ký</a>
                    </li>                
                </ul>
            </div>
            
            <div class="menu_header2 clearfix"> <!-- div con dùng float thì thêm class clearfix ở div cha -->            
                <a href="Home.php" id="logo"><img src="<?php echo public_frontend() ?>img/iconfinder_nike_27575.png" alt="icon" width="50"></a>
                <div id="menu_contain">
                    <ul class="menu_hmain menuheader_mid clearfix">
                        <li class="li_co_cap"><a href="#" id="Ao">Áo</a>
                            <ul class="menu_con">
                                <?php foreach($category_ao as $item): ?>
                                <li><a href="List_category.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="li_co_cap"><a href="#">Quần</a>
                            <ul class="menu_con">
                                <?php foreach($category_quan as $item): ?>
                                <li><a href="List_category.php?id=<?php  echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="li_co_cap"><a href="#">Giày</a>
                            <ul class="menu_con">
                                <?php foreach($category_giay as $item): ?>
                                <li><a href="List_category.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="li_co_cap"><a href="#">Dụng cụ hỗ trợ</a>
                            <ul class="menu_con">
                                <?php foreach($category_dungcuhotro as $item): ?>
                                <li><a href="List_category.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        
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

    <!---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                var top =  $(window).scrollTop();
                var height_menu = $('.big_menu_header').height();       //menu chuyen xuong
                if(top > height_menu){
                    $('.big_menu_header').addClass('fixed_menu');
                }else{
                    $('.big_menu_header').removeClass('fixed_menu');
                }
            });
        });
    </script>
    

    <script type="text/javascript" src="<?php echo public_frontend() ?>slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){  //dong chay
            $('.auto_intro').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            speed:1000,
            });    
            $('#slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            speed:2500,
            fade:true,
            });            
        });
    </script>   

    <script type="text/javascript" src="<?php echo public_frontend() ?>js/mmenu.js"></script>
    <script>
        $(document).ready(function() {
           $("#my-menu").mmenu();  //menu dien thoai
        });
    </script>
</body>
</html>