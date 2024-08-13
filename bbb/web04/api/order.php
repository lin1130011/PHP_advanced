<?php
include_once "./base.php";
$_POST['acc'] = $_SESSION['Mem'];
$_POST['no'] = date('Ymd') . rand(100000, 999999);
$_POST['cart'] = serialize($_SESSION['cart']);
$_POST['orderdate'] = date("Y-m-d");


echo $Order->save($_POST);
unset($_SESSION["cart"]);
?>