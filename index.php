<!DOCTYPE html>
<html lang="en">
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once('includes/connect.php');

    $query = "SELECT * FROM books, authors WHERE books.author_id = authors.id AND books.id";

    $results = mysqli_query($connect, $query);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <title>Classic Centre - Home</title>
</head>
<body class="site">
    <h1 class="hidden">Bookstore</h1>

    <header class="head">
       <div class="logo"></div>
       <nav>
       </nav>
    </header>

    <main id="content" class="main">
        <section>
            <h2>Books</h2>

            <?php
                while ($row = mysqli_fetch_array($results)) {
                    echo '
                    <div class="book-item">
                        <a href="details.php?id='.$row['id'].'">
                            <img src="imgs/'.$row['book_image'].'" alt="Book cover for '.$row['title'].'">
                        </a>
                        <p>'.$row['title'].'</p>
                        <p>'.$row['name'].'</p>
                    </div>
                    ';
                }
            ?>
        </section>
    </main>

    <footer class="foot">
        <div class="one-item sm-half-left md-half-left lg-half-left">
            <div class="box-model">Box 1</div>
            <div class="box-model">Box 2</div>
            <div class="box-model">Box 3</div>
        </div>
    </footer>
</body>
</html>