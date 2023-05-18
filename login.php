<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include 'connection.php';
	$email=$_POST['email'];
	$password=$_POST['psw'];
		$sql="SELECT * FROM `users` WHERE email_id='$email' AND password='$password'";
		$result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
		if($num == 1){
			$login=true;
      session_start();
      $_SESSION['logedin']=true;
      $_SESSION['email_id']=$email;
      header("location: index.php");
		}
	}else{
		$showError= true;
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
	if($login){
		echo '
		<div class="alert alert-success">
  		<strong>Success!</strong> Your are logged in..
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
	<i class="fa fa-user" aria-hidden="true"> Login</i>
    </div>

    <!-- Login Form -->
    <form action="login.php" method="post">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
      <input type="text" id="psw" class="fadeIn third" name="psw" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="./forgot1.php">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>
