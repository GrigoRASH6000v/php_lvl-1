<?php

if($_GET['success'] && $_COOKIE['login']):?>
    <h1>Ваша учетная запись подтверждена!</h1>
<?php endif;?>

<form action="server.php" method="post">
    <p>Введите логин</p>
    <input type="text" name="login" value="<?= $_COOKIE['login']?>">
    <p>Введите пароль</p>
    <input type="password" name="pass" value="<?= $_COOKIE['pass']?>"><br><br>
    <input type="submit" value="Войти">
</form>