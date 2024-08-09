<?php
include_once "./base.php";

$_POST['type'];
$_POST['big'];
$_POST['mid'];

switch ($_POST['type']) {
    case 'big':
        $Type->save(['name' => $_POST['big'], 'big_id' => 0]);
        break;
    case 'mid':
        $Type->save(['name' => $_POST['mid'], 'big_id' => $_POST['big']]);
        break;
}

?>