<!DOCTYPE html>
<html lang="en">
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once('includes/connect.php');

    $id = $_GET['id'];

    $query = "SELECT * FROM books, authors WHERE books.author_id = authors.id AND books.id = $id LIMIT 1";

    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link href="css/keyframe.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <title>Classic Centre - <?php echo $row['title']; ?> Details</title>
</head>
<body class="site">
    <h1 class="hidden">Book Details</h1>

    <header class="grid-con main-header">
        <img src="imgs/SVG/logo.svg" class="col-span-3 m-col-span-2 m-col-start-1 l-col-span-2 l-col-start-1" alt="classic centre logo">
        <button class="ham col-span-1 col-start-4">&#9776;</button>
        <nav id="main-nav" class="full m-col-span-6 m-col-start-7 l-col-span-6 l-col-start-7">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main id="content" class="main">

        <section class="grid-con book-detail">
            <?php
                echo
                '<div class="book-item book-cover col-span-4 m-col-span-6 l-col-span-6">
                    <img src="imgs/'.$row['book_image'].'" alt="Book Cover for '.$row['title'].'">
                </div>';

                echo
                '<div class="book-item book-info col-span-4 m-col-span-6 l-col-span-6">
                    <h2>'.$row['title'].'</h2>
                    <p class="book-author">Author: '.$row['name'].'</p>
                    <p>Published: '.$row['published_date'].'</p>
                    <p class="book-description">'.$row['book_description'].'</p>
                    <p class="full m-col-span-6 l-col-span-5" id="reading-button">START READING</p>
                    <p class="back-link"><a href="index.php">Back to library</a></p>
                </div>';

            ?>
        </section>
    </main>

    <footer class="grid-con">
        <p class="col-span-3">All rights reserved. 2025.</p>
        <a href="#top" class="btt-button col-start-4 m-col-start-12 l-col-start-12"><img src="imgs/SVG/arrow.svg">GO TO TOP</a>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</body>
</html>