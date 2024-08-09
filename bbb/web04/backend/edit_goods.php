<?php
$row = $Goods->find(($_GET['id']));
?>
<h2 class="ct">修改商品</h2>

<table class="all">
    <tr>
        <td class="tt ct">所屬大分類</td>
        <td class="pp">
            <select name="big" id="bigSelect"></select>
        </td>
    </tr>
    <tr>
        <td class="tt ct">所屬中分類</td>
        <td class="pp">
            <select name="mid" id="midSelect"></select>
        </td>
    </tr>
    <tr>
        <td class="tt ct">商品編號</td>
        <td class="pp"><?= $row['no'] ?></td>
    </tr>
    <tr>
        <td class="tt ct">商品名稱</td>
        <td class="pp"><input type="text" name="name" value="<?= $row['name'] ?>"></td>
    </tr>
    <tr>
        <td class="tt ct">商品價格</td>
        <td class="pp"><input type="text" name="price" value="<?= $row['price'] ?>"></td>
    </tr>
    <tr>
        <td class="tt ct">規格</td>
        <td class="pp"><input type="text" name="spec" value="<?= $row['spec'] ?>"></td>
    </tr>
    <tr>
        <td class="tt ct">庫存量</td>
        <td class="pp"><input type="text" name="stock" value="<?= $row['stock'] ?>"></td>
    </tr>
    <tr>
        <td class="tt ct">商品圖片</td>
        <td class="pp"><input type="file" name="img" value="<?= $row['img'] ?>"></td>
    </tr>
    <tr>
        <td class="tt ct">商品介紹</td>
        <td class="pp"><textarea name="intro" value=""><?= $row['intro'] ?></textarea></td>
    </tr>
</table>
<div class="ct">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <input type="submit" value="修改">
    <input type="reset" value="重置">
    <input type="button" value="返回">
</div>

<script>
    getTypes('big', 0, <?= $row['big'] ?>);
    getTypes('mid', <?= $row['big'] ?>, <?= $row['mid'] ?>);

    $("#bigSelect").on("change", function () {
        getTypes('mid', $(this).val());
    })
</script>