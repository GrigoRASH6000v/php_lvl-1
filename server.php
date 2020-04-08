
<?php 
    include "./config/config.php";
    $sql = $_POST['sql'];
    $res = mysqli_query($connect, $sql);
?>