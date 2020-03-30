<?php 
    $files = scandir("images");
    //print_r($files);
    for($i=2; $i<count($files); $i++):?>
        <img src="images/<?=$files[$i] ?>" width="100"><hr>
    <?php 
        endfor;
    ?>
