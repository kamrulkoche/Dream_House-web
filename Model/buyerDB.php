<?php
    require 'Connect.php';

    function insert_buyer($FirstName,$LastName,$Gender,$Number,$NID,$Sold)
    {
        $ezl = connect();

        $sql = "INSERT INTO buyer(FirstName, LastName ,Gender,Number,NID,Sold ) VALUES ('$FirstName','$LastName','$Gender','$Number','$NID','$Sold')";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/buyerlist.php");
            setcookie('msg', '<b>Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }

    function edit_buyer($ID, $FirstName,$LastName,$Gender,$Number,$NID,$Sold)
    {
        $ezl = connect();

        $sql = "UPDATE buyer set  FirstName = '$FirstName', LastName='$LastName',Gender='$Gender',Number='$Number', NID='$NID',Sold='$Sold' WHERE ID = '$ID'";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/buyerlist.php");
            setcookie('msg', '<b>✅Edit Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }

    function delete_buyer($id) {
        $ezl = connect();

        $sql = "DELETE FROM buyer WHERE ID = $id";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/buyerlist.php");
            setcookie('msg', '<b>✅Delete Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }

    function get($search) {
        $conn = connect(); 

        $sql = "SELECT * FROM buyer Where FirstName LIKE ?";
        $stmt = $conn->prepare($sql);
        $FirstName= $search;
        $FirstName = "%" . $FirstName . "%";
        $stmt->bind_param("s", $FirstName);

        $stmt->execute();
        $result = $stmt->get_result();

        $stmt->close();
        $conn->close();

        return $result;
    }

    
?>
