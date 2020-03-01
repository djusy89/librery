<?php
require 'dbLibrary.php';

if (isset($_GET['id_book']) || !isset($_GET['search'])) {
    $id_book = $_GET['id_book'];
    $book = array_filter($resultBook, function ($el) {
        global $id_book;
        return $el['id_book'] == $id_book;
    });
}elseif (!isset($_GET['search']) || empty($_GET['search'])){
        header("Location: index.php?error=1");

}elseif ($_GET['search']){
    $search = $_GET['search'];
    $book = array_filter($resultBook, function ($el)
    {
        global $search;
        return $el['title'] == $search;
    });
    if (count($book) == 0){
        header("Location: index.php?error=2");
    }
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Book Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="index.php" class="navbar-brand">Book</a>
</nav>
<div class="jumbotron text-center">
    <h2>
        <?php foreach ($book as $temp):?>
            <span><?php echo $temp['title'];?></span>
        <?php endforeach; ?>
    </h2>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <?php foreach ($book as $temp):?>
                    <div class="col-6" style="outline: 1px solid #ddd">
                        <h3 class="display=4"><?php echo $temp['author']; ?></h3>
                        <hr>
                        <p><?php echo $temp['book_info'];?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

