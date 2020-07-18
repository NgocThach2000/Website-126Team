<?php
    $open = "transaction";
    include_once __DIR__."/../../autoload/autoload.php";
    
    //$transaction = $db->fetchAll("transaction");
    if(isset($_GET['page']))
    {
        $pag = $_GET['page'];
    }
    else
    {
        $pag = 1;
    }

    $sql = "SELECT transaction.* ,user.name as nameuser, user.phone as phoneuser, user.address as addressuser FROM transaction LEFT JOIN user ON user.id = transaction.user_id ORDER BY ID DESC";
    $transaction = $db->fetchJone('transaction', $sql, $pag, 10, true);

    if(isset($transaction['page']))
    {
        $sotrang = $transaction['page'];
        unset($transaction['page']);
    }
?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Sách Hóa Đơn
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                    <a href="index.php">Danh sách đơn hàng</a>
                </li>
            </ol >
            <div class="clearfix"></div>
            <!--Thông báo lỗi-->
            <?php include_once __DIR__."/../../../partials/notification.php"; ?>
        </div>
        <?php //var_dump($transaction); ?>
    </div>
    <div class="row">
        <div class="col md 12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Hóa đơn</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Đơn giá </th>
                        <th>Trạng thái</th>
                        <th>Thời gian đặt hàng</th>
                        <th>Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <!--sổ danh mục-->
                    <?php $stt = 1; foreach($transaction as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['nameuser'] ?></td>
                        <td><?php echo $item['phoneuser'] ?></td>
                        <td><?php echo $item['addressuser'] ?></td>
                        <td><?php echo formatPrice($item['amount']) ?> VNĐ</td>
                        <td>
                            <a href="process.php?id=<?php echo $item['id'] ?>" class="btn btn-<?php echo $item['status'] == 1 ? 'primary' : 'warning' ?>"><?php echo $item['status'] == 0 ? 'Chưa xử lý' : 'Đã xử lý' ?></a>
                        </td>
                        <td><?php echo $item['created_at'] ?></td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="veiw.php?id=<?php echo $item['id']?>"> <i class="fa fa-info"></i> Chi tiết</a>
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
                            <!--phân trang-->
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
                    