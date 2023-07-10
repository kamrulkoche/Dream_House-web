<?php
session_start();
if (!isset($_COOKIE['rem'])) {
    header('location: / Admin Final Project/View/Logout.php');
}
if (!isset($_SESSION['username'])) {
    header("Location: /Admin FInal Project/View/login.php");
}

$ezl = new mysqli("localhost", "root", "", "dream house");
if ($ezl->connect_error) {
    die("Data base Connection failed: " . $ezl->connect_error);
}

$sql = "SELECT * FROM helpline";
$qry = $ezl->query($sql);
?>
<?php include('../View/Profile-header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartment List</title>
</head>

<body>
    <fieldset style="width: 100%;  overflow: scroll;">
        <legend><b>Helpline List</b></legend>
        <h3 align="center">Helpline List</h3>
        <span>
            <?php
            if (isset($_COOKIE['msg'])) {
                echo $_COOKIE['msg'];
            }
            ?>
        </span>
        <div align='right'>
        </div>
        <br>

        <div id="records" align="center">
            <table border="1" align="center">
                <tbody>
                    <tr>
                       
                        <th>Helpline</th>
                        
                        <th colspan="2">Action</th>
                    </tr>
                    <?php
                    if ($qry->num_rows > 0) {
                        while ($data = $qry->fetch_assoc()) {
                            echo "<tr>";
                            // echo "<td>" . $data['ID'] . "</td>";
                            echo "<td>" . $data['Helpline'] . "</td>";
                           
                            // echo "<td><a href='/Admin FInal Project/View/edithelpline.php?id=" . $data['ID'] . "'>Edit</a></td>";
                            echo "<td><a href='/Admin FInal Project/Controller/deletehelplineaction.php?id=" . $data['ID'] . "'>Delete</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr>";
                        echo "<td></td>";
                        echo "<td>--</td>";
                        echo "<td>--</td>";
                        echo "<td>--</td>";
                        echo "<td>--</td>";
                        echo "<td>--</td>";
                        echo "</tr>";
                    }
                    $ezl->close();
                    ?>
                </tbody>
            </table>
        </div>

        <!-- <h3 align="center"><a href="helpline.php">Add Help</a></h3> -->
    </fieldset>
    <br>
    <?php include 'footer.php'; ?>
</body>

</html>