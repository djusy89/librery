<?php require 'connection.php';

if (isset($_POST['subBtn'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $id_genre = $_POST['genre'];
    $date_written = $_POST['date'];
    $publisher = $_POST['publisher'];
    $book_info = "";
    $sql = "INSERT INTO books  VALUES (NULL,'$title', '$author', '$date_written', '$publisher', '$id_genre', '$book_info')";

    if (mysqli_query($db, $sql)) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);
}else{
    header('Location: index.php');
}
