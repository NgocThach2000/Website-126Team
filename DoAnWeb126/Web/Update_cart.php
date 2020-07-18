<?php
        include_once __DIR__. "/autoload/autoload.php"; 
        $key =intval(getInput("key")); //id của sản phẩm
        $qty =intval(getInput("qty")); //số lượng sản phẩm đấy
        
        //kiểm tra xem số lượng người mua có vượt quá số lượng sản phẩm không
        $product = $db->fetchID("product", $key);
        if($product['number'] < $qty)
        {
                //some code
        }
        else
        {
                $_SESSION['cart'][$key]['qty']=$qty;
                echo 1;
        }       
?>