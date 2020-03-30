
<?php 
    function imageresize($outfile,$infile,$neww,$newh,$quality) {

        $im=imagecreatefromjpeg($infile);
        $im1=imagecreatetruecolor($neww,$newh);
        imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));
    
        imagejpeg($im1,$outfile,$quality);
        imagedestroy($im);
        imagedestroy($im1);
    }

    $pathBigGalary = "image/big/".$_FILES['photo']['name'];
    $pathBigsmall = "image/small/".$_FILES['photo']['name'];
    imageresize($pathBigsmall,$_FILES['photo']['tmp_name'],320,240,75);
    if(move_uploaded_file($_FILES['photo']['tmp_name'], $pathBigGalary)){
        echo 'файл'.$_FILES['photo']['name'].' успешно загружен';
    }
?>
