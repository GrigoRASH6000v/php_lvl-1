
<div class="goods-item">
    <a href="../tempates/good-item.php?id=<?=$good['id']?>">
        <img src="../<?=$good['small_img']?>" alt="alt">
    </a>
    <h3 class="goods-item_title"><?=$good['name']?></h3>
    <p class="goods-item_price"><?=$good['price']?></p>
    <button class="goods-item_button" data-id="<?=$good['id']?>" name="add-btn">Добавить</button>
    <div class="goods-item_edit-block">
        <button class="goods-item_button-edit" data-id="<?=$good['id']?>" name="edit-btn">Редактировать</i></button>
        <button class="goods-item_button-delete" data-id="<?=$good['id']?>" name="remove-btn">Удалить</i></button>
    </div>
</div>
