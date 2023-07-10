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

		$sql = "SELECT * FROM helpline";
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
    		<!-- <script src="../View/js/apartment.js"></script>
    		<style type="text/css"> -->

    		</style>
    		<form action="../Controller/edithelplineaction.php" target="_self" method="POST" onsubmit="return validl(this)" novalidate>


    			<?php
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
					if ($qry->num_rows > 0) {
						while ($data = $qry->fetch_assoc()) {
							if (+$id == $data['ID']) {
								$helpline = $data['Helpline'];
								
							}
						}
					}
				}
				?>
    			<fieldset>
    				<legend>
    					<h3>Helpline Update</h3>
    				</legend>

    				<table>
    					<thead></thead>
    					<tbody>
    						<input type="number" name="id" value="<?php echo $id ?>" hidden>
    						<tr>
    							<td>Helpline</td>
    							<td><label for="Helpline"></label>
    								<input type="text" name="Helpline" placeholder="Helpline" value="<?php echo $helpline; ?>" autofocus>
    								<span id="HelplineErr" style="color: red;"></span> <br><br>
    							</td>
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