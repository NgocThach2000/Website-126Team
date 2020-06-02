<?php
session_start();
require_once __DIR__. "/../../libraries/database.php";
require_once  __DIR__. "/../../libraries/function.php";
$db = new Database;
define("ROOT", $_SERVER['DOCUMENT_ROOT']."/DoAnWeb126/Web/public/uploads/");
?>
