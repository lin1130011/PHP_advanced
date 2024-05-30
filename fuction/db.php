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
        $tmp = array2sql($arg);
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
    $tmp = array2sql($cols);
    $sql .= join(",", $tmp);

    if (is_array($arg)) {
        $tt = array2sql($arg);
        $sql .= " where " . join(" && ", $tt);
    } else {
        $sql .= " where `id` = '{$arg}'";
    }




    return $pdo->exec($sql);
}

function insert($table, $cols)
{
    global $pdo;
    $sql = "INSERT INTO `{$table}`";

    $sql .= "(`" . join("`,`", array_keys($cols)) . "`)";

    $sql .= " VALUES('" . join("','", $cols) . "')";

    return $pdo->exec($sql);
}

function array2sql($arg)
{
    foreach ($arg as $key => $value) {
        $tmp[] = "`$key` = '{$value}'";
    }
    return $tmp;
}
