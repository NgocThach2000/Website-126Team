<?php
    $open = "groups";
    include_once __DIR__."/../../autoload/autoload.php";
    $id = intval(getInput('id'));
    //_debug($id);

    $Editgroups = $db->fetchID("groups", $id);
    if(empty($Editgroups))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại ";
        redirectAdmin("groups");
    }
    /**
     * Kiểm tra xem có sản phẩm nào bị trùng không
     */
    $num = $db->delete("groups", $id);
    if($num > 0){
        $_SESSION['success'] = "Xóa thành công";
        redirectAdmin("groups");
    }
    else{
        $_SESSION['error'] = "Xóa thất bại";
        redirectAdmin("groups");
    }
    
?>

                    