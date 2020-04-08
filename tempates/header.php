<?php
    preg_match('/index.php/', $_SERVER['REQUEST_URI']) ? $path = "index.php" : $path = "../index.php";
        //include "../models/fetchData.php";
        // foreach($dataArray as $good){
        //     include "../tempates/card-small.php";
        // }
?>
<header class="header">
    <a href="../public/"><span class="logo">Mу Shоp</span></a>
    <form  class="search-form">
        <input type="text" class="search-form_input" placeholder="Поиск товаров">
        <button class="search-form_btn">Поиск</button>
    </form>
    <button class="autorization-btn"></button>
    <div class="cart-wrp">
        <button class="cart-button" title="Авторизация">Корзина</button>

        <div class="cart hidden">
            <?
                // $sql = "select * from cart";
                // include "../models/fetchData.php";
                // //print_r($dataArray);
                // foreach($dataArray as $data){
                //     include "../tempates/cart-good.php";
                // }
                
            ?>
        </div>

    </div>
</header>