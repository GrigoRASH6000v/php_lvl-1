<?php
    $content = file_get_contents("https://www.bbc.com/russian");
    file_put_contents('demo.php', $content)
?> 