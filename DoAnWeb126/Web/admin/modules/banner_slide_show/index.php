<?php
    $open = "banner_slide_show";
    include_once __DIR__."/../../autoload/autoload.php";
    $banner_slide_show = $db->fetchAll("banner_slide_show");

    if(isset($_GET['page']))
    {
    	$pag = $_GET['page'];
    }
    else
    {
    	$pag = 1;
    }

    $sql = "SELECT banner_slide_show.*FROM banner_slide_show ORDER BY ID DESC";

    $banner_slide_show = $db->fetchJone('banner_slide_show', $sql, $pag, 5, true);

    if(isset($banner_slide_show['page']))
    {
    	$sotrang = $banner_slide_show['page'];
    	unset($banner_slide_show['page']);
    }

?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>

    <!-- Page Heading -->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Sách Ảnh Bìa
                <a href="add.php" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                    <a href="">Ảnh bìa</a>
                </li>
            </ol >
            <div class="clearfix"></div>
            <!--Thông báo lỗi-->
            <?php include_once __DIR__."/../../../partials/notification.php"; ?>
        </div>
    </div>
    <div class="row">
        <div class="col md 12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Ảnh bìa</th>                                             
                        <th>Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; foreach($banner_slide_show as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td>
                        	<img src="<?php echo uploads()?>banner_slide_shows/<?php echo $item['thunbar'] ?>" width="80px" height="80px"/>
                        </td>
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
                                <a class="page-link" href="" tabindex="-1" aria-label="Previous">
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
	                            <a href="" aria-label="Next">
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
                    