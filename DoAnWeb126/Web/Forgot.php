<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
?>
<head>    
    <link href="<?php echo public_frontend() ?>css/Forgot.css" rel="stylesheet" />
    <link href="<?php echo public_frontend() ?>css/mmenu.css" rel="stylesheet" />    
    <title>Đăng nhập</title>
</head>
<body>
    <div class="login-box">
      <img src="<?php echo public_frontend() ?>img/usericon.png" class="avatar">
      <h1>Quên Mật Khẩu</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <p>Email</p>
        <input type="email" name="email" placeholder="Email">
        <p>Mật Khẩu Mới</p>
        <input type="password" name="password" placeholder="New Password">
        <p>Nhập Lại Mật Khẩu</p>
        <input type="password" name="re_password" placeholder="Re-enter New Password">
        <input type="submit" name="Submit" value="Cập Nhật">
        <a href="Login.php">Đăng Nhập</a>
        <a id="register" href="Register.php" >Đăng Ký</a>
      </form>
    </div>
</body>
