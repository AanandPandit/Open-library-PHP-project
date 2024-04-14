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
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            border: 0px solid black;
        }

        /* First column of the main table (25%) */
        table td:first-child {
            width: 25%;
        }

        /* Second column of the main table (75%) */
        table td:nth-child(2) {
            width: 75%;
        }

        /* Inner table within the second column */
        table td:nth-child(2) table {
            width: 100%;
        }

        /* First column of the inner table (20%) */
        table td:nth-child(1) {
            width: 20%;
        }

        /* Second column of the inner table (40%) */
        table td:nth-child(2) {
            width: 40%;
        }

        /* Third column of the inner table (15%) */
        table td:nth-child(3) {
            width: 15%;
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
        <table>
            <tr>
                <td style="text-align:left; vertical-align:top;">
                <h3 style="text-align: left; color:brown; padding: left 10px;">Contributors</h3>
                    <?php
                    // Fetch all PDF files from the database
                    $sql = "SELECT author FROM pdf_files";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        
                        while ($row = $result->fetch_assoc()) {
                            
                            echo "Author: " . $row["author"] . "<br>"; 
                        }
                    } else {
                        echo "No Contributor. Please add one.";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    // Fetch all PDF files from the database
                    $sql = "SELECT id, file_name, title, author, publisher, published_year FROM pdf_files";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output a table to display the list of PDF files
                        echo "<table border='0'>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td> <img src='img/bookcover.jpg' alt='Book Cover' height='200px'> </td>";
                            // echo "<td>" . $row["file_name"] . "</td>";
                            echo "<td> Title: " . $row["title"] . "<br>Author: " . $row["author"] . "<br>Published Year:" . $row["published_year"] . "</td>";
                            echo "<td>";
                            // View button
                            echo "<a href='view.php?id=" . $row["id"] . "' onclick='openWindow(\"backend/view.php?id=" . $row["id"] . "\")'>&#x1F440; View </a>";
                            echo "<br>";
                            // Download button
                            echo "<a href='download.php?id=" . $row["id"] . "'>&#x1F4E5; Download </a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No PDF files found.";
                    }
                    ?>
                </td>
            </tr>
        </table>

        <script>
            function openWindow(url) {
                window.open(url, "_self", "height=300,width=300");
                return false; // Prevent default link behavior
            }
        </script>
    </div>
    <div>
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

</body>

</html>