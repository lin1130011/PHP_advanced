<?php include_once "base.php";

$rows = $Type->all(['big_id' => $_GET['id']]);

foreach ($rows as $row) {
    echo "<option value='{$row['id']}'>{$row['name']}</option>";
}
