<?php require 'dbLibrary.php' ?>
<?php require 'head.php'?>
<body>
<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="index.php" class="navbar-brand">Books</a>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-8 offset-2">
            <h3 class="display-4">Search Books</h3>
            <form action="searchBook.php" method="get">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="<?php
                    if (isset($_GET['error']) && $_GET['error'] == 1){
                        echo "Search book";
                    }elseif (isset($_GET['error']) && $_GET['error'] == 2){
                        echo "No match found";
                    }else{
                        echo "Search";
                    }?>">
                    <div class="input-group-append">
                        <button type="submit" name="subBtn" class="btn btn-info">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <br><br>
<?php require 'modawlBook.php'?>
<div class="container">
    <h2>BOOKS</h2><hr>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Date written</th>
            <th>Publisher</th>
            <th>Edit Book</th>
            <th>Delete Book</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultBook as $book)
        {
         foreach ($resultGenre as $genre)
         {
            if ($book['id_genre'] == $genre['id_genre'])
            {
                global $genreStr;
                $genreStr = $genre['genre'];

        ?>
        <tr>
            <td><a href="searchBook.php?id_book=<?php echo $book['id_book']; ?>"><?php echo $book['title']; ?></a></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $genreStr;?></td>
            <td><?php echo $book['date_written']; ?></td>
            <td><?php echo $book['publisher']; ?></td>
            <form method="post" action="editBook.php">
                <td><button type="submit" name="id_book" class="btn btn-success" value="<?php echo $book['id_book']; ?>">Edit</button></td>
            </form>
            <form method="post" action="deleteBook.php">
                <td><button type="submit" name="id_book" class="btn btn-danger" value="<?php echo $book['id_book']; ?>">Delete</button></td>
            </form>
        </tr>
        <?php }}} ?>
        </tbody>
    </table>
</div>
</body>
</html>