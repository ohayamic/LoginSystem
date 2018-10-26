 <?php
session_start();

if (isset($_POST['submit'])) {
 	include_once 'DBConnect.php';

 	$user_ID = mysqli_real_escape_string($conn, $_POST['userID']);
 	$passWD = mysqli_real_escape_string($conn, $_POST['pwd']);
 	// Error handling and verification
 	// check if any field is empty
 	if (empty($user_ID) || empty($passWD)) {
 	header("Location: ../index.php?Login=DetailInvalid");
 	exit();
 	}else{
 		$sql = "SELECT * FROM users WHERE user_id='$user_ID' OR user_email='user_ID';";
 		$result = mysqli_query($conn, $sql);
 		$resultCheck = mysqli_num_rows($result);
 		// check if the user exist and if $resultCheck is less 
 		// than one, go back to the home page
 		if ($resultCheck < 1) {
 			header("Location: ../index.php?Login=DetailInvalid");
 			exit();
 		}else{
 			if ($rows = mysqli_fetch_assoc($result)) {
 				// Dehashing the password
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
}else{
 	header("Location: ../index.php?Login=Error");
 	exit();
}