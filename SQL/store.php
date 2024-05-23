<?php
$db_name = "school";
$dsn = "mysql:host=localhost;charset=utf8;dbname=$db_name";
$user = "root";
$password = "";
$data = new PDO($dsn, $user, $password);

foreach ($_POST as $i => $item) {
    if ($item == null || $item == '') {
        echo "空值";
        header("location:edit.php?id={$_POST['id']}&error='欄位不可為空'");
        exit();
    }
}

$arr = [];
foreach ($_POST as $key => $value) {
    if ($key != 'id') {
        $arr[] = "`$key`='$value'";
    }
}
$sql = "UPDATE `students` SET " . join(",", $arr) . " WHERE `id` = '{$_POST['id']}'";

echo $sql;
echo $data->exec($sql);

// header("location:./2024-0523SQL.php");
