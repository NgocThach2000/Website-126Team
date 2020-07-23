<?php
    $open = "banner_slide_show";
    
    include_once __DIR__."/../../autoload/autoload.php";
    /**
    *Danh mục danh mục
    */
    $data = 
    [
        "name" 	=> postInput('name'),
        "thunbar"	=> postInput('thunbar')
  
    ];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $error = [];
        if(postInput('name') == ''){
            $error['name'] = "Vui lòng nhập tên ảnh bìa";
        }
        if(!isset($_FILES['thunbar'])){
        	$error['thunbar'] = "Vui lòng chọn ảnh bìa";
        }
        //error empty is error
        if(empty($error))
        {
            if(isset($_FILES['thunbar']))
           	{
           	$file_name = $_FILES['thunbar']['name'];
           	$file_tmp = $_FILES['thunbar']['tmp_name'];
           	$file_type = $_FILES['thunbar']['type'];
           	$file_error = $_FILES['thunbar']['error'];
	           	if($file_error == 0)
	           	{
	           		$part = ROOT ."banner_slide_shows/";
	           		$data['thunbar'] = $file_name;
	           	}
           	}
        	$id_insert = $db->insert("banner_slide_show", $data);
           	if(isset($id_insert)){
                move_uploaded_file($file_tmp, $part.$file_name);
           		$_SESSION['success'] = "Thêm mới thành công";
           		redirectAdmin("banner_slide_show");
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
                Thêm mới ảnh bìa
                <a href="add.php" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active"> <i class="fa fa-dashboard"> </i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                    <a href="">Ảnh bìa</a>
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
                <label for="ibanner_slide_show"> Tên ảnh bìa </label>
                <input type="type" class="form-control col-sm-2 control-label" placeholder="Vui lòng nhập tên..." id="ibanner_slide_show" name="name" value="<?php echo $data['name'] ?>">
                
                <?php if(isset($error['name'])): ?>
                    <p class="text-danger"> <?php echo $error['name']; ?> </p>
                <?php endif ?>
            </div>

            
            <div class="form-group">
                <label for="ibanner_slide_show"> Ảnh bìa </label>
                <input type="file" class="form-control col-sm-2 control-label" id="ibanner_slide_show" name="thunbar" />
                
                <?php if(isset($error['thunbar'])): ?>
                    <p class="text-danger"> <?php echo $error['thunbar']; ?> </p>
                <?php endif ?>
            </div>
           
             
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
        </div>
    </div>
    <!-- Page Footer-->
<?php include_once __DIR__."/../../layouts/footer.php"; ?>
