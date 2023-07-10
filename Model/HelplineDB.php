<?php
    require 'Connect.php';

    function insert_helpline($Helpline)
    {
        $ezl = connect();

        $sql = "INSERT INTO helpline(Helpline) VALUES ('$Helpline')";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/helplinelist.php");
            setcookie('msg', '<b>✅ Registration Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }
    function edit_helpline($ID, $Helpline)
    {
        $ezl = connect();

        $sql = "UPDATE helpline set  Helpline = '$Helpline' WHERE ID = '$ID'";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/helplinelist.php");
            setcookie('msg', '<b>✅Edit Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }
    function delete_helpline($id) {
        $ezl = connect();

        $sql = "DELETE FROM helpline WHERE ID = $id";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/helplinelist.php");
            setcookie('msg', '<b>✅Delete Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }

?>
