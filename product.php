<?php
session_start();
if (isset($_POST["checkout-btn"])) {
    $order_number = rand(100, 999);
}
?>
<!DOCTYPE HTML>
<HTML lang="en">
<head>
	<meta charset ="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>online fish order and delivery system </title>
	<link rel="stylesheet" type="text/css"  href="home.css">
	<script src="./vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="./vendor/jquery/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	
<style>
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
.navbar{
	display: flex ;
	align-items: center;
	padding: 10px;
}
body{
padding: 10px;
}
nav{
	flex: 1;
	text-align: right;
}
nav ul{
	display: inline-block;
	list-style-type: none;
}
nav ul li{
	display: inline-block;
	margin-right:20px;
}
a{
	text-decoration: none;
	color: black;
}
h1 {
   font-size: 50px;
   text-align: center;
   font-family: monospace, serif, sans-serif;
}
body {
   background-color: #f1f1f1;
   padding: 20px;
   font-family: Arial;
}
main {
   max-width: 1000px;
   margin: auto;
}
.img {
   width: 100%;
   cursor: pointer;
   
}
.portfolioContainer {
   margin: 8px -16px;
}
.portfolioContainer,
.portfolioContainer > .ImageCol {
   padding: 8px;
}
.ImageCol {
   float: left;
   width: 25%;
}
.portfolioContainer:after {
   content: "";
   display: table;
   clear: both;
}
.portfolioContent {
   background-color: white;
   padding: 10px;
}
@media screen and (max-width: 900px) {
.ImageCol {
   width: 50%;
}
}
@media screen and (max-width: 600px) {
.ImageCol {
   width: 100%;
}
}
.portfolioContent{
	transform: transform 0.5s;
	}
