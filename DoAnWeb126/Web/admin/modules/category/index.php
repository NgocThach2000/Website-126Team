<?php
    $open = "category";
    include_once __DIR__."/../../autoload/autoload.php";
    
    $category = $db->fetchAll("category");
    if(isset($_GET['page']))
    {
        $pag = $_GET['page'];
    }
    else
    {
        $pag = 1;
    }

    //$sql = "SELECT category.* FROM category ORDER BY ID DESC";
    $sql = "SELECT category.*, category_parent.name as namePcate FROM category LEFT JOIN category_parent on category_parent.id = category.category_parent_id";
    $category = $db->fetchJone('category', $sql, $pag, 10, true);

    if(isset($category['page']))
    {
        $sotrang = $category['page'];
        unset($category['page']);
    }
?>
<?php include_once __DIR__."/../../layouts/header.php"; ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Sách Danh Mục
                <a href="add.php" class="btn btn-success">Thêm Mới</a>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="active">
                    <a href="index.php">Danh sách danh mục</a>
                </li>
            </ol >
            <div class="clearfix"></div>
            <!--Thông báo lỗi-->
            <?php include_once __DIR__."/../../../partials/notification.php"; ?>
        </div>
        <?php //var_dump($category); ?>
    </div>
    <div class="row">
        <div class="col md 12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục cha</th>
                        <th>Tên danh mục</th>
                        <th>Thời gian khởi tạo</th>
                        <th>Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <!--sổ danh mục-->
                    <?php $stt = 1; foreach($category as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['namePcate'] ?></td>
                        <td><?php echo $item['name'] ?></td>
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
                    