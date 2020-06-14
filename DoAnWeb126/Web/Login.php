<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
?>
<head>    
    <link href="<?php echo public_frontend() ?>css/Login.css" rel="stylesheet" />
    <link href="<?php echo public_frontend() ?>css/mmenu.css" rel="stylesheet" />    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <div id="fb-root"></div>
    <title>Đăng nhập</title>
</head>
<body>
  <div class="bg_login">
    <div class="login-box">
        <div class="lb-header">
          <a href="#" class="active" id="login-box-link">Đăng nhập</a>
          <a href="#" id="signup-box-link">Đăng ký</a>
        </div>
        <div class="social-login">
          <a href="#">
            <i class="fa fa-facebook fa-lg"></i>
            Đăng nhập bằng Facebook
          </a>
          <a href="#">
            <i class="fa fa-google-plus fa-lg"></i>
            Đăng nhập bằng Google
          </a>
        </div>
        <form method="POST" class="email-login" enctype="multipart/form-data">
          <div class="u-form-group"> 
            <input type="email" placeholder="Email"/>
          </div>
          <div class="u-form-group">
            <input type="password" placeholder="Mật khẩu"/>
          </div>
          <div class="u-form-group">
            <input type="submit" class="btn btn-primary" value="Đăng nhập"></input>
          </div>
          <div class="u-form-group">
            <a href="#" class="forgot-password">Quên mật khẩu</a>
          </div>
        </form>
        <!--Form dang ky-->
        <form method="POST" class="email-signup" enctype="multipart/form-data">
          <div class="u-form-group">
            <input type="email" placeholder="Email"/>
          </div>
          <div class="u-form-group">
            <input type="password" placeholder="Mật khẩu"/>
          </div>
          <div class="u-form-group">
            <input type="password" placeholder="Nhập lại mật khẩu"/>
          </div>
          <div class="u-form-group">
            <input type="submit" class="btn btn-primary" value="Đăng ký"></input>
          </div>
        </form>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>   
        <script>
        $(".email-signup").hide(); // ẩn sign up đi
        $("#signup-box-link").click(function(){  
        $(".email-login").fadeOut(100);         //hiện ra speed 100
        $(".email-signup").delay(100).fadeIn(100);
        $("#login-box-link").removeClass("active");  
        $("#signup-box-link").addClass("active");
        });
        $("#login-box-link").click(function(){  
        $(".email-login").delay(100).fadeIn(100);;
        $(".email-signup").fadeOut(100);
        $("#login-box-link").addClass("active");
        $("#signup-box-link").removeClass("active");
        });
    </script>
</body>