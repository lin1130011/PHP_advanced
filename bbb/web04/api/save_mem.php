<?php
include_once "./base.php";
// $_POST['pr'] = serialize($_POST['pr']);

// dd($_POST);

$Mem->save($_POST);
to("../admin.php?do=mem");
