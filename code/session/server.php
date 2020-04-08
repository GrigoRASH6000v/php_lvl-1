<?php
session_start();

$salt = "fsfjk022flsdgj30*";


$connect = mysqli_connect("localhost","root","","lesson7");

$login = (!empty($_POST['login']))?strip_tags($_POST['login']) : "";
$pass = (!empty($_POST['pass']))?strip_tags($_POST['pass']) : "";
//$pass = md5($pass).$salt;

$sql = "select * from users where login='$login' and pass = md5('$pass')";
$res = mysqli_query($connect,$sql) or die("Error".mysqli_error($connect));

if(mysqli_num_rows($res) > 0){
    $_SESSION['login'] = $login;
    $_SESSION['pass'] = $pass;
    header("Location: index.php?success=true");
}
else{
    die("Ошибка авторизации!");
}
echo $sql;