<?php
	require '../Model/managerDB.php';

	if(isset($_GET['manager'])) {
		$name = $_GET['manager'];
		$result = get($name);
        echo  $_GET['manager'];
	}

	if ($result->num_rows > 0) {
		echo "<table border='1' align='center'>";
		echo "<tr>";
        // echo "<th>ID</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Gender</th>";
        echo "<th>NID</th>";
        echo " <th>Sold</th>";
        echo "<th colspan='2'>Action</th>";
		while ($data = $result->fetch_assoc()) {
            echo "</tr>";
	        echo "<tr>";
            // echo "<td>" . $data['ID'] . "</td>";
            echo "<td>" . $data['FirstName'] . "</td>";
            echo "<td>" . $data['LastName'] . "</td>";
            echo "<td>" . $data['Gender'] . "</td>";
            echo "<td>" . $data['NID'] . "</td>";
            echo "<td>" . $data['Sold'] . "</td>";
            // echo "<td><a href='/Admin FInal Project/View/editapartment.php?id=" . $data['ID'] . "'>Edit</a></td>";
            echo "<td><a href='/Admin FInal Project/Controller/deletemanageraction.php?id=" . $data['ID'] . "'>Delete</a></td>";
            echo "</tr>";
	    }
	    echo "</table>";
	}
	else {
		echo "No record(s) found";
	}
?>