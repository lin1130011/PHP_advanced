<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>

<body>
    <h1>計算結果為</h1>
    <?php
    if (!empty($_GET)) {
        if (empty($_GET["height"])) {
            echo "請輸入正確身高";
            echo "<br>";
        } else {
            echo "身高為 " . $_GET["height"] . "<br>";
            $height = $_GET["height"];
        }
        if (empty($_GET["weight"])) {
            echo "請輸入正確體重";
            echo "<br>";
        } else {
            echo "體重為 " . $_GET["weight"] . "<br>";
            $weight = $_GET["weight"];
        }

        if (!empty($height) && !empty($weight)) {
            $bmi = $weight / (($height / 100) * ($height / 100));
            echo "你的BMI 為 " . round($bmi, 2);
        } else {
            echo "請輸入正確身高與體重";
        }
    } else {
        if (empty($_POST["height"])) {
            echo "請輸入正確身高";
            echo "<br>";
        } else {
            echo "身高為 " . $_POST["height"] . "<br>";
            $height = $_POST["height"];
        }
        if (empty($_POST["weight"])) {
            echo "請輸入正確體重";
            echo "<br>";
        } else {
            echo "體重為 " . $_POST["weight"] . "<br>";
            $weight = $_POST["weight"];
        }

        if (!empty($height) && !empty($weight)) {
            $bmi = $weight / (($height / 100) * ($height / 100));
            echo "你的BMI 為 " . round($bmi, 2);
        } else {
            echo "請輸入正確身高與體重";
        }
    }



    ?>
</body>

</html>