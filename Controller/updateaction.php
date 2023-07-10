<?php
session_start();
if (!isset($_COOKIE['rem'])) {
	header('location: logout.php');
}
if (!isset($_SESSION['id'])) {
	header('location: login.php');
}
require "../Model/UpdateDB.php"
?>


<!-- PHP Start -->
<?php

// Variable
$firstnameErrMsg = "";
$lastnameErrMsg = "";
$GendernameErrMsg = "";
$emailErrMsg = "";
$phoneErrMsg = "";
$roadErrMsg = "";
$userErrMsg = "";
$passwordErrMsg = "";
$confirm_passwordErrMsg = "";

$isvalid = true;

// First Name Start
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$flag = false;
	if (empty($_POST['FirstName'])) {
		//echo "First Name Empty";
		$firstnameErrMsg = "First Name Empty";
		$flag = true;
		//echo "<br>";
	} else {
		if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['FirstName'])) {
			echo "Only letters and spaces allowed.";
			$firstnameErrMsg = "Only letters and spaces allowed";
			echo "<br>";
		}
	}
	// First Name End

	// Last Name Start		
	if (empty($_POST['LastName'])) {
		//echo "Last Name Empty";
		$lastnameErrMsg = "Last Name Empty";
		$flag = true;
		//echo "<br>";
	} else {
		if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['LastName'])) {
			echo "Only letters and spaces allowed.";
			$lastnameErrMsg = "Only letters and spaces allowed";
			echo "<br>";
		}
	}
	// Last Name End		

	// Gender
	if (empty($_POST['Gender'])) {
		//echo "Gender not Selected";
		$GendernameErrMsg = "Gender not Selected";
		$flag = true;
		//echo "<br>";
	}

	// Email Start 
	if (empty($_POST['Email'])) {
		//echo "Email is Empty";
		$emailErrMsg = "Email is Empty";
		$flag = true;
		//echo "<br>";
	} else {
		if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
			echo "Please correct email";
			$emailErrMsg = "Please correct email";
			echo "<br>";
		}
	}
	// Email End

	// Number Start
	if (empty($_POST['Phone'])) {
		//echo "MobileNo is Empty";
		$phoneErrMsg = "Mobileno is Empty";
		$flag = true;
		//echo "<br>";
	}
	// Road Start		
	if (empty($_POST['road'])) {
		//echo "Street/House/Road/ is Empty";
		$roadErrMsg = "Street/House/Road/ is Empty";
		$flag = true;
		//echo "<br>";
	}

	if (!$flag) {
		edit($_POST['id'], $_POST['FirstName'], $_POST['LastName'], $_POST['Gender'], $_POST['Phone'], $_POST['Email'], $_POST['road'], $_POST['country']);

		$_SESSION['id'] = $_POST['id'];
		$_SESSION['fname'] = $_POST['FirstName'];
		$_SESSION['lname'] = $_POST['LastName'];
		$_SESSION['gender'] = $_POST['Gender'];
		$_SESSION['email'] = $_POST['Email'];
		$_SESSION['phone'] = $_POST['Phone'];
		$_SESSION['road'] = $_POST['road'];
		$_SESSION['country'] = $_POST['country'];
	} else {
		setcookie('msg', '<b>❌Update NOT successful!</b><br>', time() + 1, '/');
		header("location: ../View/update.php");
	}
}
?>