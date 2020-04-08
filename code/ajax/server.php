<?php

$connect = mysqli_connect("localhost","root","","lesson7");

$login = (!empty($_POST['login']))?strip_tags($_POST['login']) : "";
$pass = (!empty($_POST['pass']))?strip_tags($_POST['pass']) : "";

$sql = "select * from users where login='$login' and pass = md5('$pass')";
$res = mysqli_query($connect,$sql) or die("Error".mysqli_error($connect));

if(mysqli_num_rows($res) > 0){
    setcookie("login",$login);
    setcookie("pass",$pass);
	echo "Вы успешно авторизованы!";
    //header("Location: index.php?success=true");
}
else{
   echo ("Ошибка авторизации!");
}
