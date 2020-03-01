<?php
require "connection.php";
if (isset($_POST['id_book'])){
    $idBook = $_POST['id_book'];
    $sql = "DELETE FROM books WHERE id_book = $idBook";
    $query = mysqli_query($db, $sql);
    header('Location: index.php');
}else{
    $Message = "Some error occured please try after some time ";
    //header("Location:index.php?Message={$Message}");
}

