<?php
session_start();
require 'dbcon.php';

if (isset($_POST['submit'])) {
$Ecode=$_POST['Ecode'];
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

		
$sql = "INSERT INTO librarian (Ecode,name,username,email,phone,password) VALUES ('$Ecode','$name','$username','$email','$phone','$password')";
if(mysqli_query($con, $sql)){
    echo "<script>alert('New Librarian is registered  successfully');</script>";
echo "<script>window.location.href='managelibrarian.php'</script>";
}

		
		else{
      echo "<script>alert('Something went wrong. Please try again');</script>";    
      echo "<script>window.location.href='addlibrarian.php'</script>";
	}
}

if(isset($_POST['update_librarian']))
{
   
    $id =$_POST['id'];
    $Ecode = $_POST['Ecode'];
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email =  $_POST['email'];
    $phone =$_POST['phone'];
    $password=$_POST['password'];

    $query = "UPDATE librarian SET name='$name',email='$email',phone='$phone' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Librarian Details is successfully Updated");';
        echo 'window.location.href = "managelibrarian.php";';
        echo '</script>';
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Librarian Details is not updated");';
        echo 'window.location.href = "managelibrarian.php";';
        echo '</script>';
    }

}
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete  from librarian  WHERE id='$id'";
$query_run = mysqli_query($con, $sql);
if($query_run)
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Librarian Details is successfully deleted");';
    echo 'window.location.href = "managelibrarian.php";';
    echo '</script>';
}
else
{
    echo '<script type="text/javascript">'; 
    echo 'alert(Librarian Details is not deleted");';
    echo 'window.location.href = "managelibrarian.php";';
    echo '</script>';
}

}


?>