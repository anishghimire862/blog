<?php
    require('informations.php');
    function getConnection() {
        $conn = new mysqli(Configuration::$serverName,Configuration::$username,Configuration::$password,Configuration::$dbname);
        if($conn->connect_error) {
            die("connection failed " .$conn->connect_error);
        }
        return $conn;
    }
?>