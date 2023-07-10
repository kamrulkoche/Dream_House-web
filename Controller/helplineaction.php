<?php
require "../Model/HelplineDB.php";

session_start();
if (!isset($_COOKIE['rem'])) {
	header('location: logout.php');
}
if (!isset($_SESSION['id'])) {
	header('location: login.php');
}
?>

<?php
// include ('profile-header.php'); 
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<!-- PHP Start -->
	<?php
	// Variable
	$BDTErrMsg = "";
	$RoadErrMsg = "";
	$HelplineErrMsg = " ";
	$EmailErrMsg = " ";
	$phoneErrMsg = "";

	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$flag = false;
		
		if (empty($_POST['Helpline'])) {
			$HelplineErrMsg = "Helpline not Selected";
			$flag = true;
		}
		

		// condition All true then			
		if (!$flag) {
			insert_helpline($_POST['Helpline']);
			// setcookie('msg', '<b>✅Registration successful!</b><br>', time() + 1, '/');
		} else {
			setcookie('msg', '<b>❌Helpline Add NOT Successful!</b><br>', time() + 1, '/');
			header('location: ../View/helplinelist.php');
		}
	}
	?>