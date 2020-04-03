<?php 
    $id=$_GET['id'];
    include "../config.php";
    $sql = "select * from shop where id=".$id;
    $res = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style-2.css">
    <title>Good</title>
</head>
<body>
    <div class="container_big-good">
        <?php include "./header.php"?>
        <div class="good-block">
            <div class="header-block">
                <h1><?=$data['name']?></h1>
                <span>Цена <?=$data['price']?></span>
            </div>
            <img src="../<?=$data['big_img']?>" alt="<?=$data['name']?>" class="big-img">
            <span>Описание:</span>
            <p><?=$data['info']?></p>
            <button class="goods-item_button">Купить</button>
        </div>  
    </div>
</body>
</html>

