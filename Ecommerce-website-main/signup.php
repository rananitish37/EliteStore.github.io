<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include 'connection.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];
	$cpassword=$_POST['psw-repeat'];
	$exists=false;
	if(($password == $cpassword) && $exists == false){
		$sql="INSERT INTO `users` ( `username`, `email_id`, `password`) VALUES ('$name','$email','$password')";
		$result=mysqli_query($conn,$sql);
		if($result){
			$showAlert=true;
		}
	}else{
		$showError= true;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="login.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Document</title>
</head>

<body>
	<?php
	if($showAlert){
		echo '
		<div class="alert alert-success">
  		<strong>Success!</strong> Your account is created..
		</div>';}
	if($showError){
		echo '
		<div class="alert alert-danger">
  		<strong>Error!</strong> '.$showError.'
		</div>';}
	?>
	<div class="wrapper fadeInDown">
		<div id="formContent">
			<!-- Tabs Titles -->

			<!-- Icon -->
			<div class="fadeIn first">
				<i class="fa fa-user" aria-hidden="true"> SignUp</i>
			</div>

			<!-- Login Form -->
			<form action="signup.php" method="post" >
				<input type="text" class="fadeIn second" id="name" name="name" placeholder="name" required>
				<input type="text" class="fadeIn second" id="email" name="email" placeholder="email" required>
				<input type="text" class="fadeIn third" id="pwd" name="pwd" placeholder="password" required>
				<input type="text" class="fadeIn third" id="psw-repeat" name="psw-repeat" placeholder="confirm password" required>
				<input type="submit" class="fadeIn fourth" name="signup" value="Sign Up">
			</form>
		</div>
	</div>
</body>

</html>