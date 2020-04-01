<!-- 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    function f(id){
        let price = document.getElementById(id).value
        let str = "price="+price+"&id="+id;
        $.ajax({
            type:"GET",
            url:"server.php",
            data: str,
            success: function(x){
                alert(x)
            }
        })
    }
</script> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/normalize.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>Cotogramm</title>
</head>
<body>
    <?php include "./block/header.php" ?>
    <?php include "./block/galary.php" ?>
    <?php include "./block/footer.php" ?>
    <script src="https://kit.fontawesome.com/2426fc9e9e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
       function addViews(id){
            let str = "id="+id;
            $.ajax({
                type:"GET",
                url:"server.php",
                data: str,
                // success: function(x){
                //     alert(x)
                // }
            })
       }
    </script>
</body>
</html>