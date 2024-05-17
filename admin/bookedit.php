<?php      
 session_start();
 require 'dbcon.php';
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Books details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="studentedit.css">
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Book Edit 
                            <a href="managebook.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM book WHERE id='$id'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $book = mysqli_fetch_array($query_run);
                                ?>
                                <form action="bookcode.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $book['id']; ?>">

                                    <div class="mb-3">
                                        <label>Book Name</label>
                                        <input type="text" name="bookName" value="<?=$book['bookName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>category</label>
                                        <input type="text" name="category" value="<?=$book['category'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Author Name</label>
                                        <input type="text" name="authorName" value="<?=$book['authorName'];?>" class="form-control">
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label>Book Image</label>
                                        <input type="file" name="bookImage" value="<?=$book['bookImage'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>price</label>
                                        <input type="text" name="price" value="<?=$book['price'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>quantity</label>
                                        <input type="text" name="quantity" value="<?=$book['quantity'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Available Quantity</label>
                                        <input type="text" name="availableQuantity"value="<?=$book['availableQuantity'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_book" class="btn btn-primary">
                                            Update book
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>