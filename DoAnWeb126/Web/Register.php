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
        }
        if(postInput('phone') == ''){
        	$error['phone'] = "*Vui lòng nhập số điện thoại";
        }
        else{
        	$is_check_phone = $db->fetchOne("user", " phone = '" .$data['phone']."' ");
        	if($is_check_phone != NULL){
        		$error['phone'] = "*Số điện thoại đã tồn tại";
        	}
        }
        if(postInput('password') == ''){
        	$error['password'] = "*Vui lòng nhập mật khẩu";
        }
        if(postInput('address') == ''){
        	$error['address'] = "*Vui lòng nhập địa chỉ";
        }
        if($data['password'] != postInput("re_password")){
        	$error['password'] = "*Mật khẩu không khớp ";
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
<head>    
    <link href="<?php echo public_frontend() ?>css/Register.css" rel="stylesheet" />
    <link href="<?php echo public_frontend() ?>css/mmenu.css" rel="stylesheet" />    
    <!-- Custom Fonts -->
    <!--Validation-->
  
    <!--End Validation-->
    <link href="<?php echo base_url() ?>public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Đăng Ký</title>
</head>
<body>
    <div class="login-box">
      <img src="<?php echo public_frontend() ?>img/usericon.png" class="avatar">
      <h1>Đăng Ký</h1>
      <form action="" method="POST" enctype="multipart/form-data" onclick="">
        <p class="Pnormal"><i class="fa fa-user"></i> Họ & Tên</p>
        <input type="text" name="name" placeholder="Full Name" value="<?php echo $data['name'] ?>">
        <?php if(isset($error['name'])): ?>
            <p class="text-danger"> <?php echo $error['name']; ?> </p>
        <?php endif ?>
        <p class="Pnormal">Giới tính </p>
        <input class="gender" type="radio" name="gender" value="1" ><i class="fa fa-male"></i> Nam
        <input class="gender" type="radio" name="gender" value="2" ><i class="fa fa-female"></i> Nữ
        <?php if(isset($error['gender'])): ?>
            <p class="text-danger"> <?php echo $error['gender']; ?> </p>
        <?php endif ?>

        <p class="Pnormal"><i class="fa fa-phone" aria-hidden="true"></i> Số Điện Thoại</p>
        <input type="number" name="phone" placeholder="Phone" value="<?php echo $data['phone'] ?>">
        <?php if(isset($error['phone'])): ?>
            <p class="text-danger"> <?php echo $error['phone']; ?> </p>
        <?php endif ?>

        <p class="Pnormal"><i class="fa fa-home" aria-hidden="true"></i> Địa Chỉ</p>
        <input type="text" name="address" placeholder="Address" value="<?php echo $data['address'] ?>">
        <?php if(isset($error['address'])): ?>
            <p class="text-danger"> <?php echo $error['address']; ?> </p>
        <?php endif ?>

        <p class="Pnormal"><i class="fa fa-envelope" aria-hidden="true"></i> Email</p>
        <input type="email" name="email" placeholder="Email" value="<?php echo $data['email'] ?>">
        <?php if(isset($error['email'])): ?>
            <p class="text-danger"> <?php echo $error['email']; ?> </p>
        <?php endif ?>

        <p class="Pnormal"><i class="fa fa-key" aria-hidden="true"></i> Mật Khẩu</p>
        <input type="password" name="password" placeholder="Password">
        <?php if(isset($error['password'])): ?>
            <p class="text-danger"> <?php echo $error['password']; ?> </p>
        <?php endif ?>

        <p class="Pnormal"><i class="fa fa-key" aria-hidden="true"></i> Nhập Lại Mật Khẩu</p>
        <input type="password" name="re_password" placeholder="Re-enter password">
        <?php if(isset($error['re_password'])): ?>
            <p class="text-danger"> <?php echo $error['re_password']; ?> </p>
        <?php endif ?>
        
        <div class="upload-btn-wrapper">
        <button class="btn">Chọn Avatar</button>
        <input type="file" name="avatar"/>
        </div>
        
        <input type="submit" name="Submit" value="Đăng Ký">
        <a id="login" href="Login.php" ><i class="fa fa-sign-in"></i> Đăng Nhập</a>
      </form>
    </div>
</body>




