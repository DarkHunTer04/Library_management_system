<?php
session_start();
require 'dbcon.php';

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $userID=mysqli_real_escape_string($con,$_POST['userID']);
    $branch=mysqli_real_escape_string($con,$_POST['branch']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    $query = "UPDATE student SET name='$name',userID='$userID',branch='$branch', email='$email', phone='$phone' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: studentdetails.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: studentdetails.php");
        exit(0);
    }

}


?>