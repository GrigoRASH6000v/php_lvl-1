<?= "<h1>Содержимое сайта. Сегодня ".date("d-m-y")."</h1>"?>
<?php
    $path = $_SERVER['DOCUMENT_ROOT']."/homerork-1/files/test.txt";
   
    // $file = fopen($path,"r");
    // while(!feof($file)){
    // echo fgets($file)."<br>";
    // } 
    // Построчное считывание файла

    echo file_get_contents($path)
?>