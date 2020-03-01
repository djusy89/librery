<?php
require "connection.php";
$idBook = $_POST['id_book'];
$title = $_POST['title'];
$author = $_POST['author'];
$dateWritten = $_POST['date_written'];
$publisher = $_POST['publisher'];
$idGenre = $_POST['id_genre'];
$bookInfo = $_POST['book_info'];

$sql = "UPDATE books SET id_book='$idBook', title='$title', author='$author', date_written='$dateWritten', publisher='$publisher', id_genre='$idGenre', book_info='$bookInfo' WHERE id_book = $idBook";
$query = mysqli_query($db, $sql);

header('Location: index.php');