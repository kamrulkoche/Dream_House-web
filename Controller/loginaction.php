<?php
require "../Model/Connect.php";
session_start();
$username = $password = "";
$isEmpty = $isValid = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test($_POST["username"]);
    $password = test($_POST["password"]);
    $remember = test($_POST["remember"]);

    if (empty($username))
        $isEmpty = true;

    if (empty($password))
        $isEmpty = true;

    if (!$isEmpty) {
        if ($remember == "") {
            setcookie('rem', 'remember', time() + 5, '/');
        } else {
            setcookie('rem', 'remember', 0, '/');
        }
    }

    if (!$isEmpty) {
        $ezl = connect();
        $sql = "SELECT * FROM seller";
        $row = $ezl->query($sql);

        if ($row->num_rows > 0) {
            while ($seller = $row->fetch_assoc()) {
                if ($seller['UserName'] == $username and $seller['Password'] == $password) {
                    $_SESSION['id'] = $seller['ID'];
                    $_SESSION['fname'] = $seller['FirstName'];
                    $_SESSION['lname'] = $seller['LastName'];
                    $_SESSION['gender'] = $seller['Gender'];
                    $_SESSION['email'] = $seller['Email'];
                    $_SESSION['phone'] = $seller['MobileNo'];
                    $_SESSION['road'] = $seller['Road'];
                    $_SESSION['country'] = $seller['Country'];
                    $_SESSION['username'] = $seller['UserName'];
                    $_SESSION['password'] = $seller['Password'];
                    header("Location: ../View/dashboard.php");
                    $isValid = true;
                }
            }
        }

        if (!$isValid) {
            $_SESSION['error'] = "*Username or Password incorrect<br><br>";
            $error = $_SESSION['error'];
            header("Location: ../View/login.php");
            setcookie('error', $error, time() + 1, "/");
        }
    } else {
        $_SESSION['error'] = "*Please input  Username and Password<br><br>";
        $error = $_SESSION['error'];
        header("Location: ../View/login.php");
        setcookie('error', $error, time() + 1, "/");
    }
}
