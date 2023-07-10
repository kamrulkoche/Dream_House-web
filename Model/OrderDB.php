<?php
    require 'Connect.php';

    function delete_review ($id) {
        $ezl = connect();

        $sql = "DELETE FROM review WHERE ID = $id";

        if($ezl->query($sql)) {
            header("location: /Final Project/View/order.php");
            setcookie('msg', '<b>✅Delete Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }
    function get($search) {
        $conn = connect(); 

        $sql = "SELECT * FROM review Where Buyer LIKE ?";
        $stmt = $conn->prepare($sql);
        $Buyer = $search;
        $Buyer = "%" . $Buyer . "%";
        $stmt->bind_param("s", $Buyer);

        $stmt->execute();
        $result = $stmt->get_result();

        $stmt->close();
        $conn->close();

        return $result;
    }
?>