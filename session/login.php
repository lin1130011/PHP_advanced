<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
        }

        div {
            text-align: center;
            margin-bottom: 50px;
        }



        .box {
            width: 300px;
            height: 300px;
            background-color: green;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="box">
        <?php
        session_start();
        if (isset($_SESSION['login']) && $_SESSION['login'] == 'ggc6812') {

            echo "已登入";
            echo "<br>";
            echo "<a href='logout.php'>登出</a>";
        } else {

            if (isset($_SESSION['error'])) {
                echo "<span style='color:red'>{$_SESSION['error']}</span>";
            }
            // if (isset($_GET['login']) && $_GET['login'] == 1) {
            //     echo "已登入";
            // } else {
        ?>
            <h1>請登入</h1>
            <form action="logincheck.php" method="post">
                <div class="user">

                    <input type="text" name="user" id="user" placeholder="使用者名稱">
                </div>
                <div class="passowrd">

                    <input type="password" name="password" id="password" placeholder="密碼">
                </div>
                <div class="login">
                    <input type="submit" value="提交">
                    <input type="reset" value="重置">
                </div>
            </form>
    </div>
<?php
        }
?>

</body>

</html>