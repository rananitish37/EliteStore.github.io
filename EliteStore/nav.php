<nav class="navbar">
	<ul class="web-site-name">
	       <i class="fa fa-tachometer" aria-hidden="true"> EliteStore</i>
		<li class="link">
			<a href="signup.php">Sign Up</a>
		</li>
		<li class="link">
		<?php
		if(isset($_SESSION['USER_LOGIN'])){
		echo '<a href="logout.php" target="_blank">Logout</a>';
		}
		else{
			echo '<a href="login.php" target="_blank">Login</a>';
		}
		?>
			
			
		</li>
		<li class="link">
			<a href="#catagories">Catagories</a>
		</li>	
		<li class="link">
		<a href="mycart.php" type="submit"><i class="fa fa-shopping-bag" aria-hidden="true"> MyCart</i> </a>
		</li>
	</ul>
</nav> 

nav{
    display:block;
    background-color:blue;
    overflow:auto;
    }
    .web-site-name{
    color:#ffffff;
    cursor: pointer;
    }

    li{
    color:#ffffff;
    float:right;
    padding:0px 25px 0px 25px;
    margin:0px 15px 0px 15px;
    display:block;
    list-style-type:none;
    }
    
    li a{
    color:#ffffff;
    text-decoration:none;
    padding: 10px;
    }
    li a:hover{
    background-color:#ffffff;
    color:#000000;
    border: white;
    border-radius: 10px;
    }

    // index.php
    <nav class="navbar">
	<ul class="web-site-name">
	       <i class="fa fa-tachometer" aria-hidden="true"> EliteStore</i>
		<li class="link">
			<a href="signup.php">Sign Up</a>
		</li>
		<li class="link">
		<?php
		if(isset($_SESSION['USER_LOGIN'])){
		echo '<a href="logout.php" target="_blank">Logout</a>';
		}
		else{
			echo '<a href="login.php" target="_blank">Login</a>';
		}
		?>
			
			
		</li>
		<li class="link">
			<a href="#catagories">Catagories</a>
		</li>	
		<li class="link">
		<a href="mycart.php" type="submit"><i class="fa fa-shopping-bag" aria-hidden="true"> MyCart</i> </a>
		</li>
	</ul>
</nav>

//index.css

nav{
    display:block;
    background-color:blue;
    overflow:auto;
    }
    .web-site-name{
    color:#ffffff;
    cursor: pointer;
    }

    li{
    color:#ffffff;
    float:right;
    padding:0px 25px 0px 25px;
    margin:0px 15px 0px 15px;
    display:block;
    list-style-type:none;
    }
    
    li a{
    color:#ffffff;
    text-decoration:none;
    padding: 10px;
    }
    li a:hover{
    background-color:#ffffff;
    color:#000000;
    border: white;
    border-radius: 10px;
    }