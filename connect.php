<?php
    $servername="mysql.cs.nott.ac.uk";
    $username="psxrc3_G54DIS";
    $password="cry95614";
    $databasename="psxrc3_G54DIS";

    $conn = new mysqli($servername,$username,$password,$databasename);

    if ($conn->connect_error) {
        die("Connection failed:". $conn->connect_error);
    }
?>
