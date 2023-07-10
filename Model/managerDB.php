<?php
    require 'Connect.php';

    function insert_manager($FirstName,$LastName,$Gender,$NID,$Sold)
    {
        $ezl = connect();

        $sql = "INSERT INTO manager(FirstName, LastName ,Gender,NID,Sold ) VALUES ('$FirstName','$LastName','$Gender','$NID','$Sold')";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/managerlist.php");
            setcookie('msg', '<b>Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }

  function delete_manager($id) {
        $ezl = connect();

        $sql = "DELETE FROM manager WHERE ID = $id";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/managerlist.php");
            setcookie('msg', '<b>✅Delete Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }
     function get($search) {
        $conn = connect(); 

        $sql = "SELECT * FROM manager Where FirstName LIKE ?";
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
