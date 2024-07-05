<?php
include_once "./base.php";

$news = $News->all(['type' => $_GET['type']]);
foreach ($news as $key => $value) {
    echo "<p>";
    echo "<a href='javascript:getNews({$value['id']})'>";
    echo $value['title'];
    echo "</p>";
}
