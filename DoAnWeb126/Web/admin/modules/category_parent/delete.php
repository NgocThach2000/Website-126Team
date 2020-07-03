<?php
    $open = "category_parent";
    include_once __DIR__."/../../autoload/autoload.php";
    $id = intval(getInput('id'));
    //_debug($id);

    $EditCategory_parent = $db->fetchID("category_parent", $id);
    if(empty($EditCategory_parent))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại ";
        redirectAdmin("category_parent");
    }
    /**
     * Kiểm tra xem danh mục con có sản phẩm không nếu có thì không cho phép xóa ngược lại được phép xóa
     */
    $is_category = $db->fetchOne("category", "category_parent_id = $id " );
    if($is_category == NULL)
    {
        $num = $db->delete("category_parent", $id);
        if($num > 0){
            $_SESSION['success'] = "Xóa thành công";
            redirectAdmin("category_parent");
        }
        else
        {
            $_SESSION['error'] = "Xóa thất bại";
            redirectAdmin("category_parent");
        }
    }
    else
    {
        $_SESSION['error'] = "Chú ý đang tồn tại danh mục con! bạn không thể xóa";
        redirectAdmin("category_parent");
    }
    
    
?>

                    