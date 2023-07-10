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

$sql = "SELECT * FROM apartment";
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
    <fieldset style="width: 100%; overflow: scroll;">
        <legend><b>Apartment List</b></legend>
        <h3 align="center">Apartment List</h3>
        <form action="../Controller/searchapartmentaction.php" method="get" onsubmit="apartment(this); return false;">
                🔎<input type="text" id="search" name="Search" placeholder="Search Apartment">
                <input type="submit" name="submit" value="Search">
            </form>
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
                        <th>BDT</th>
                        <th>Road</th>
                        <th>Apartment</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php
                    if ($qry->num_rows > 0) {
                        while ($data = $qry->fetch_assoc()) {
                            echo "<tr>";
                            // echo "<td>" . $data['ID'] . "</td>";
                            echo "<td>" . $data['BDT'] . "</td>";
                            echo "<td>" . $data['Road'] . "</td>";
                            echo "<td>" . $data['Apartment'] . "</td>";
                            echo "<td>" . $data['Email'] . "</td>";
                            echo "<td>" . $data['Mobile'] . "</td>";
                            echo "<td><a href='/Admin FInal Project/View/editapartment.php?id=" . $data['ID'] . "'>Edit</a></td>";
                            echo "<td><a href='/Admin FInal Project/Controller/deleteapartmentaction.php?id=" . $data['ID'] . "'>Delete</a></td>";
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

        <h3 align="center"><a href="apartment.php">Add Apartment</a></h3>
    </fieldset>
    <br>
    <?php include 'footer.php'; ?>


    
    <script>
        function apartment(stdnt) {
            let search = stdnt.search.value;
            let resulturl = stdnt.action;

            if(search !== "") {
                let xhttp = new XMLHttpRequest();
                xhttp.onload = function(){
                    document.getElementById('records').innerHTML = this.responseText;
                }

                xhttp.open("GET", resulturl + "?apartment=" + search);
                xhttp.send();
            }
            else {
                alert('Empty Search!');
            }
        }
    </script>

</body>

</html>