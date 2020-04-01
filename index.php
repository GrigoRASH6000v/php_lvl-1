
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    function f(id){
        let price = document.getElementById(id).value
        let str = "price="+price+"&id="+id;
        $.ajax({
            type:"GET",
            url:"server.php",
            data: str,
            success: function(x){
                alert(x)
            }
        })
    }
</script>


<?php 
    include "config.php";
    $sql = "select * from shop";
    $res = mysqli_query($connect, $sql);
    $form='<table border="1" width="400">';
    while($data = mysqli_fetch_assoc($res)){
        //echo "Автомобиль ".$data['name']." стоит ".$data['price']."<br>";
        $form.="<tr><td>".$data['name']."</td><td><input value=".$data['price']." type='text' id=".$data['id']."></td><td><input type='button' value='Сохранить' onclick='f(".$data['id'].")'></td></tr>";
    }
    $form.="</table>";
    echo $form;
?>
