<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Librarian details</title>
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
                        <h4>Librarian Details 
                        <div class="input-group">
 
                        </h4>
                    </div>
                   
                    <div class=" card-body  table-responsive">
                       <div class="scroll">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                             
                                <th>E-code</th>
                                <th >Librarian Name</th>
                                <th>Librarian Username</th>
                                <th>Librarian E-mail</th>
                                <th>Librarian Mobile</th>
                                <th>Librarian Password</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM librarian ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $librarian)
                                        {
                                          
                                           ?>
                                            <tr> 
                                            
                                                
                                                <td><?= $librarian['Ecode']; ?></td>
                                                <td><?= $librarian['name']; ?></td>
                                                <td><?= $librarian['username']; ?></td>
                                                <td><?= $librarian['email']; ?></td>
                                                <td><?= $librarian['phone']; ?></td>
                                                <td><?= $librarian['password']; ?></td>
                                                <td width="auto" ><a href="librarianedit.php?id=<?= $librarian['id']; ?>" ><button class="btn btn-success btn-sm">Edit</button></a>
                                                <a href="librariancode.php?del=<?=$librarian['id'];?>" onclick="return confirm('Are you sure you want to delete?');" ><button class="btn btn-danger btn-sm">Delete</button></a>
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