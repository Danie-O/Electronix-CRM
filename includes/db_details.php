<?php
    //CREATING A CONNECTION STRING IN PHP   
    $dbname = "electronix";
    $connection = new mysqli("localhost", "root", "", $dbname);

    // Check connection
    if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    }
    
    echo "<p>";
?>