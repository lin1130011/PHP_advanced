<?php
include_once "./base.php";

// dd($_POST);

$chk = $User->count($_POST);

echo $chk;
