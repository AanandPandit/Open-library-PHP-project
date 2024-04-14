<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['pdf_file'])) {
    $pdf_file = $_FILES['pdf_file'];

    // Check if file is uploaded without errors
    if ($pdf_file['error'] == UPLOAD_ERR_OK) {
        $file_name = $pdf_file['name'];
        $file_tmp = $pdf_file['tmp_name'];

        // Read the file content
        $file_content = file_get_contents($file_tmp);

        // Additional fields
        $author = $_POST['author'] ?? null;
        $title = $_POST['title'] ?? null;
        $publisher = $_POST['publisher'] ?? null;
        $published_year = $_POST['published_year'] ?? null;
        $genre = $_POST['genre'] ?? null;

        // Prepare insert statement
        $stmt = $conn->prepare("INSERT INTO pdf_files (file_name, file_data, author, title, publisher, published_year, genre) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssis", $file_name, $file_content, $author, $title, $publisher, $published_year, $genre);
        if ($stmt->execute()) {
            // echo "PDF file uploaded successfully.";
            echo "<script>alert('Thanks for contributing. We love to share your books to all " .  "');</script>";
            echo "<div class='success-box'>PDF file uploaded successfully.</div>";
        } else {
            // echo "Error uploading PDF file.";
            echo "<script>alert('Error uploading PDF file. Try again!');</script>";
        }
        $stmt->close();
    } else {
        // echo "Error: " . $pdf_file['error'];
        echo "<script>alert('Error: " . $pdf_file['error'] . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="backend/script.js" defer></script>
    <link rel="stylesheet" href="backend/style.css">
    <style>
        .error {
            color: red;
        }

        /* Center the form elements */
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
        }

        .form-container div {
            margin-bottom: 10px;
        }

        .form-container label {
            font-size: 20px;
            text-align: left;
        }



        .form-container input {
            width: 300px;
        }

        .notification {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            width: fit-content;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="img/logo.jpg" alt="logo" width="10%">
            <a class="navbar-brand" href="homepage.php">E-Book Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="books.php">BOOKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/@yebook">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://archive.org/details/audio">AUDIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://sourceforge.net/">SOFTWARE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://images.google.com/">IMAGES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upload.php">CONTRIBUTE</a>
                    </li>
                </ul>
            </div>
            <!-- Nav Bar -->

            <!-- Search Box -->
            <div class="search-box">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" width="1000px">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <!-- Search Box -->

            <!-- myaccount -->
            <div class="myaccount">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <img id="userImage" src="img/person.svg" alt="Welcome! User" onclick="toggleDropdown()">
                        <div id="dropdownMenu" class="dropdown-menu">
                            <a href="#">Settings</a>
                            <a href="login.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- myaccount -->

        </div>
    </nav>

    <div class="b-area">
        <form method="post" enctype="multipart/form-data" class="form-container">
            <label for="choose-book" id="inp-label">Upload the book you want to add:</label>
            <input type="file" name="pdf_file"><br>

            <label for="title" id="inp-label">Title of the Book:</label>
            <input type="text" name="title" placeholder="Title"><br>

            <label for="author" id="inp-label">Author(s):</label>
            <input type="text" name="author" placeholder="Author">
            <small>Separate multiple authors with commas.</small><br>

            <label for="publisher" id="inp-label">Publisher:</label>
            <input type="text" name="publisher" placeholder="Publisher"><br>

            <label for="year" id="inp-label">Year Published:</label>
            <input type="text" name="published_year" placeholder="Published Year"><br>

            <label for="genre" id="inp-label">Genre:</label>
            <input type="text" name="genre" placeholder="Genre"><br>
            <button type="submit">Upload PDF</button>
        </form>
        <hr>
        <hr>
        <hr class="border border-danger border-2 opacity-50">
        <hr class="border border-primary border-3 opacity-75">
    </div>

    <div class="footer-area">
        <strong>
            <p>copyright 2024</p>
        </strong>
    </div>
    </div>
</body>

</html>