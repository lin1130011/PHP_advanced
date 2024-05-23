<?php
$db_name = "school";
$dsn = "mysql:host=localhost;charset=utf8;dbname=$db_name";
$user = "root";
$password = "";

$data = new PDO($dsn, $user, $password);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>新增學員</h1>
    <form action="save.php" method='post'>
        <div>
            <label for="school_num">學號：</label>
            <?php
            $num = $data->query('select max(`school_num`) as "max" from `students`')->fetch(PDO::FETCH_ASSOC);
            $number = $num['max'] + 1;
            echo $number;
            ?>
            <input readonly type="hidden" min='1' name="school_num" id="school_num" value="<?= $number ?>">
        </div>
        <div>
            <label for="name">姓名：</label><input type="text" name="name" id="name">
        </div>
        <div>
            <label for="birthday">生日</label><input type="date" name="birthday" id="birthday">
        </div>
        <div>
            <label for="uni_id">身份證號</label><input type="text" name="uni_id" id="uni_id">
        </div>
        <div>
            <label for="addr">地址</label><input type="text" name="addr" id="addr">
        </div>
        <div>
            <label for="parents">父母</label><input type="text" name="parents" id="parents">
        </div>
        <div>
            <label for="tel">電話</label><input type="text" name="tel" id="tel">
        </div>
        <div>
            <label for="dept">科系</label>
            <select name="dept" id="dept">
                <?php
                $dept = $data->query('select * from dept')->fetchAll();
                foreach ($dept as $key => $dept_data) {
                    echo "<option value='{$dept_data['id']}'>{$dept_data['name']}</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="graduate_at">畢業學校</label>
            <select name="graduate_at" id="graduate_at">
                <?php
                $schools = $data->query('select * from graduate_school')->fetchAll();
                foreach ($schools as $key => $school) {
                    echo "<option value='{$school['id']}'>{$school['name']}</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="status_code">畢業狀態</label>
            <select name="status_code" id="status_code">
                <option value="001">畢業</option>
                <option value="002">補校</option>
                <option value="003">補結</option>
                <option value="004">結業</option>
            </select>
        </div>

        <input type="submit" value="新增"><input type="reset" value="重置">

    </form>
</body>

</html>