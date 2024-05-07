<?php
// $file = basename($_SERVER['PHP_SELF']);
$file = basename(__FILE__);
echo $file;
?>
<nav>
    <a href="index.php" class=<?php echo ($file == "index.php") ? 'active' : '' ?>>首頁</a>
    <a href="news.php" class=<?php echo ($file == "news.php") ? 'active' : '' ?>>最新消息</a>
    <a href="products.php" class=<?php echo ($file == "products.php") ? 'active' : '' ?>>產品介紹</a>
    <a href="contact.php" class=<?php echo ($file == "contact.php") ? 'active' : '' ?>>聯絡我們</a>
    <a href="test.php" class=<?php echo ($file == "test.php") ? 'active' : '' ?>>我是多的</a>
</nav>
<style>
    .active {
        color: red;
    }
</style>

<?php /*
<nav>
    <a href="index.php" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>>首頁</a>
    <a href="news.php" <?php if (basename($_SERVER['PHP_SELF']) == 'news.php') echo 'class="active"' ?>>最新消息</a>
    <a href="products.php" <?php if (basename($_SERVER['PHP_SELF']) == 'products.php') echo 'class="active"' ?>>產品介紹</a>
    <a href="contact.php" <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"' ?>>聯絡我們</a>
    <a href="test.php" <?php if (basename($_SERVER['PHP_SELF']) == 'test.php') echo 'class="active"' ?>>我是多的</a>
</nav>
*/ ?>