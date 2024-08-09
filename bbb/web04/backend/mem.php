<h2 class="ct">會員管理</h2>
<table class="all">
    <tr class="tt ct">
        <th>姓名</th>
        <th>會員帳號</th>
        <th>註冊日期</th>
        <th>操作</th>
    </tr>
    <?php
    $rows = $Mem->all();
    foreach ($rows as $key => $row) {
    ?>
        <tr class="pp ct">
            <td><?= $row['name'] ?></td>
            <td><?= $row['acc'] ?></td>
            <td><?= $row['regdate'] ?></td>
            <td>
                <button onclick="location.href='?do=edit_user&id=<?= $row['id'] ?>'">修改</button>
                <button onclick="del('Mem',<?= $row['id'] ?>)">刪除</button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>