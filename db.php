<?php
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "capthor";
    
    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8mb4');
        echo '<script>console.log("connection passed")</script>'; //optional
    }

?>