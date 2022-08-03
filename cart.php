<!DOCTYPE HTML>
<HTML lang="en">
<head>
	<meta charset ="UTF-8">
	<title>online fish order and delivery system </title>
	<link rel="stylesheet" href="home.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<style>
    a{
        color: black;
    }
	/* (A) ENTIRE PAGE */
#cart-wrap {
  font-family: arial, sans-serif;
  display: flex;
  margin: 0 auto;
  max-width: 1000px;
}
#cart-products, #cart-items {
  box-sizing: border-box;
  padding: 10px;
}
#cart-products { width: 70%; }
#cart-items { width: 30%; }
input.cart, button.cart {
  padding: 10px;
  border: 0;
  background: #ff4316;
  color: #fff;
  font-weight: 700;
  cursor: pointer;
}

/* (B) PRODUCTS LIST */
#cart-products {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 10px;
}
.p-item {
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  text-align: center;
}
.p-img { max-width: 150px; }
.p-name, .p-price { font-weight: 700; }
.p-name, .p-desc, .p-price { margin: 5px 0; }
.p-name { text-transform: uppercase; }
.p-desc {
  color: #aaa;
  font-size: 0.9em;
}
.p-price { font-size: 1.35em; }
input.p-add { width: 70%; }

/* (C) CURRENT SHOPPING CART */
#cart-items {
  background: #31394d;
  color: #fff;
  border-radius: 5px;
}
.c-item {
  padding: 10px 0;
  display: flex;
  flex-wrap: wrap;
}
.c-item > * { box-sizing: border-box; }
.c-name, .c-total, input.c-empty, input.c-checkout { width: 100%; }
.c-total, input.c-empty, input.c-checkout { margin-top: 10px; }
.c-del { width: 25%; }
.c-qty { width: 75%; }
.c-total {
  font-weight: 700;
  font-size: 1.2em;
}

/* (D) RESPONSIVE */
@media screen AND (max-width: 768px) {
  #cart-wrap { grid-template-columns: 60% 40%; }
  #cart-products { grid-template-columns: auto; }
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
</head>
<body>
<div class="header">
  <div class="container">
		
		<div class="navbar">
			<div class="logo">
		  <img src="image\logo1.jpg" width="125px">
		 
			</div>
			<nav>
			<ul>
				<li><a href="home.html">Home</a></li>
					<li><a href="product.html">Products</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="login.php">Account</a></li>
					<li><a href="aboutus.html">About Us</a></li>
			<li class="cart">
			<a href="cart.php">
			<i class="fa fa-shopping-basket" aria-hidden="true"></i> Cart<span>0</span>
			</a></li>
			</ul>
			</nav>
			</div>
		</div>
      </div>
     </div>
   </div>
   <!---cart-->
   

   <!--------footer------>
 <div class="footer">
    <div class="container">
	   <div class="row">
	     <div class="footer-col-1">
		 <h3> Download Our App</h3>
		 <p>download app for android mobile phone</p>
		 <div class="app-logo">
		    <img src="image\applogo2.png">
			<img src="image\applogo1.png">
	     </div>
		 </div>
	     <div class="footer-col-2">
		   <img src="image\logo1.jpg">
		 <p>India's No. 1 in Fresh 
		  & Natural Fish and Meat. <br>Delicious & 0% Chemical. 
		  Order Online Now. <br> Loin-cuts, Cubes, Fillets, 
		  Cleaned, Curry-cut, Whole</p>
		 </div>
		 <div class="footer-col-3">
		    <h3> Useful links</h3>
			<ul>
			<li>Why freshfish?</li>
            <li>Refer and Earn</li>
            <li>Careers</li>
            <li>BLOG</li>
			</ul>
		 </div>
		
		 <div class="footer-col-4">
		    <h3> Follow us on</h3>
			<ul>
			<li>Instagram</li>
            <li>Facebook</li>
            <li>Twitter </li>
            <li>Youtube</li>
			</ul>
		 </div>
	   </div>
	   <hr>
	   <p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i></p> copyright 2020 - Shop Fresh fish</p>
	  </div>
	   
	</div>
 </div>
 
</body>
</HTML>