<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    function send(){
        let login = $("#login").val();//получили введенное значение из поля логин
        let pass = $("#pass").val();
        let str = "login="+login+"&pass="+pass;
        $.ajax({
            type:"POST",
            url:"server.php",
            data:str,
            success: function(answer){
                $("h1").html(answer);
            }
        });
    }
</script>

	<h1 style="color:red;"></h1>
    <p>Введите логин</p>
    <input id="login" type="text" value="<?= $_COOKIE['login']?>">
    <p>Введите пароль</p>
    <input id="pass" type="password"  value="<?= $_COOKIE['pass']?>"><br><br>
    <input type="button" onclick="send()" value="Войти">
