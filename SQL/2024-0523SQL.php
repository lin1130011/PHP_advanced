<style>
    table {
        border-collapse: collapse;

    }

    td {
        padding: 5px 10px;
        border: 1px solid #999;
    }
</style>
<a href="./insert.php">新增學員</a>
<?php
if (isset($_GET['name'])) {
    echo "<span style = 'color:red'>學生 ";
    echo $_GET['name'] . " " . $_GET['num'];
    echo " 已刪除</span>";
}
?>
<?php
$db_name = "school";
$dsn = "mysql:host=localhost;charset=utf8;dbname=$db_name";
$user = "root";
$password = "";

$data = new PDO($dsn, $user, $password);

$sql = "SELECT * FROM `students` where `id` < 30";

$db = $data->query($sql);

$rows = $db->fetchALL(PDO::FETCH_ASSOC);

$str = "id school_num name birthday uni_id addr parents tel dept graduate_at status_code";
$head = explode(" ", $str);

echo "<table>";
echo "<tr>";
echo "<td>id</td>";
echo "<td>學號</td>";
echo "<td>姓名</td>";
echo "<td>生日</td>";
echo "<td>身份證號</td>";
echo "<td>地址</td>";
echo "<td>父母</td>";
echo "<td>電話</td>";
echo "<td>科系</td>";
echo "<td>畢業學校</td>";
echo "<td>畢業狀態</td>";
echo "<td>操作</td>";
echo "</tr>";
foreach ($rows as $row) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['school_num']}</td>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['birthday']}</td>";
    echo "<td>{$row['uni_id']}</td>";
    echo "<td>{$row['addr']}</td>";
    echo "<td>{$row['parents']}</td>";
    echo "<td>{$row['tel']}</td>";
    echo "<td>{$row['dept']}</td>";
    echo "<td>{$row['graduate_at']}</td>";
    echo "<td>{$row['status_code']}</td>";
    echo "<td>";
    echo "<a href='edit.php?id={$row['id']}' style='margin:0 5px'>編輯</a>";
    echo "<a href='delete.php?id={$row['id']}' style='margin:0 5px;color:red;'>刪除</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
