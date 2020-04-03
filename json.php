<?php 
    $mas = ["good"=>"audi", "price"=>1000];
    $str = json_encode($mas);
    echo $str."<br>";
    $arr = json_decode($str, true);
    print_r( $arr);
?>