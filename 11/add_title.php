<h1>新增標題檔</h1>

<form action="" enctype="multipart/form-data">

    <label for="">圖片</label>
    <input type="file" name="img" id="img">

    <label for="">圖片名稱</label>
    <input type="text" name="name" id="name">

    <button onclick="send()">上傳</button>
</form>

<script>
    function send() {
        let form = {
            img: $('#img').val(),

            name: $('#name').val()
        }
        $.post("./api/insert.php", form, function(res) {
            if (res == 1) {
                alert('suscces');
            } else {
                alert('false')
            }
        })
    }
</script>