


<main class="main">
    <div class="galary">
        <?php 
            include "config.php";
            $sql = "select * from shop";
            $res = mysqli_query($connect, $sql);
            while($data = mysqli_fetch_assoc($res)){
                echo $element = "<a href='./block/element.php?href=".$data['big-path']."' class='galary__item' onclick='addViews(".$data['id'].")'><img src='".$data['small-path']."' alt='cat' class='galary__item__img'><div class='blind'><i class='fas fa-eye'></i><span class='quantity-views'>".$data['views']."</span></div></a>";
                //$form.="<tr><td>".$data['name']."</td><td><input value=".$data['price']." type='text' id=".$data['id']."></td><td><input type='button' value='Сохранить' onclick='f(".$data['id'].")'></td></tr>";
            }
        ?>
    </div>
</main> 