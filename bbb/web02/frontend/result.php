<?php
$subject = $Que->find($_GET['id']);
?>
<style>
    .bar {
        height: 25px;
        background-color: #CCC;
    }
</style>
<fieldset>
    <legend>目前位置:首頁 >問卷調查 > <?= $subject['text'] ?></legend>
    <h4><?= $subject['text'] ?></h4>
    <?php
    $options = $Que->all(['subject_id' => $subject['id']]);
    foreach ($options as $key => $value) {
        if ($subject['vote'] > 0) {
            $rate = $value['vote'] / $subject['vote'];
        } else {
            $rate = 0.00;
        }
        $show = round($rate, 2) * 100;
        $width = $rate * 75;
        echo "<div style='display:flex'>";

        echo    "<div style='width:50%'>";
        echo        $value['text'];
        echo    "</div>";

        echo    "<div style='display:flex;width:50%'>";
        echo        "<div class='bar' style='width:{$width}%'></div>";
        echo        "<div>{$value['vote']}票({$show}%)</div>";
        echo    "</div>";

        echo "</div>";
    }
    ?>
    <div class="ct">
        <button onclick="location.href='?do=que'">返回</button>
    </div>
</fieldset>