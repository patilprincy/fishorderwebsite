<!DOCTYPE HTML>
<HTML lang="en">
<head>
	<meta charset ="UTF-8">
	<title>online fish order and delivery system </title>
	<link rel="stylesheet" href="home.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    * {
  box-sizing: border-box;
}
body{
  
  padding: 20px;
}
    a{
        color: black;
    }
    .cart{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px ;
        background-color: #f1f1f1;
        max-width: 90%;
        margin: auto;
    }
    @media screen and (max-width: 600px) {
    .cart {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
hr.rounded {
  border-top: 5px solid #fe7250;
  border-radius: 5px;
}
hr.line{
    border-top: 3px solid #fe7250;
  border-radius: 5px;
}
.checked {
  color: orange;
}
.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}


/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
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
.img-magnifier-container {
  position:relative;
}

.img-magnifier-glass {
  position: absolute;
  border: 3px solid #000;
  border-radius: 50%;
  cursor: none;
  /*Set the size of the magnifier glass:*/
  width: 100px;
  height: 100px;
}


/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #fe7250;}
.bar-4 {width: 30%; height: 18px; background-color: #fe7250;}
.bar-3 {width: 10%; height: 18px; background-color: #fe7250;}
.bar-2 {width: 4%; height: 18px; background-color: #fe7250;}
.bar-1 {width: 15%; height: 18px; background-color: #fe7250;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}

</style>
<script>
    function magnify(imgID, zoom) {
      var img, glass, w, h, bw;
      img = document.getElementById(imgID);
      /*create magnifier glass:*/
      glass = document.createElement("DIV");
      glass.setAttribute("class", "img-magnifier-glass");
      /*insert magnifier glass:*/
      img.parentElement.insertBefore(glass, img);
      /*set background properties for the magnifier glass:*/
      glass.style.backgroundImage = "url('" + img.src + "')";
      glass.style.backgroundRepeat = "no-repeat";
      glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
      bw = 3;
      w = glass.offsetWidth / 2;
      h = glass.offsetHeight / 2;
      /*execute a function when someone moves the magnifier glass over the image:*/
      glass.addEventListener("mousemove", moveMagnifier);
      img.addEventListener("mousemove", moveMagnifier);
      /*and also for touch screens:*/
      glass.addEventListener("touchmove", moveMagnifier);
      img.addEventListener("touchmove", moveMagnifier);
      function moveMagnifier(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;
        /*prevent the magnifier glass from being positioned outside the image:*/
        if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
        if (x < w / zoom) {x = w / zoom;}
        if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
        if (y < h / zoom) {y = h / zoom;}
        /*set the position of the magnifier glass:*/
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        /*display what the magnifier glass "sees":*/
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
      }
      function getCursorPos(e) {
        var a, x = 0, y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return {x : x, y : y};
      }
    }
</script>
</head>
<body onload="slider()">
<div class="header">
  <div class="container">
		
		<div class="navbar">
			<div class="logo">
		  <img src="image\logo1.jpg" width="125px">
		 
			</div>
			<nav>
			<ul>
				<li><a href="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\code\home.html">Home</a></li>
					<li><a href="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\code\product.html">Products</a></li>
					<li><a href="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\code\contact.html">Contact</a></li>
					<li><a href="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\code\login.htmml">Account</a></li>
					<li><a href="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\code\aboutus.html">About Us</a></li>
			</ul>
			</nav>
			<img src="image\cart.png" width="30px" height="30px">
			</div>
		</div>
      </div>
     </div>
   </div>
  <!----productdetail-->
  <div class="smaall-container">
      <div class="cart">
      <div class="row prow">
         
          <div class="col2 img-magnifier-container">
              <img id="myimage" src="image\cfish3.jpg">

          </div>
          <div class="col2">
              <h1>Bombay Duck (Bombil) Medium - Whole, Cleaned</h1><br><hr class="rounded"><br>
              <p>Perfect for frying, this soft fleshy fish is loved by all. Thoroughly 
                  cleaned and gutted so you can enjoy <br>it every step of the way - from cooking to devouring it up!</p><br>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
              <h3>₹129.00</h3><br>
              <button class="btn1 buy" type="button"> Add to cart</button>
            
                    
               </div>
            </div><br>
           <hr class="line"><br>
<h3>User rating</h3>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
<br>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>
            </div>
      </div>
  </div><br>
  <!---product-->
  <h2 class="title">Related Products</h2>
  <div class="portfolioContainer">
    <div class="ImageCol Rawfish" >
    <div class="portfolioContent" >
    <img class="img" src="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\image\rawfish3.jpg" />
    <h3>White Pomfret</h3>
    <p>Found in the muddy bottoms, this ubitquitously loved fish is full of flavour.<br>
    MRP:Rs 600.00</p><br>
    <button class="btn1 buy" type="button"> Add to cart </button>
    </div>
    </div>
    <div class="ImageCol Rawfish">
    <div class="portfolioContent">
    <img class="img" src="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\image\rawfish1.jpg" />
    <h3>Bata fish (Cleaned)</h3>
    <p>Bata fish is a fish in genus Labeo.
    <br><br><br>
     MRP:Rs 200.00</p><br>
    <button class="btn1 buy" type="button"> Add to cart </button>
    </div>
    </div>
    <div class="ImageCol ">
    <div class="portfolioContent">
    <img class="img Rawfish" src="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\image\rawfish6.jpg" />
    <h3>Fresh Rohu Fish</h3>
    <p>Fresh Rohu Fish / 500 Grm,Order online<br> Raw Chicken & Raw Mutton Home Delivery 
    <br>
      MRP:Rs 200.00</p><br>
    <button class="btn1 buy" type="button"> Add to cart </button>
    </div>
    </div>
    <div class="ImageCol Rawfish">
    <div class="portfolioContent">
    <img class="img" src="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\image\rawfish7.jpg" />
    <h3><br>seabass</h3>
    <p>Two raw seabass with spices on an<br> old wooden background.<br><br>
      MRP:Rs 500.00</p><br>
    <button class="btn1 buy" type="button"> Add to cart </button>
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
		    <img src="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\image\applogo2.png">
			<img src="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\image\applogo1.png">
	     </div>
		 </div>
	     <div class="footer-col-2">
		   <img src="C:\Users\silve\OneDrive\Documents\Princy Project\IT project\image\logo1.jpg">
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
 <script>
    /* Initiate Magnify Function
    with the id of the image, and the strength of the magnifier glass:*/
    magnify("myimage", 3);
    </script>
</body>
</HTML>