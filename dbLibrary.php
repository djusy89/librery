<?php

    require "connection.php";

    $sql = "SELECT * FROM books";

    $query = mysqli_query($db, $sql);

    $resultBook = mysqli_fetch_all($query, MYSQLI_ASSOC);

    $sql = "SELECT * FROM genre";

    $query = mysqli_query($db, $sql);

    $resultGenre = mysqli_fetch_all($query, MYSQLI_ASSOC);



?>