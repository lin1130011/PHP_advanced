<?php
$row = $Mem->find($_GET['id']);
// $pr = unserialize($row['pr']);

?>
<h2 class="ct">編輯會員資料</h2>
<form action="./api/save_mem.php" method="post">
    <table class="all">
        <tr>
            <td class="tt ct">帳號</td>
            <td class="pp">
                <?= $row['acc'] ?>
            </td>
        </tr>
        <tr>
            <td class="tt ct">密碼</td>
            <td class="pp">
                <?= $row['pw'] ?>
            </td>
        </tr>
        <tr>
            <td class="tt ct">累積交易金額</td>
            <td class="pp">1815 父親節快樂</td>
        </tr>
        <tr>
            <td class="tt ct">姓名</td>
            <td class="pp">
                <input type="text" name="name" id="" value="<?= $row['name'] ?>">
            </td>
        </tr>
        <tr>
            <td class="tt ct">電子信箱</td>
            <td class="pp">
                <input type="text" name="email" id="" value="<?= $row['email'] ?>">
            </td>
        </tr>
        <tr>
            <td class="tt ct">地址</td>
            <td class="pp">
                <input type="text" name="addr" id="" value="<?= $row['addr'] ?>">
            </td>
        </tr>
        <tr>
            <td class="tt ct">電話</td>
            <td class="pp">
                <input type="text" name="tel" id="" value="<?= $row['tel'] ?>">
            </td>
        </tr>

    </table>
    <div class="ct">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="submit" value="修改">
        <input type="reset" value="重置">
    </div>
</form>