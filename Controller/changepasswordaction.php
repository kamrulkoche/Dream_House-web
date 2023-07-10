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

$passwordErrMsg = "";
$confirm_passwordErrMsg = "";

$isvalid = true;

// First Name Start
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$flag = false;

	if ($_POST['change_password'] == $_POST['confirm_password']) {

		if (empty($_POST['change_password'])) {
			//echo "Street/House/Road/ is Empty";
			$passwordErrMsg = "change_password is Empty";
			$flag = true;
			//echo "<br>";
		}
		$flag = false;

		if (empty($_POST['confirm_password'])) {
			//echo "Street/House/Road/ is Empty";
			$confirm_passwordErrMsg = "Confirm password is Empty";
			$flag = true;
			//echo "<br>";
		}
	}

	if (!$flag) {
		pass($_POST['id'], $_POST['change_password']);

		$_SESSION['id'] = $_POST['id'];

		$_SESSION['change_password'] = $_POST['change_password'];
	} else {
		setcookie('msg', '<b>❌Update NOT successful!</b><br>', time() + 1, '/');
		header("location: ../View/changepassword.php");
	}
}
?>