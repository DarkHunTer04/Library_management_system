<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Query details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="studentdetails.css">
</head>
<body>
 <?php
 include 'includes/navbar.php';
 ?>
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                
                    <div class="card-header">
                        <h4>Query Details
                          
                        </h4>
                    </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        
                            <thead>
                                <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Mobile number</th>
                                <th>Query</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM query";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $info)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $info['id']; ?></td>
                                                <td><?= $info['name']; ?></td>
                                                <td><?= $info['email']; ?></td>
                                                <td><?= $info['phone']; ?></td>
                                                <td><?= $info['query']; ?></td>
                                                
                                                <td>
                                                
                                                    <a href="deletequery.php?del=<?= $info['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                    
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
