<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>登入成功</h1>
    歡迎 <?= $_GET['acc']; ?>
    <p>
        <a href="./login.php?login=1">回登入頁</a>
    </p>
</body>

</html>