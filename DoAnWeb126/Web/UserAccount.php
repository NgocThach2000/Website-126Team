<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
?>
<?php include_once __DIR__."/layouts/header.php" ?>

    <link href="<?php echo public_frontend() ?>css/UserAccount.css" rel="stylesheet" /> 
        <title>Trang cá nhân</title> 
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    </head>
<?php include_once __DIR__."/layouts/singleheader.php" ?>
<body> 

<div class="main_containt clearfix fixwidth" >
                <div class="main_containt_left" >
                    <div class="title_info"><b>Thông tin Thành Viên</b></div>
                    <div class="img_info"><img class="img_account_1" src="<?php echo public_frontend() ?>img/forgot00.jpg"></img></div>
                    <div class="Change">
                        <div class="border_infor">
                        <div class="p_border1"><img  src="<?php echo public_frontend() ?>img/icons8-important-note-24.png" width="22"></img><a href="#">Cập nhật thông tin cá nhân</a></div>

                        <div class="p_border2"><img  src="<?php echo public_frontend() ?>img/icons8-shopping-cart-100.png" width="25"></img><a href="#">Quản lý đơn hàng</a></div>

                        <div class="p_border3"><img  src="<?php echo public_frontend() ?>img/icons8-export-26.png" width="19"></img><a href="#">Đăng xuất</a></div>
                            
                        </div>
                    </div>
                </div>
                <div class="main_containt_right clearfix">
                    <div class="right_1"> 
                        <p class="p_border_infor2">Họ và tên:</p>
                        <p class="p_border_infor2">Giới tính:</p>
                        <p class="p_border_infor2">Số điện thoại:</p>
                        <p class="p_border_infor2">Email:</p>
                        <p class="p_border_infor2">Địa chỉ:</p>
                    </div>
                    <div class="right_2"> 
                        <p class="p_border_infor2">Nguyễn Nhật Trường</p>
                        <p class="p_border_infor2">Nam</p>
                        <p class="p_border_infor2">0336873310</p>
                        <p class="p_border_infor2">nhattruongtp2000@gmail.com</p>
                        <p class="p_border_infor2">149/12 Trịnh Định Trọng Phú Trung Tân Phú</p>
                    </div>
                </div>
</div>





</div>


</body>
<!--Main content-->

<?php include_once __DIR__."/layouts/footer.php" ?>