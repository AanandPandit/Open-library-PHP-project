<?php
include "db.php";

$servername = "localhost";
$username = "root";
$password = "";
$database = "ebookdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Encrypt the password (You should use more secure encryption methods in production)
$encrypted_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into database
$sql = "INSERT INTO useraccount (username, email, password) VALUES ('$username', '$email', '$encrypted_password')";
// $sql = "INSERT INTO useraccount (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
    header("location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// $conn->close();
?>
