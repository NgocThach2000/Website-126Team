<?php 
    include_once __DIR__. "/autoload/autoload.php"; 
    // $id = intval(getInput('id'));
    // $EditCategory = $db->fetchID("category", $id);
    // //gán page
    // if(isset($_GET['page']))
    // {
    //     $pag = $_GET['page'];
    // }
    // else{
    //     $pag = 1;
    // }
    // $sql = "SELECT * FROM product WHERE category_id = $id";
    // $total = count($db->fetchsql($sql));
    // //tổng số sản phẩm hiển thị = 9
    // $product = $db->fetchJones("product",$sql, $total, $pag, 9, true);
    // $sotrang = $product['page'];
    // unset($product['page']);
    // $path = $_SERVER['SCRIPT_NAME'];
    // sổ list có cùng category_parent;


    
?>
<?php include_once __DIR__. "/layouts/header.php" ?>
    <link href="<?php echo public_frontend() ?>css/Search.css" rel="stylesheet" />  
    
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <title>Áo Nike</title>
</head>
<?php include_once __DIR__. "/layouts/singleheader.php" ?> 

            <div class="page_container2"> 
                <div class="fixwidth Link" >
                    <b><a href="Home.php">TRANG CHỦ</a></b>
                    <b><a>/</a></b>
                    
                </div>
            <div class="main_containt clearfix fixwidth" >
                
            </div>
            <!--Phân trang-->
            <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
        </div>
    </div>  
            <div class="main_containt_right"> 
            <b class="Danhmuc" >DANH MỤC SẢN PHẨM</b>
                <div class="div_menu_sidebar">
                    <?php foreach($data as $key => $value): ?>
                    <ul class="menu_sidebar">
                        <li><a><?php echo $key ?> </a>
                            <?php foreach($value as $item): ?>
                            <ul>
                                <div >
                                    <li><a class="sidebar_option" href="List_category.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                </div>
                            </ul>
                            <?php endforeach ?>
                        </li>
                    </ul>
                    <?php endforeach ?>
                </div>  
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/mmenu.js"></script>
        <script>
            $(document).ready(function() {
            $("#my-menu").mmenu();
            });
            $('.menu_sidebar >li').click(function(){
                if(!$(this).hasClass('liactive_side')){
                    $(this).addClass('liactive_side');
                }
                else{
                    $(this).removeClass('liactive_side');
                }
                $(this).find('ul').toggle();
            });
        </script>

<?php include_once __DIR__. "/layouts/footer.php" ?>