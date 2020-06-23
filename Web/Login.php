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
<head>    
    <link href="<?php echo public_frontend() ?>css/Login.css" rel="stylesheet" />
    <link href="<?php echo public_frontend() ?>css/mmenu.css" rel="stylesheet" />    
    <title>Đăng nhập</title>
</head>
<body>
    <div class="login-box">
      <img src="<?php echo public_frontend() ?>img/usericon.png" class="avatar">
      <h1>Đăng Nhập</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <p class="Pnormal">Email</p>
        <input type="email" name="email" placeholder="Email">

        <?php if(isset($error['email'])): ?>
          <p class="text_danger"><?php echo $error['email']; ?></p>
        <?php endif; ?>

        <p class="Pnormal">Mật Khẩu</p>
        <input type="password" name="password" placeholder="Password">
        <?php if(isset($error['password'])): ?>
          <p class="text_danger"><?php echo $error['password']; ?></p>
        <?php endif; ?>

        <input type="submit" name="Submit" value="Đăng Nhập">
        <a href="Forgot.php">Quên Mật Khẩu</a>
        <a id="register" href="Register.php" >Đăng Ký</a>
      </form>
    </div>
</body>
