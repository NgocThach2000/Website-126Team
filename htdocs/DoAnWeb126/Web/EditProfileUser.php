<?php 
//cập nhật thông tin người dùng
    include_once __DIR__. "/autoload/autoload.php";
    $id = intval(getInput('id'));
    //updated user
    $db1 = new Database;
    $Edituser = $db1->fetchID("user", $id);
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
       
        $data1 = 
        [
            "name" 	=> postInput('name'),
            "email"	=> postInput('email'),
            "phone" => postInput('phone'),
            "address" => postInput('address'),
            "gender" => postInput('gender'),
        ];
        $error = [];
        if(postInput('name') == ''){
            $error['name'] = "Mời bạn nhập đầy đủ họ & tên";
        }
        else{
            $postname = postInput('name');
            if(strlen($postname) <= 3)
            {
                $error['name'] = "*Tên không bé hơn 3 ký tự";
            } 
            else if(strlen($postname) >= 30)
            {
                $error['name'] = "*Tên không lớn hơn 30 ký tự";
            }
            if(!preg_match("/^[a-zA-Zà|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|ì|í|ị|ỉ|ĩ|ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|ỳ|ý|ỵ|ỷ|ỹ|đ ]*$/",$postname)){
                $error['name'] = "*Tên chỉ chứ chữ và khoảng trắng!";
            }
        }

        if(postInput('email') == ''){
        	$error['email'] = "Mời bạn nhập email";
        }
        else{
        	if(postInput("email") != $Edituser['email'])
        	{
        		$is_check_mail = $db->fetchOne("user", " email = '" .$data['email']."' ");
	        	if($is_check_mail != NULL){
	        		$error['email'] = "Email đã tồn tại";	
                }
                $postemail = postInput('email');
                if(!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/",$postemail)){
                    $error['email'] = "*Email không hợp lệ!";
                }

        	}
        }

        if(postInput('phone') == ''){
        	$error['phone'] = "Mời bạn nhập số điện thoại";
        }
        else{
        	if(postInput("phone") != $Edituser['phone'])
        	{
	        	$is_check_phone = $db->fetchOne("user", " phone = '" .$data['phone']."' ");
	        	if($is_check_phone != NULL){
	        		$error['phone'] = "Số điện thoại đã tồn tại";
                }
            }
            $postphone = strval(postInput('phone'));
            if(strlen($postphone) > 11)
            {
                $error['phone'] = "*Số điện thoại không hợp lệ";	
            }
            else if(strlen($postphone) < 9)
            {
                $error['phone'] = "*Số điện thoại không hợp lệ";	
            }
            if(!preg_match("/^[0-9]*$/",$postphone)){
                $error['phone'] = "*Số điện thoại chỉ chứa chữ số!";
            }
        }
        
        if(postInput('address') == ''){
        	$error['address'] = "Mời bạn nhập địa chỉ";
        }
        
        if(postInput('password') != NULL && postInput("re_password") != NULL)
        {
        	if(postInput('password') != postInput('re_password'))
        	{
                $error['re_password'] = " Mật khẩu thay đổi không khớp ";
        	}
            else{
                $postpass = strval(postInput('password'));
                if (strlen($postpass) <= 8) {
                    $error['password'] = "Mật khẩu của bạn phải chứa ít nhất 8 ký tự!";
                }
                else if(!preg_match("#[0-9]+#",$postpass)) {
                    $error['password'] = "Mật khẩu của bạn phải chứa ít nhất 1 số!";
                }
                else if(!preg_match("#[A-Z]+#",$postpass)) {
                    $error['password'] = "Mật khẩu của bạn phải chứa ít nhất 1 chữ cái viết hoa!";
                }
                else if(!preg_match("#[a-z]+#",$postpass)) {
                    $error['password'] = "Mật khẩu của bạn phải chứa ít nhất 1 chữ cái viết thường!";
                }
                $data['password'] = postInput("password");
            }
        }
        if(empty($error))
        {
            if(isset($_FILES['avatar']))
            {
            $file_name = $_FILES['avatar']['name'];
            $file_tmp = $_FILES['avatar']['tmp_name'];
            $file_error = $_FILES['avatar']['error'];
                if($file_error == 0)
                {
                    $part = ROOT ."users/";
                    $data1['avatar'] = $file_name;
                }
            }

            $id_update = $db1->update("user", $data1, array('id' => $id ));
            if($id_update > 0){
                move_uploaded_file($file_tmp, $part.$file_name);
                echo'<script>';
                echo "alert('Cập nhật thành công'); location.href='/DoAnWeb126/Web/Login.php' ";
                echo'</script>';
            }
            else{
                echo'<script>';
                echo "alert('Cập nhật thất bại'); location.href='/DoAnWeb126/Web/UserAccount.php?id=$id' ";
                echo'</script>'; 
                }
        }
    }
   
