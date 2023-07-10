<?php
session_start();

if (!isset($_COOKIE['rem'])) {
    header('location: logout.php');
}

if (!isset($_SESSION['id'])) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deshboard</title>
</head>

<body>

    <?php include('../View/Profile-header.php'); ?>
    <p align="center"><img src="/Final Project/View/img/House_logo.png" height="300"></p>


    <?php include 'footer.php'; ?>
</body>

</html>