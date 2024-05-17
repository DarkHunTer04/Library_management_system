<?php
session_start();
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Issued Books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="myissuedbooks.css">
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
                <h4>My Issued Book 
                <div class="input-group">
                </h4>
            </div>
           
            <div class=" card-body ">
               <table class="table table-bordered">
               <th>Student UserID</th>
               <th>Issued Books</th>
               <th>Book Issue Date</th>
               <th>Book Return Date</th>
               <?php
               $query="SELECT * FROM issue_books WHERE username='$_SESSION[username]' ";
               $query_run=mysqli_query($con,$query);
               if(mysqli_fetch_array($query_run))
               {
                foreach($query_run as $book)
                {
                   
                   ?>
                    <tr> 
                        <td><?= $book['userID']; ?></td>
                        <td><?= $book['bookName']; ?></td>
                        <td><?= $book['issue_date']; ?></td>
                        <td><?= $book['return_date'];  if($book['return_date']=='')
                    {
                    echo "Not yet Returned";
                    }?></td>
                        </tr>
                       
                        <?php
                        
                }
            }

            ?>
    
                                  
               </table>


            </div>
        </div>
    </div>
</div>


</body>