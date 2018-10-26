<?php 
	// header is in a folder outside of this folder
	include'header.php';
	$firstNameErr = $lastNameErr = $EmailErr = $UserNameErr = $passwordErr = "";
 ?>
 <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
 </div> <!-- close the header for the background image -->
 <section>
 	<div class="main-div">
 		<div class="submit-div">
 			<h2>Sign Up</h2>
 			<!-- connect to the file using the form action="submitForm.php "-->
 			<form  action="include/submitForm.php" method="POST">
 				<input type="text" name="user_first" placeholder="First Name">
 				<span class="error"> * <?php echo $firstNameErr;?></span><br>
 				<input type="text" name="user_last" placeholder="Last Name">
 				<span class="error"> * <?php echo $lastNameErr;?></span><br>
 				<input type="text" name="user_email" placeholder="E-mail">
 				<span class="error"> * <?php echo $EmailErr;?></span><br>
 				<input type="text" name="user_id" placeholder="User Name">
 				<span class="error"> * <?php echo $UserNameErr;?></span><br>
 				<input type="password" name="user_pwd" placeholder="Password">	
 				<span class="error"> * <?php echo $passwordErr;?></span><br>
 				<button type="submit" name="submit">Sign Up</button>		
 			</form>
 		</div>
 	</div>
 </section>

 <?php 
 	// footer is in a folder outside of this folder
	include 'footer.php';
 ?>
 
