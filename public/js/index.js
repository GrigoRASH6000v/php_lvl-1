// document.querySelector('.cart-button').addEventListener('click', ()=>{
//     document.querySelector('.cart').classList.toggle("hidden");
// })

console.log('hello')
class Good {
    constructor(id, name, price, smallImg, quntity){
        this.name = name;
        this.price = price;
        this.smallImg = smallImg;
        this.quantity = quntity;
        this.id=id;

    }
    render(){
        return `<div class="cart-item">
                    <img src="../${this.smallImg}" alt="" class="cart-item_image">
                    <div class="cart-item_information">
                        <div class="cart-item_information_cell">
                            <h4>Название</h4>
                            <span class="cart-item_title" >${this.name}</span>
                        </div>
                        <div class="cart-item_information_cell">
                            <h4>Цена</h4>
                            <span class="cart-item_price" id="cart-item_price">${this.price}</span>
                        </div>
                        <div class="cart-item_information_cell">
                            <h4>Количество</h4>
                            <div class="cart-item_quantity-block">
                                <button class="cart-item_quantity-btn" name="lessBtn" data-id="${this.id}">-</button>
                                <input class="cart-item_quantity"  type="text" value="${this.quantity}" name="quantity-field" data-id="${this.id}">
                                <button class="cart-item_quantity-btn" name="moreBtn" data-id="${this.id}">+</button>
                            </div>
                        </div>
                        <div class="cart-item_information_cell">
                            <h4>Всего</h4>
                            <span class="cart-item_total-price" >${this.price*this.quantity}</span>
                        </div>
                    </div>
                    <div class="cart-item_edit-block">
                        <button class="cart-item_edit-block_btn-buy">Купить</button>
                        <button class="cart-item_edit-block_btn-remove" data-id="${this.id}" name="removeBtn">Удалить</button>
                    </div>
                </div>`
    }
    
}

class GoodCatalog {
    constructor(id, name, price, smallImg, bigImg, quntity, ){
        this.name = name;
        this.price = price;
        this.smallImg = smallImg;
        this.quantity = quntity;
        this.id=id;
        this.bigImg = bigImg;
    }
    render(){
        return `<div class="goods-item">
                    <a href="../tempates/good-item.php?id=${this.id}">
                        <img src="../${this.smallImg}" alt="alt">
                    </a>
                    <h3 class="goods-item_title">${this.name}</h3>
                    <p class="goods-item_price">${this.price}</p>
                    <button class="goods-item_button" data-id="${this.id}" name="add-btn">Добавить</button>
                </div>`
    }
    
}

class Goods {
    constructor(container, table){
        this.container = document.querySelector(container);
        this.goods=[];
        this.table = table; 
    }
    initListeners(){
        [...this.container.childNodes].forEach(el=>{
            el.addEventListener('keydown', (evt)=>{
                if((evt.target.name="quantity-field")&&(evt.keyCode === 13)){
                    +evt.target.value >=0 ? this.changeQuantityGood(evt.target.dataset.id, +evt.target.value) : alert("Недопустимое значение колличества товаров")
                }
            })
            el.addEventListener('click', (evt)=>{
                    if(evt.target.type=="submit"){
                        if(evt.target.name=="lessBtn" && el.querySelector('input').value>0){
                            this.changeQuantityGood(evt.target.dataset.id, "-")
                        }else if(evt.target.name=="moreBtn"){
                            this.changeQuantityGood(evt.target.dataset.id, "+")
                        }else if(evt.target.name=="removeBtn"){
                            this.removeGood(evt.target.dataset.id)
                        }else if(evt.target.name=="add-btn"){
                            this.checkAvailabilityGood(evt.target.dataset.id)
                        }
                    }
                })
        })
    }
}
class GoodsList extends Goods{
    constructor(container, table){
        super(container, table)
        this.fethDataCatalog(`select * from ${this.table}`, 1);
    }
    fethDataCatalog(sql, action, id){
        fetch("../models/fetchData.php?sql="+sql+"&action="+action)
            .then( response => {
                    if (response.status !== 200) {
                        return Promise.reject(); 
                    }
                        return response.text()
                    })
                    .then(data => {
                        if(action===1){
                            this.goods=JSON.parse(data)
                            this.renderCatalog()
                        }else if(action===3){
                            data==0 ? this.addToCart(id) : console.log("такой товар уже есть")
                        }else if(action===2){
                            cart.fethDataCart(`select * from cart`, 1);
                        }
                        
                    })
                    .catch(() => console.log('ошибка'));   
    }
    
    checkAvailabilityGood(id){
        let action =3;
        let sql = `select id FROM cart where id = ${id}`
        this.fethDataCatalog(sql, action, id);
        
    }
    findGood(id){
        return this.goods.find(el=>el.id==id)
    }
    addToCart(id){
        let res = this.findGood(id)
        let sql = `insert into cart (id, name, price, small_img ) VALUES (${res.id}, '${res.name}',${res.price},'${res.small_img}')`
        let action =2;
        this.fethDataCatalog(sql, action);
    }
    renderCatalog(){
        let str=""
        this.goods.forEach((el)=>{
            let goodCart = new GoodCatalog(el.id, el.name, el.price, el.small_img, el.big_img, el.quantity)
            str+=goodCart.render();
        })
        this.container.innerHTML=str;
        this.initListeners();
    }
}

class Cart extends Goods {
    constructor(container, table){
        super(container, table)
        this.fethDataCart(`select * from ${this.table}`, 1);
    }
    changeQuantityGood(id, val){
        let result = this.goods.find(el=>el.id==id)
        let sql="";
        if(result){
            let indexGood = this.goods.findIndex(el=>el.id==id);
            if(val=="-"){
                this.goods[indexGood].quantity--
            }else if(val=="+"){
                this.goods[indexGood].quantity++
            }else{
                this.goods[indexGood].quantity=val
            }
            sql=`update cart set quantity=${this.goods[indexGood].quantity} where id=${id}`;
            let action=2;
            this.fethDataCart(sql, action);
        } 
    }
    fethDataCart(sql, action, id){
        fetch("../models/fetchData.php?sql="+sql+"&action="+action)
            .then( response => {
                    if (response.status !== 200) {
                        return Promise.reject(); 
                    }
                        return response.text()
                    })
                    .then(data => {
                        if(action===1){
                            this.goods=JSON.parse(data)
                        }else if(action===3){
                            data==0 ? this.addToCart(id) : console.log("такой товар уже есть")
                        }
                        this.renderCart()
                    })
                    .catch(() => console.log('ошибка'));   
    }

    removeGood(id){
        let result = this.goods.findIndex(el=>el.id==id)
        this.goods.splice(result, 1)
        let sql= `delete from cart where id=${id}`
        let action=2;
        this.fethDataCart(sql, action);
    }
    renderCart(){
        let str=""
        this.goods.forEach((el)=>{
            let goodCart = new Good(el.id, el.name, el.price, el.small_img, el.quantity)
            str+=goodCart.render();
        })
        this.container.innerHTML=str;
        this.initListeners();
    }
} 

class Autorization {
    constructor(){

    }
}

let cart = new Cart('.cart', "cart")
let goodList = new GoodsList('.goods-list', "shop")

