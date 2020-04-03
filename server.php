<?php 
    //print_r($_POST);
    //$fio = isset($_POST['fio']) ? strip_tags($_POST['fio']) :"";
    //$fio = $_POST['fio'];
    //echo $fio;
    // if($_POST['user']===$_POST['correct']){

    //     echo "welcom";
    // }else{
    //     die ('Доступ запрещён');
    // }
    //print_r($_FILES);

    for($i=0; $i<count($_FILES['photo']['name']); $i++){
        $path = "files/".$_FILES['photo']['name'][$i];
        move_uploaded_file($_FILES['photo']['tmp_name'][$i], $path);
        echo "файл ".$_FILES['photo']['name'][$i]."Загружен<br>";
       
    }
?>