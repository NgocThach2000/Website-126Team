<?php
session_start();
include_once __DIR__. "/../libraries/database.php";
include_once  __DIR__. "/../libraries/function.php";
$db = new Database;
define("ROOT", $_SERVER['DOCUMENT_ROOT']."/DoAnWeb126/Web/public/uploads/");

// Truy vấn dữ liệu lấy danh mục
$sql = "SELECT * FROM category_parent";
    $Category_show = $db->fetchsql($sql);
    $data = [];
    foreach ($Category_show as $item){
        $cateID = intval($item['id']);
        $sql_Cate = " SELECT * FROM category WHERE category_parent_id = $cateID ";
        $CateHome = $db->fetchsql($sql_Cate);
        $data[$item['name']] = $CateHome;
    }
?>
