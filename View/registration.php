<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="../View/js/registration.js"></script>
</head>

<body>
	<?php include('../View/header.php'); ?>
	<form action="../Controller/registrationaction.php" target="_self" method="POST" onsubmit="return validregistration(this)" novalidate>

		<h1 align="center">Registration</h1>
		<?php
		if (isset($_COOKIE['msg'])) {
			echo $_COOKIE['msg'];
		}
		?>
		<fieldset>
			<legend>General</legend>
			<table>
				<thead></thead>
				<tbody>
					<tr>
						<td>First Name</td>
						<td><label for="FirstName"></label>
							<input type="text" name="FirstName" placeholder="FirstName" autofocus>
							<span id="FirstNameErr" style="color: red;"></span> <br><br>
						</td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><label for="LastName"></label>
							<input type="text" name="LastName" placeholder="LastName" autofocus>
							<span id="LastNameErr" style="color: red;"></span> <br><br>
						</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
							<input type="radio" name="Gender" id="Male" value="Male">
							<label for="Male">Male</label>
							<input type="radio" name="Gender" id="Female" value="Female">
							<label for="Female">Female</label>
							<span id="GenderErr" style="color: red;"></span> <br><br>
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
		<!-- General End -->
		<br><br>

		<!-- Contact Start -->
		<fieldset>
			<legend>Contact</legend>
			<table>
				<thead></thead>
				<tbody>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email">
							<span id="EmailErr" style="color: red;"></span> <br><br>
					</tr>
					<tr>
						<td>Mobile No</td>
						<td><input type="number" name="number">
							<span id="MobileNoErr" style="color: red;"></span> <br><br>
					</tr>
				</tbody>
			</table>
		</fieldset>
		<!-- Contact End -->
		<br><br>



		<!-- Address Start -->
		<fieldset>
			<legend>Address</legend>
			<table>
				<thead></thead>
				<tbody>
					<tr>
						<td>Street/House/Road</td>
						<td><label for="Street/House/Road"></label>
							<input type="text" name="road">
							<span id="RoadErr" style="color: red;"></span> <br><br>
						</td>
					</tr>
					<tr>
						<td>Country</td>
						<td>
							<select name="Country" id="Country">
								<option value="Bangladesh">Bangladesh</option>
								<option value="India">India</option>
								<span id="CountryErr" style="color: red;"></span> <br><br>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
		<!-- Address End -->
		<br><br>



		<!-- Password Start -->
		<fieldset>
			<legend>Password</legend>
			<table>
				<thead></thead>
				<tbody>
					<tr>
						<td>User Name</td>
						<td><label for="username"></label>
							<input type="text" name="username">
							<span id="UserErr" style="color: red;"></span> <br><br>
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>
							<input type="password" id="password" name="password">
							<span id="PasswordErr" style="color: red;"></span> <br><br>
						</td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td>
							<input type="password" id="confirm_password" name="confirm_password">
							<span id="ConpasswordErr" style="color: red;"></span> <br><br>
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
		<!-- Password End -->
		<br>

		<!-- Register -->
		<input type="submit" name="Register" value="Register">
	</form>
	<br><br>

	<?php include 'footer.php'; ?>

</body>

</html>