<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>jewellery</title>
<link href="jewellery.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
.card-img-top{
        width: 100%;
        height: 200px;
        object-fit: contain;
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
  <a class="active" href="./index.php">EliteStore</a>
  <a href="mycart.php" type="submit">MyCart</a>
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
	<div class="container">
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4">
		<a href="clothes.php" type="submit" class="btn btn-primary btn-lg btn-block">Clothes</a> 
		</div>
		<div class="col-lg-4">
		<a href="electronics.php" type="submit" class="btn btn-primary btn-lg btn-block">Electronics</a>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row" style="margin-top:30px; ">
			<div class="col-lg-6">
			<form action="manage_cart.php" method="POST">
				<div class="card">
					<img src="jwl1.jpg" width="200px" height="500px" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Hoop Drop Dangle Earrings</h5>
							<p class="card-text">Hazms 9 Pairs Rattan Earrings Tassel Earrings for Women Girls Lightweight Acrylic Geometric Statement Woven Bohemian Earrings Handmade Straw Wicker Braid Hoop Drop Dangle Earrings</p>
							<b>Price:Rs.880</b><br>
							<button type="submit" name="add_to_cart" class="btn btn-primary  btn-info">Add to Cart</button>
							<input type="hidden" name="Item_Name" value="Hoop Drop Dangle Earrings">
							<input type="hidden" name="Price" value="880">
						</div>
				</div>
				</form>
			</div>
			<div class="col-lg-6">
			<form action="manage_cart.php" method="POST">
				<div class="card">
					<img src="jwl2.jpg" width="200px" height="500px" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Layered Bracelet Set</h5>
							<p>XOCARTIGE Layered Bracelet Set Assorted Beaded Bracelet Multiple Stackable Wrap Bangle Jewelry Adjustable</p>
				            <b>Price:Rs.700</b><br>
							<button type="submit" name="add_to_cart" class="btn btn-primary  btn-info">Add to Cart</button>
							<input type="hidden" name="Item_Name" value="Layered Bracelet Set">
							<input type="hidden" name="Price" value="700">
						</div>
				</div>
				</form>
			</div>
			</div>
			<div class="row" style="margin-top:30px; ">
				<div class="col-lg-6">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="jwl3.jpg" width="200px" height="500px" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Textured Bangle Set</h5>
								<p class="card-text">GUESS Women's Six Piece Textured Bangle Set</p>
								<b>Price:Rs.1650</b><br>
								<button type="submit" name="add_to_cart" class="btn btn-primary  btn-info">Add to Cart</button>
								<input type="hidden" name="Item_Name" value="Textured Bangle Set">
								<input type="hidden" name="Price" value="1650">
							</div>
					</div>
					</form>
				</div>
				<div class="col-lg-6">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="jwl4.jpg" width="200px" height="477px" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">UNY Ring Vintage</h5>
								<p class="card-text">UNY Ring Vintage Designer Fashion Brand Women Valentine Gift Two Tone Plating Twisted Cable Wire Rings</p>
					            <b>Price:Rs.1600</b><br>
								<button type="submit" name="add_to_cart" class="btn btn-primary  btn-info">Add to Cart</button>
								<input type="hidden" name="Item_Name" value="UNY Ring Vintage">
								<input type="hidden" name="Price" value="1600">
							</div>
					</div>
					</form>
				</div>
				</div>
				<div class="row" style="margin-top:30px; ">
					<div class="col-lg-6">
					<form action="manage_cart.php" method="POST">
						<div class="card">
							<img src="jwl5.jpg" width="200px" height="500px" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Alloy Gold-plated Jewel Set  (Gold)</h5>
									<p class="card-text">Sukkhi Adorable Gold Plated Pearl Choker Necklace Set for Women</p>
									<b>Price:Rs.2200</b><br>
									<button type="submit" name="add_to_cart" class="btn btn-primary  btn-info">Add to Cart</button>
									<input type="hidden" name="Item_Name" value="Alloy Gold-plated Jewel Set">
									<input type="hidden" name="Price" value="2200">
								</div>
						</div>
						</form>
					</div>
					<div class="col-lg-6">
					<form action="manage_cart.php" method="POST">
						<div class="card">
							<img src="jwl6.jpg" width="200px" height="477px" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Ruxmani Jewels Yellow Gold</h5>
									<p class="card-text">Natural Ruxmani Jewels Yellow GoldDiamond Necklace Set For Women 14kt Diamond Earring & Pendant Set</p>
						            <b>Price:Rs.220000</b><br>
									<button type="submit" name="add_to_cart" class="btn btn-primary  btn-info">Add to Cart</button>
									<input type="hidden" name="Item_Name" value="Ruxmani Jewels Yellow Gold">
									<input type="hidden" name="Price" value="220000">
								</div>
						</div>
						</form>
					</div>
				</div>
	</div>
			
<footer>
		<div class="foot" style="width:100%; background:#000000; color:#ffffff; padding:20px; text-align:center;">
			<p>Coprights @Virtual Store.All Rights Reserverd | Cotact Us:+91 1234567890</p>
			<div class="media-icons">
			<a target="_blank" href="https://www.facebook.com/zenisha.savaliya.9"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="https://www.instagram.com/__zenisha____/"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/zenisha-s-a74a51204/"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
</footer>

</body>
</html>