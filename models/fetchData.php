<?php 
    
    $sql = $_GET['sql'];
    $action = (integer)$_GET['action'];
    include "../config/config.php";
    
    if($action === 1){
        $res = mysqli_query($connect, $sql);
        $dataArray=[];
        while($data = mysqli_fetch_assoc($res)){
            array_push($dataArray, $data);
        }  
        echo json_encode($dataArray);
    }elseif($action === 2){
        mysqli_query($connect, $sql);
        //echo $sql;
    }elseif($action === 3){
        $res = mysqli_query( $connect, $sql );
        echo mysqli_num_rows( $res );
        
    }
    
?> 