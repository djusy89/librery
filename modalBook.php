<?php
require 'dbLibrary.php';
require 'head.php';
require 'editBook.php';
?>
    <div class="container" align="center">
        <h2>Insert new book</h2>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            New Book
        </button>
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Enter the book</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="newBook.php" method="post">
                            <div class="form-group">
                                <label for="tit">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="aut">Author:</label>
                                <input type="text" class="form-control" id="author" name="author" required>
                            </div>
                            <div class="form-group">
                                <label for="gen">Select genre:</label>
                                <select class="form-control" id="genre" name="genre" required>
                                    <option value="">Select genre</option>
                                    <?php foreach ($resultGenre as $temp):?>
                                        <option value="<?php echo $temp['id_genre']; ?>"><?php echo $temp['genre'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dtw">Date written:</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="pub">Publisher:</label>
                                <input type="text" class="form-control" id="publisher" name="publisher" required>
                            </div>
                            <div class="form-group">
                                <label for="binf">About the book:</label>
                                <textarea name="bookInfo" class="form-control" rows="5" cols="10" required></textarea>
                            </div>
                            <button type="submit" name="subBtn" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>