<!DOCTYPE html>
<html lang="en">
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once('includes/connect.php');

    $query = "SELECT books.id, books.title, books.book_image, authors.name FROM books, authors WHERE books.author_id = authors.id ORDER BY books.id ";

    $results = mysqli_query($connect, $query);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/keyframe.css" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <title>Classic Centre - Home</title>
</head>
<body class="site">

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

    <section class="hero grid-con">
            <div class="hero-content full">
                <h1>Keeping Classic Literature Accessible</h1>
                <p>Experience the power of technology in preserving all kinds of old novels, classics, and historic pieces</p>
            </div>
        </section>
    
        <section class="book-gallery">
            <h2 class="hidden">The Collection</h2>
            <div class="book-strip grid-con">
            <?php
                while ($row = mysqli_fetch_array($results)) {
                echo
                '<article class="book-card col-span-2 m-col-span-3 l-col-span-3">
                    <a href="details.php?id='.$row['id'].'">
                        <img src="imgs/'.$row['book_image'].'" alt="Book cover for '.$row['title'].'">
                    </a>
                    <h3>'.$row['title'].'</h3>
                    <p class="book-author">'.$row['name'].'</p>
                </article>';
                }
        ?>
    </div>
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