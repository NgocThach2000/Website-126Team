<?php
    $open = "banner_slide_show";
    include_once __DIR__."/../../autoload/autoload.php";
    $id = intval(getInput('id'));
    //_debug($id);

    $Editbanner_slide_show = $db->fetchID("banner_slide_show", $id);
    if(empty($Editbanner_slide_show))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại ";
        redirectAdmin("banner_slide_show");
    }
    /**
     * Kiểm tra xem có sản phẩm nào bị trùng không
     */
    $num = $db->delete("banner_slide_show", $id);
    if($num > 0){
        $_SESSION['success'] = "Xóa thành công";
        redirectAdmin("banner_slide_show");
    }
    else{
        $_SESSION['error'] = "Xóa thất bại";
        redirectAdmin("banner_slide_show");
    }
    
?>

                    