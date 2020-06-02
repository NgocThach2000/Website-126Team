<?php
    $open = "category";
    require_once __DIR__."/../../autoload/autoload.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $data = 
        [
            "name" => postInput('name'),
            "slug" => to_slug(postInput('name'))
        ];
        $error = [];
        if(postInput('name') == ''){
            $error['name'] = "Mời bạn nhập đầy đủ tên danh mục";
        }
        if(empty($error)){
            $isset = $db->fetchOne("category", " name = '".$data['name']."' ");
            if(count($isset) > 0){
                $_SESSION['error'] = "Tên danh mục đã tồn tại !";
            }
            else{
                $id_insert = $db->insert("category", $data);
                if($id_insert > 0){
                    $_SESSION['success'] = "Thêm mới thành công";
                    redirectAdmin("category");
                }
                else{
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
            }
        }
        
    }

?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thêm mới danh mục
                <a href="add.php" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active"> <i class="fa fa-dashboard"> </i>
                    <a href="index.php">Dashboard</a>
                </li>
                <li class="active">
                    <a href="">Danh mục</a>
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
    <div class="container">
        <div class="col-md-12">
            <form  action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="icategory">Tên danh mục</label>
                <input type="type" class="form-control col-sm-2 control-label" placeholder="Tên danh mục" id="icategory" name="name" >
                
                <?php if(isset($error['name'])): ?>
                    <p class="text-danger"> <?php echo $error['name']; ?> </p>
                <?php endif ?>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
        </div>
    </div>
    <!-- Page Footer-->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>
                    