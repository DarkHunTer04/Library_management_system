<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Librarian</title>
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

        <div class="h3">Add New Librarian</div>

        <div class="form">
            <form role="form" action="librariancode.php"  method="POST" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Librarian Ecode</label>
                    <input type="text"name="Ecode"id="Ecode" class="form-control" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Librarian  Name</label>
                    <input type="text"name="name"id="name" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Librarian Username</label>
                    <input type="text"name="username"id="username" class="form-control" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label> Librarian E-mail</label>
                    <input type="email"name="email"id="email" class="form-control" required>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Librarian Contact Number</label>
                    <input type="text"name="phone"id="phone" class="form-control" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Password</label>
                    <input type="password"name="password"id="password" class="form-control" required>
                </div>
             
            <button class="btn btn-primary mt-3"name="submit"id="submit">Submit</button>
            </form>
        </div>

    </div>
</body>
</html>