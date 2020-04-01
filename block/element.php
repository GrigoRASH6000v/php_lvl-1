<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Большой котик</title>
</head>
<body>
    <header class="header">
        <a class="header-logo" href="../index.php">
            <img src="../image/logo/logo.svg" alt="logo" class="logo">
            <span class="logo-text">Kotogramm</span>
        </a>
        <div class="slogan-wrp">
            <span class="slogan">Only cats and no more!</span>
        </div>
    </header>
    <?php 
        $path = $_GET['href'];
        echo "<img src='../".$path."' alt='Большой котик' class='big-picture'>";
    ?>
    <footer class="footer">
    <div class="footer-content">
        <img src="../image/logo/logo.svg" alt="logo" class="logo">
        <span class="footer__logo-text">&copy;all rights not reserved</span>
    </div>
</footer>
</body>
</html>