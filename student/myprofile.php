<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My profile</title>
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
                <h4>My Profile
                <div class="input-group">
                </h4>
            </div>
           
            <div class=" card-body ">
           
                <?php
            $query="SELECT * FROM student WHERE username='$_SESSION[username]' ";
               $query_run=mysqli_query($con,$query);
               if(mysqli_fetch_array($query_run))
               {
                foreach($query_run as $profile)
                {
                    ?>
                    <form action="myprofile.php" method="post">                   
                        <div class="mb-3">
                        <label><b>User Name</b></label>
                        <input type="text" name="bookName" value="<?=$profile['username'];?>"
                         class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                        <label><b>Name</b></label>
                        <input type="text" name="name" value="<?=$profile['name'];?>"
                         class="form-control">
                        </div>
                        <div class="mb-3">
                        <label><b>User ID</b></label>
                        <input type="text" name="UserID" value="<?=$profile['userID'];?>"
                         class="form-control"readonly>
                        </div>
                        <div class="mb-3">
                        <label><b>Branch</b></label>
                        <input type="text" name="branch" value="<?=$profile['branch'];?>"
                         class="form-control">
                        </div>
                        <div class="mb-3">
                        <label><b>E-mail</b></label>
                        <input type="email" name="email" value="<?=$profile['email'];?>"
                         class="form-control">
                        </div>
                        <div class="mb-3">
                        <label><b>Mobile Number</b></label>
                        <input type="text" name="phone" value="<?=$profile['phone'];?>"
                         class="form-control">
                        </div>
                        <div class="mb-3">
                         <button type="submit" name="update_profile" class="btn btn-primary">
                         Update Profile
                         </button>
                         </div>
                    </form>

                    <?php
                }
            }
            ?>
            </div>  
            </div>
        </div>
    </div>
</div>
</body>
<?php
if(isset($_POST['update_profile']))
{
$username=$_POST['username'];
$name=$_POST['name'];
$branch=$_POST['branch'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$query="UPDATE student SET student.name='$name',branch='$branch',email='$email',phone='$phone' WHERE username='$_SESSION[username]'";
$query_run=mysqli_query($con,$query);
if($query_run)
{
    echo '<script type="text/javascript">'; 
    echo 'alert("My Profile is successfully Updated");';
    echo 'window.location.href = "myprofile.php";';
    echo '</script>';
}
else
{
    echo '<script type="text/javascript">'; 
    echo 'alert("My Profile is not Updated");';
    echo 'window.location.href = "myprofile.php";';
    echo '</script>';
}
}

?>