<?php
require "connection.php";
require "modalBook.php";
if (isset($_POST['id_book'])){
    $idBook = $_POST['id_book'];
    $sql = "SELECT * FROM books WHERE id_book = $idBook";
    $query = mysqli_query($db, $sql);
    $resultBookId = mysqli_fetch_assoc($query);


   // header('Location: index.php');
}else{
    $Message = "Some error occured please try after some time ";
    //header("Location:index.php?Message={$Message}");
}
