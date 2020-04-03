<?php 
    include "config.php";
    $id = $_GET['id'];
    $sql = "update shop set views=views+1 where id=$id" ;
    //UPDATE `table_name` SET `field` = `field` + 1
    if(mysqli_query($connect,$sql)){
        echo "Успех";
    }else{
        echo "error";
    }
?>
