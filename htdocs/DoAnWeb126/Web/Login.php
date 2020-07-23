<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
    $data = 
    [
      "email"	=> postInput('email'),
      "password" => postInput('password')
    ];
    $error = [];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if($data['email'] == ''){
        	$error['email'] = "*Vui lòng nhập email";
        }
        if($data['password'] == ''){
        	$error['password'] = "*Vui lòng mật khẩu";
        }
        if(empty($error))
        {
            $is_check = $db->fetchOne("user", " email = '".$data['email']."' AND password = '".$data['password']."' ");
            if($is_check != NULL)
            {
              $_SESSION['user_name'] = $is_check['name'];
              $_SESSION['user_id']   = $is_check['id'];
              $_SESSION['user_avatar'] = $is_check['avatar'];
              $_SESSION['user_gender'] = $is_check['gender'];
              echo'<script>';
              echo "alert('Đăng nhập thành công'); location.href='Home.php' ";
              echo'</script>';
            }
            else
            {
              echo'<script>';
              echo "alert('Đăng nhập Thất Bại')";
              echo'</script>';
            }
        }
    }
?>
<title>Đăng Nhập</title> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?php echo public_frontend() ?>css/Login.css" rel="stylesheet" />
 <!--Logo-->
    <link rel="SHORTCUT ICON" href="<?php echo public_frontend() ?>img/iconfinder_nike_27575.png">
<!------ Include the above in your HEAD tag ---------->

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" enctype="multipart/form-data" method="POST">
					<span class="login100-form-title">
					  Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
          </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
              <input type="submit" value="Login" style="display: none;">Login
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
						<span class="txt1">
                Login as an
						</span>
						<a class="txt2" href="/DoAnWeb126/Web/loginGroups/login.php">
                Administrator
						</a>
          </div>
          <div class="text-center p-t-12">
						<a class="txt2" href="Home.php">
            <i class="fa fa-home" aria-hidden="true"></i> Home
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="Register.php">
							Create your Account
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
