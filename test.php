<?php
// 宣告變數$a 為空字串陣列
$a = "";

// empty的功能是判斷裏面的變數的值 是不是空的 如果是 他就是true 如果不是 他就是false
if (empty($a)) {
    echo "A";
    echo "<br>";
} else {
    echo "B";
    echo "<br>";
}

echo "<hr>";
echo "if 裡面為true 就印出 ";
if (true) {
    echo "A";
    echo "<br>";
} else {
    echo "B";
    echo "<br>";
}

echo "if 裡面為false 就印出 ";
if (false) {
    echo "A";
    echo "<br>";
} else {
    echo "B";
    echo "<br>";
}
