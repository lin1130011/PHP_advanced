<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入-cookie</title>
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
        if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'ggc6812') {
            echo "已登入";
        } else {
            if (isset($_COOKIE['error'])) {
                echo "<span style='color:red'>{$_COOKIE['error']}</span>";
            }
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