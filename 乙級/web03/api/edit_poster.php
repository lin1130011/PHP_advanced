<?php
include_once "./base.php";
// dd($_POST);

foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Poster->del($id);
    } else {
        $row = $Poster->find($id);
        $row['name'] = $_POST['name'][$key];
        $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        $row['ani'] = $_POST['ani'][$key];
        $Poster->save($row);
    }
}
to("../admin.php?do=poster");
