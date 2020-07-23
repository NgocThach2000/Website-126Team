<?php
    $open = "transaction";
    include_once __DIR__."/../../autoload/autoload.php";
    $id = intval(getInput('id'));
    $sql = "SELECT * FROM orders WHERE transaction_id = $id";
    $orders = $db->fetchsql($sql);

    foreach($orders as $item)
    {
        if($item['transaction_id'] == $id)
        {
            $deleteOrders = $db->delete("orders", $item['id']);
        }
    }

    $deleteTransaction = $db->delete("transaction", $id);
    if($deleteTransaction > 0){
        $_SESSION['success'] = "Xóa thành công";
        redirectAdmin("transaction");
    }
    else{
        $_SESSION['error'] = "Xóa thất bại";
        redirectAdmin("transaction");
    }
    
?>

                    