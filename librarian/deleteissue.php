<?php
session_start();
require 'dbcon.php';

if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete  from issue_books  WHERE id='$id'";
$query_run = mysqli_query($con, $sql);
if($query_run)
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Issue Book  is successfully deleted");';
    echo 'window.location.href = "manageissuebooks.php";';
    echo '</script>';
}
else
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Issue Book  is not deleted");';
    echo 'window.location.href = "manageissuebooks.php";';
    echo '</script>';
}

}
?>

