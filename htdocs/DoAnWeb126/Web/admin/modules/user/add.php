<?php
    $open = "user";
    
    include_once __DIR__."/../../autoload/autoload.php";
    /**
    *Danh mục danh mục
    */
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
        //validation
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
        	$is_check_phone = $db->fetchOne("user", " phone = '" .$data['phone']."' ");
        	if($is_check_phone != NULL){
        		$error['phone'] = "*Số điện thoại đã tồn tại";
            }
            //kiem tra so viet nam
            $postphone = strval(postInput('phone'));
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
        if(!isset($_FILES['avatar'])){
        	$error['avatar'] = "Mời bạn chọn hình ảnh";
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
           		$_SESSION['success'] = "Thêm mới thành công";
           		redirectAdmin("user");
           	}
           	else{
           		$_SESSION['error'] = "Thêm mới thất bại";
           	}
        }
        
    }

?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thêm mới người dùng
                <a href="add.php" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active"> <i class="fa fa-dashboard"> </i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                    <a href="">Nguười dùng</a>
                </li>
            </ol >
            <div class="clearfix">
                <!--Thông báo lỗi-->
                <?php include_once __DIR__."/../../../partials/notification.php"; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form" action="" method="POST" enctype="multipart/form-data">
             

            <div class="form-group">
                <label for="iuser"> Họ & tên </label>
                <input type="type" class="form-control col-sm-2 control-label" placeholder="Vui lòng nhập tên..." id="iuser" name="name" value="<?php echo $data['name'] ?>">
                
                <?php if(isset($error['name'])): ?>
                    <p class="text-danger"> <?php echo $error['name']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iuser"> Giới tính </label>
                <input type="radio" class="control-label" id="iuser" name="gender" value="1" <?php if (isset($data["gender"]) && $data["gender"]=="1") echo "checked";?>> Nam
                <input type="radio" class="control-label" id="iuser" name="gender" value="2" <?php if (isset($data["gender"]) && $data["gender"]=="2") echo "checked";?>> Nữ

            </div>

            <div class="form-group">
                <label for="iuser"> Email </label>
                <input type="email" class="form-control col-sm-2 control-label" placeholder="example@gmail.com" id="iuser" name="email" value="<?php echo $data['email'] ?>" >
                
                <?php if(isset($error['email'])): ?>
                    <p class="text-danger"> <?php echo $error['email']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iuser"> Số điện thoại </label>
                <input type="text" class="form-control col-sm-2 control-label" placeholder="090955533" id="iuser" name="phone" value="<?php echo $data['phone'] ?>" >
                
                <?php if(isset($error['phone'])): ?>
                    <p class="text-danger"> <?php echo $error['phone']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iuser"> Mật khẩu </label>
                <input type="password" class="form-control col-sm-2 control-label" placeholder="********" id="iuser" name="password"  value="<?php echo $data['password'] ?>" >
                
                <?php if(isset($error['password'])): ?>
                    <p class="text-danger"> <?php echo $error['password']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iuser"> Nhập lại mật khẩu </label>
                <input type="password" class="form-control col-sm-2 control-label" placeholder="********" id="iuser" name="re_password" >
                
                <?php if(isset($error['re_password'])): ?>
                    <p class="text-danger"> <?php echo $error['re_password']; ?> </p>
                <?php endif ?>
            </div>


            <div class="form-group">
                <label for="iuser"> Địa chỉ </label>
                <input type="type" class="form-control col-sm-2 control-label" placeholder="280 An Dương Vương, Phường 4, Quận 5, Hồ Chí Minh" id="iuser" name="address" value="<?php echo $data['address'] ?>" >
                
                <?php if(isset($error['address'])): ?>
                    <p class="text-danger"> <?php echo $error['address']; ?> </p>
                <?php endif ?>
            </div>
            
            <div class="form-group">
                <label for="iuser"> Ảnh đại diện </label>
                <input type="file" class="form-control col-sm-2 control-label" id="iuser" name="avatar" />
                
                <?php if(isset($error['avatar'])): ?>
                    <p class="text-danger"> <?php echo $error['avatar']; ?> </p>
                <?php endif ?>
            </div>
           
             
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
        </div>
    </div>
    <!-- Page Footer-->
<?php include_once __DIR__."/../../layouts/footer.php"; ?>
