<?php
$mem = $Mem->find(['acc' => $_SESSION['Mem']]);
?>

<h2 class="ct">填寫資料</h2>
<table class="all">
    <tr>
        <td class="tt ct">登入帳號</td>
        <td class="pp"><?= $_SESSION["Mem"] ?></td>
    </tr>
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp"><input type="text" name="name" id="name" value="<?= $mem['name'] ?>"></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email" value="<?= $mem['email'] ?>"></td>
    </tr>
    <tr>
        <td class="tt ct">聯絡地址</td>
        <td class="pp"><input type="text" name="addr" id="addr" value="<?= $mem['addr'] ?>"></td>
    </tr>
    <tr>
        <td class="tt ct">連絡電話</td>
        <td class="pp"><input type="text" name="tel" id="tel" value="<?= $mem['tel'] ?>"></td>
    </tr>
</table>

<table class="all ct" style="">
    <tr class="tt">
        <td>商品名稱</td>
        <td>編號</td>
        <td>數量</td>
        <td>單價</td>
        <td>小計</td>
    </tr>
    <?php
    $total = 0;
    foreach ($_SESSION['cart'] as $k => $qt) {
        $goods = $Goods->find($k);
        ?>
        <tr class="pp ct">
            <td><?= $goods['name'] ?></td>
            <td><?= $goods['no'] ?></td>
            <td><?= $qt ?></td>
            <td><?= $goods['price'] ?></td>
            <td><?= $goods['price'] * $qt ?></td>
        </tr>
        <?php
        $total += $goods['price'] * $qt;
    }
    ?>
</table>
<div class="tt ct all">總價:<?= $total ?></div>
<div class="ct">
    <button onclick="checkout()">確定送出</button>
    <button onclick="location.href='?do=buycart'">返回修改訂單</button>
</div>
<script>
    function checkout() {
        let data =
        {
            'name': $("#name").val(),
            'email': $("#email").val(),
            'addr': $("#addr").val(),
            'tel': $("#tel").val(),
            'total': <?= $total ?>
        }

        $.post("./api/order.php", data, (res) => {
            if (res == '1') {
                alert("訂購成功 感謝您的選購")
                location.href = "index.php"
            } else {
                alert("訂購失敗")
                location.reload()
            }

        })
    }
</script>