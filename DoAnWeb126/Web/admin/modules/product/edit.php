<?php
    $open = "product";
    include_once __DIR__."/../../autoload/autoload.php";
    $category = $db->fetchAll("category");
    
    $id = intval(getInput('id'));
    //_debug($id);
    

    $Editproduct = $db->fetchID("product", $id);
    if(empty($Editproduct))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại ";
        redirectAdmin("product");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $data = 
        [
            "name" => postInput('name'),
            "slug" => to_slug(postInput('name')),
            "category_id" => postInput('category_id'),
            "number" => postInput('number'),
            "price" => postInput('price'),
            "sale" => postInput('sale'),
            "size" => postInput('size'),
            "content" => postInput('content')
        ];
        $error = [];
        if(postInput('name') == ''){
            $error['name'] = "Mời bạn nhập đầy đủ tên sản phẩm";
        }
        if(postInput('category_id') == ''){
            $error['category_id'] = "Mời bạn chọn tên danh mục";
        }
        if(postInput('price') == ''){
            $error['price'] = "Mời bạn nhập giá";
        }
        if(postInput('content') == ''){
            $error['content'] = "Mời bạn nhập nội dung";
        }
        if(postInput('number') == ''){
            $error['number'] = "Mời bạn nhập số lượng sản phẩm";
        }
        if(postInput('size') == ''){
            $error['size'] = "Mời bạn nhập size sản phẩm";
        }
        //empty error is mean not error
        if(empty($error))
        {
            if(isset($_FILES['thunbar1']) && isset($_FILES['thunbar2']))
            {
            $file_name = $_FILES['thunbar1']['name'];
            $file_tmp = $_FILES['thunbar1']['tmp_name'];
            $file_error = $_FILES['thunbar1']['error'];
            //update thunbar2
            $file_name2 = $_FILES['thunbar2']['name'];
            $file_tmp2 = $_FILES['thunbar2']['tmp_name'];
            $file_error2 = $_FILES['thunbar2']['error'];
                if($file_error == 0)
                {
                    $part = ROOT ."product/";
                    $data['thunbar1'] = $file_name;
                }
                if($file_error2 == 0)
                {
                    $part = ROOT ."product/";
                    $data['thunbar2'] = $file_name2;
                    
                }
            }
            
            $update = $db->update("product", $data, array('id' => $id ));
            if($update > 0)
            {
                move_uploaded_file($file_tmp, $part.$file_name);
                move_uploaded_file($file_tmp2, $part.$file_name2);
                $_SESSION['success'] = "Cập nhật thành công";
                redirectAdmin("product");
            }
            else
            {
                $_SESSION['error'] = "Dữ liệu không thay đổi";
            }
        }
    }
?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thêm mới sản phẩm
                <a href="add.php" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active"> <i class="fa fa-dashboard"> </i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                     <a href="">sản phẩm</a>
                </li>
            </ol >
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
                <label for="iproduct" class="control-label">Danh mục sản phẩm</label>
                <select class="form-control col-md-8" name="category_id">
                    <option value="">
                        - Mời bạn chọn danh mục sản phẩm -
                    </option>
                
                <?php foreach ($category as $item) : ?>
                    <option value="<?php echo $item['id'] ?>"<?php echo $Editproduct['category_id'] == $item['id'] ? "selected = 'selected'" : '' ?>><?php echo $item['name'] ?> </option>
                <?php endforeach ?>
                </select>

                <?php if(isset($error['category_id'])): ?>
                    <p class="text-danger"> <?php echo $error['category_id']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iproduct">Tên sản phẩm</label>
                <input type="type" class="form-control col-sm-2 control-label" placeholder="Tên sản phẩm" id="iproduct" name="name" value="<?php echo $Editproduct['name'];?>">
                
                <?php if(isset($error['name'])): ?>
                    <p class="text-danger"> <?php echo $error['name']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iproduct">Giá sản phẩm</label>
                <input type="number" class="form-control col-sm-2 control-label" placeholder="1.000.000đ" id="iproduct" name="price" value="<?php echo $Editproduct['price'];?>">
                
                <?php if(isset($error['price'])): ?>
                    <p class="text-danger"> <?php echo $error['price']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iproduct">Số lượng sản phẩm</label>
                <input type="number" class="form-control col-sm-2 control-label" placeholder="1" id="iproduct" name="number" value="<?php echo $Editproduct['number'];?>">
                
                <?php if(isset($error['number'])): ?>
                    <p class="text-danger"> <?php echo $error['number']; ?> </p>
                <?php endif ?>
            </div>


            <div class="form-group">
                <label for="iproduct">Giảm giá</label>
                <input type="number" class="form-control col-sm-2 control-label" placeholder="10%" id="iproduct" name="sale" value="<?php echo $Editproduct['sale'];?>" />
                
                <?php if(isset($error['sale'])): ?>
                    <p class="text-danger"> <?php echo $error['sale']; ?> </p>
                <?php endif ?>
            </div>
            
            <div class="form-group">
                <label for="iproduct">Size</label>
                <input type="type" class="form-control col-sm-2 control-label" placeholder="XL" id="iproduct" name="size" value="<?php echo $Editproduct['size'];?>">
                
                <?php if(isset($error['size'])): ?>
                    <p class="text-danger"> <?php echo $error['size']; ?> </p>
                <?php endif ?>
            </div>

            <div class="form-group">
                <label for="iproduct">Hình ảnh 1</label>
                <input type="file" class="form-control col-sm-2 control-label" id="iproduct" name="thunbar1" />
                
                <?php if(isset($error['thunbar1'])): ?>
                    <p class="text-danger"> <?php echo $error['thunbar1']; ?> </p>
                <?php endif ?>
                <div>
                    <img src="<?php echo uploads_product() ?><?php echo $Editproduct['thunbar1'] ?>" width="20%" height="20%">
                <div>
            </div>

            <div class="form-group">
                <label for="iproduct">Hình ảnh 2</label>
                <input type="file" class="form-control col-sm-2 control-label" id="iproduct" name="thunbar2" />
                
                <?php if(isset($error['thunbar2'])): ?>
                    <p class="text-danger"> <?php echo $error['thunbar2']; ?> </p>
                <?php endif ?>
                <div>
                    <img src="<?php echo uploads_product() ?><?php echo $Editproduct['thunbar2'] ?>" width="20%" height="20%">
                <div>
            </div>     
            
            <div class="form-group">
                <label for="iproduct">Nội dung</label>
                <textarea class="form-control" name="content" rows="10"><?php echo $Editproduct['content'];?></textarea>
                <?php if(isset($error['content'])): ?>
                    <p class="text-danger"> <?php echo $error['content']; ?> </p>
                <?php endif ?>
            </div>

            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
        </div>
    </div>
    <!-- Page Footer-->
<?php include_once __DIR__."/../../layouts/footer.php"; ?>
                    