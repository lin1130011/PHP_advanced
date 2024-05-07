<?php
$acc = $_POST['user'];
$pw = $_POST['password'];

if ($acc == "ggc6812" && $pw == "ggc68123") {
    setcookie('login', $acc, time() + 60);
    header("location:loginresult.php");
} else {
    setcookie('error', '帳號或密碼錯誤', time() + 60);
    header("location:login.php");
}
