<?php
include 'dbcon.php';

$id=$_GET['id'];
date_default_timezone_set("Asia/Kolkata");
$a=date('d-m-Y  h:i:s A');
$res=mysqli_query($con,"UPDATE issue_books set return_date='$a' where id=$id");
$bookName="";
$res=mysqli_query($con,"SELECT * FROM issue_books WHERE id=$id");
while($row=mysqli_fetch_array($res))
{
$bookName=$row['bookName'];
}
mysqli_query($con,"UPDATE book SET availableQuantity=availableQuantity+1 WHERE bookName='$bookName'");
?>
<script type="text/javascript">
    window.location.href="manageissuebooks.php";
</script>