<?php
    $open = "admin";
    include_once __DIR__."/../../autoload/autoload.php";
    $admin = $db->fetchAll("admin");

    if(isset($_GET['page']))
    {
    	$pag = $_GET['page'];
    }
    else
    {
    	$pag = 1;
    }

    $sql = "SELECT admin.*FROM admin ORDER BY ID DESC";

    $admin = $db->fetchJone('admin', $sql, $pag, 3, true);

    if(isset($admin['page']))
    {
    	$sotrang = $admin['page'];
    	unset($admin['page']);
    }

?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>

    <!-- Page Heading -->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Sách Admin
                <a href="add.php" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                    <a href="">Admin</a>
                </li>
            </ol >
            <div class="clearfix"></div>
            <!--Thông báo lỗi-->
            <?php include_once __DIR__."/../../../partials/notification.php"; ?>
        </div>
        <?php //var_dump($admin); ?>
    </div>
    <div class="row">
        <div class="col md 12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>                                              
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; foreach($admin as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['address'] ?></td>
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
                    