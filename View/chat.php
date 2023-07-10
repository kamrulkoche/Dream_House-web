<?php
session_start();
if (!isset($_COOKIE['rem'])) {
    header('location: /Admin Final Project/View/Logout.php');
}
if (!isset($_SESSION['username'])) {
    header("Location: / Admin FInal Project/View/login.php");
}

$ezl = new mysqli("localhost", "root", "", "dream house");
if ($ezl->connect_error) {
    die("Data base Connection failed: " . $ezl->connect_error);
}

$sql = "SELECT * FROM  chat";
$qry = $ezl->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat List</title>
</head>

<body>
<?php include('../View/Profile-header.php'); ?>
    <fieldset align="center" style="width: 100%">
        <legend><b>Chat List</b></legend>
        
        <span>
            <?php
            if (isset($_COOKIE['msg'])) {
                echo $_COOKIE['msg'];
            }
            ?>
        </span>
        <div align='right'>
        </div>
        <br>

        <div id="records"  >
            <table align="center">
                <tbody >
                    
                    <tr>
                        <th align="left"></th>
                        <th><h1>Chat Box</h1></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <div><th ></th></div>
                      
                        <!-- <th colspan="2">Action</th> -->
                    </tr>
                    <?php
                    if ($qry->num_rows > 0) {
                        while ($data = $qry->fetch_assoc()) {
                            echo "<tr>";
                            // echo "<td>" . $data['ID'] . "</td>";
                            echo "<td>" . $data['BDT'] . "</td>";
                            echo"<td>"."</td>";
                            echo"<td>"."</td>";
                            echo"<td>"."</td>";
                            echo"<td>"."</td>";
                            echo"<td>"."</td>";
                            echo"<td>"."</td>";
                            echo"<td>"."</td>";
                            echo"<td>"."</td>";
                            echo"<td>"."</td>";
                            echo"<td>"."</td>";
                            echo "<td>" . $data['Road'] . "</td>";
                      
                        }
                    } else {
                        echo "<tr>";
                        echo "<td></td>";
                        echo "<td>--</td>";
                        echo "<td>--</td>";
                        echo "<td>--</td>";
                        echo "<td>--</td>";
                        echo "<td>--</td>";
                        echo "</tr>";
                    }
                    $ezl->close();
                    ?>
                </tbody>
            </table>
        </div>


    <br>
   

    	<form action="../Controller/chataction.php" target="_self" method="POST" onsubmit="return validl(this)" novalidate>

    		<!-- <fieldset> -->
    			<legend>
    				<h3></h3>
    			</legend>

    			<table>
    				<thead></thead>
    				<tbody>
    					<!-- <tr>
    						<td>Seller</td>
    						<td><label for="BDT"></label>
    							<input type="text" name="BDT" autofocus>
    							<span id="BDTErr" style="color: red;"></span> <br><br>
    						</td>
    					</tr> -->
                       
    					<tr>
    						<td>Send</td>
    						<td><label for="Road"></label>
                            <textarea name="Road" id="Road" cols="30" rows="10"></textarea>
    							<span id="RoadErr" style="color: red;"></span> <br><br>
    						</td>
    					</tr>
    			
    				</tbody>
    			</table>
    			<br>
    			<p align="left";><input type="submit" name="Register" value="Send"></p>
    		</fieldset>
    		<br><br>
    	</form>
               
                
        
        
    
</body>

</html>

