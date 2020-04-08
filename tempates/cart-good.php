<div class="cart-item">
    <img src="../<?=$data['small_img']?>" alt="" class="cart-item_image">
    <div class="cart-item_information">
        <div class="cart-item_information_cell">
            <h4>Название</h4>
            <span class="cart-item_title" id="cart-item_name"><?=$data['name']?></span>
        </div>
        <div class="cart-item_information_cell">
            <h4>Цена</h4>
            <span class="cart-item_price" id="cart-item_price"><?=$data['price']?></span>
        </div>
        <div class="cart-item_information_cell">
            <h4>Количество</h4>
            <span class="cart-item_quantity" id="cart-item_quantity"><?=$data['quantity']?></span>
        </div>
        <div class="cart-item_information_cell">
            <h4>Всего</h4>
            <span class="cart-item_total-price" id="cart-item_total-price"><?=$data['quantity']*$data['price']?></span>
        </div>
    </div>
    <div class="cart-item_edit-block">
        <button class="cart-item_edit-block_btn-buy">Купить</button>
        <button class="cart-item_edit-block_btn-remove">Удалить</button>
    </div>
</div>