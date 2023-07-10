<?php
    require 'Connect.php';

    function insert_chat($BDT,$Road)
    {
        $ezl = connect();

        $sql = "INSERT INTO chat(BDT, Road ) VALUES ('$BDT','$Road')";

        if($ezl->query($sql)) {
            header("location: /Admin Final Project/View/chat.php");
            // setcookie('msg', '<b>✅ Registration Successful</b>', time() + 1, '/');
        }
        else {
            echo "Error: " . $sql . "<br>" . $ezl->error;
        }

        $ezl->close();
    }

  

?>
