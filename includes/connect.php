<?php

    $enviro = "localhost";
    $user = "root";
    $password = "root";
    $db = "db_bookstore";

    $connect = new mysqli($enviro, $user, $password, $db);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

?>