<?php 

    require_once __DIR__. "/autoload/autoload.php"; 
    if(!isset($_SESSION['user_id'])){
        echo "<script>alert('Bạn chưa đăng nhập');location.href='Home.php'</script>";
    }

    $id = intval(getInput('id'));
   //chi tiet sp
    $product = $db -> fetchID("product",$id);
 
    //kt gio hang neu ton tai thi cap nhat lai

    //neu khong thi tao moi
    if(!isset($_SESSION['cart'][$id])){
        //tao moi gio hang
        $_SESSION['cart'][$id]['name']=$product['name'];
        $_SESSION['cart'][$id]['thunbar1']=$product['thunbar1'];
        $_SESSION['cart'][$id]['qty']=1;
        $_SESSION['cart'][$id]['price'] = ((100- $product['sale'])*$product['price'])/100;
    }
    else {
        $_SESSION['cart'][$id]['qty'] +=1;
    }
    echo "<script>alert('Thêm vào giỏ hàng thành công');location.href='Shoping_cart1.php'</script>";

    
?>
