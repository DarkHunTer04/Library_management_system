<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student details</title>
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
                        <h4>Student Details
                          
                        </h4>
                    </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        
                            <thead>
                                <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>UserID</th>
                                <th>Branch</th>
                                <th>E-mail</th>
                                <th>Mobile number</th>
                                <th>Status</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM student";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['name']; ?></td>
                                                <td><?= $student['userID']; ?></td>
                                                <td><?= $student['branch']; ?></td>
                                                <td><?= $student['email']; ?></td>
                                                <td><?= $student['phone']; ?></td>
                                                <td class="center"><?=$student['status'];?></td>
                                                
                                                <td>
                                               
                                                    <a href="studentedit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
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
