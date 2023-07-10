<?php
session_start();
if (!isset($_COOKIE['rem'])) {
    header('location: /Final Project/View/Logout.php');
}
if (!isset($_SESSION['username'])) {
    header("Location: /FInal Project/View/login.php");
}

$ezl = new mysqli("localhost", "root", "", "dream house");
if ($ezl->connect_error) {
    die("Data base Connection failed: " . $ezl->connect_error);
}

$sql = "SELECT * FROM review";
$qry = $ezl->query($sql);
?>
<?php include('../View/Profile-header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order review</title>
</head>

<body>

    <fieldset style="width: 70%; height: 450px; overflow: scroll;">
        <legend><b>Order Review</b></legend>
        <h3 align="center">Order Review</h3>
        <form action="../Controller/searchorderaction.php" method="get" onkeyup="review(this); return false;">
                🔎<input type="text" id="search" name="Search" placeholder="Search Buyer Name">
                <!-- <input type="submit" name="submit" value="Search"> -->
            </form>
        <div align='right'>
        </div>
        <br>

        <div id="records" align="center">
            <table border="1" align="center">
                <tbody>
                    <tr>
                        <th>Apartment Name</th>
                        <th>Buyer Name</th>
                        <th>Comment</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    if ($qry->num_rows > 0) {
                        while ($data = $qry->fetch_assoc()) {
                            echo "<tr>";
                            //echo "<td>" . $data['ID'] . "</td>";
                            echo "<td>" . $data['Apartment'] . "</td>";
                            echo "<td>" . $data['Buyer'] . "</td>";
                            echo "<td>" . $data['Comment'] . "</td>";
                            echo "<td>" . $data['Rating'] . "</td>";
                            echo "<td><a href='/FInal Project/Controller/deleteorderaction.php?id=" . $data['ID'] . "'>Delete</a></td>";
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

    </fieldset>
    <br>
    <?php include 'footer.php'; ?>

    <script>
        function review(stdnt) {
            let search = stdnt.search.value;
            let resulturl = stdnt.action;

            if(search !== "") {
                let xhttp = new XMLHttpRequest();
                xhttp.onload = function(){
                    document.getElementById('records').innerHTML = this.responseText;
                }

                xhttp.open("GET", resulturl + "?review=" + search);
                xhttp.send();
            }
            else {
                alert('Empty Search!');
            }
        }
    </script>
</body>

</html>