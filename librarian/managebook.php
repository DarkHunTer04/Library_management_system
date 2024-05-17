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
  <link rel="stylesheet" href="managebook.css">
</head>
<body>
  <?php
  include 'includes/navbar.php';
  ?>
    <div class="container mt-4">

       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Books Details 
                        <div class="input-group">
 
                        </h4>
                    </div>
                   
                    <div class=" card-body  table-responsive">
                       <div class="scroll">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                
                                <th>BookID</th>
                                <th >Book Name</th>
                                <th>category</th>
                                <th>author Name</th>
                                <th>Book Image</th>
                                <th>ISBN Number</th>
                                <th>Quantity</th>
                                <th>Avaliable quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM book order by 'bookID' asc";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $book)
                                        {
                                           ?>
                                            <tr> 
                                            
                                              
                                                <td><?= $book['bookID']; ?></td>
                                                <td><?= $book['bookName']; ?></td>
                                                <td><?= $book['category']; ?></td>
                                                <td><?= $book['authorName']; ?></td>
                                                <td class="center"width="auto"><img src="../admin/bookimg/<?=$book['bookImage'];?>" width="100"></td>
                                                <td><?= $book['isbnNumber']; ?></td>
                                                <td><?= $book['quantity']; ?></td>
                                                <td><?= $book['availableQuantity']; ?></td>
                                                <td><?= $book['price']; ?></td>
                                                <td width="auto" ><a href="bookedit.php?id=<?= $book['id']; ?>" class="btn btn-success ">edit</a>
                                                <a href="bookcode.php?del=<?=$book['id'];?>" onclick="return confirm('Are you sure you want to delete?');" ><button class="btn btn-danger btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                               
                                                <?php
                                                
                                        }
                                    }

                                    ?>
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>