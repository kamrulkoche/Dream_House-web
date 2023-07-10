<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="../View/js/registration.js"></script>
	<style>
		.text {
			width: 80%;
			padding: 8px 25px;
			margin-top: 20px;
			margin-left: 10px;
			box-sizing: border-box;
		}

		.radio {

			padding: 8px 25px;
			margin-top: 20px;
			margin-left: 10px;
			box-sizing: border-box;

		}

		.button {
			background-color: black;
			border: none;
			color: white;
			padding: 10px 80px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 20px;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<?php include('../View/header.php'); ?>
	<form action="../Controller/registrationaction.php" target="_self" method="POST" onsubmit="return validregistration(this)" novalidate>


		<!-- General Start -->
		<h1 align="center" style="background: black; color: white;"> REGISTRATION</h1>
		<?php
		if (isset($_COOKIE['msg'])) {
			echo $_COOKIE['msg'];
		}
		?>
		<div style="background:#C9C956;">
			<fieldset>
				<legend>
					<h1>General</h1>
				</legend>
				<table>
					<thead></thead>
					<tbody>
						<tr>
							<td>
								<label style="text-transform: uppercase; font-size: 16px;font-weight: 1000;">First Name</label>
							</td>
							<td><label for="FirstName"></label>
								<input type="text" class="text" name="FirstName" placeholder="FirstName" autofocus>
								<span id="FirstNameErr" style="color: red;"></span> <br><br>
							</td>
						</tr>
						<tr>
							<td>
								<label style="text-transform: uppercase; font-size: 16px;font-weight: 1000;">Last Name</label>
							</td>
							<td><label for="LastName"></label>
								<input type="text" class="text" name="LastName" placeholder="LastName" autofocus>
								<span id="LastNameErr" style="color: red;"></span> <br><br>
							</td>
						</tr>
						<tr>
							<td>
								<label style="text-transform: uppercase; font-size: 16px;font-weight: 1000;">Gender</label>
							</td>
							<td>
								<input type="radio" class="radio" name="Gender" id="Male" value="Male">
								<label for="Male">Male</label>
								<input type="radio" class="radio" name="Gender" id="Female" value="Female">
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
				<legend>
					<h1>Contact</h1>
				</legend>
				<table>
					<thead></thead>
					<tbody>
						<tr>
							<td>
								<label style="text-transform: uppercase; font-size: 16px;font-weight: 1000;">Email</label>
							</td>
							<td><input type="email" class="text" name="email">
								<span id="EmailErr" style="color: red;"></span> <br><br>
							</td>
						</tr>
						<tr>
							<td>
								<label style="text-transform: uppercase; font-size: 16px;font-weight: 1000;">Mobile No</label>
							</td>
							<td><input type="number" class="text" name="number">
								<span id="MobileNoErr" style="color: red;"></span> <br><br>
							</td>
						</tr>
					</tbody>
				</table>
			</fieldset>
			<!-- Contact End -->
			<br><br>


			<!-- Address Start -->
			<fieldset>
				<legend>
					<h1>Address</h1>
				</legend>
				<table>
					<thead></thead>
					<tbody>
						<tr>
							<td>
								<label style="text-transform: uppercase; font-size: 16px;font-weight: 1000;">House</label>
							</td>
							<td><label for="Street/House/Road"></label>
								<input type="text" class="text" name="road">
								<span id="RoadErr" style="color: red;"></span> <br><br>
							</td>
						</tr>
						<tr>
							<td>
								<label style="text-transform: uppercase; font-size: 16px;font-weight: 1000;">Country</label>
							</td>
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
				<br>
			</fieldset>
			<!-- Address End -->
			<br><br>



			<!-- Credential Start -->
			<fieldset>
				<legend>
					<h1>Credential</h1>
				</legend>
				<table>
					<thead></thead>
					<tbody>
						<tr>
							<td><label style="text-transform: uppercase; font-size: 16px;font-weight: 1000;">User Name</label></td>
							<td><label for="username"></label>
								<input type="text" class="text" name="username">
								<span id="UserErr" style="color: red;"></span> <br><br>
							</td>
						</tr>
						<tr>
							<td>
								<label style="text-transform: uppercase; font-size: 16px;font-weight: 1000;">Password</label>
							</td>
							<td>
								<input type="password" class="text" id="password" name="password">
								<span id="PasswordErr" style="color: red;"></span> <br><br>
							</td>
						</tr>
						<tr>
							<td>
								<label style="text-transform: uppercase; font-size: 16px;font-weight: 1000;">Confirm Password</label>
							</td>
							<td>
								<input type="password" class="text" id="confirm_password" name="confirm_password">
								<span id="ConpasswordErr" style="color: red;"></span> <br><br>
							</td>
						</tr>
					</tbody>
				</table>
			</fieldset>
		</div>
		<!-- Credential End -->
		<br>

		<!-- Register -->
		<h1 align="center"><input type="submit" class="button" name="submit" value="Submit"></h1>
	</form>
	<br><br>

	<?php include 'footer.php'; ?>

</body>

</html>