<?php
session_start();
?>
<! DOCTYPE HTML>
<HTML lang="en">
<head>
	<meta charset ="UTF-8">
	<title>online fish order and delivery system </title>
	<link rel="stylesheet" href="home.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
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
.portfolioContainer  .ImageCol {
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

.btn .active {
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
section ul li.active {
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
}

.list:hover {
  background-color: #ddd;
}

.list.active {
  background-color: #666;
  color: white;
}
.account-page{
    padding:  50px 0;
    background:  #fe7250;
}
a{
    color: salmon;
}
.form-cantainer{
    background: #fff;
    width: 350px;
    height: 400px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    margin: auto;
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}
.form-cantainer span{
    font-weight: bold;
    padding: 0 10px ;
    color: #555;
    cursor: pointer ;
    width: 100px;
    display:  inline-block;
}
.form-btn{
    display: inline-block;
    color: black;
	Padding-top: 10px;
	align-items: center;
}
.form-cantainer form{
    max-width: 300px;
    padding: 0 20px;
    position: absolute ;
    top: 100px;
    transition: transform 1s;
}
form input{
    width: 300px;
    height: 30px;
    margin: 10px 0;
    padding: 0 20px;
    border: 1px solid #ccc;
	border-radius: 15px;


}

form .btn{
    width: 300px;
    border: none;
    cursor: pointer;
    margin: 10px 0;
}
form .btn:focus{
    outline: none;
}
#Loginform{
    left: -350px;
}
#RGform{
    left: 0;
}
form a{
    font-size:  12px;
    color: black;
}
#Indicator{
    width: 100px;
    border: none;
    height: 3px;
    background: #ff523b;
    margin-top: 10px;
	align-items: center;
   
}

.btn{
    color: black;
	
}

 

</style>
</head>
<body>


<?php

include 'dbconfig.php';

if(isset($_POST['submit'])){

	$email= ( $_POST['email']);
	$password= ( $_POST['password']);
	
	$email_search = "SELECT * FROM registeration where email = '$email'";
	$query = mysqli_query($con, $email_search);
	
	$email_count= mysqli_num_rows($query);
	
	if($email_count){
		$email_pass = mysqli_fetch_assoc($query);
		
		$db_pass = $email_pass['password'];
		
		$_SESSION['email'] = $email_pass['email'];
		
		
		$pass_decode = password_verify($password, $db_pass);
		
		if($pass_decode){
			echo "login sucessful";
			?>
			<script>
			location.replace("home.php")
			</script>
			<?php
		}else{
			echo "password incorrect";
		}
	}else{
		echo "invalid email";
	}
 }
?>
<!---header---->
<div class="header">
    <div class="container">
	 <div class=" navbar">
			<div class="logo">
		     <img src="image\logo1.jpg" width="125px">
	        </div>
			<nav>
			<ul>
				<li><a href="code\home.html">Home</a></li>
					<li><a href="code\product.html">Products</a></li>
					<li><a href="code\contact.html">Contact</a></li>
					<li><a href="code\login.htmml">Account</a></li>
					<li><a href="code\aboutus.html">About Us</a></li>
			</ul>
			</nav>
			<?php
			 
		      echo  "<a href='mycart.php'><img src='image/cart.png' width='30px'/></a>";
			  
			 ?>
     </div>
	</div>		
      
 </div>
<!---login---->
<div class="account-page">
    <div class="cantainer">
        <div class="row">
            <div class="col-2">
                <div class="form-cantainer">
                    <div class="form-btn">
                        <span onclick="register()">Login</span>
                        <hr id="Indicator">

                    </div>
                    <form id="RGform" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" >
                        
                        <input type="email" placeholder="email" name="email" required>
                        <input type="password" placeholder="Password" name="password" required><br><br>
						
                        <button type="submit" class="btn" name="submit"> Login </button>
						<a href="registration.php" class="btn" > New User? </a> 
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
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
	   <p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i> copyright 2020 - Shop Fresh fish</p>
	  </div>
	 
	</div>
 </div>

 
</body>
</html>
