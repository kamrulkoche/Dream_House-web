<?php
session_start();
if (!isset($_COOKIE['rem'])) {
	header('location: logout.php');
}
if (!isset($_SESSION['id'])) {
	header('location: login.php');
}
?>

<html>

<head>
	<title>Buyer Info</title>
</head>

<body>
	<?php
	include('Profile-header.php');
	?>
	<h1>Buyer List</h1>
	<?php
	define("file", "../Model/buyer.json"); // file extension
	$handle = fopen(file, "r"); // file open
	$fr = fread($handle, filesize(file)); // file read
	$json = json_decode($fr); // $fr file decode 
	$fc = fclose($handle); // $handel close 
	if ($json == NULL) {
		echo "No record found";
	} else {
		echo "<table border='1'>";
		echo "<th>Id</th>";
		echo "<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Gender</th>";
		echo "<th>Phone Number</th>";
		echo "<th>NID</th>";
		echo "<th>Sold</th>";
		for ($i = 0; $i < count($json); $i++) {
			echo "<tr>";
			echo "<td>" . $json[$i]->id . "</td>";
			echo "<td>" . $json[$i]->First_name . "</td>";
			echo "<td>" . $json[$i]->Last_name . "</td>";
			echo "<td>" . $json[$i]->Gender . "</td>";
			echo "<td>" . $json[$i]->Phone_Number . "</td>";
			echo "<td>" . $json[$i]->NID . "</td>";
			echo "<td>" . $json[$i]->Sold . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	?>
	<br>
	<?php include 'footer.php'; ?>
</body>

</html>