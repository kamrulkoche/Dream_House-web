<?php
    require 'Connect.php';

    function insert_Seller($firstname,$lastname,$gender,$email,$mobileno,$road,$country,$username,$password)
    {
        $ezl = connect();

        $sql = "INSERT INTO seller(FirstName, LastName, Gender, Email, MobileNo, Road, Country, UserName, Password) VALUES ('$firstname', '$lastname', '$gender', '$email', '$mobileno', '$road', '$country', '$username', '$password')";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/login.php");
            setcookie('msg', '<b>✅ Registration Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }
?>