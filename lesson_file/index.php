<?php 
    $x=rand(1,10);
    $y=rand(1,10);
    $res = $x+$y;
    //echo $x+$y;
?>


<form action="server.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?=$res?>" name="correct" >
    <p>Ввидите ФИО</p>
    <input type="text" name="fio"><br>
    <p>Расскажите о себе</p>
    <textarea name="biogr" id="" cols="30" rows="10"></textarea>
    <p>Какие языки вы знаете?</p>
    <input type="checkbox" value="php" name="lang[]">php<br>
    <input type="checkbox" value="js" name="lang[]">js<br>
    <input type="checkbox" value="jawa" name="lang[]">jawa<br>
    <p>Ваш город</p>
    <select name="city" id="">
        <option value="Москва">Москва</option>
        <option value="Казань">Казань</option>
        <option value="Самара">Самара</option>
    </select>
    <p>Ваш стаж работа</p>
    <input type="radio" value="Менее 10 лет">Менее 10 лет<br>
    <input type="radio" value="Более 10 лет">Более 10 лет<br>
    <P>Ваш день рождения</P>
    <input type="data" name="birthday"><br>
    <p>Введите сумму чисел <?=$x?>+<?=$y?>=</p>
    <input type="text" name="user">
    <p>Выберите фото</p><br>
    
    <input type="file" name="photo[]" multiple accept="image/*">
    <input type="submit" value="Сохранить">
    
</form>



