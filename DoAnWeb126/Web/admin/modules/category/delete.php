<?php
    $open = "category";
    include_once __DIR__."/../../autoload/autoload.php";
    $id = intval(getInput('id'));
    //_debug($id);

    $EditCategory = $db->fetchID("category", $id);
    if(empty($EditCategory))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại ";
        redirectAdmin("category");
    }
    /**
     * Kiểm tra xem danh mục con có sản phẩm không nếu có thì không cho phép xóa ngược lại được phép xóa
     */
    $is_product = $db->fetchOne("product", "category_id = $id " );
    if($is_product == NULL)
    {
        $num = $db->delete("category", $id);
        if($num > 0){
            $_SESSION['success'] = "Xóa thành công";
            redirectAdmin("category");
        }
        else
        {
            $_SESSION['error'] = "Xóa thất bại";
            redirectAdmin("category");
        }
    }
    else
    {
        $_SESSION['error'] = "Chú ý danh mục có sản phẩm! bạn không thể xóa";
        redirectAdmin("category");
    }
    
    
?>

                    