<fieldset>
    <legend>目前位置:首頁 > 問卷調查</legend>
    <table>
        <tr>
            <th>編號</th>
            <th width="60%">問卷題目</th>
            <th>投票總數</th>
            <th>結果</th>
            <th>狀態</th>
        </tr>
        <?php
        $ques = $Que->all(['subject_id' => 0]);
        foreach ($ques as $key => $value) {

        ?>
            <tr>
                <td class="ct"><?= $key + 1; ?></td>
                <td class="ct"><?= $value['text'] ?></td>
                <td class="ct"><?= $value['vote'] ?></td>
                <td class="ct">
                    <a href="?do=result&id=<?= $value['id'] ?>">結果</a>
                </td>
                <td class="ct">
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "<a href='?do=vote&id={$value['id']}'>我要投票</a>";
                    } else {
                        echo "請先登入";
                    }

                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</fieldset>