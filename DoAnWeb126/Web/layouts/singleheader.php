
<body>   
    <!--tạo 1 div tổng quát: layout lớn-->
    <div class="page_container">
        <!--div menu header-->
        
        <div class=big_menu_header>
            <div class="menu_header clearfix">
                <ul class="menu_hmain menuheader_left clearfix">
                <li id="toggle" >
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                      </a>                            
                    </li>
                    <li class="homeres"><a class="Trangchu" href="Home.php">Trang chủ</a></li>
                    <li><a class="iconTrangchu" href="Home.php"><img src="<?php echo public_frontend() ?>img/iconfinder_nike_27575.png"alt="icon" width="22"/></a> </li>
                </ul>
                <!--Sổ mục tài khoản, giỏ hàng-->
                <ul class="menu_hmain menuheader_right clearfix">
                    <?php if(isset($_SESSION['user_id'])): ?> 
                        <li class="li_co_cap dropdown">
                            <?php if($_SESSION['user_avatar'] != "") : ?>
                                <a href="#"><img src="<?php echo uploads_users() ?><?php echo $_SESSION['user_avatar'] ?>" alt="icon" width="24" height="24"/> <?php echo getLastName($_SESSION['user_name']); ?></a>
                            <?php else: ?>
                                <a href="#"><img src="<?php echo public_frontend() ?>img/iconuser.png" alt="icon" width="22" height="22"/> <?php echo getLastName($_SESSION['user_name']); ?></a>
                            <?php endif; ?>
                            <ul class="dropdown-content">
                                <li><a href="UserAccount.php?id=<?php echo $_SESSION['user_id'] ?>">Tài khoản của tôi</a></li>
                                <li><a href="">Đơn hàng của tôi</a></li>
                                <li><a href="Logout.php">Đăng Xuất</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                    <li class="li_co_cap"><a class="login" href="Login.php">
                        <img src="<?php echo public_frontend() ?>img/icons8-user-male-64.png" alt="icon" width="22" height="22"/> Đăng nhập</a>
                    </li>
                    <li class="li_co_cap"><a class="login2" href="Register.php">
                        <img src="<?php echo public_frontend() ?>img/icons8-add-user-male-64.png" alt="icon" width="22" height="22"/> Đăng ký</a>
                    </li>
                    <?php endif; ?>
                    <li class="li_co_cap"><a href="Shoping_cart1.php"><img class="img_cart" src="<?php echo public_frontend() ?>img/icons8-shopping-cart-100.png" alt="icon" width="40" height="40" /></a>
                        <ul class="menu_con">
                            <li><a href="Shoping_cart1.php">Số lượng:0</a></li>                            
                        </ul>
                    </li>
                </ul>
                <!--end sổ mục-->
            </div>
            <div id="div_menu_sidebar">
                    <ul class="menu_sidebar">
                    <?php foreach($data as $key => $value): ?>
                        <li class=""><a href="<?php $key['id'] ?>"><?php echo $key ?></a>
                        <?php foreach($value as $item): ?>
                            <ul class="ul_sidabar">
                                <div>
                                    <li class="li_sidabar"><a id="<?php echo $item['category_parent_id'] ?>" href="List_category.php?id=<?php echo $item['id'] ?>"><?php echo $item['name']?></a></li>
                                </div>
                            </ul>
                            <?php endforeach ?>
                        </li>
                        <?php endforeach ?>
                        <?php if(isset($_SESSION['user_id'])): ?>
                        <li><a href="UserAccount.php?id=<?php echo $_SESSION['user_id'] ?>">Tài khoản của tôi</a></li>
                        <li><a href="">Đơn hàng của tôi</a></li>
                        <li><a href="Logout.php">Đăng Xuất</a></li>
                        <?php else: ?>
                        <li><a href="Login.php">Đăng nhập</a></li>
                        <li><a href="Register.php">Đăng ký</a></li>
                        <li><a href="Shoping_cart1.php">Giỏ hàng</a></li> 
                        <?php endif; ?> 
                    </ul>  
            </div>
            <div class="menu_header2 clearfix"> <!-- div con dùng float thì thêm class clearfix ở div cha -->            
                <a href="Home.php" id="logo"><img src="<?php echo public_frontend() ?>img/iconfinder_nike_27575.png" alt="icon" width="50"></a>
                <div id="menu_contain">
                    <ul class="menu_hmain menuheader_mid clearfix">
                        <!--Sổ danh mục sản phẩm-->
                        <?php $stt = 0; foreach($data as $key => $value): ?>
                        <li class="li_co_cap"><a href="#"><?php echo $key ?></a>
                            <ul class="menu_con">
                                <?php foreach($value as $item): ?>
                                <li><a href="List_category.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                        <?php endforeach ?>
                         <!--end Sổ danh mục sản phẩm-->
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
                    GIÀY THỂ THAO CAO CẤP CHÍNH HÃNG
                </div>
                <div class="boxintro_item">
                    DỤNG CỤ HỖ TRỢ CAO CẤP CHÍNH HÃNG
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
            autoplaySpeed: 500,
            speed:2500,
            fade:true,
            });            
        });
    </script>   

<script>   
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

    


<script>
    $(document).ready(function(){
        $("#toggle").click(function(){
            $("#div_menu_sidebar").toggle(500);
        })
    })
</script>
</body>
</html>