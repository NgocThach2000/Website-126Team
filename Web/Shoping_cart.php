<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
?>
<?php include_once __DIR__."/layouts/header.php" ?>
    <link href="<?php echo public_frontend() ?>css/Store.css" rel="stylesheet" /> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <title>Giỏ hàng</title>
</head>
<?php include_once __DIR__."/layouts/singleheader.php" ?>
        
<div class="bg_login">
                    <h1 class="text-center">SHOPPING CART</h1>
        <div class="container"> 
            <table id="cart" class="table table-hover table-condensed"> 
                <thead> 
                    <tr class="details"> 
                        <th style="width:50%">Tên sản phẩm</th> 
                        <th style="width:10%">Giá</th> 
                        <th style="width:10%">Số lượng</th> 
                        <th style="width:20%" class="text-center">Thành tiền</th> 
                        <th style="width:10%"> </th> 
                    </tr> 
                </thead> 
                <div class="container_grid">
                    <div class="item_product">
                        <tbody>
                            <tr> 
                                <td data-th="Product"> 
                                <div class="main_cart clearfix"> 
                                <div class="main_cart_img"><img src="<?php echo public_frontend() ?>img/dri-fit-camo-training-t-shirt-XDtSHr.jpg" alt="Sản phẩm 1" class="img-thumbnail " width="100">
                                </div> 
                                <div class="main_cart_name"> 
                                <h4 class="nomargin">Sản phẩm 1</h4> 
                                <p>Mô tả của sản phẩm 1</p> 
                                </div> 
                                </div> 
                                </td> 
                                <td data-th="Price">200.000 đ</td> 
                                <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
                                </td> 
                                <td data-th="Subtotal" class="text-center">200.000 đ</td> 
                                <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                </button> 
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                </button>
                                </td> 
                            </tr> 
                        </tbody>
                    </div>
                    <div class="item_product">
                        <tbody>
                            <tr> 
                                <td data-th="Product"> 
                                <div class="main_cart clearfix"> 
                                <div class="main_cart_img"><img src="<?php echo public_frontend() ?>img/dri-fit-camo-training-t-shirt-XDtSHr.jpg" alt="Sản phẩm 1" class="img-thumbnail " width="100">
                                </div> 
                                <div class="main_cart_name"> 
                                <h4 class="nomargin">Sản phẩm 2</h4> 
                                <p>Mô tả của sản phẩm 2</p> 
                                </div> 
                                </div> 
                                </td> 
                                <td data-th="Price">300.000 đ</td> 
                                <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
                                </td> 
                                <td data-th="Subtotal" class="text-center">300.000 đ</td> 
                                <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                </button> 
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                </button>
                                </td> 
                            </tr> 
                        </tbody>
                    </div>
                    </div>
                        <tfoot> 
                            <tr> 
                                <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left" title="Về trang chủ"></i>Tiếp tục mua</a>
                                </td> 
                                <td colspan="2" class="hidden-xs"> </td> 
                                <td class="hidden-xs text-center count_cart"><strong>Tổng tiền 500.000 đ</strong>
                                </td> 
                                <td>
                                    <a href="#" class="btn btn-success btn-block">Pay <i class="fa fa-angle-right" title="Thanh toán"></i></a>
                                </td> 
                            </tr> 
                        </tfoot> 
                    </table>
                </div>      
            </div>

  
<?php include_once __DIR__. "/layouts/footer.php" ?>