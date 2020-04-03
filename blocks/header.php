<?php
    preg_match('/index.php/', $_SERVER['REQUEST_URI']) ? $path = "index.php" : $path = "../index.php";
?>
<header class="header">
    <a href="<?=$path?>"><span class="logo">Mу Shоp</span></a>
    <form  class="search-form">
        <input type="text" class="search-form_input" placeholder="Поиск товаров">
        <button class="search-form_btn">Поиск</button>
    </form>
    <div class="cart-wrp">
    <button class="cart-button">Корзина</button>
    <div class="cart"></div>
    </div>
</header>