<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<!-- PHP Start -->
	<?php
	// Variable
	$EmailErrMsg = " ";

	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$flag = false;
		// if(empty($_POST['BDT'])) {
		// 	$BDTErrMsg = "BDT Name Empty";
		// 	$flag=true;
		// }	
		// 	if(empty($_POST['Road'])) {
		// 		$RoadErrMsg = "Road Name Empty";
		// 		$flag=true;
		// 	}
		// 	if(empty($_POST['Apartment'])) {
		// 		$ApartmentErrMsg = "Apartment not Selected";
		// 		$flag=true;
		// 	}
		if (empty($_POST['Email'])) {
			$EmailErrMsg = "Email is Empty";
			$flag = true;
		} else {
			if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
				$EmailErrMsg = "Please correct email";
				echo "<br>";
			}
		}
		// 	if(empty($_POST['Mobile'])) {
		// 	$phoneErrMsg= "Mobile no is Empty";
		// 	$flag=true;
		// }

		// condition All true then			
		if (!$flag) {
			'insert_forgotpassword'($_POST['Email']);
			// setcookie('msg', '<b>✅Registration successful!</b><br>', time() + 1, '/');
		} else {
			setcookie('msg', '<b>❌Apartment Add NOT Successful!</b><br>', time() + 1, '/');
			header('location: ../View/forgotpassword.php');
		}
	}
	?>