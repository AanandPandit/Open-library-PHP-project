<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Database connection parameters
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

    // Fetch PDF file from the database based on the provided ID
    $stmt = $conn->prepare("SELECT file_name, file_data FROM pdf_files WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($file_name, $file_data);
        $stmt->fetch();

        // Set headers for file display
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $file_name . '"');
        header('Content-Length: ' . strlen($file_data));

        // Output PDF content
        echo $file_data;
    } else {
        echo "PDF file not found.";
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // Handle the case where the ID parameter is not provided
    echo "PDF ID not specified.";
}
?>


