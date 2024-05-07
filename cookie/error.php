<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入失敗</title>
    <style>
        .keyword {
            color: red;
        }
    </style>
</head>

<body>
    <h1>請重新輸入帳號密碼</h1>
    <h2>使用者<span class="keyword"><?= $_GET['acc']; ?></span>不存在;</h2>
    <a href="./login.php?tim=3">請重新登入</a>

</body>

</html>