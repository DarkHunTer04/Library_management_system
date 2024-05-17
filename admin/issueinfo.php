<?php
session_start();
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>  Issue Book Details</title>
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
                <h4>Issued Books Details
                <div class="input-group">
                </h4>
            </div>
           
            <div class=" card-body ">
                <div class="table-responsive">
                <form name="form1" action=""method="POST">
            
    <?php
     
        $query="SELECT issue_books.id,issue_books.userID,issue_books.name,issue_books.email,issue_books.phone,book.bookName,book.bookID ,book.isbnNumber,book.bookImage,issue_books.issue_date,issue_books.return_date FROM issue_books join book on issue_books.bookName=book.bookName";
        $query_run=mysqli_query($con,$query);
               if(mysqli_fetch_array($query_run))
               {
                foreach($query_run as $issuebook)
                {
             
               ?>
               <tr>
               <div class="mb-3">
                <label><b>Student Details</b></label>
                <br>
                <br>
               
                <input type="text" name="userID" value="Student UserID:<?=$issuebook['userID'];?>"
                 class="form-control" readonly>
                 </div>
                 <div class="mb-3">
               <input type="text" name="name" value="Student Name:<?=$issuebook['name'];?>"
                 class="form-control">
                 </div>
                 <div class="mb-3">
               <input type="text" name="email" value="Student E-mail:<?=$issuebook['email'];?>"
                 class="form-control">
                 </div>
                 <div class="mb-3">
               <input type="text" name="phone" value="Student Mobile Number:<?=$issuebook['phone'];?>"
                 class="form-control">
                 </div>
                 <br>
                 <br>
                 <label><b>Book Details</b></label>
                <br>
                <br>
                 <div class="mb-3">
               <input type="text" name="phone" value="Book Name:<?=$issuebook['bookName'];?>"
                 class="form-control">
                 </div>
                    <td><button><a href="return.php?id=<?php echo $issuebook["id"];?>"onclick="return confirm('Are you sure you want to Return a Book?');" class="btn btn-success btn-sm">Return</a></button>
                    
                </td>
               </tr>
               <?php
                }

               }
               ?>
</form>


            </div>
            </div>
        </div>
    </div>
</div>
</body>