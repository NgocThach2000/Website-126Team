<?php
    $open = "category_parent";
    include_once __DIR__."/../../autoload/autoload.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $data = 
        [
            "name" => postInput('name')
        ];
        $error = [];
        if(postInput('name') == ''){
            $error['name'] = "Mời bạn nhập đầy đủ tên danh mục";
        }
        else{
            $postname = postInput('name');
            if(strlen($postname) <= 2)
            {
                $error['name'] = "*Tên danh mục không bé hơn 2 ký tự";
            } 
            else if(strlen($postname) >= 30)
            {
                $error['name'] = "*Tên danh mục không lớn hơn 30 ký tự";
            }
            if(!preg_match("/^[a-zA-Zà|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|ì|í|ị|ỉ|ĩ|ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|ỳ|ý|ỵ|ỷ|ỹ|đ ]*$/",$postname)){
                $error['name'] = "*Tên danh mục chỉ chứ chữ và khoảng trắng!";
            }
        }
        if(empty($error)){
            $isset = $db->fetchOne("category_parent", " name = '".$data['name']."' ");
            if(count($isset) > 0){
                $_SESSION['error'] = "Tên danh mục đã tồn tại !";
            }
            else{
                $id_insert = $db->insert("category_parent", $data);
                if($id_insert > 0){
                    $_SESSION['success'] = "Thêm mới thành công";
                    redirectAdmin("category_parent");
                }
                else{
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
            }
        }
        
    }

?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Thêm mới danh mục cha
                <a href="add.php" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active"> <i class="fa fa-dashboard"> </i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                    <a href="">Danh mục</a>
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
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="icategory_parent">Tên danh mục</label>
                <input type="type" class="form-control col-sm-2 control-label" placeholder="Tên danh mục" id="icategory_parent" name="name" value="<?php echo $data["name"] ?>">
                
                <?php if(isset($error['name'])): ?>
                    <p class="text-danger"> <?php echo $error['name']; ?> </p>
                <?php endif ?>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
    <!-- Page Footer-->
<?php include_once __DIR__."/../../layouts/footer.php"; ?>
                    