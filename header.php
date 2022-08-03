
<!DOCTYPE HTML>
<HTML lang="en">
<head>
	<meta charset ="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>online fish order and delivery system </title>
	
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
a{
	color:black;
}
</style>
</head>
<body>
<!---header---->
<div class="header">
    <div class="hcontainer">
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
			<i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart<span>0</span>
			</a></li>
			</ul>
			</nav>
			
     </div>
	</div>		
      
 </div>