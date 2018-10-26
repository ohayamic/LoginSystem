<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylePractice.css">
	<link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
	<style>	.error {color: #FF0000;	font-size: 15PX;}</style>
	
	
	<!---->
</head>
<div class="body-div">
	<body>
		<div class="backgroundImage">
			<header>
				<nav>
					<div class="main-div">
						<div class="home-div">
							<ul>
								<li><a href="index.php">Home</a></li>
							</ul>
						</div>				
						<div class="form-div">
							<?php 
							if (isset($_SESSION['u_id'])) {
								echo '<form action="include/logout.php" method="POST" style= "float:right; ">
										<button class= "form-div-logout" type="submit" name="submit"> Logout</button>
								  	</form>';
							}else{
								echo '<form action="include/loginForm.php" method="POST">
								   	 <input type="text" name="userID" placeholder="Username/E-mail">
										<input type="password" name="pwd" placeholder="Password">
										<button type="submit" name="submit">Log in</button>
								  	</form>
								  	<a href="signupForm.php">Sign Up</a>';
							}
							?>
						</div>		
					
					</div>
				</nav>
			</header>