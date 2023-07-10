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

<!-- <script src="../View/js/apartment.js"></script>
    	<style type="text/css"> -->

</style>
<form action="../Controller/helplineaction.php" target="_self" method="POST" onsubmit="return validl(this)" novalidate>

<fieldset>
    <legend>
        <h3>Helpline</h3>
    </legend>

    <table>
        <thead></thead>
        <tbody>
            <br><br>
            <p?>Write a Problem</p>

                <tr>
                    <td></td>
                    <td><label for="Helpline"></label>
                        <input type="textarea " name="Helpline" placeholder="Helpline" autofocus>
                        <span id="HelplineErr" style="color: red;"></span> <br><br>
                    </td>
                </tr>
                <!-- <td><label for="Apartment"></label>
    							<input type="text" name="Apartment" placeholder="Apartment" autofocus>
    							<span id="ApartmentErr" style="color: red;"></span> <br><br>
    						</td> -->




        </tbody>
    </table>
    <br>
    <input type="submit" name="Register" value="Post">
</fieldset>
<br><br>
</form>
<?php include 'footer.php'; ?>