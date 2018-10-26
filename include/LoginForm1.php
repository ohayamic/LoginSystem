 <?php
session_start();

if (isset($_POST['submit'])) {
 	include_once 'DBConnect.php';

 	$userName = mysqli_real_escape_string($conn, $_POST['username']);
 	$passWD = mysqli_real_escape_string($conn, $_POST['pwd']);

 if (empty($userName) || empty($userName) {
 	header("Location: ../index.php?Login=DetailInvalid");
 	exit();
 	}else{
 	if (preg_match("/^[a-zA-Z]*&/", $userName)) {
 		header("Location: ../index.php?Login=DetailInvalid");
 		exit();

 		}else{
 		if (filter_var($userName, FILTER_VALIDATE_EMAIL)) {
 			header("Location: ../index.php?Login=DetailInvalid");
 			exit();
 		}else{
 			$sql = "SELECT * FROM users WHERE user_id='$userName';";
 			$result = mysqli_query($conn, $sql);
 			$resultCheck = mysqli_num_rows($result);

 			if ($resultCheck < 1) {
 				header("Location: ../index.php?Login=DetailInvalid");
 				exit();
 			}else{
 				if ($rows = mysqli_fetch_assoc($result)) {
 					$unhash = password_verify($passWD, $rows['user_pwd']);
 					if ($unhash == false) {
 						header("Location: ../index.php?Login=DetailInvalid");
 						exit();
 					}elseif($unhash == true){
 						// Log in the user here
 						$_SESSION['id'] = $rows['id'];
 						$_SESSION['u_first'] = $rows['user_first'];
 						$_SESSION['u_last'] = $rows['user_last'];
 						$_SESSION['u_email'] = $rows['user_email'];
 						$_SESSION['u_id'] = $rows['user_id'];

 						header("Location: ../index.php?Login=Success");
 						exit();
 					
 					}
 				}
 			}
 		}
 	}
 }
 

}else{
	header("Location: ../index.php?Login=Success");
 	exit();
 }


?>



/*
 elseif (empty($userName) || empty($userName)) {
 	header("Location: ../signupForm.php?LoginDetailInvalid");
 	exit();
 } 
 elseif (preg_match("/^[a-zA-Z]*&/", $userName)) {
 	header("Location: ../signupForm.php?LoginDetailInvalid");
 	exit();
 }
 elseif (filter_var($userName, FILTER_VALIDATE_EMAIL)) {
 	header("Location: ../signupForm.php?LoginDetailInvalid");
 	exit();
 }
 elseif (condition) {
 	# code...
 }
 }else{

 }



 