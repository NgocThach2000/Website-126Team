<?php
    $open = "category";
    include_once __DIR__."/../../autoload/autoload.php";
    $category_parent = $db->fetchAll("category_parent");
    $id = intval(getInput('id'));
    $EditCategory = $db->fetchID("category", $id);
    if(empty($EditCategory))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại ";
        redirectAdmin("category");
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $data = 
        [
            "name" => postInput('name'),
            "slug" => to_slug(postInput('name')),
            "category_parent_id" => postInput('category_parent_id')
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
        if(postInput('category_parent_id') == ''){
            $error['category_parent_id'] = "Mời bạn chọn danh mục cha";
        }
        //empty error is mean not error
        if(empty($error)){
            //check
            if($EditCategory['name'] != $data['name']){
                $isset = $db->fetchOne("category", " name = '".$data['name']."' ");
                if(count($isset) > 0){
                    $_SESSION['error'] = "Tên danh mục đã tồn tại !";
                }
                else{
                    $id_update = $db->update("category", $data, array("id"=>$id));
                    if($id_update > 0){
                        $_SESSION['success'] = "Cập nhật thành công ";
                        redirectAdmin("category");
                    }
                    else{
                        $_SESSION['error'] = "Dữ liệu không thay đổi ";
                    }
                }
            }
            else{
                $id_update = $db->update("category", $data, array("id"=>$id));
                if($id_update > 0){
                    $_SESSION['success'] = "Cập nhật thành công ";
                    redirectAdmin("category");
                }
                else{
                    $_SESSION['error'] = "Dữ liệu không thay đổi ";
                }
            }
        }
    }
?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thêm mới danh mục
                <a href="add.php" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active"> <i class="fa fa-dashboard"> </i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                     <a href="">Danh mục</a>
                </li>
            </ol>
            <div class="clearfix">
                 <!--Thông báo lỗi-->
                <?php include_once __DIR__."/../../../partials/notification.php"; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="icategory" class="control-label">Danh mục cha</label>
                <select class="form-control col-md-8" name="category_parent_id">
                	<option value="">- Mời bạn chọn danh mục cha -</option>
                
        		<?php foreach ($category_parent as $item) : ?>
        			<option value="<?php echo $item['id'] ?>"<?php echo $EditCategory['category_parent_id'] == $item['id'] ? "selected = 'selected'" : '' ?>><?php echo $item['name'] ?> </option>
        		<?php endforeach ?>
        		</select>

        		<?php if(isset($error['category_parent_id'])): ?>
                    <p class="text-danger"> <?php echo $error['category_parent_id']; ?> </p>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="icategory">Tên danh mục</label>
                <input type="type" class="form-control col-sm-2 control-label" placeholder="Tên danh mục" id="icategory" name="name" value="<?php echo $EditCategory['name'];?>">
                
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
                    