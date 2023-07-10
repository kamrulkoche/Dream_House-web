<?php
require "connect.php";

function edit($id, $FirstName, $LastName, $gender, $number, $email, $road, $country)
{
    $ezl = connect();
    $sql = "UPDATE seller SET FirstName='$FirstName',LastName='$LastName',  Email='$email', Gender='$gender', MobileNo='$number',  Road='$road', Country='$country' WHERE ID=$id";
    $qry = $ezl->query($sql);

    header("location: /Admin Final Project/View/Profile.php");
    $ezl->close();
}
function pass($id, $change_password)
{
    $ezl = connect();
    $sql = "UPDATE seller SET Password='$change_password' WHERE ID=$id";
    $qry = $ezl->query($sql);

    header("location: /Admin Final Project/View/Profile.php");
    $ezl->close();
}
?>
