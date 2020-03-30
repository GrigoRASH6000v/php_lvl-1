<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
    <title>Galary</title>
</head>
<body>
    <div class="galary">
    <?php 
        $filesSmall = scandir("image/small");
        $filesBig = scandir("image/big");
        //print_r($files);
        for($i=2; $i<count($filesSmall); $i++):?>
            <a href="image/big/<?=$filesBig[$i] ?>" class="galary__item" target="blank"><img src="image/small/<?=$filesSmall[$i] ?>" width="50%"></a>
        <?php 
            endfor;
        ?>
    </div>
    <div class="block-form">
        <form action="server.php" method="post" enctype="multipart/form-data" class="form">
            <p>Выберите файл для загрузки на сервер</p>
            <input type="file" name="photo" accept="image/*" class="input-file">
            <input type="submit" value="Загрузить" class="input-submit">
        </form>
    </div>
</body>
</html>
