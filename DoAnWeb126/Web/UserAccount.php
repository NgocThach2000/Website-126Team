<?php 
    include_once __DIR__. "/autoload/autoload.php";
    $id = intval(getInput('id'));
    $user = $db->fetchID("user", $id);
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
                    <div class="title_info"><b>Thông tin người dùng</b></div>
                    <?php if($user["avatar"] == ""): ?>
                        <?php if($user["gender"] == "1"): ?>
                            <div class="img_info"><img class="img_account_1" src="<?php echo public_frontend() ?>img/gender01.jpg"></img></div>
                        <?php else: ?>
                            <div class="img_info"><img class="img_account_1" src="<?php echo public_frontend() ?>img/gender02.jpg"></img></div>
                        <?php endif ?>
                    <?php else: ?>
                        <div class="img_info"><img class="img_account_1" src="<?php echo uploads_users(); echo $user["avatar"] ?>"></img></div>
                    <?php endif ?>
                    <div class="Change">
                        <div class="border_infor">
                        <div class="p_border1"><img  src="<?php echo public_frontend() ?>img/icons8-important-note-24.png" width="22"></img><a href="#"> Cập nhật thông tin cá nhân</a></div>

                        <div class="p_border2"><img  src="<?php echo public_frontend() ?>img/icons8-shopping-cart-100.png" width="25"></img><a href="#"> Quản lý đơn hàng</a></div>

                        <div class="p_border3"><img  src="<?php echo public_frontend() ?>img/icons8-export-26.png" width="19"></img><a href="Logout.php"> Đăng xuất</a></div>
                            
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
                        <p class="p_border_infor2"><?php echo $user["name"] ?></p>
                        <p class="p_border_infor2"><?php echo check_gender($user["gender"]) ?></p>
                        <p class="p_border_infor2"><?php echo $user["phone"] ?></p>
                        <p class="p_border_infor2"><?php echo $user["email"] ?></p>
                        <p class="p_border_infor2"><?php echo $user["address"] ?></p>
                    </div>
                </div>
</div>





</div>


</body>
<!--Main content-->

<?php include_once __DIR__."/layouts/footer.php" ?>