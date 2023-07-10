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
    <script src="../View/js/changepassword.js"></script>
    <style type="text/css">

    </style>
</head>

<body>
    <?php include('../View/profile-header.php'); ?>
    <form action="../Controller/changepasswordaction.php" target="_self" method="POST" " onsubmit=" return validchangepassword(this)"novalidate>

        <form action="../Controller/loginaction.php" target="_self" method="POST" onsubmit="return validlogin(this)" novalidate>

            <fieldset style="width: 50%;">
                <legend>
                    <h3>Change Password</h1>
                </legend>
                <?php
                if (isset($_COOKIE['msg'])) {
                    echo $_COOKIE['msg'];
                }
                ?>
                <table>
                    <tbody>
                        <input name="id" value="<?php echo $_SESSION['id']; ?>" id="fname" hidden>


                        <tr>
                            <td>
                                <label for="change_password">Change Password</label>
                            </td>
                            <td>
                                <input name="change_password" id="change_passwor">
                                <span id="changepasswordErr" style="color: red;"></span> <br><br>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <label for="confirm_password">Confirm Password</label>
                            </td>
                            <td>
                                <input name="confirm_password" id="change_passwor">
                                <span id="confirmpasswordErr" style="color: red;"></span> <br><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <input type="submit" name="submit" value="Confirm">

        </form>
        </fieldset>

        <br>
        <?php include 'footer.php'; ?>
</body>

</html>