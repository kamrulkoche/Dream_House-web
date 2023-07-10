<?php
		if (isset($_COOKIE['msg'])) {
			echo $_COOKIE['msg'];
		}
		?>

    	<?php
		session_start();
		if (!isset($_COOKIE['rem'])) {
			header('location: logout.php');
		}
		if (!isset($_SESSION['id'])) {
			header('location: login.php');
		}
		$ezl = new mysqli("localhost", "root", "", "dream house");

		if ($ezl->connect_error) {
			die("Data base Connection failed: " . $ezl->connect_error);
		}

		$sql = "SELECT * FROM buyer";
		$qry = $ezl->query($sql);
		?>

    	<?php
		include('profile-header.php');
		?>
    	<!DOCTYPE html>
    	<html>

    	<head>
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<title></title>
    	</head>

    	<body>
    		<!-- <script src="../View/js/buyer.js"></script>
    		<style type="text/css">

    		</style> -->
    		<form action="../Controller/editbuyeraction.php" target="_self" method="POST" onsubmit="return validlbuyer(this)" novalidate>


    			<?php
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					if ($qry->num_rows > 0) {
						while ($data = $qry->fetch_assoc()) {
							if (+$id == $data['ID']) {
								$FirstName = $data['FirstName'];
								$LastName = $data['LastName'];
								$Gender= $data['Gender'];
								$Number = $data['Number'];
								$NID= $data['NID'];
								$Sold = $data['Sold'];
							}
						}
					}
				}
				?>
    			<fieldset>
    				<legend>
    					<h3>Buyer Update</h3>
    				</legend>

    				<table>
    					<thead></thead>
    					<tbody>
    						<input type="number" name="id" value="<?php echo $id ?>" hidden>
    						<tr>
    							<td>First Name</td>
    							<td><label for="FirstName"></label>
    								<input type="text" name="FirstName" placeholder="First Name" value="<?php echo $FirstName; ?>" autofocus>
    								<span id="FirstNameErr" style="color: red;"></span> <br><br>
    							</td>
    						</tr>
    						<tr>
    							<td>Last Name</td>
    							<td><label for="LastName "></label>
    								<input type="text" name="LastName" placeholder="Last Name" value="<?php echo$LastName; ?>" autofocus>
    								<span id="LastNameErr" style="color: red;"></span> <br><br>
    							</td>
    						</tr>
    						<tr>
    							<td>Gender</td>
    							<td><label for="Gender"></label>

									<input type="Ntext" name="Gender" value="<?php echo $Gender; ?>" autofocus>
    								<span id="GenderErr" style="color: red;"></span> <br><br>
    							</td>
    						</tr>
    						<tr>
    							<td>Number</td>
    							<td><input type="Number" name="Number" value="<?php echo $Number ; ?>" autofocus>
    								<span id="NumberErr" style="color: red;"></span> <br><br>
    						</tr>
    						<tr>
    							<td>NID</td>
    							<td><input type="number" name="NID" value="<?php echo $NID ?>" autofocus>
    								<span id="NIDErr" style="color: red;"></span> <br><br>
    						</tr>
							<tr>
    							<td>Sold</td>
    							<td><input type="text" name="Sold" value="<?php echo $Sold?>" autofocus>
    								<span id="SoldErr" style="color: red;"></span> <br><br>
    						</tr>
    					</tbody>
    				</table>
    				<input type="submit" name="Register" value="Update">
    			</fieldset>
    			<br><br>
    		</form>
    		<?php include 'footer.php'; ?>
    	</body>

    	</html>