?>
<?php include_once __DIR__."/layouts/header.php" ?>
    <link href="<?php echo public_frontend() ?>css/EditProfileUser.css" rel="stylesheet" /> 
        <title>Trang cá nhân</title> 
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    </head>
<?php include_once __DIR__."/layouts/singleheader.php" ?>
<body> 
    <div class="main_containt clearfix fixwidth" >
        <div class="main_containt_left" >
            <div class="title_info"><b>Thông Tin Cá Nhân</b></div>
            <?php if($Edituser["avatar"] == ""): ?>
                <?php if($Edituser["gender"] == "1"): ?>
                    <div class="img_info"><img class="img_account_1" src="<?php echo public_frontend() ?>img/gender01.jpg"></img></div>
                <?php else: ?>
                    <div class="img_info"><img class="img_account_1" src="<?php echo public_frontend() ?>img/gender02.jpg"></img></div>
                <?php endif ?>
            <?php else: ?>
                <div class="img_info"><img class="img_account_1" src="<?php echo uploads_users(); echo $Edituser["avatar"] ?>"></img></div>
            <?php endif ?>
            <div class="Change">
                <div class="border_infor">
                <div class="p_border1"><img  src="<?php echo public_frontend() ?>img/icons8-important-note-24.png" width="22"></img><a href="UserAccount.php?id=<?php echo $Edituser["id"] ?>"> thông tin cá nhân</a></div>

                <div class="p_border2"><img  src="<?php echo public_frontend() ?>img/icons8-shopping-cart-100.png" width="25"></img><a href="Order.php?id=<?php echo $Edituser["id"] ?>"> Quản lý đơn hàng</a></div>

                <div class="p_border3"><img  src="<?php echo public_frontend() ?>img/icons8-export-26.png" width="19"></img><a href="Logout.php"> Đăng xuất</a></div>
                    
                </div>
            </div>
        </div>
        <div class="main_containt_right clearfix">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4"><p class="p_border_infor2">Họ & Tên</p></label>
                        <input type="text" name="name" class="form-control" id="inputEmail4"  value="<?php echo $Edituser['name'] ?>" >
                        <?php if(isset($error['name'])): ?>
                            <p class="text-danger"> <?php echo $error['name']; ?> </p>
                        <?php endif ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4"><p class="p_border_infor2">Số Điện Thoại</p></label>
                        <input type="text" name="phone" class="form-control" id="inputPassword4"  value="<?php echo $Edituser['phone'] ?>">
                        <?php if(isset($error['phone'])): ?>
                            <p class="text-danger"> <?php echo $error['phone']; ?> </p>
                        <?php endif ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4"><p class="p_border_infor2">Email</p></label>
                        <input type="email" name="email" class="form-control" id="inputEmail4"  value="<?php echo $Edituser['email'] ?>" >
                        <?php if(isset($error['email'])): ?>
                            <p class="text-danger"> <?php echo $error['email']; ?> </p>
                        <?php endif ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4"><p class="p_border_infor2">Địa Chỉ</p></label>
                        <input type="text" name="address" class="form-control" id="inputEmail4"  value="<?php echo $Edituser['address'] ?>" >
                        <?php if(isset($error['address'])): ?>
                            <p class="text-danger"> <?php echo $error['address']; ?> </p>
                        <?php endif ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4"><p class="p_border_infor2">Mật Khẩu</p></label>
                        <input type="password" name="password" class="form-control" id="inputEmail4" >
                        <?php if(isset($error['password'])): ?>
                            <p class="text-danger"> <?php echo $error['password']; ?> </p>
                        <?php endif ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4"><p class="p_border_infor2">Nập Lại Mật Khẩu</p></label>
                        <input type="password" name="re_password" class="form-control" id="inputEmail4" >
                        <?php if(isset($error['re_password'])): ?>
                            <p class="text-danger"> <?php echo $error['re_password']; ?> </p>
                        <?php endif ?>
                    </div>
                    <p class="p_border_infor2" style="margin-left: 1%;">Giới Tính</p>
                    <div class="custom-control custom-radio marginin">
                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="gender" value="1" required <?php if (isset($Edituser["gender"]) && $Edituser["gender"]=="1") echo "checked";?>>
                        <label class="custom-control-label" for="customControlValidation2">Nam</label>
                    </div>
                    <div class="custom-control custom-radio mb-3 marginin">
                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="gender" value="2" required <?php if (isset($Edituser["gender"]) && $Edituser["gender"]=="2") echo "checked";?>>
                        <label class="custom-control-label" for="customControlValidation3">Nữ</label>
                    </div>
                    <div class="custom-file col-md-3 marginavatar">
                        <input type="file" class="custom-file-input" id="customFile" name="avatar">
                        <label class="custom-file-label" for="customFile">Chọn Avatar Mới</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
            </form>
        </div>
    </div>
</body>
<?php include_once __DIR__."/layouts/footer.php" ?>