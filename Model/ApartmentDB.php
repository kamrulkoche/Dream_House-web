<?php
    require 'Connect.php';

    function insert_apartment($BDT,$Road,$Apartment,$Email,$Mobile)
    {
        $ezl = connect();

        $sql = "INSERT INTO apartment(BDT, Road ,Apartment, Email,Mobile) VALUES ('$BDT','$Road','$Apartment','$Email','$Mobile')";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/apartmentlist.php");
            setcookie('msg', '<b>✅ Registration Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }

    function edit_apartment($ID, $BDT,$Road,$Apartment,$Email,$Mobile)
    {
        $ezl = connect();

        $sql = "UPDATE apartment set  BDT = '$BDT', Road='$Road',Apartment='$Apartment', Email='$Email',Mobile='$Mobile' WHERE ID = '$ID'";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/apartmentlist.php");
            setcookie('msg', '<b>✅Edit Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }

    function delete_apartment($id) {
        $ezl = connect();

        $sql = "DELETE FROM apartment WHERE ID = $id";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/apartmentlist.php");
            setcookie('msg', '<b>✅Delete Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }
     function get($search) {
        $conn = connect(); 

        $sql = "SELECT * FROM apartment Where BDT LIKE ?";
        $stmt = $conn->prepare($sql);
        $BDT = $search;
        $BDT = "%" . $BDT . "%";
        $stmt->bind_param("s", $BDT);

        $stmt->execute();
        $result = $stmt->get_result();

        $stmt->close();
        $conn->close();

        return $result;
    }

?>
