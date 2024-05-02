<?php
if (!empty($_POST)) {
    $acc = $_POST['user'];
    $pw = $_POST['password'];
    if ($acc == "ggc6812" && $pw == "ggc68123") {
        header("location:loginresult.php?acc=$acc");
    } else {
        header("location:error.php?acc=$acc");
    }
} else {
    echo "請使用POST方法";
}