.portfolioContent:hover{
	transform: translateY(-7px);
}
.Products{
  display:block;
color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
section ul{
display: flex;
margin-bottom: 10px;
}
section ul li{
list-style: none;
background: #eee;
padding:8px 20px;
margin: 5px;
letter-spacing: 1px;
cursor: pointer;
}
section ul li.active{
background: #03a9f4;
color: #fff;
}
/* The "show" class is added to the filtered elements */
.Products {
  display: block;
}
/* Style the buttons */
.list {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
  color:black;
}

.list:hover {
  background-color: #fe7250;
}

.list.active {
  background-color: #666;
  color: white;
}
.add:link, .add:visited {
  background-color: white;
  color: black;
  border: 2px solid #fe7250;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.add:hover, .add:active {
  background-color: #fe7250;
  color: white;
  text
}
.btnAddAction{
	 border: 2px solid black;
  background-color: white;
  color: black;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  border-color: #fe7250;
  color: #fe7250;
}
.btnAddAction:hover{
	background-color: #fe7250;
  color: white;
}

</style>
</head>
<body>
<!---header---->
<div class="header">
    <div class="container">
	 <div class=" navbar">
			<div class="logo">
		     <img src="image\logo1.jpg" width="125px">
	        </div>
			<nav>
			<ul>
				    <li><a href="home.html">Home</a></li>
					<li><a href="product.html">Products</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="login.php">Account</a></li>
					
			<li class="cart">
			<a href="myaddcart.php" >
			<i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart
			</a></li>
			</ul>
			</nav>
			
     </div>
	</div>		
      
 </div>
<!---all product----->
<h1 class="title"> All Products</h1>

	</ul><br><br>
<div data-role="controlgroup" data-type="horizontal" id="myBtnContainer">
		<button class="list active"><a href="product.html">All Products </a></button>
		<button class="list" ><a href="Rawfish.html">Rawfish </a> </button>
		<button class="list" ><a href="Prawns.html">Prawns </a></button>
		<button class="list" ><a href="Dryfish.html">Dryfish </a></button>
		<button class="list" ><a href="Fryfish.html">Fryfish </a></button>
		<button class="list" ><a href="Fish-cut-in-pieces.html">Fish-cut-in-pieces </a></button>
		<button class="list" ><a href="Fish-Eggs.html">Fish-Eggs </a></button>
		<button class="list" ><a href="Lobster.html">Lobster</a></button>
		
</div>	
<form name="one-page-checkout-form" id="one-page-checkout-form"
			action="" method="post" onsubmit="return checkout()">
<!---rawfish-->
<div class="portfolioContainer">
<div class="ImageCol Rawfish" >
<div class="portfolioContent" >
<img class="img" src="image\rawfish3.jpg" />
<h3>White Pomfret</h3>
<p>Found in the muddy bottoms, this ubitquitously loved fish is full of flavour.<br>
MRP:Rs 600.00</p><br>
<input type="button" id="add_<?php echo "rawfish";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "rawfish";?>','<?php echo "White Pomfret";?>','<?php echo "600.00";?>')" />

	
</div>
</div>
<div class="ImageCol Rawfish">
<div class="portfolioContent">
<img class="img" src="image\rawfish1.jpg" />
<h3>Bata fish (Cleaned)</h3>
<p>Bata fish is a fish in genus Labeo.
<br><br><br>
 MRP:Rs 200.00</p><br>
<input type="button" id="add_<?php echo "rawfish1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "rawfish1";?>','<?php echo "Bata fish (Cleaned)";?>','<?php echo "200.00";?>')" />
	
</div>
</div>
<div class="ImageCol ">
<div class="portfolioContent">
<img class="img Rawfish" src="image\rawfish6.jpg" />
<h3>Fresh Rohu Fish</h3>
<p>Fresh Rohu Fish / 500 Grm,Order online<br> Raw Chicken & Raw Mutton Home Delivery 
<br>
  MRP:Rs 200.00</p><br>
<input type="button" id="add_<?php echo "rawfish2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "rawfish2";?>','<?php echo "Fresh Rohu Fish";?>','<?php echo "200.00";?>')" />
	
</div>
</div>
<div class="ImageCol Rawfish">
<div class="portfolioContent">
<img class="img" src="image\rawfish7.jpg" />
<h3><br>seabass</h3>
<p>Two raw seabass with spices on an<br> old wooden background.<br><br>
  MRP:Rs 500.00</p><br>
<input type="button" id="add_<?php echo "rawfish3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "rawfish3";?>','<?php echo "seabass";?>','<?php echo "500.00";?>')" />
	
</div>
</div>
</div>
<!---prawns-->
<div class="portfolioContainer">
<div class="ImageCol Prawns" >
<div class="portfolioContent" >
<img class="img" src="image\prawn11.jpg" />
<h3>Sea White Prawns</h3>
<p>Order Sea White Prawns 40C - 60C, cleaned & deveined , without tail<br><br><br>
MRP:Rs 339.00</p><br>
<input type="button" id="add_<?php echo "prawns";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "prawns";?>','<?php echo "Sea White Prawns";?>','<?php echo "339.00";?>')" />
	
</div>
</div>
<div class="ImageCol Prawns">
<div class="portfolioContent">
<img class="img" src="image\prawn12.jpg" />
<h3>Tiger Prawns</h3>
<p> It has white flesh, and firm yet tender, moist taste. It is available peeled & deveined.
<br><br><br>
 MRP:Rs 559.00</p><br>
<input type="button" id="add_<?php echo "prawns1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "prawns1";?>','<?php echo "Tiger Prawns";?>','<?php echo "559.00";?>')" />
	
</div>
</div>
<div class="ImageCol Prawns">
<div class="portfolioContent">
<img class="img" src="image\prawn13.jpg" />
<h3>Freshwater Prawns(Jhinga)</h3>
<p>It has a firm and moist texture, ideal for curries, stir fry and biryanis.
<br><br><br>
  MRP:Rs 169.00</p><br>
<input type="button" id="add_<?php echo "prawns2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "prawns2";?>','<?php echo "Freshwater Prawns(Jhinga)";?>','<?php echo "169.00";?>')" />
	
</div>
</div>
<div class="ImageCol Prawns">
<div class="portfolioContent">
<img class="img" src="image\prawn14.jpg" />
<h3><br>Witch Shrimp</h3>
<p> Enjoy Witch Shrimp 30C-50C, cleaned & deveined, without tail.<br><br>
  MRP:Rs 335.00</p><br>
<input type="button" id="add_<?php echo "prawns3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "prawns3";?>','<?php echo "Witch Shrimp";?>','<?php echo "335.00";?>')" />
	
</div>
</div>
</div>
<!---dryfish-->
<div class="portfolioContainer">
<div class="ImageCol Dryfish" >
<div class="portfolioContent" >
<img class="img" src="image\dryfish1.jpg" />
<h3>Dried Big Squid</h3>
<p>Dried Big Size Squid, Sun dried and salted,<br><br><br>
MRP:Rs 439.00</p><br>
<input type="button" id="add_<?php echo "dryfish";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "dryfish";?>','<?php echo "Dried Big Squid";?>','<?php echo "439.00";?>')" />
	
</div>
</div>
<div class="ImageCol Dryfish">
<div class="portfolioContent">
<img class="img" src="image\dryfish2.jpg" />
<h3>Tread Fin Bream Dried Fish</h3>
<p> Tread Fin Bream or Yellow Belly Tread Fin sun dried fish.
<br><br><br>
 MRP:Rs 200.00</p><br>
<input type="button" id="add_<?php echo "dryfish1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "dryfish1";?>','<?php echo "Tread Fin Bream Dried Fish";?>','<?php echo "200.00";?>')" />
	
</div>
</div>
<div class="ImageCol Dryfish">
<div class="portfolioContent">
<img class="img" src="image\dryfish3.jpg" />
<h3>Dried Tiny Shrimps</h3>
<p>Tiny Shrimps, freshly harvested and sun dried on board vessels.
<br><br><br>
  MRP:Rs 169.00</p><br>
<input type="button" id="add_<?php echo "dryfish2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "dryfish2";?>','<?php echo "Dried Tiny Shrimps";?>','<?php echo "169.00";?>')" />
	
</div>
</div>
<div class="ImageCol Dryfish">
<div class="portfolioContent">
<img class="img" src="image\dryfish4.jpg" />
<h3><br>Dried Bombay Duck</h3>
<p> Dry Bombay Duck 50 gms ( NEAT & CLEAN PACK )<br><br>
  MRP:Rs 100.00</p><br>
<input type="button" id="add_<?php echo "dryfish3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "dryfish3";?>','<?php echo "Dried Bombay Duck";?>','<?php echo "100.00";?>')" />
	
</div>
</div>
</div>
<!---Fryfish-->
<div class="portfolioContainer">
<div class="ImageCol Fryfish" >
<div class="portfolioContent" >
<img class="img" src="image\fry1.jpg" />
<h3>fried red snapper</h3>
<p> fried red snapper. Entire fresh fish fried and served with yuca and salad. <br><br>
MRP:Rs 439.00</p><br>
<input type="button" id="add_<?php echo "Fryfish";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fryfish";?>','<?php echo "fried red snapper";?>','<?php echo "439.00";?>')" />
	
</div>
</div>
<div class="ImageCol Fryfish">
<div class="portfolioContent">
<img class="img" src="image\fry2.jpg" />
<h3>Prawn Fish Fry</h3>
<p> These gorgeous crispy fried prawns are not only a delight to your eyes
<br><br>
 MRP:Rs 150.00</p><br>
<input type="button" id="add_<?php echo "Fryfish1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fryfish1";?>','<?php echo "Prawn Fish Fry";?>','<?php echo "150.00";?>')" />
	
</div>
</div>
<div class="ImageCol Fryfish">
<div class="portfolioContent">
<img class="img" src="image\fry3.jpg" />
<h3>Tawa Pomfret</h3>
<p>Full of flavor and super easy to make, this Pomfret Fry
<br><br>
  MRP:Rs 500.00</p><br>
<input type="button" id="add_<?php echo "Fryfish3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fryfish3";?>','<?php echo "Tawa Pomfret";?>','<?php echo "500.00";?>')" />
	
</div>
</div>
<div class="ImageCol Fryfish">
<div class="portfolioContent">
<img class="img" src="image\fry4.jpg" alt="" />
<h3><br>Bombay duck rawa fry</h3>
<p> Bombil fry tastes best when served with dal chawal.<br><br>
  MRP:Rs 150.00</p><br>
<input type="button" id="add_<?php echo "";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "";?>','<?php echo "Bata fish (Cleaned)";?>','<?php echo "200.00";?>')" />
	
</div>
</div>
</div>
<!---Fish-cut-in-pieces-->
<div class="portfolioContainer">
<div class="ImageCol Fish-cut-in-pieces" >
<div class="portfolioContent" >
<img class="img" src="image\cut11.jpg" />
<h3>Black Pomfret</h3>
<p> The bony Black Pomfret Steaks come with the skin intact.  <br><br>
MRP:Rs 609.00</p><br>
<input type="button" id="add_<?php echo "Fish-cut-in-pieces";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fish-cut-in-pieces";?>','<?php echo "Black Pomfret";?>','<?php echo "609.00";?>')" />
	
</div>
</div>
<div class="ImageCol Fish-cut-in-pieces">
<div class="portfolioContent">
<img class="img" src="image\cut12.jpg" />
<h3>Double Dotted Queen Fish</h3>
<p> Also known as Talang fish, these fast-swimming fish
<br><br>
 MRP:Rs 349.00</p><br>
<input type="button" id="add_<?php echo "Fish-cut-in-pieces1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fish-cut-in-pieces1";?>','<?php echo "Double Dotted Queen Fish";?>','<?php echo "349.00";?>')" />
	
</div>
</div>
<div class="ImageCol Fish-cut-in-pieces">
<div class="portfolioContent">
<img class="img" src="image\cut13.jpg" />
<h3>Seer (Vanjaram/Surmai) </h3>
<p>Also known as Seer Fish or King Fish, Surmai has a firm texture
<br><br>
  MRP:Rs 899.00</p><br>
<input type="button" id="add_<?php echo "Fish-cut-in-pieces2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fish-cut-in-pieces2";?>','<?php echo "Seer (Vanjaram/Surmai)";?>','<?php echo "899.00";?>')" />
	
</div>
</div>
<div class="ImageCol Fish-cut-in-pieces">
<div class="portfolioContent">
<img class="img" src="image\cut14.jpg" />
<h3>HeadPearl Spot (Karimeen)</h3>
<p> Establish your connection with Kerala cuisine with this gem.<br><br>
  MRP:Rs 509.00</p><br>
<input type="button" id="add_<?php echo "Fish-cut-in-pieces3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fish-cut-in-pieces3";?>','<?php echo "HeadPearl Spot (Karimeen)";?>','<?php echo "509.00";?>')" />
	
</div>
</div>
</div>
<!---Fish-Eggs-->
<div class="portfolioContainer">
<div class="ImageCol Fish-Eggs" >
<div class="portfolioContent" >
<img class="img" src="image\eggs1.jpg" />
<h3>Catfish eggs</h3>
<p> Catfish eggs are high in protein, fat and cholesterol  <br><br>
MRP:Rs 50.00</p><br>
<input type="button" id="add_<?php echo "Fish-Eggs";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fish-Eggs";?>','<?php echo "Catfish eggs";?>','<?php echo "50.00";?>')" />
	
</div>
</div>
<div class="ImageCol Fish-Eggs">
<div class="portfolioContent">
<img class="img" src="image\eggs2.jpg" />
<h3> Salmon Roe </h3>
<p>  every pound of salmon roe, you will get about 1/2 pound of salted or cured caviar.
<br><br>
 MRP:Rs 649.00</p><br>
<input type="button" id="add_<?php echo "Fish-Eggs1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fish-Eggs1";?>','<?php echo "Salmon Roe";?>','<?php echo " 649.00";?>')" />
	
</div>
</div>
<div class="ImageCol Fish-Eggs">
<div class="portfolioContent">
<img class="img" src="image\eggs3.jpg" />
<h3>Seer Fish eggs </h3>
<p>
Amazing Seer Fish Egg (Roe)
Seer Fish / Neymeen / Surmai (Roe)
<br><br>
  MRP:Rs 499.00</p><br>
<input type="button" id="add_<?php echo "Fish-Eggs2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fish-Eggs2";?>','<?php echo "Seer Fish eggs";?>','<?php echo "499.00";?>')" />
	</div>
</div>
<div class="ImageCol Fish-Eggs">
<div class="portfolioContent">
<img class="img" src="image\eggs4.jpg" />
<h3>Sail Fish Egg (Roe)</h3>
<p> eggs are high in protein, fat and cholesterol <br><br>
  MRP:Rs 209.00</p><br>
<input type="button" id="add_<?php echo "Fish-Eggs3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "Fish-Eggs3";?>','<?php echo "Sail Fish Egg (Roe)";?>','<?php echo "209.00";?>')" />
	</div>
</div>
</div>
<!---lobster-->
<div class="portfolioContainer">
<div class="ImageCol Lobster" >
<div class="portfolioContent" >
<img class="img" src="image\lobater1.jpg" />
<h3>King Size Lobster</h3>
<p>   <br><br>
MRP:Rs 1,600.00</p><br>
<input type="button" id="add_<?php echo "lobster";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "lobster";?>','<?php echo "King Size Lobster";?>','<?php echo "1600.00";?>')" />
	</div>
</div>
<div class="ImageCol Lobster">
<div class="portfolioContent">
<img class="img" src="image\lobater2.jpg" />
<h3> Lobster Fish </h3>
<p>
<br><br>
 MRP:Rs 1,400.00</p><br>
<input type="button" id="add_<?php echo "lobster1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "lobster1";?>','<?php echo "Lobster Fish";?>','<?php echo "1400.00";?>')" />
	</div>
</div>
<div class="ImageCol Lobster">
<div class="portfolioContent">
<img class="img" src="image\lobater3.jpg" />
<h3>Brown Fresh Sea Lobsters </h3>
<p>

<br><br>
  MRP:Rs 600.00</p><br>
<input type="button" id="add_<?php echo "lobster2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "lobster2";?>','<?php echo "Brown Fresh Sea Lobsters ";?>','<?php echo "600.00";?>')" />
	</div>
</div>
<div class="ImageCol Lobster">
<div class="portfolioContent">
<img class="img" src="image\lobater4.jpg" />
<h3>Rock Lobster</h3>
<p> <br><br>
  MRP:Rs 1,050.00</p><br>
<input type="button" id="add_<?php echo "lobster3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "lobster3";?>','<?php echo "Rock Lobster";?>','<?php echo "1050.00";?>')" />
	</div>
</div>
</div>
</form>
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
	   <p class="copyright">&#169; copyright 2020 - Shop Fresh fish</p>
	  </div>
	   
	</div>
 </div>
<script src="./assets/js/cart.js"></script>
	<script>
	
function checkout() {

	var valid = true;
	
	$("#first-name").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#shopping-cart").removeClass("error-field");
	$("#cart-error-message").hide();
	
	var firstName = $("#first-name").val();
	var cartItem = $("#cart-item-count").val();
	var email = $("#email").val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#first-name-info").html("").hide();
	$("#email-info").html("").hide();

	if (firstName.trim() == "") {
		$("#first-name-info").html("required.").css("color", "#ee0000").show();
		$("#first-name").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if(cartItem == 0){
		$("#cart-error-message").show();
		$("#shopping-cart").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;	
}
</script>
</body>
</html>
