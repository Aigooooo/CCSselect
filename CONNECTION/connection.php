<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ccsselect";
    $conn = new mysqli($host, $username, $password, $dbname);
    if(!$conn)
    {
        die("Connection Failed : ".mysqli_connect_error());
    }
?>  