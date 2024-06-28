<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作業</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
    <button onclick="$('#show').load('add_title.php')">新增圖片</button>
    <button onclick="gettitle()">顯示圖片</button>
    <div id="title">

    </div>

    <div id="image">

    </div>

    <div id="data"></div>
    <div id="show"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script>
        function gettitle() {
            $.get("./api/get_title.php", function(title_data) {
                title_data = JSON.parse(title_data)
                console.log(title_data);
            })
        }
    </script>
</body>

</html>