<?php
    $open = "admin";
    
    require_once __DIR__."/../../autoload/autoload.php";
    /**
    *Danh mục danh mục
    */
    $data = 
    [
        "name" 	=> postInput('name'),
        "email"	=> postInput('email'),
        "phone" => postInput('phone'),
    	"password" => MD5(postInput('password')),
        "address" => postInput('address'),
        "level" => postInput('level')
    ];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $error = [];
        if(postInput('name') == ''){
            $error['name'] = "Mời bạn nhập đầy đủ họ & tên";
        }
        if(postInput('email') == ''){
        	$error['email'] = "Mời bạn nhập email";
        }
        else{
        	$is_check_mail = $db->fetchOne("admin", " email = '" .$data['email']."' ");
        	if($is_check_mail != NULL){
        		$error['email'] = "Email đã tồn tại";	
        	}
        }
        if(postInput('phone') == ''){
        	$error['phone'] = "Mời bạn nhập số điện thoại";
        }
        else{
        	$is_check_phone = $db->fetchOne("admin", " phone = '" .$data['phone']."' ");
        	if($is_check_phone != NULL){
        		$error['phone'] = "Số điện thoại đã tồn tại";
        	}
        }
        if(postInput('password') == ''){
        	$error['password'] = "Mời bạn mật khẩu";
        }
        if(postInput('address') == ''){
        	$error['address'] = "Mời bạn nhập địa chỉ";
        }
         if(postInput('level') == ''){
        	$error['level'] = "Mời bạn chọn chức vụ";
        }
        if($data['password'] != MD5(postInput("re_password"))){
        	$error['password'] = "Mật khẩu không khớp ";
        }
        //error empty is error
        if(empty($error))
        {
        	$id_insert = $db->insert("admin", $data);
           	if(isset($id_insert)){
           		$_SESSION['success'] = "Thêm mới thành công";
           		redirectAdmin("admin");
           	}
           	else{
           		$_SESSION['error'] = "Thêm mới thất bại";
           	}
        }
        
    }

?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thêm mới Admin
                <a href="add.php" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active"> <i class="fa fa-dashboard"> </i>
                    <a href="index.php">Dashboard</a>
                </li>
                <li class="active">
                    <a href="">Admin</a>
                </li>
                <li>
                    Thêm mới
                </li>
            </ol >
            <div class="clearfix">
                <!--Thông báo lỗi-->
                <?php require_once __DIR__."/../../../partials/notification.php"; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form" action="" method="POST" enctype="multipart/form-data">
             

            <div class="form-group">
                <label for="iadmin"> Họ & tên </label>
                <input type="type" class="form-control col-sm-2 control-label" placeholder="Vui lòng nhập tên..." id="iadmin" name="name" value="<?php echo $data['name'] ?>">
                
                <?php if(isset($error['name'])): ?>
                    <p class="text-danger"> <?php echo $error['name']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iadmin"> Email </label>
                <input type="email" class="form-control col-sm-2 control-label" placeholder="example@gmail.com" id="iadmin" name="email" value="<?php echo $data['email'] ?>" >
                
                <?php if(isset($error['email'])): ?>
                    <p class="text-danger"> <?php echo $error['email']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iadmin"> Số điện thoại </label>
                <input type="number" class="form-control col-sm-2 control-label" placeholder="090955533" id="iadmin" name="phone" value="<?php echo $data['phone'] ?>" >
                
                <?php if(isset($error['phone'])): ?>
                    <p class="text-danger"> <?php echo $error['phone']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iadmin"> Mật khẩu </label>
                <input type="password" class="form-control col-sm-2 control-label" placeholder="********" id="iadmin" name="password" required="">
                
                <?php if(isset($error['password'])): ?>
                    <p class="text-danger"> <?php echo $error['password']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iadmin"> Nhập lại mật khẩu </label>
                <input type="password" class="form-control col-sm-2 control-label" placeholder="********" id="iadmin" name="re_password" required="">
                
                <?php if(isset($error['re_password'])): ?>
                    <p class="text-danger"> <?php echo $error['re_password']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iadmin"> Địa chỉ </label>
                <input type="type" class="form-control col-sm-2 control-label" placeholder="280 An Dương Vương, Phường 4, Quận 5, Hồ Chí Minh" id="iadmin" name="address" value="<?php echo $data['address'] ?>" >
                
                <?php if(isset($error['address'])): ?>
                    <p class="text-danger"> <?php echo $error['address']; ?> </p>
                <?php endif ?>
            </div>

             <div class="form-group">
                <label for="iadmin"> Chức vụ </label>
	                <select class="form-control" name="level">
	                	<option value="1" <?php echo isset($data['level']) && $data['level'] == 1 ? "selected = 'selected'" : '' ;?>>Admin</option>
	                	<option value="2" <?php echo isset($data['level']) && $data['level'] == 2 ? "selected = 'selected'" : '' ;?>>Editor</option>
	                	<option value="3" <?php echo isset($data['level']) && $data['level'] == 3 ? "selected = 'selected'" : '' ;?>>Collaborators</option>
	                </select>                
	                <?php if(isset($error['level'])): ?>
	                    <p class="text-danger"> <?php echo $error['level']; ?> </p>
	                <?php endif ?>
            </div>

            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
        </div>
    </div>
    <!-- Page Footer-->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>
