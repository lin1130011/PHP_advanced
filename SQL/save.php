<?php
$db_name = "school";
$dsn = "mysql:host=localhost;charset=utf8;dbname=$db_name";
$user = "root";
$password = "";
$data = new PDO($dsn, $user, $password);

$sql = "insert into `students` (
    `school_num`,
    `name`,
    `birthday`,
    `uni_id`,
    `addr`,
    `parents`,
    `tel`,
    `dept`,
    `graduate_at`,
    `status_code`
        ) 
        VALUES (
        '{$_POST['school_num']}',
        '{$_POST['name']}',
        '{$_POST['birthday']}',
        '{$_POST['uni_id']}',
        '{$_POST['addr']}',
        '{$_POST['parents']}',
        '{$_POST['tel']}',
        '{$_POST['dept']}',
        '{$_POST['graduate_at']}',
        '{$_POST['status_code']}'
    )";
echo $sql;
echo $data->exec($sql);

header("location:./2024-0523SQL.php");
