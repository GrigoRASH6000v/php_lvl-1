<div class="goods-list">
    <?php 
        include "config.php";
        $tpl = file_get_contents('./blocks/card-small.tpl');
        $patterns = [ '/{title}/', '/{id}/', '/{small-img}/', '/{price}/' ];
        $sql = "select * from shop";
        $res = mysqli_query($connect, $sql);
        while($data = mysqli_fetch_assoc($res)){
            $replace = [$data['name'], $data['id'], $data['small_img'], $data['price']];
            echo preg_replace($patterns, $replace, $tpl);
        }  
    ?>
</div>

