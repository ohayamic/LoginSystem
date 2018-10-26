<?php 
if (isset($_POST['submit'])) {

	include_once 'DBConnect.php';
	/* Get data from the form and insert it in the database
	$firstNameErr = " ";
	$lastNameErr = " ";
	$EmailErr = " ";
	$UserNameErr = " ";
	$passwordErr = " ";
	*/
	$firstname = mysqli_real_escape_string($conn, $_POST['user_first']);
	$lastname = mysqli_real_escape_string($conn, $_POST['user_last']);
	$email = mysqli_real_escape_string($conn, $_POST['user_email']);
	$userID = mysqli_real_escape_string($conn, $_POST['user_id']);
	$password = mysqli_real_escape_string($conn, $_POST['user_pwd']);

// Error handlers for  the form
	if (empty($firstname) || empty($lastname) || empty($email) || empty($userID) || empty($password)) {
		/* Return the user to the sign up page
		$firstname = "firstname is required";
		$lastname = "lastname is required";
		$email = "email is required";
		$userID = "userID is required";
		$password = "password is required";
		*/
		header("Location: ../signupForm.php?signup=EmptyField");
		exit();
	}else{
		// Check if the input are not valid
		if (!preg_match("/^[a-zA-Z ]*$/", $firstname) || !preg_match("/^[a-zA-Z ]*$/", $lastname)) {
			// Return the user to the sign up page
			header("Location: ../signupForm.php?signup=InvalidInput");
			exit();
		}else{
			// check if email is not valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signupForm.php?signup=badEmail");
				$email = "Email character is correct";
				exit();
			}else{
				// Check if the user already exist in the database
				$sql = "SELECT * FROM users WHERE user_id = '$userID';";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					// Return the user to the sign up page
					header("Location: ../signupForm.php?signup=UserExist");
					exit();					
				}else{
					// Hash the password to encrypt it
					$hashPwd = password_hash($password, PASSWORD_DEFAULT);
					// Insert the data from the text fields into the database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_id, user_pwd) 
					VALUES ('$firstname', '$lastname', '$email', '$userID', '$hashPwd');";
					mysqli_query($conn, $sql);
					// Return the user to the sign up page
					header("Location: ../signupForm.php/signin=success");
				}
			}
		}
	}

}else{
	header("Location: ../signupForm.php");
	exit();
}


 ?>