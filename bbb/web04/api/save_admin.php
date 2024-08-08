<?php
include_once "./base.php";
$_POST['pr'] = serialize($_POST['pr']);

// dd($_POST);

$Admin->save($_POST);
to("../admin.php");
