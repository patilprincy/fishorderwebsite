<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

let carts = document.querySelectorAll('.add');

let products = [
    {
        name: 'White Pomfret' ,
        tag: 'rawfish',
        price: 600.00,
        incart: 0,

    },
    {
        name: 'Bata fish' ,
        tag: 'rawfish1',
        price: 200.00,
        incart: 0,

    },
    {
        name: 'Fresh Rohu Fish' ,
        tag: 'rawfish2 ',
        price: 200.00,
        incart: 0,

    },
    {
        name: 'seabass' ,
        tag: 'rawfish3 ',
        price: 500.00,
        incart: 0,

    },
    {
        name: 'Sea White Prawns' ,
        tag: 'prawns',
        price: 339.00,
        incart: 0,

    },
    {
        name: 'Tiger Prawns' ,
        tag: 'prawns1',
        price: 200.00,
        incart: 0,

    },
    {
        name: 'Freshwater Prawns(Jhinga)' ,
        tag: 'prawns2 ',
        price: 559.00,
        incart: 0,

    },
    {
        name: 'Witch Shrimp' ,
        tag: 'prawns3',
        price: 439.00,
        incart: 0,

    },
    {
        name: 'Dried Big Squid' ,
        tag: 'dryfish',
        price: 600.00,
        incart: 0,

    },
    {
        name: 'Tread Fin Bream Dried Fish' ,
        tag: 'dryfish1',
        price: 200.00,
        incart: 0,

    },
    {
        name: 'Dried Tiny Shrimps' ,
        tag: 'dryfish2 ',
        price: 200.00,
        incart: 0,

    },
    {
        name: 'Dried Bombay Duck' ,
        tag: 'dryfish3',
        price: 100.00,
        incart: 0,

    },
    {
        name: 'fried red snapper' ,
        tag: 'Fryfish',
        price: 439.00,
        incart: 0,

    },
    {
        name: 'Prawn Fish Fry' ,
        tag: 'Fryfish1',
        price: 150.00,
        incart: 0,

    },
    {
        name: 'Tawa Pomfret' ,
        tag: 'Fryfish2',
        price: 500.00,
        incart: 0,

    },
    {
        name: 'Bombay duck rawa fry' ,
        tag: 'Fryfish3',
        price: 150.00,
        incart: 0,

    },
    {
        name: 'Black Pomfret' ,
        tag: 'cutinpieces',
        price: 609.00,
        incart: 0,

    },
    {
        name: 'Double Dotted Queen Fish' ,
        tag: 'cutinpieces1',
        price: 349.00,
        incart: 0,

    },
    {
        name: 'Seer (Vanjaram/Surmai)' ,
        tag: 'cutinpieces2 ',
        price: 899.00,
        incart: 0,

    },
    {
        name: 'HeadPearl Spot (Karimeen)' ,
        tag: 'cutinpieces3',
        price: 509.00 ,
        incart: 0,

    },
    {
        name: 'Catfish eggs' ,
        tag: 'FishEggs',
        price: 50.00 ,
        incart: 0,

    },
    {
        name: 'Salmon Roe ',
        tag: 'FishEggs1',
        price: 649.00,
        incart: 0,

    },
    {
        name: 'Seer Fish eggs ' ,
        tag: 'FishEggs2',
        price: 499.00,
        incart: 0,

    },
    {
        name: 'Sail Fish Egg (Roe)' ,
        tag: 'FishEggs3',
        price: 209.00,
        incart: 0,

    },
    {
        name: 'King Size Lobster' ,
        tag: 'lobster',
        price: 1600.00,
        incart: 0,

    },
    {
        name: 'Lobster Fish' ,
        tag: 'lobster1',
        price: 1400.00,
        incart: 0,

    },
    {
        name: 'Brown Fresh Sea Lobsters' ,
        tag: 'lobster2',
        price: 600.00,
        incart: 0,

    },
    {
        name: 'Rock Lobster' ,
        tag: 'lobster3',
        price: 1050.00 ,
        incart: 0,

    },
    

]

for (let i=0 ; i< carts.length; i++){
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i])
     
    })
}
function onLoadcartNumbers() {
 
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){
        document.querySelector('.cart span').textcontent = productNumbers;

    }

}


function cartNumbers(product){

   

    let productNumbers = localStorage.getItem('cartNumbers');
  

    productNumbers = parseInt( productNumbers);

    if(productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textcontent = productNumbers + 1;

    }else{
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textcontent = 1;

    }
    setItems(product);
}
function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse( cartItems);
    console.log("my cartitems are", cartItems );

    if( cartItems != null){
        if(cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].incart  += 1;
    }else{

        product.incart = 1; 
        cartItems = {
            [product.tag]: product
      }
    }
    localStorage.setItem("productsInCart", JSON.stringify (cartItems));
    


}
function totalCost(product){
    //console.log("the toal price is", product.price);
    let cartCost = localStorage.getItem('totalCost');
    console.log("my cartcost is", cartCost);
    console.log(typeof cartCost);

    if(cartCost != null){
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    }else{
        localStorage.setItem("totalCost", product.price);
    }
function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
   let productContainer = document.querySelector(".product-container");


    if(cartItems && productContainer){
        console.log("runing");
    }
}

}
onLoadcartNumbers();
