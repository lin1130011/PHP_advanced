<nav>
    <a href="index.php?page=main" class="<?= ($page == "main") ? 'active' : '' ?>">首頁</a>
    <a href="index.php?page=news" class="<?= ($page == "news") ? 'active' : '' ?>">最新消息</a>
    <a href="index.php?page=products" class="<?= ($page == "products") ? 'active' : '' ?>">產品介紹</a>
    <a href="index.php?page=contact" class="<?= ($page == "contact") ? 'active' : '' ?>">聯絡我們</a>
    <a href="index.php?page=test" class="<?= ($page == "test") ? 'active' : '' ?>">我是多的</a>
</nav>
<style>
    .active {
        color: red;
    }
</style>