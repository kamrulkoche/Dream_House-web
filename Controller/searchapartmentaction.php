<?php
	require '../Model/ApartmentDB.php';

	if(isset($_GET['apartment'])) {
		$name = $_GET['apartment'];
		$result = get($name);
	}

	if ($result->num_rows > 0) {
		echo "<table border='1' align='center'>";
		echo "<tr>";
        // echo "<th>ID</th>";
        echo "<th>BDT</th>";
        echo "<th>Road</th>";
        echo "<th>apartment</th>";
        echo "<th>Email</th>";
        echo "<th>Mobile</th>";
        echo "<th colspan='2'>Action</th>";
		while ($data = $result->fetch_assoc()) {
            echo "</tr>";
	        echo "<tr>";
            // echo "<td>" . $data['ID'] . "</td>";
            echo "<td>" . $data['BDT'] . "</td>";
            echo "<td>" . $data['Road'] . "</td>";
            echo "<td>" . $data['Apartment'] . "</td>";
            echo "<td>" . $data['Email'] . "</td>";
            echo "<td>" . $data['Mobile'] . "</td>";
            echo "<td><a href='/Admin FInal Project/View/editapartment.php?id=" . $data['ID'] . "'>Edit</a></td>";
            echo "<td><a href='/Admin FInal Project/Controller/deleteapartmentaction.php?id=" . $data['ID'] . "'>Delete</a></td>";
            echo "</tr>";
	    }
	    echo "</table>";
	}
	else {
		echo "No record(s) found";
	}
?>