<?php
include_once "./base.php";

// $_POST['sh'];
// $_POST['rank'];

if (isset($_FILES['poster']['tmp_name'])) {
    move_uploaded_file($_FILES['poster']['tmp_name'], "../images/" . $_FILES['poster']['name']);
    $_POST['poster'] = $_FILES['poster']['name'];
}

if (isset($_FILES['trailer']['tmp_name'])) {
    move_uploaded_file($_FILES['trailer']['tmp_name'], "../images/" . $_FILES['trailer']['name']);
    $_POST['trailer'] = $_FILES['trailer']['name'];
}
$_POST['year'];
$_POST['month'];
$_POST['day'];


// echo $ondate;
$_POST['ondate'] = "{$_POST['year']}-{$_POST['month']}-{$_POST['day']}";
unset($_POST['year'], $_POST['month'], $_POST['day']);
$_POST['sh'] = 1;
$_POST['rank'] = $Movie->max() + 1;

dd($_POST);
$Movie->save($_POST);

to("../admin.php?do=movie");
