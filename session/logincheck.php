<?php
session_start();

$acc = $_POST['user'];
$pw = $_POST['password'];
if ($acc == "ggc6812" && $pw == "ggc68123") {
    $_SESSION['login'] = $acc;
    // header("location:loginresult.php?acc=$acc");
    header("location:loginresult.php");
} else {
    $_SESSION['error'] = '帳號或密碼錯誤';
    // header("location:error.php?acc=$acc");
    header("location:login.php");
}
