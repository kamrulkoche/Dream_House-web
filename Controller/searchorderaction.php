<?php
	require '../Model/OrderDB.php';

	if(isset($_GET['review'])) {
		$name = $_GET['review'];
		$result = get($name);
        echo  $_GET['review'];
	}

	if ($result->num_rows > 0) {
		echo "<table border='1' align='center'>";
		echo "<tr>";
        // echo "<th>ID</th>";
        echo "<th>Apartment</th>";
        echo "<th>Buyer</th>";
        echo "<th>Comment</th>";
        echo "<th>Rating</th>";

		while ($data = $result->fetch_assoc()) {
            echo "</tr>";
	        echo "<tr>";
            // echo "<td>" . $data['ID'] . "</td>";
            echo "<td>" . $data['Apartment'] . "</td>";
            echo "<td>" . $data['Buyer'] . "</td>";
            echo "<td>" . $data['Comment'] . "</td>";
            echo "<td>" . $data['Rating'] . "</td>";
            // echo "<td><a href='/ FInal Project/View/editapartment.php?id=" . $data['ID'] . "'>Edit</a></td>";
            echo "<td><a href='/FInal Project/Controller/deleteorderaction.php?id=" . $data['ID'] . "'>Delete</a></td>";
            
	    }
	    echo "</table>";
	}
	else {
		echo "No record(s) found";
	}
?>