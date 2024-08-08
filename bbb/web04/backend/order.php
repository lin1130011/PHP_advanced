<h2 class="ct">訂單管理</h2>
<table class="all">
    <tr class="tt ct">
        <th>訂單編號</th>
        <th>金額</th>
        <th>會員帳號</th>
        <th>姓名</th>
        <th>下單時間</th>
        <th>操作</th>
    </tr>
    <?php
    $rows = $Mem->all();
    foreach ($rows as $key => $row) {
    ?>
        <tr class="pp ct">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>刪除</button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>