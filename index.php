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
    <link rel="stylesheet" href="backend/style.css">
    <style>
        .blinking {
            animation: blink 2s infinite;
        }

        /* Style for blinking effect */
        @keyframes blink {
            0% {
                color: red;
            }

            25% {
                color: blue;
            }

            50% {
                color: green;
            }

            75% {
                color: orange;
            }

            100% {
                color: purple;
            }
        }

        /* Style for tips */
        #tips-text {
            font-weight: bold;
            margin-bottom: 5px;
        }

        #tips-list {
            list-style-type: none;
            padding: 0;
        }

        #tips-list li {
            margin-bottom: 5px;
        }

        /* Define keyframes for grow and shrink effect */
        @keyframes growShrink {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Apply animation to h3 */
        #sign-in-description {
            animation: growShrink 2s infinite alternate;
            /* Alternate between grow and shrink */
        }

        /* Style for categories */
        .categories {
            margin-top: 20px;
        }

        .categories h3 {
            text-align: center;
        }

        .categories ul {
            list-style: none;
            padding-left: 0;
            text-align: center;
        }

        .categories ul li {
            margin-top: 10px;
        }

        .categories ul li strong {
            font-weight: bold;
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
            <div>
                <p style="color: #f8f9fa;">______</p>
            </div>

            <div class="user-logged d-flex justify-content-end align-items-center">
                <?php if (isset($_SESSION['username'])) : ?>
                    <p><?= $_SESSION['username'] ?></p>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="includes/logout.inc.php"><i class="bi bi-box-arrow-right"></i> Log out</a>
                <?php else : ?>
                    <a href="login.php"><i class="bi bi-box-arrow-in-right"></i> <strong>Login</strong></a>
                <?php endif; ?>
            </div>
            <div>
                <p style="color: #f8f9fa;">____</p>
            </div>



    </nav>

    <div class="b-area">
        <div>
            <h2 style="text-align:center;" id="sign-in-text">Welcome to E-book store!</h2><br />
        </div>
        <div>
            <h3 id="sign-in-description" style="text-align:center; color:orangered;">Sign In to use Digital Library.</h3>
        </div>
        <div class="categories">
            <h3 style="color: #6b79a7;">Categories Availables with us:</h3>
            <ul>
                <li>
                    <strong style="color: #ac2e8b;">Books:</strong>
                    <ul>
                        <li>Fiction</li>
                        <li>Non-fiction</li>
                        <li>Sci-Fi</li>
                    </ul>
                </li>
                <li>
                    <strong style="color: #ac2e8b;">Images:</strong>
                    <ul>
                        <li>Nature</li>
                        <li>Travel</li>
                        <li>Abstract</li>
                    </ul>
                </li>
                <li>
                    <strong style="color: #ac2e8b;">Videos:</strong>
                    <ul>
                        <li>Documentaries</li>
                        <li>Tutorials</li>
                        <li>Short Films</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>



    <div class="footer-area">
        <strong>
            <p>copyright 2024</p>
        </strong>
        <hr>
        <hr>
        <hr class="border border-danger border-2 opacity-50">
        <hr class="border border-primary border-3 opacity-75">
    </div>
    <script>
        // JavaScript to add class with blinking animation to sign-in text
        document.addEventListener('DOMContentLoaded', function() {
            var signInText = document.getElementById('sign-in-text');
            signInText.classList.add('blinking');
        });
    </script>

</body>

</html>