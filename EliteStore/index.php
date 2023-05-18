<?php
session_start();
?>
<html>
<head>
<title>Welcome To our Website</title>
<link href="index.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<style>
.foot .media-icons a{
    color: white;
     font-size: 25px;
    margin-right: 30px;
 } 
		
 .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;

}
.topnav a.active {
  background-color: #fbe8fd;
  color: black;
}
</style>
</head>
<body>
	<nav>
<div class="topnav">
  <a class="active" href="#home">EliteStore</a>
  <a href="mycart.php" type="submit">MyCart</a>
  <a href="#catagories">Catagories</a>
  <?php
		if(isset($_SESSION['logedin'])){
		echo '<a href="logout.php" target="_blank">Logout</a>';
		}
		else{
			echo '<a href="login.php" target="_blank">Login</a>';
		}
		?>
  </a>
  <a href="signup.php">SignUp</a>
</div>
	</nav>
<div class="content">
	<div class="image">
	   <div class="info">
           <center>
				<h1>"Fashion is like eating;You shouldn't stick to the same menu."</h1> 
				<p>"Fashion haul sell 40-60% off."</p>
				<a href="#catagories"class="button">Shop Now</a>
             </center>
        </div>
	</div>	
	<hr><hr>
	<div class="catagories" id="catagories">
	<h1 class="cat">Catagories</h1>
	<hr><hr>
		<div class="items">
			<a href="electronics.php">
			<div class="caption">
				<h2>Electronics</h2>
				<img src="electronics.jpg" class="thumbnail">
				<p>Serving technology better.</p>
			</div>	
			</a>
		</div>
		<div class="items">
			<a href="clothes.php">
			<div class="caption">
				<h2>Clothes</h2>
			    <img src="clothes.jpg" class="thumbnail">
				<p>New Cloth,New Passion.</p>
			</div>	
			</a>
		</div>
		<div class="items">
			<a href="jewellery.php">
			<div class="caption">
				<h2>Jewellery</h2>
				<img src="jewellery.jpg" class="thumbnail">
				<p> Jewellery to fit every budget, occasion and  taste.</p>
			</div>	
			</a>
		</div>
	</div>
</div>
<center>
<footer>
		<div class="container">
			<p>Copyrights @Virtual Store.All Rights Reseverd | Contact Us:+91 1234567890</p>
		</div>
</footer>
</center>
</body>
</html>