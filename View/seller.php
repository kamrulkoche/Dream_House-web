    	<?php
		if (isset($_COOKIE['msg'])) {
			echo $_COOKIE['msg'];
		}
		?>

    	<?php
		include('profile-header.php');
		?>

    	<script src="../View/js/seller.js"></script>
    	<style type="text/css">

    	</style>

    	<form action="../Controller/selleraction.php" target="_self" method="POST" onsubmit="return validseller(this)" novalidate>

    		<fieldset>
    			<legend>
    				<h3>Seller</h3>
    			</legend>

    			<table>
    				<thead></thead>
    				<tbody>
    					<tr>
    						<td>First Name</td>
    						<td><label for="FirstName"></label>
    							<input type="text" name="FirstName" placeholder="First Name" autofocus>
    							<span id="FirstNameErr" style="color: red;"></span> <br><br>
    						</td>
    					</tr>
    					<tr>
    						<td>Last Name</td>
    						<td><label for="LastName"></label>
    							<input type="text" name="LastName" placeholder="Last Name" autofocus>
    							<span id="LastNameErr" style="color: red;"></span> <br><br>
    						</td>
    					</tr>
    					<tr>
    						<td>Gender</td>
    						<td><label for="Gender"></label>
    							<input type="text" name="Gender" placeholder="Gender" autofocus>
    							<span id="GenderErr" style="color: red;"></span> <br><br>
    						</td>
    					</tr>
    					<tr>
    						<td>NID</td>
    						<td><input type="NID" name="NID">
    							<span id="NIDErr" style="color: red;"></span> <br><br>
    					</tr>
    					<tr>
    						<td>Sold</td>
    						<td><input type="Sold" name="Sold">
    							<span id="SoldErr" style="color: red;"></span> <br><br>
    					</tr>
    				</tbody>
    			</table>
    			<br>
    			<input type="submit" name="Register" value="Register">
    		</fieldset>
    		<br><br>
    	</form>
    	<?php include 'footer.php'; ?>