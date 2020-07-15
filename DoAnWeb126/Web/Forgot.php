<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
?>
<head>    
    <link href="<?php echo public_frontend() ?>css/Forgot.css" rel="stylesheet" />
    <link href="<?php echo public_frontend() ?>css/mmenu.css" rel="stylesheet" />  
    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">  
    <title>Quên Mật Khẩu</title>
</head>
<body>
    <div class="login-box">
      <img src="<?php echo public_frontend() ?>img/usericon.png" class="avatar">
      <h1>Quên Mật Khẩu</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <p><i class="fa fa-envelope" aria-hidden="true"></i> Email</p>
        <input type="email" name="email" placeholder="Email">
        <p><i class="fa fa-key" aria-hidden="true"></i> Mật Khẩu Mới</p>
        <input type="password" name="password" placeholder="New Password">
        <p><i class="fa fa-key" aria-hidden="true"></i> Nhập Lại Mật Khẩu</p>
        <input type="password" name="re_password" placeholder="Re-enter New Password">
        <input type="submit" name="Submit" value="Cập Nhật">
        <a href="Login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng Nhập</a>
        <a id="register" href="Register.php" ><i class="fa fa-plus" aria-hidden="true"></i> Đăng Ký</a>
      </form>
    </div>
</body>
