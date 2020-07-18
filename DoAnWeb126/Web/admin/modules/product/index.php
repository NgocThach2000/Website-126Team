<?php
    $open = "product";
    include_once __DIR__."/../../autoload/autoload.php";
    $product = $db->fetchAll("product");

    if(isset($_GET['page']))
    {
    	$pag = $_GET['page'];
    }
    else
    {
    	$pag = 1;
    }

    $sql = "SELECT product.*, category.name as namecate FROM product LEFT JOIN category on category.id = product.category_id";

    $product = $db->fetchJone('product', $sql, $pag, 20, true);

    if(isset($product['page']))
    {
    	$sotrang = $product['page'];
    	unset($product['page']);
    }

?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>
    <!-- Page Heading -->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Sách Sản Phẩm
                <a href="add.php" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                    <a href="index.php">Danh sách sản phẩm</a>
                </li>
            </ol >
            <div class="clearfix"></div>
            <!--Thông báo lỗi-->
            <?php include_once __DIR__."/../../../partials/notification.php"; ?>
        </div>
        <?php //var_dump($product); ?>
    </div>
    <div class="row">
        <div class="col md 12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Hình ảnh 1</th>
                        <th>Hình ảnh 2</th>
                        <th>Thông tin</th>                       
                        <th>Thời gian khởi tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; foreach($product as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['namecate'] ?></td>
                        <td>
                        	<img src="<?php echo uploads()?>product/<?php echo $item['thunbar1'] ?>" width="80px" height="80px"/>
                        </td>
                        <td>
                        	<img src="<?php echo uploads()?>product/<?php echo $item['thunbar2'] ?>" width="80px" height="80px"/>
                        </td>
                        <td>
                        	<ul>
                        		<li>Giá: <?php echo formatPrice($item['price']) ?> VNĐ</li>
                                <li>Số lượng <?php echo $item['number']; ?></li>
                                <li>Size: <?php echo $item['size'] ?></li>
                        	</ul>
                        </td>
                        <td><?php echo $item['created_at'] ?></td>
                        <td>
                            <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $item['id']?>"> <i class="fa fa-edit"></i> Sửa</a>
                            <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id']?>"> <i class="fa fa-times"></i> Xóa</a>
                        </td>
                    </tr>
                    <?php $stt++; endforeach; ?>
                </tbody>
            </table>
            <div>
                <div class="pull-right">
                    <nav aria-label="Page navigation clearfix" >
                        <ul class="pagination">
                            <li>
                                <a class="page-link" href="?page=<?php if($pag > 1){ echo ($pag-1); } else{ echo $pag;} ?>" tabindex="-1" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php for($i = 1; $i <= $sotrang; $i++) : ?>
                                <?php 
                                if(isset($_GET['page']))
                                {
                                    $pag = $_GET['page'];
                                }
                                else
                                {
                                    $pag = 1;
                                }

                                ?>
                            <li class="<?php echo ($i == $pag) ? 'active' : '' ?>">
                                <a href="?page=<?php echo $i ;?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <li>
	                            <a href="?page=<?php if($pag <= $sotrang-1){ echo ($pag+1); } else{ echo $pag;} ?>" aria-label="Next">
	                                <span aria-hidden="true">&raquo;</span>
	                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Footer-->
<?php include_once __DIR__."/../../layouts/footer.php"; ?>
                    