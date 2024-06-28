<?php
include_once "./base.php";

$title_data = $Title->all();
echo json_encode($title_data);
