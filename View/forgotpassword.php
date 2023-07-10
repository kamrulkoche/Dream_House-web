<?php
include('header.php');

?>
<form action="../Controller/forgotpasswordaction.php" target="_self" method="POST" onsubmit="return validlforgotpassword(this)" novalidate>

	<fieldset>
		<legend>
			<h3>ForgotPassword</h3>
		</legend>
		<table>
			<thead></thead>
			<tbody>
				<tr>
					<td>Email</td>
					<td><input type="Email" name="Email"></td>
					<span id="EmailErr" style="color: red;"></span> <br><br>
				</tr>
			</tbody>
		</table>
		<br>
		<input type="submit" name="Register" value="Submit">
	</fieldset>
	<br><br>
</form>
<?php include 'footer.php'; ?>