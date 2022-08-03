<!DOCTYPE HTML>
<HTML lang="en">
<head>
	<meta charset ="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>online fish order and delivery system </title>
	<link rel="stylesheet" type="text/css"  href="home.css">
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
.img {
   width: 100%;
   cursor: pointer;
   
}
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}
.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
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
.product-item">{
	box-shadow: 0 0 20px 0px rgba(0,0,0,0.3);
	cursor: pointer;
}
.product-img {
	 border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}



</style>
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
			<a href="cart.html" >
			<i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart
			</a></li>
			</ul>
			</nav>
			
     </div>
	</div>		
      
 </div>





<div id="product-grid">
	<h1 class="title"> All Product</h1>
<div class="main>
<!---rawfish-->
<div class="row">
	<div class="column">

		<div class="content">
			<img src="image\rawfish3.jpg" id="<?php echo "rawfish";?>"
				class="product-img">
		
		<div>
			<strong><?php echo "White Pomfret";?></strong>
		</div>
		<div class="product-price"><?php echo "600.00";?></div>

		<input type="button" id="add_<?php echo "rawfish";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "rawfish";?>','<?php echo "White Pomfret";?>','<?php echo "600.00";?>')" />

	</div>
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="image\rawfish1.jpg" id="<?php echo "rawfish1";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Bata fish (Cleaned)";?></strong>
		</div>
		<div class="product-price"><?php echo "200.00";?></div>

		<input type="button" id="add_<?php echo "rawfish1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "rawfish1";?>','<?php echo "Bata fish (Cleaned)";?>','<?php echo "200.00";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="image\rawfish6.jpg" id="<?php echo "rawfish2";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Fresh Rohu Fish";?></strong>
		</div>
		<div class="product-price"><?php echo "200.00";?></div>

		<input type="button" id="add_<?php echo "rawfish2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "rawfish2";?>','<?php echo "Fresh Rohu Fish";?>','<?php echo "200.00";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="image\rawfish7.jpg" id="<?php echo "rawfish3";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "seabass";?></strong>
		</div>
		<div class="product-price"><?php echo "500.00";?></div>

		<input type="button" id="add_<?php echo "rawfish3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "rawfish3";?>','<?php echo "seabass";?>','<?php echo "500.00";?>')" />
	</div>
</div>
	<!---prawns-->
	<div class="product-item">
		<div class="product-image">
			<img src="data/camera.jpg" id="<?php echo "3DcAM01";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "FinePix Pro2 3D Camera";?></strong>
		</div>
		<div class="product-price"><?php echo "1500.00";?></div>

		<input type="button" id="add_<?php echo "3DcAM01";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "3DcAM01";?>','<?php echo "FinePix Pro2 3D Camera";?>','<?php echo "1500.00";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/watch.jpg" id="<?php echo "wristWear03";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Luxury Ultra thin Wrist Watch";?></strong>
		</div>
		<div class="product-price"><?php echo "300.00";?></div>

		<input type="button" id="add_<?php echo "wristWear03";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "wristWear03";?>','<?php echo "Luxury Ultra thin Wrist Watch";?>','<?php echo "300.00";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/laptop.jpg" id="<?php echo "LPN45";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "XP 1155 Intel Core Laptop";?></strong>
		</div>
		<div class="product-price"><?php echo "800.00";?></div>

		<input type="button" id="add_<?php echo "LPN45";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "LPN45";?>','<?php echo "XP 1155 Intel Core Laptop";?>','<?php echo "800.00";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/laptop.jpg" id="<?php echo "LPN45";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "XP 1155 Intel Core Laptop";?></strong>
		</div>
		<div class="product-price"><?php echo "800.00";?></div>

		<input type="button" id="add_<?php echo "LPN45";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "LPN45";?>','<?php echo "XP 1155 Intel Core Laptop";?>','<?php echo "800.00";?>')" />
	</div>
</div>
</div>
