<?php
include_once "./base.php";

// $_POST['sh'];
// $_POST['rank'];

if (!empty($_FILES['poster']['tmp_name'])) {
    move_uploaded_file($_FILES['poster']['tmp_name'], "../images/" . $_FILES['poster']['name']);
    $_POST['poster'] = $_FILES['poster']['name'];
}

if (!empty($_FILES['trailer']['tmp_name'])) {
    move_uploaded_file($_FILES['trailer']['tmp_name'], "../images/" . $_FILES['trailer']['name']);
    $_POST['trailer'] = $_FILES['trailer']['name'];
}


// echo $ondate;
$_POST['ondate'] = "{$_POST['year']}-{$_POST['month']}-{$_POST['day']}";
unset($_POST['year'], $_POST['month'], $_POST['day']);
// dd($_POST);


$Movie->save($_POST);

to("../admin.php?do=movie");
