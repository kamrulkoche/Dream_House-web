<?php
require "../Model/ApartmentDB.php";

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
	$ApartmentErrMsg = " ";
	$EmailErrMsg = " ";
	$phoneErrMsg = "";



	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$flag = false;
		if (empty($_POST['BDT'])) {
			$BDTErrMsg = "BDT Name Empty";
			$flag = true;
		}
		if (empty($_POST['Road'])) {
			$RoadErrMsg = "Road Name Empty";
			$flag = true;
		}
		if (empty($_POST['Apartment'])) {
			$ApartmentErrMsg = "Apartment not Selected";
			$flag = true;
		}
		if (empty($_POST['Email'])) {
			$EmailErrMsg = "Email is Empty";
			$flag = true;
		} else {
			if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
				$EmailErrMsg = "Please correct email";
				echo "<br>";
			}
		}
		if (empty($_POST['Mobile'])) {
			$phoneErrMsg = "Mobile no is Empty";
			$flag = true;
		}

		// condition All true then			
		if (!$flag) {
			edit_apartment($_POST['id'], $_POST['BDT'], $_POST['Road'], $_POST['Apartment'], $_POST['Email'], $_POST['Mobile']);
			// setcookie('msg', '<b>✅Registration successful!</b><br>', time() + 1, '/');
		} else {
			setcookie('msg', '<b>❌Apartment Add NOT Successful!</b><br>', time() + 1, '/');
			header('location: ../View/editapartment.php');
		}
	}
	?>