let previewcontainer = document.querySelector('.products-preview');
let previewbox = document.querySelectorAll('.preview');
document.querySelectorAll('.main-content .card').forEach(card =>{
    card.onclick = () =>{
        previewcontainer.style.position = 'fixed';
        previewcontainer.style.display = 'flex';
        let name = card.getAttribute('data-name');
        previewbox.forEach(preview =>{
        let target = preview.getAttribute('data-target');
        if (name == target){
            preview.classList.add('active');
        }else{
            preview.classList.remove('active');
        }
        })
    }
});

previewbox.forEach(close =>{
    close.querySelector('.bi-x').onclick = () =>{
        close.classList.remove('active');
        previewcontainer.style.display = 'none';
    }
});

let cartClick = document.querySelector('#cart-click');
let cart = document.querySelector('.cart');
let cancel = document.querySelector('.cancel');

cartClick.onclick = () =>{
    cart.classList.add('active');
}
cancel.onclick = () =>{
    cart.classList.remove('active');
}

if(document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded",ready);
}else{
    ready();
}

function ready(){
    var removeCardButtons = document.getElementsByClassName('cart-remove');
    console.log(removeCardButtons);

    for(var i = 0; i < removeCardButtons.length; i++){
        var button = removeCardButtons[i];
        button.addEventListener('click',removeCardItem);
    }

    var QuantityInputs = document.getElementsByClassName('cart-quantity');
    for(var i = 0; i < QuantityInputs.length; i++){
        var input = QuantityInputs[i];
        input.addEventListener("change", quantityChanged)
    }

    var addCart = document.getElementsByClassName('add-to-cart');
    for(var i = 0; i < addCart.length; i++){
        var button = addCart[i];
        button.addEventListener('click', addCartClicked);
    }

    //Buy Button
    document.getElementsByClassName('buy-now')[0].addEventListener('click',buyButtonClicked);

}

function buyButtonClicked(){
    alert('Your order is placed');
    var cartContent = document.getElementsByClassName('cart-content')[0];
    while(cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild);
    }
    updateTotal();
}
function quantityChanged(event){
    var input = event.target;
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1;
    }
    updateTotal();
}
function removeCardItem(event){
    var ButtonClicked = event.target;
    ButtonClicked.parentElement.remove();
    updateTotal();
}

function updateTotal(){
    var cartContent = document.getElementsByClassName('cart-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cart-box');
    var total = 0;
    for (var i = 0 ; i < cartBoxes.length ; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName('cart-price')[0];
        var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
        var price = parseInt(priceElement.innerText.replace('Rp',''));
        var quantity = quantityElement.value;
        total = total + (price * quantity);
        }
        document.getElementsByClassName('total-price')[0].innerText = 'Rp' + total;
}
function addCartClicked(event){
    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName('product-title')[0].innerText;
    var price = shopProducts.getElementsByClassName('preview-harga')[0].innerText;
    var productImg = shopProducts.getElementsByClassName('product-image')[0].src;
    addProductToCart(title,price,productImg);
    updateTotal();
}

function addProductToCart(title,price,productImg){
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add('cart-box');
    var cartItems = document.getElementsByClassName('cart-content')[0];
    var cartItemsNames = cartItems.getElementsByClassName('cart-product-title');
    for(var i = 0; i < cartItemsNames.length; i++){
        if(cartItemsNames[i].innerText == title){
            alert('You have already add this item to cart');
            return;
        }
    }


var cartBoxContent = `
<img class="cart-img" src="${productImg}" alt="">
<div class="cart-details">
  <div class="cart-product-title fw-bold">${title}</div>
  <div class="cart-price">${price}</div>
  <input type="number" class="cart-quantity" value="1" min="1">
</div>
<i class="cart-remove bi bi-trash-fill"></i>`;

cartShopBox.innerHTML = cartBoxContent;
cartItems.append(cartShopBox);
cartShopBox
    .getElementsByClassName('cart-remove')[0]
    .addEventListener('click', removeCardItem);
cartShopBox
    .getElementsByClassName('cart-quantity')[0]
    .addEventListener('change', quantityChanged);
}

