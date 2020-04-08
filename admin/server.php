<? 
    include "../config.php";
    $login=(!empty($_POST['login']))? strip_tags($_POST['login']):"";
    $password = (!empty($_POST['pass']))? strip_tags($_POST['pass']):"";
    $sql = (string)$_POST['sql'];
    //print_r ($sql);
    //$sql = "select * from `users`";
    //echo $login."<br>";
    //echo $sql."<br>";
    //echo $password;
    //echo $test;
    $res = mysqli_query($connect,$sql);
    
    $data = mysqli_fetch_assoc($res);
    if(($data['password']===$password)&&($data['login']===$login)){
        echo true;
    }else{
        echo false;
    }
    
    
?>