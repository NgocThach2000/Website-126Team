<?php
    $open = "user";
    include_once __DIR__."/../../autoload/autoload.php";
    $user = $db->fetchAll("user");

    if(isset($_GET['page']))
    {
    	$pag = $_GET['page'];
    }
    else
    {
    	$pag = 1;
    }

    $sql = "SELECT user.*FROM user ORDER BY ID DESC";

    $user = $db->fetchJone('user', $sql, $pag, 10, true);

    if(isset($user['page']))
    {
    	$sotrang = $user['page'];
    	unset($user['page']);
    }

?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>

    <!-- Page Heading -->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Sách Người Dùng
                <a href="http://sporter.unaux.com/DoAnWeb126/Web/admin/modules/banner_slide_show/addUser.php?id=<?php echo $item['id'] ?>" class="btn btn-success">Thêm mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                    <a href="index.php">Danh sách người dùng</a>
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
                        <th>Mã người dùng</th>
                        <th>Tên người dùng</th>
                        <th>Giới tính</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Địa chỉ</th> 
                        <th>Hình đại diện</th>                                             
                        <th>Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; foreach($user as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo check_gender($item['gender']) ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['password'] ?></td>
                        <td><?php echo $item['address'] ?></td>
                        <td>
                        	<img src="<?php echo uploads()?>users/<?php echo $item['avatar'] ?>" width="80px" height="80px"/>
                        </td>
                        <td>
                           <a class="btn btn-xs btn-info" href="http://sporter.unaux.com/DoAnWeb126/Web/admin/modules/banner_slide_show/editUser.php?id=<?php echo $item['id'] ?>"> <i class="fa fa-edit"></i> Sửa</a>
                            <a class="btn btn-xs btn-danger" href="http://sporter.unaux.com/DoAnWeb126/Web/admin/modules/banner_slide_show/deleteUser.php?id=<?php echo $item['id'] ?>"> <i class="fa fa-times"></i> Xóa</a>
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
                    