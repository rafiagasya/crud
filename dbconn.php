<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newphp";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn) {
        die("connect failed".mysqli_connect_error());
    }
?>