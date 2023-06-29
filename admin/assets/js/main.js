const OpenCart = document.getElementById("cart-icon");
const cart = document.querySelector( '.cart');
const closeCart = document.querySelector('#close-cart');
var cartQuantityItem = document.getElementsByClassName('cart-quantity');
var removeCartItemBtn = document.getElementsByClassName('cart-remove')
var addToCartButtons = document.getElementsByClassName('add-cart')

    //cart
    OpenCart.addEventListener('click',() =>{cart.classList.add('activate-cart'); });
    closeCart.addEventListener('click',() =>{ cart.classList.remove('activate-cart');});


if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready()
}


function ready() {
  //remove cart item
    for (var i = 0; i < removeCartItemBtn.length; i++) {
        var button = removeCartItemBtn[i];
        button.addEventListener('click', removeCartItem)
    }
    
    //cahange quantity
    for (var i = 0; i < cartQuantityItem.length; i++) {
        var input = cartQuantityItem[i];
        input.addEventListener('change', quantityChanged)
     }

     //add to cart
     for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i];
        button.addEventListener('click', addTocart)
     }

 }

//functions

//removing cart ite
function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.parentElement.remove()
    updateCartTotal()
    
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

//add to cart
function addTocart(event) {
    var button = event.target
    var product = button.parentElement.parentElement
    var title = product.getElementsByClassName('product-title')[0].innerText
    var price = product.getElementsByClassName('price')[0].innerText
    var image = product.getElementsByClassName('product-img')[0].src
    addItem(title, price, image);
    
}

function addItem(title, price, image){
    var cartBox = document.createElement('div')
    cartBox.classList.add('cart-box')
    var cartContent = document.getElementsByClassName('cart-content')[0]
    var cartItemTitles = cartContent.getElementsByClassName('cart-product-title')
    for (var i = 0; i < cartItemTitles.length; i++) {
        if (cartItemTitles[i].innerText == title) {
            alert('Item already added to cart')
            return
        }
        
    }
    var cartBoxContents = ` <img src="${image}" alt="product Image" class="cart-img img-fluid">
                              <div class="detail-box">
                                  <div class="cart-product-title">${title}</div>
                                  <div class="product-price fw-bold text-dark">UGX ${price}</div>
                                  <input type="number" value="1" class="cart-quantity">
                               </div>
    
                               <div class="cart-remove">
                                <i class="fas fa-trash "></i>
                              </div> `
    cartBox.innerHTML = cartBoxContents
    cartContent.append(cartBox)
    alert(`${title} added to Cart`)
    updateCartTotal()
    cartBox.getElementsByClassName('cart-remove')[0].addEventListener('click', removeCartItem)
    cartBox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantityChanged)
}

//updating total
function updateCartTotal(){
    var cartContent = document.getElementsByClassName('cart-content')[0]
    var cartItems = cartContent.getElementsByClassName('cart-box')
    var total = 0
    for (var j = 0; j < cartItems.length; j++) {
        var cartItem = cartItems[j];
        var priceElement = cartItem.getElementsByClassName('product-price')[0]
        var quantityElement = cartItem.getElementsByClassName('cart-quantity')[0]
        var price = parseFloat(priceElement.innerText.replace('UGX', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
      }
      total = Math.round(total * 100)/100
      document.getElementsByClassName('total-price')[0].innerText = 'UGX' + ' ' + total
    
}






































