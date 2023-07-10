<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <?php include('../View/profile-header.php'); ?>
    <form method="POST" action="../Controller/updateaction.php" novalidate>
        <fieldset style="width: auto;" >
            <legend>
                <h3>Update Profile</h1>
            </legend>
            <?php
            if (isset($_COOKIE['msg'])) {
                echo $_COOKIE['msg'];
            }
            ?>
            <table >
                <tbody>
                    <input name="id" value="<?php echo $_SESSION['id']; ?>" id="fname" hidden>
                    <tr>
                        <td>
                            <label for="fname">First Name</label>
                        </td>
                        <td>
                            <input name="FirstName" value="<?php echo $_SESSION['fname']; ?>" id="fname">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lname">Last Name</label>
                        </td>
                        <td>
                            <input name="LastName" value="<?php echo $_SESSION['lname']; ?>" id="lname">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="gender">Gender</label>
                        </td>
                        <td>
                            <input <?php if ($_SESSION['gender'] == 'Male') {
                                        echo 'checked="checked"';
                                    } ?> type="radio" name="Gender" value="Male">Male
                            <input <?php if ($_SESSION['gender'] == 'Female') {
                                        echo 'checked="checked"';
                                    } ?> type="radio" name="Gender" value="Female">Female
                            <input <?php if ($_SESSION['gender'] == 'Other') {
                                        echo 'checked="checked"';
                                    } ?> type="radio" name="Gender" value="Other">Other
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email</label>
                        </td>
                        <td>
                            <input name="Email" value="<?php echo $_SESSION['email']; ?>" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="phone">Phone</label>
                        </td>
                        <td>
                            <input name="Phone" value="<?php echo $_SESSION['phone']; ?>" id="phone">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="road">Road</label>
                        </td>
                        <td>
                            <input name="road" value="<?php echo $_SESSION['road']; ?>" id="road">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="country">Country</label>
                        </td>
                        <td>
                            <input name="country" value="<?php echo $_SESSION['country']; ?>" id="country">
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <!-- Register -->
            <input type="submit" name="submit" value="Update">
    </form>
    </fieldset>

    <br>
    <?php include 'footer.php'; ?>
</body>

</html>