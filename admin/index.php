<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/normalize.css">
    <link rel="stylesheet" href="../public/css/style-2.css">
    <link rel="stylesheet" href="../public/css/admin.css">
    <title>Admin panel</title>
</head>
<body>
    <header class="header">
        <a href="./index.php"><span class="logo">Mу Shоp</span></a>
        <h1 class="admin-title">Панель администратора</h1>
    </header>
    <div class="container">
        <? include "../tempates/menu.php" ?>
        <? include "../tempates/main.php" ?>
    </div>

   
    <!-- <div class="block-authorization hidden">
        <h3>Введите логин и пароль</h3>
        <input type="text" id="login">
        <input type="password" id="pass">
        <button name="enter" id="btn">Войти</button>
    </div> -->
    

    <script src="./js/admin.js"></script>
</body>
</html>