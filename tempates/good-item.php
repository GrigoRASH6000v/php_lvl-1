<?php 
    $id=$_GET['id'];
    $sql = "select * from shop where id=".$id;
    include "../models/fetchData.php";
    //print_r( $dataArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/normalize.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Good</title>
</head>
<body>
    <div class="container_big-good">
        <?php include "../tempates/header.php"?>
        <div class="good-block">
            <div class="header-block">
                <h1><?=$dataArray[0]['name']?></h1>
                <span>Цена <?=$dataArray[0]['price']?></span>
            </div>
            <img src="../public/<?=$dataArray[0]['big_img']?>" alt="<?=$dataArray[0]['name']?>" class="big-img">
            <span>Описание:</span>
            <p><?=$dataArray[0]['info']?></p>
            <button class="goods-item_button">Купить</button>
        </div>  
    </div>
</body>
</html>

