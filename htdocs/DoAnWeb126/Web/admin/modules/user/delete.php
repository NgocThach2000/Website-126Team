<?php
    $open = "user";
    include_once __DIR__."/../../autoload/autoload.php";
    $id = intval(getInput('id'));
    //_debug($id);

    $Edituser = $db->fetchID("user", $id);
    if(empty($Edituser))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại ";
        redirectAdmin("user");
    }
    /**
     * Kiểm tra xem khách hàng đã đặt đơn hay chưa nếu chưa thì xóa thành công ngược lại thì thất bại
     */

    $is_user = $db->fetchOne("transaction", "user_id = $id " );
    if($is_user == NULL)
    {
        $num = $db->delete("user", $id);
        if($num > 0){
            $_SESSION['success'] = "Xóa thành công";
            redirectAdmin("user");
        }
        else
        {
            $_SESSION['error'] = "Xóa thất bại";
            redirectAdmin("user");
        }
    }
    else
    {
        $_SESSION['error'] = "Chú ý người khách hàng đang có hóa đơn thanh toán không thể xóa!";
        redirectAdmin("user");
    }


    
?>

                    