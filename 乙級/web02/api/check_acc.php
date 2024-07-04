<?php
include_once "./base.php";

// dd($_POST);

$chk = $Users->count($_POST);

echo $chk;
