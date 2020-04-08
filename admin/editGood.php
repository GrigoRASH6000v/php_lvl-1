<?  
    include "../config/config.php";
    $sql = "select * from shop where id=".$_GET['id'];
    $res = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($res);
?>

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
        <main class="main">
            <div class="goods-list">
                <form class="good-block" enctype="multipart/form-data" action="../models/editGood.php" method="POST">
                    <input type="hidden" name="id" value="<?=$data['id']?>">
                    <div class="header-block">
                        <span>Название: <input type="text" value="<?=$data['name']?>" name="name"></span>
                        <span>Цена: <input type="text" value="<?=$data['price']?>" name="price"></span>
                    </div>
                    <div class="form-group">
                        <label class="label">
                            <img src="../<?=$data['big_img']?>" alt="" class="image">
                            <input type="file" name="photo" accept="image/*">
                        </label>
                    </div>
                    <span>Описание:</span>
                    <input type="text" class="good-description" name="info" value="<?=$data['info']?>">
                    <input type="submit" value="Сохранить" class="form-submit" name="save-form">
                </form>
            </div>
        </main>
    </div>
    <script src="./js/save-good.js"></script>
</body>
</html>