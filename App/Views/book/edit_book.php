<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Edit Book</h3>
        </div>
        <div class="card-body">
            <form action="/edit_book" method="post" enctype="multipart/form-data">
                <input type="hidden" name="book_id" value="<?= $_POST['id'] ?>">

                <div class="mb-3">
                    <label for="bookTitle" class="form-label">Book Title</label>
                    <input type="text" class="form-control" id="bookTitle" name="book_title" required>
                </div>

                <div class="mb-3">
                    <label for="bookDesc" class="form-label">Book Description</label>
                    <input type="text" class="form-control" id="bookDesc" name="book_desc" required>
                </div>

                <div class="mb-3"> 
                    <label for="BookGenreID" class="form-label">Book Genre:</label>
                    <select class="form-select" name="book_genre_id">
                        <?php
                        use App\Model\Author;
                        use App\Model\Genre;
                        
                            $genres = Genre::getAll();
                            $authors = Author::getAll();
                        
                            foreach($genres as $genre){?>
                                <option value="<?= $genre['id'] ?>" >
                                    <?= htmlspecialchars($genre['name']) ?>
                                </option>
                            <?php }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="bookText" class="form-label">Book Text</label>
                    <input type="text" class="form-control" id="bookText" name="book_text" required>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Book Image:</label>
                    <input class="form-control" type="file" name="book_image" id="formFile">
                </div>

                <div class="mb-3"> 
                    <label for="BookAuthorID" class="form-label">Book Author:</label>
                    <select class="form-select" name="book_author_id">
                        <?php

                            foreach($authors as $author){?>
                                <option value="<?= $author['id'] ?>"><?= htmlspecialchars($author['name']) ?>
                                </option>
                            <?php }
                        ?>
                    </select>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                <a class="btn btn-warning" href="/book">Back</a>
            </form>
        </div>
    </div>
</div>
