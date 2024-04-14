<?php

$servername = "localhost";
$username = "root";
$password = "";
// create connection
$conn = mysqli_connect($servername, $username, $password);
// check connection
if (!$conn) {
    die("Connection faliled: " . mysqli_error($conn));
}

// Select a database
if (!mysqli_select_db($conn, 'ebookdb')) {
    // Create the database if it doesn't exist
    $sql = "CREATE DATABASE ebookdb";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully!";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}
// $conn->close();
?>