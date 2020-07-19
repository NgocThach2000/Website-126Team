<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
    $data = 
    [
        "name" 	=> postInput('name'),
        "email"	=> postInput('email'),
        "phone" => postInput('phone'),
    	"password" => postInput('password'),
        "address" => postInput('address'),
        "avatar" => postInput('avatar'),
        "gender" => postInput('gender')
    ];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $error = [];
        if(postInput('name') == ''){
            $error['name'] = "*Vui lòng nhập đầy đủ họ & tên";
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
        if(postInput('gender') == ''){
            $error['gender'] = "*Vui lòng chọn giới tính";
        }
        if(postInput('email') == ''){
        	$error['email'] = "*Vui lòng nhập email";
        }
        else{
        	$is_check_mail = $db->fetchOne("user", " email = '" .$data['email']."' ");
        	if($is_check_mail != NULL){
        		$error['email'] = "*Email đã tồn tại";	
            }
            $postemail = postInput('email');
            
            if(!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/",$postemail)){
                $error['email'] = "*Email không hợp lệ!";
            }
        }
        if(postInput('phone') == ''){
        	$error['phone'] = "*Vui lòng nhập số điện thoại";
        }
        else{
            $postphone = strval(postInput('phone'));
        	$is_check_phone = $db->fetchOne("user", " phone = '" .$data['phone']."' ");
        	if($is_check_phone != NULL){
        		$error['phone'] = "*Số điện thoại đã tồn tại";
            }
            //kiem tra so viet nam
            if(strlen($postphone) > 11)
            {
                $error['phone'] = "*Số điện thoại không hợp lệ";	
            }
            else if(strlen($postphone) < 9)
            {
                $error['phone'] = "*Số điện thoại không hợp lệ";	
            }
        }
        if(postInput('password') == ''){
            $error['password'] = "*Vui lòng nhập mật khẩu";
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
        }
        if(postInput('address') == ''){
        	$error['address'] = "*Vui lòng nhập địa chỉ";
        }
        if($data['password'] != postInput("re_password")){
        	$error['re_password'] = "*Mật khẩu không khớp ";
        }
        //error empty is error
        if(empty($error))
        {
            if(isset($_FILES['avatar']))
           	{
           	$file_name = $_FILES['avatar']['name'];
           	$file_tmp = $_FILES['avatar']['tmp_name'];
           	$file_type = $_FILES['avatar']['type'];
           	$file_error = $_FILES['avatar']['error'];
	           	if($file_error == 0)
	           	{
	           		$part = ROOT ."users/";
	           		$data['avatar'] = $file_name;
	           	}
           	}
        	$id_insert = $db->insert("user", $data);
           	if(isset($id_insert)){
                move_uploaded_file($file_tmp, $part.$file_name);
                //header("location: Login.php");
                echo'<script>';
                echo "alert('Tạo tài khoản thành công !'); location.href='Login.php' ";
                echo'</script>';
        }
           	else{
                echo'<script>';
                echo "alert('Tạo tài khoảng thất bại !');";
                echo'</script>';
           	}
        }
        
    }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?php echo public_frontend() ?>css/Login.css" rel="stylesheet" />

<!------ Include the above in your HEAD tag ---------->

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" enctype="multipart/form-data" method="POST">
					<span class="login100-form-title">
					  Create your Account
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid name is required: Hoàng Anh">
						<input class="input100" type="text" name="name" placeholder="Full Name" value="<?php echo $data['name'] ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <?php if(isset($error['name'])): ?>
                        <p style="margin-left: 10%;" class="text-danger"> <?php echo $error['name']; ?> </p>
                    <?php endif ?>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid phone is required: 0237878786">
						<input class="input100" type="number" min="0" max="9999999999" name="phone" placeholder="Phone" value="<?php echo $data['phone'] ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
                    </div>
                    <?php if(isset($error['phone'])): ?>
                        <p style="margin-left: 10%;" class="text-danger"> <?php echo $error['phone']; ?> </p>
                    <?php endif ?>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid address is required: Q5, Thành Phố Hồ Chí Minh">
						<input class="input100" type="text" name="address" placeholder="Address" value="<?php echo $data['address'] ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book" aria-hidden="true"></i>
						</span>
                    </div>
                    <?php if(isset($error['address'])): ?>
                        <p style="margin-left: 10%;" class="text-danger"> <?php echo $error['address']; ?> </p>
                    <?php endif ?>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: HoangAnh@gmail.com">
						<input class="input100" type="text" name="email" placeholder="Email" value="<?php echo $data['email'] ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>
                    <?php if(isset($error['email'])): ?>
                        <p style="margin-left: 10%;" class="text-danger"> <?php echo $error['email']; ?> </p>
                    <?php endif ?>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" value="<?php echo $data['password'] ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    <?php if(isset($error['password'])): ?>
                        <p style="margin-left: 10%;" class="text-danger"> <?php echo $error['password']; ?> </p>
                    <?php endif ?>

                    <div class="wrap-input100 validate-input" data-validate = "Re-Enter Password is required">
						<input class="input100" type="password" name="re_password" placeholder="Re-Enter Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    <?php if(isset($error['re_password'])): ?>
                        <p style="margin-left: 10%;" class="text-danger"> <?php echo $error['re_password']; ?> </p>
                    <?php endif ?>

                    <div class="wrap-input100 validate-input">
                        <div class="input100">
                            <input type="file" name="avatar" style="opacity: 0;">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							    <i class="fa fa-file-image-o" aria-hidden="true"></i><p style="margin-left: 28%">Choise Avatar</p>
						    </span>
                        </div>
                    </div>

                    <div class="wrap-input100 validate-input" style="margin-left: 20%;">
                        <i class="fa fa-mars" aria-hidden="true"></i>
                        <input type="radio" name="gender" value="1" <?php if (isset($data["gender"]) && $data["gender"]=="1") echo "checked";?>> Male
                        <i style="margin-left: 5%" class="fa fa-venus" aria-hidden="true"></i>
                        <input type="radio" name="gender" value="1" <?php if (isset($data["gender"]) && $data["gender"]=="2") echo "checked";?>> Female
                    </div>
                    <?php if(isset($error['gender'])): ?>
                        <p style="margin-left: 28%;" class="text-danger"> <?php echo $error['gender']; ?> </p>
                    <?php endif ?>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                            <input type="submit" value="Login" style="display: none;">Register
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="Forgot.php">
							Password?
						</a>
					</div>
                    <div class="text-center p-t-12">
						<a class="txt2" href="Home.php">
                            <i class="fa fa-home" aria-hidden="true"></i> Home
						</a>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="Login.php">
                            Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<script>
  $('.js-tilt').tilt({
			scale: 1.1
		})

(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);
</script>




