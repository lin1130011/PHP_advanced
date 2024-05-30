<?php

include './libray.php';

$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');



function all($table, $where)
{
    global $pdo;
    $sql = "SELECT * FROM `{$table}` $where";

    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function find($table, $arg)
{
    global $pdo;
    $sql = "SELECT * FROM `{$table}` WHERE ";

    if (is_array($arg)) {
        foreach ($arg as $key => $value) {
            $tmp[] = "`$key` = '{$value}'";
        }
        $sql .= join(" && ", $tmp);
    } else {

        $sql .= "`id` = '{$arg}'";
    }

    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function update($table, $cols, $arg)
{

    global $pdo;
    $sql = "UPDATE `{$table}` SET ";
    foreach ($cols as $key => $value) {
        $tmp[] = "`$key` = '{$value}'";
    }
    $sql .= join(",", $tmp);

    if (is_array($arg)) {
        foreach ($arg as $key => $value) {
            $tt[] = "`$key` = '{$value}'";
        }
        $sql .= " where " . join(" && ", $tt);
    } else {
        $sql .= " where `id` = '{$arg}'";
    }




    return $pdo->exec($sql);
}

function insert()
{
    //code
}
