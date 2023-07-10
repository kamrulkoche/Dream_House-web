<?php 
    function connect() {
        $server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $dbname = "dream house";
        $ezl = new mysqli($server, $db_user, $db_pass, $dbname);
        
        if ($ezl->connect_error) {
            die("Data base Connection failed: " . $ezl->connect_error);
        }

        return $ezl;
    }
?>