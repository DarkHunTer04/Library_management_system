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
  <link rel="stylesheet" href="studentedit.css">
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Librarian Edit 
                            <a href="managelibrarian.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM librarian WHERE id='$id'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $librarian = mysqli_fetch_array($query_run);
                                ?>
                                <form action="librariancode.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $librarian['id']; ?>">

                                    <div class="mb-3">
                                        <label>Librarian Name</label>
                                        <input type="text" name="name" value="<?=$librarian['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Librarian Username</label>
                                        <input type="text" name="username" value="<?=$librarian['username'];?>" class="form-control"readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label>Librarian E-code</label>
                                        <input type="text" name="Ecode" value="<?=$librarian['Ecode'];?>" class="form-control"readonly>
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label>Librarian E-mail</label>
                                        <input type="email" name="email" value="<?=$librarian['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Librarian Mobile</label>
                                        <input type="text" name="phone" value="<?=$librarian['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_librarian" class="btn btn-primary">
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