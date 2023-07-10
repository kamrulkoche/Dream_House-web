<?php
require "../Model/buyerDB.php";

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
	$FirstNameErrMsg = "";
	$LastNameErrMsg = "";
	$GenderErrrMsg = " ";
	$NumberErrMsg = " ";
	$NIDErrMsg = "";
    $SoldErrMsg="";



	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$flag = false;
		if (empty($_POST['FirstName'])) {
			$FirstNameErrMsg = "First Name Name Empty";
			$flag = true;
		}
		if (empty($_POST['LastName'])) {
			$LastNameErrMsg = "LastName Empty";
			$flag = true;
		}
		if (empty($_POST['Gender'])) {
			$GenderErrrMsg = "Gender not Selected";
			$flag = true;
		}
        if (empty($_POST['Number'])) {
			$NumberErrMsg= "Number is Empty";
			$flag = true;
		}
		if (empty($_POST['NID'])) {
			$NIDrErrMsg= "NID is Empty";
			$flag = true;
		}
		if (empty($_POST['Sold"'])) {
            $SoldErrMsg= "Sold no is Empty";
			$flag = true;
		}

		// condition All true then			
		if (!$flag) {
			edit_buyer($_POST['ID'],$_POST['FirstName'], $_POST['LastName'], $_POST['Gender'],$_POST['Number'], $_POST['NID'], $_POST['Sold']);
			// setcookie('msg', '<b>✅Registration successful!</b><br>', time() + 1, '/');
		} else {
			setcookie('msg', '<b>❌Buyer Add NOT Successful!</b><br>', time() + 1, '/');
			header('location: ../View/editbuyer.php');
		}
	}
	?>