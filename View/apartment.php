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
		?>

    	<?php
		include('profile-header.php');
		?>

    	<script src="../View/js/apartment.js"></script>
    	<style type="text/css">

    	</style>
    	<form action="../Controller/apartmentaction.php" target="_self" method="POST" onsubmit="return validlapartment(this)" novalidate>

    		<fieldset>
    			<legend>
    				<h3>Apartment Add</h3>
    			</legend>

    			<table>
    				<thead></thead>
    				<tbody>
    					<tr>
    						<td>BDT</td>
    						<td><label for="BDT"></label>
    							<input type="text" name="BDT" placeholder="BDT" autofocus>
    							<span id="BDTErr" style="color: red;"></span> <br><br>
    						</td>
    					</tr>
    					<tr>
    						<td>Road No</td>
    						<td><label for="Road"></label>
    							<input type="text" name="Road" placeholder="Road" autofocus>
    							<span id="RoadErr" style="color: red;"></span> <br><br>
    						</td>
    					</tr>
    					<tr>
    						<td>Apartment</td>
    						<td><label for="Apartment"></label>
    							<input type="text" name="Apartment" placeholder="Apartment" autofocus>
    							<span id="ApartmentErr" style="color: red;"></span> <br><br>
    						</td>
    					</tr>
    					<tr>
    						<td>Email</td>
    						<td><input type="Email" name="Email">
    							<span id="EmailErr" style="color: red;"></span> <br><br>
    					</tr>
    					<tr>
    						<td>Mobile No</td>
    						<td><input type="phone" name="Mobile">
    							<span id="MobileErr" style="color: red;"></span> <br><br>
    					</tr>
    				</tbody>
    			</table>
    			<br>
    			<input type="submit" name="Register" value="Register">
    		</fieldset>
    		<br><br>
    	</form>
    	<?php include 'footer.php'; ?>