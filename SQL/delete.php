<?php
$db_name = "school";
$dsn = "mysql:host=localhost;charset=utf8;dbname=$db_name";
$user = "root";
$password = "";
$data = new PDO($dsn, $user, $password);

$row = $data->query("select * from `students` where `id`='{$_GET['id']}'")->fetch();
$response = "?name={$row['name']}&num={$row['school_num']}";

$sql = "delete from `students` where `id` = '{$GET_['id']}'";

$data->exec($sql);

header("location:2024-0523SQL.php" . $response);
