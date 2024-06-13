<?php
include_once "./base.php";
$data['text'] = $_POST['text'];
$Ad->save($data);

to("../admin.php?do=ad");

// if (!empty($_FILES['img']['tmp_name'])) {
//     move_uploaded_file($_FILES['img']['tmp_name'], "../images/" . $_FILES['img']['name']);
//     // $sql = "insert into `title` (`img`, `text`) values ('{$_FILES['img']['name']}','{$_POST['text']}')";
//     // $pdo->exec($sql);
//     $data['img'] = $_FILES['img']['name'];
// }
    


    // if (!empty($_FILESp['img']['tmp_name']) && $_FILES['img']['error'] == 0) {
    //     $text = $_POST['text'];
    //     $img = $_FILES['img']['name'];
    //     move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $img);
    //     $sql = "insert into title (`text`,`img`) values ('{$text}', '{$img}')";
    // }