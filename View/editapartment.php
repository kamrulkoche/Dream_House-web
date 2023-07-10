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

		$sql = "SELECT * FROM apartment";
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
    		<script src="../View/js/apartment.js"></script>
    		<style type="text/css">

    		</style>
    		<form action="../Controller/editapartmentaction.php" target="_self" method="POST" onsubmit="return validlapartment(this)" novalidate>


    			<?php
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					if ($qry->num_rows > 0) {
						while ($data = $qry->fetch_assoc()) {
							if (+$id == $data['ID']) {
								$bdt = $data['BDT'];
								$road = $data['Road'];
								$apartment = $data['Apartment'];
								$email = $data['Email'];
								$mobile = $data['Mobile'];
							}
						}
					}
				}
				?>
    			<fieldset>
    				<legend>
    					<h3>Apartment Update</h3>
    				</legend>

    				<table>
    					<thead></thead>
    					<tbody>
    						<input type="number" name="id" value="<?php echo $id ?>" hidden>
    						<tr>
    							<td>BDT</td>
    							<td><label for="BDT"></label>
    								<input type="text" name="BDT" placeholder="BDT" value="<?php echo $bdt; ?>" autofocus>
    								<span id="BDTErr" style="color: red;"></span> <br><br>
    							</td>
    						</tr>
    						<tr>
    							<td>Road No</td>
    							<td><label for="Road"></label>
    								<input type="text" name="Road" placeholder="Road" value="<?php echo $road; ?>" autofocus>
    								<span id="RoadErr" style="color: red;"></span> <br><br>
    							</td>
    						</tr>
    						<tr>
    							<td>Apartment</td>
    							<td><label for="Apartment"></label>
    								<textarea name="Apartment"><?php echo $apartment; ?></textarea>
    								<span id="ApartmentErr" style="color: red;"></span> <br><br>
    							</td>
    						</tr>
    						<tr>
    							<td>Email</td>
    							<td><input type="Email" name="Email" value="<?php echo $email; ?>" autofocus>
    								<span id="EmailErr" style="color: red;"></span> <br><br>
    						</tr>
    						<tr>
    							<td>Mobile No</td>
    							<td><input type="phone" name="Mobile" value="<?php echo $mobile; ?>" autofocus>
    								<span id="MobileErr" style="color: red;"></span> <br><br>
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