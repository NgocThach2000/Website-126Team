<?php 

    include_once __DIR__. "/autoload/autoload.php"; 
    if(!isset($_SESSION['user_id'])){
        echo "<script>alert('Bạn chưa đăng nhập');location.href='Login.php'</script>";
    }
    $string = str_replace('&','',strstr($_SERVER["REQUEST_URI"], '&')); //lấy chuỗi cần tìm
    $id = intval(getInput('id'));
   //chi tiet sp
    $product = $db -> fetchID("product", $id);
 
    //kt gio hang neu ton tai thi cap nhat lai
    
    //neu khong thi tao moi
    if(!isset($_SESSION['cart'][$id])){
        //tao moi gio hang
        $_SESSION['cart'][$id]['name'] = $product['name'];
        $_SESSION['cart'][$id]['thunbar1'] = $product['thunbar1'];
        $_SESSION['cart'][$id]['thunbar2'] = $product['thunbar2'];
        $_SESSION['cart'][$id]['number'] = $product['number'];
        $_SESSION['cart'][$id]['qty']=1;
        $_SESSION['cart'][$id]['price'] = ((100- $product['sale'])*$product['price'])/100;
    }
    else {
        $_SESSION['cart'][$id]['qty'] +=1;
    }
    echo "<script>alert('Thêm vào giỏ hàng thành công');location.href='List_category.php?id=$string'</script>";
    
?>

    