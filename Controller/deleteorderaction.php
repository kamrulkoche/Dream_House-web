<?php 
	require "../Model/OrderDB.php";
	$ezl = new mysqli("localhost", "root", "", "dream house");

    if ($ezl->connect_error) {
        die("Data base Connection failed: " . $ezl->connect_error);
    }

    $sql = "SELECT * FROM review";
    $qry = $ezl->query($sql);

	if(isset($_GET['id'])) {
		$id = $_GET['id'];

		delete_review($id);
	}

?>