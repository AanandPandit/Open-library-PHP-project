<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
            text-align: center;
        }

        .form-container div {
            margin-bottom: 10px;
        }

        .form-container label {
            font-size: 20px;
        }

        .form-container input{
            width: 300px;
        }
    </style>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="img/logo.jpg" alt="logo" width="10%">
            <a class="navbar-brand" href="#">E-Book Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
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
        </div>
    </nav>

    <div class="register-box">
        <hr class="border border-primary border-3 opacity-75">
        <hr class="border border-danger border-2 opacity-50">
        <hr>

        <form action="register_process.php" method="post" class="form-container">
            <h2>Register</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Register"><br>
            <p>Already have an account? <a href="login.php">Sign In</a>.</p>
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

</body>

</html>