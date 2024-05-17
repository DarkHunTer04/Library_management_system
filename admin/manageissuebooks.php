<?php
session_start();
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Manage Issue Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="issuenewbook.css">
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
                <h4>Manage Issued Books
                <div class="input-group">
                </h4>
            </div>
           
            <div class=" card-body ">
                <div class="table-responsive">
                <form name="form1" action=""method="POST">
             <table class="table table-bordered  table-hover">
                       <th>Student user ID</th>
                       <th>Student Name</th>
                       <th>Book Name</th>
                       <th>Book ID</th>
                       <th>Book Isbn Number</th>
                       <th>Book Image</th>
                       <th>Issue Date</th>
                       <th>Return Date</th>
                       <th>Action</th>
    <?php
     
        $query="SELECT issue_books.id,issue_books.userID,issue_books.name,book.bookName,book.bookID ,book.isbnNumber,book.bookImage,issue_books.issue_date,issue_books.return_date FROM issue_books join book on issue_books.bookName=book.bookName";
        $query_run=mysqli_query($con,$query);
               if(mysqli_fetch_array($query_run))
               {
                foreach($query_run as $issuebook)
                {
             
               ?>
               <tr>
                     <td><?= $issuebook['userID'];?></td>
                     <td><?= $issuebook['name'];?></td>
                     <td><?= $issuebook['bookName'];?></td>
                     <td><?= $issuebook['bookID'];?></td>
                     <td><?= $issuebook['isbnNumber'];?></td>
                     <td><img src="bookimg/<?= $issuebook['bookImage'];?>" width="100"></td>
                     <td><?= $issuebook['issue_date'];?></td>
                     <td><?= $issuebook['return_date'];if($issuebook['return_date']=='')
                    {
                    echo "Not yet Returned";
                    }?></td>
                    <td><button><a href="return.php?id=<?php echo $issuebook["id"];?>"onclick="return confirm('Are you sure you want to Return a Book?');" class="btn btn-success btn-sm">Return</a></button>
                    <button><a href="deleteissue.php?del=<?php echo $issuebook["id"];?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-sm">Delete</a></button>
                   </button> 
                </td>
               </tr>
               <?php
                }

               }
               ?>
               </table>  
</form>


            </div>
            </div>
        </div>
    </div>
</div>
</body>