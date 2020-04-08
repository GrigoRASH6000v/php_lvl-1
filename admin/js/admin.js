
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
                    <div class="goods-item_edit-block">
                        <a href="./editGood.php?id=${this.id}" class="goods-item_button-edit" data-id="${this.id}" name="edit-btn">Редактировать</i></a>
                        <button class="goods-item_button-delete" data-id="${this.id}" name="remove-btn">Удалить</i></button>
                    </div>
                </div>`
    }
    
}

class GoodEdit{
    constructor(id, name, bigImg, price, info ){
        this.id=id;
        this.bigImg = bigImg;
        this.price = price;
        this.name = name;
        this.info = info;
    }
    render(){
        return `<form class="good-block" enctype="multipart/form-data" action="../models/editGood.php" method="POST"">
                    <div class="header-block">
                        <h2>Название: <input type="text" value="${this.name}" name="name"></h2>
                        <span>Цена: <input type="text" value="${this.price}" name="price"></span>
                    </div>
                    <div class="form-group">
                        <label class="label">
                            <img src="../${this.bigImg}" alt="" class="image">
                            <input type="file" name="photo">
                        </label>
                    </div>
                    <span>Описание:</span>
                    <input type="text" class="good-description" name="info" value="${this.info}">
                    <input type="submit" value="Сохранить" class="form-submit" data-id="${this.id}" name="save-form">
                </form>`
    }
}

class GoodsList {
    constructor(container, table){
        this.goods=[];
        this.table = table;
        this.container = document.querySelector(container);
        this.fethDataCatalog(`select * from ${this.table}`, 1);
    }
    initListeners(){
        [...this.container.childNodes].forEach(el=>{
                el.addEventListener('click', (evt=>{
                    if(evt.target.type=="submit"){
                        if(evt.target.name=="edit-btn"){
                            this.editGood(evt.target.dataset.id)
                        }
                        if(evt.target.name="save-form"){
                            console.log("save")
                        }
                    }
                }))
        })
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
    editGood(id){
        let good = this.findGood(id)
        this.container.innerHTML= new GoodEdit(good.id, good.name, good.big_img, good.price, good.info).render()
    }
    
    findGood(id){
        return this.goods.find(el=>el.id==id)
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

class Autorization {
    constructor(){

    }
}

let goodList = new GoodsList('.goods-list', "shop")

