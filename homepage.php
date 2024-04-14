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
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Activate Carousel
        $('.carousel').carousel();
    </script>
    <link rel="stylesheet" href="backend/style.css">
    <style>
        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }

        .top-release {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 20px 0 0 0;
            justify-items: center;
        }


        .book-card {
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            width: 300px;
            margin-left: 20px;
        }

        .book-card img {
            border-radius: 5px 5px 0 0;
            width: 100%;
        }

        .book-card h2 {
            font-size: 1.2rem;
            margin: 10px;
        }

        .book-card p {
            font-size: 0.9rem;
            margin: 10px;
        }

        .book-card a {
            background-color: #333;
            border-radius: 5px;
            color: #fff;
            display: block;
            margin: 10px;
            padding: 10px;
            text-align: center;
            text-decoration: none;
        }

        .book-card a:hover {
            background-color: #444;
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
        <div>
            <hr class="border border-primary border-3 opacity-75">
            <hr class="border border-danger border-2 opacity-50">
            <div>
                <h4 style="text-align: center;">Top Releases</h4>
            </div>
            <hr class="border border-danger border-2 opacity-50">
        </div>
        <main>
            <div class="top-release">
                <div class="book-card">
                    <img src="img/living in the light.jpg" alt="Book cover">
                    <h2>Living in the Light_ A guide to personal transformation</h2>
                    <p>The happiest people don't have the best of everything, they just make the best of everything.</p>
                    <a href="books-pdf/Living in the Light_ A guide to personal transformation ( PDFDrive ).pdf">Read Now</a>
                </div>
                <div class="book-card">
                    <img src="img/give and take.jpg" alt="Book cover">
                    <h2>Give and Take_ WHY HELPING OTHERS DRIVES OUR SUCCESS</h2>
                    <p>“ Don't watch the clock, do what it does. Keep Going. ” ― Sam Levenson</p>
                    <a href="books-pdf/Give and Take_ WHY HELPING OTHERS DRIVES OUR SUCCESS ( PDFDrive ).pdf">Read Now</a>
                </div>
                <div class="book-card">
                    <img src="img/braiding.jpg" alt="Book cover">
                    <h2>Braiding Sweetgrass_ Indigenous Wisdom, Scientific Knowledge and the Teachings of Plants</h2>
                    <p>Studies show that eating a proper breakfast is one of the most positive things you can do if you are trying to lose weight. Breakfast skippers tend to gain weight.</p>
                    <a href="books-pdf/Braiding Sweetgrass_ Indigenous Wisdom, Scientific Knowledge and the Teachings of Plants ( PDFDrive ).pdf">Read Now</a>
                </div>
                <div class="book-card">
                    <img src="img/rick.jpg" alt="Book cover">
                    <h2>The Purpose-Driven Life_ What on Earth Am I Here For_</h2>
                    <p>We can often eat on the go and not only fail to taste the food but also overeat or not chew our food properly. To eat mindfully, decide you are going to make eating your sole focus.</p>
                    <a href="books-pdf/The Purpose-Driven Life_ What on Earth Am I Here For_ ( PDFDrive ).pdf">Read Now</a>
                </div>
                <div class="book-card">
                    <img src="img/no-drama.jpg" alt="Book cover">
                    <h2>No-Drama Discipline</h2>
                    <p>Help your children develop healthy habits early in life that will bring lifelong benefits. Be a good role model, make it fun, and involve the whole family in lifestyle changes.</p>
                    <a href="books-pdf/No-Drama Discipline_ The Whole-Brain Way to Calm the Chaos and Nurture Your Child's Developing Mind ( PDFDrive ).pdf">Read Now</a>
                </div>
            </div>
        </main>
        <div>
            <hr class="border border-primary border-3 opacity-75">
            <hr class="border border-danger border-2 opacity-50">
            <div>
                <h4 style="text-align: center;">Coming Soon</h4>
            </div>
            <hr class="border border-danger border-2 opacity-50">
        </div>
        <main>
            <div class="book-card">
                <img src="https://via.placeholder.com/300x400" alt="Book cover">
                <h2>Transformation</h2>
                <p>Shakti Gawain, with Laurel King. - Completely rev such as The Path of Transformation or</p>
                <a href="#">Coming Soon</a>
            </div>
            <div class="book-card">
                <img src="https://via.placeholder.com/300x400" alt="Book cover">
                <h2>Give and Take</h2>
                <p>Adam Grant. - WHY HELPING OTHERS DRIVES OUR SUCCESS</p>
                <a href="#">Coming Soon</a>
            </div>
            <div class="book-card">
                <img src="https://via.placeholder.com/300x400" alt="Book cover">
                <h2>Braiding Sweetgrass</h2>
                <p>Robin Wall Kimmerer. - Indigenous Wisdom, Scientific knowledge and the Teaching...</p>
                <a href="#">Coming Soon</a>
            </div>
            <div class="book-card">
                <img src="https://via.placeholder.com/300x400" alt="Book cover">
                <h2>I am Malala</h2>
                <p>The Story of the Girl Who Stood Up for Education</p>
                <a href="#">Coming Soon</a>
            </div>
            <div class="book-card">
                <img src="https://via.placeholder.com/300x400" alt="Book cover">
                <h2>Resisting Happiness</h2>
                <p>Matthew Kelly. - A True Story about Why We Sabotage Ourselves</p>
                <a href="#">Coming Soon</a>
            </div>
        </main>
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
    </div>


</body>

</html>