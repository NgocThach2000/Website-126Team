<?php
session_start();
include_once __DIR__. "/../libraries/database.php";
include_once  __DIR__. "/../libraries/function.php";
$db = new Database;
define("ROOT", $_SERVER['DOCUMENT_ROOT']."/DoAnWeb126/Web/public/uploads/");

//Lấy list theo danh mục Áo, Quần, Giày và dụng cụ;
$sql_cate_ao = "SELECT category.* FROM category WHERE category.name like 'Áo%' ";
$category_ao = $db->fetchsql($sql_cate_ao);

$sql_cate_quan = "SELECT category.* FROM category WHERE category.name like 'Quần%' ";
$category_quan = $db->fetchsql($sql_cate_quan);

$sql_cate_giay = "SELECT category.* FROM category WHERE category.name like 'Giày%' ";
$category_giay = $db->fetchsql($sql_cate_giay);

$sql_cate_dungcuhotro = "SELECT category.* FROM category WHERE category.name not like 'Áo%' AND category.name not like 'Quần%' AND category.name not like 'Giày%'";
$category_dungcuhotro = $db->fetchsql($sql_cate_dungcuhotro);

$category = $db->fetchAll("category");

?>
