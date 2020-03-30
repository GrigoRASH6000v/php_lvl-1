<?php 
    $path = "files/".$_FILES['photo']['name'];
    //print_r($_FILES);
    if(move_uploaded_file($_FILES['photo']['tmp_name'], $path)){
        echo 'файл'.$_FILES['photo']['name'].' успешно загружен';
    }
?>