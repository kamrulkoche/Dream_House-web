<?php
require "../Model/ChatDB.php";

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
	// $BDTErrMsg = "";
	$RoadErrMsg = "";

	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$flag = false;
		// if (empty($_POST['BDT'])) {
		// 	$BDTErrMsg = "BDT Name Empty";
		// 	$flag = true;
		// }
		if (empty($_POST['Road'])) {
			$RoadErrMsg = "Road Name Empty";
			$flag = true;
		}


		// condition All true then			
		if (!$flag) {
			insert_chat($_POST['BDT'], $_POST['Road']);

		} else {
			
			header('location: ../View/chat.php');
		}
	}
	?>