<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="addbook.css">
</head>
<body>
   <?php
    include 'includes/navbar.php';
    ?>
    <div class="wrapper rounded bg-white">

        <div class="h3">Add New Book</div>

        <div class="form">
            <form role="form" action="bookcode.php"  method="POST"  enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Book id</label>
                    <input type="text"name="bookID"id="bookID" class="form-control" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Book  Name</label>
                    <input type="text"name="bookName"id="bookName" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Category</label>
                    <input type="text"name="category"id="category" class="form-control" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Author Name</label>
                    <input type="text"name="authorName"id="authorName" class="form-control" required>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>ISBN Number</label>
                    <input type="text"name="isbnNumber"id="isbnNumber" class="form-control" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Book Image</label>
                    <input type="file"name="bookImage"id="bookImage" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
              <label>Quantity</label>
              <input type="text"name="quantity"id="quantity" class="form-control" required>
          
          </div>
          <div class="col-md-6 mt-md-0 mt-3">
              <label> Available Quantity</label>
              <input type="text"name="availableQuantity"id="availableQuantity" class="form-control" required>
              </div>
            </div>
            <div class="row">
            
                <label>Price</label>
                <input type="text"name="price"id="price" class="form-control" required>
            
            
            </div>
            <button class="btn btn-primary mt-3"name="submit"id="submit">Submit</button>
            </form>
        </div>

    </div>
</body>
</html>