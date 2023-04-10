<?php
    // Include db_details.php to get database connection details
    require_once 'db_details.php';

    // Create database
    $sql = "CREATE DATABASE electronix"; 
    
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    // Close connection
    $conn->close();
?>
