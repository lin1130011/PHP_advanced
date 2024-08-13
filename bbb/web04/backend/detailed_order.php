<?php
$row = $Order->find(['no' => $_GET['no']]);
?>

<h2 class="ct">訂單編號<span style="color:red"><?= $row['no'] ?> </span>的詳細資料</h2>
<table class="all">
    <tr>
        <td class="tt ct">會員帳號</td>
        <td class="pp"><?= $row["acc"] ?></td>
    </tr>
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp">
            <?= $row['name'] ?>
        </td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp">

            <?= $row['email'] ?>
        </td>
    </tr>
    <tr>
        <td class="tt ct">聯絡地址</td>
        <td class="pp">
            <?= $row['addr'] ?>
        </td>
    </tr>
    <tr>
        <td class="tt ct">連絡電話</td>
        <td class="pp">
            <?= $row['tel'] ?>
        </td>
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
    $cart = unserialize($row['cart']);
    $total = 0;
    foreach ($cart as $k => $qt) {
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
    <button onclick="location.href='?do=order'">返回</button>
</div>