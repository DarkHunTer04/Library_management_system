<?php
session_start();
$filename = $_FILES["bookImage"]["name"];
$tempname = $_FILES["bookImage"]["tmp_name"];	
$folder = "../admin/bookimg/".$filename;
require 'dbcon.php';

if (isset($_POST['submit'])) {


$bookID=$_POST['bookID'];
$bookname=$_POST['bookName'];
$category=$_POST['category'];
$author=$_POST['authorName'];
$isbn=$_POST['isbnNumber'];
$quantity=$_POST['quantity'];
$availableQuantity=$_POST['availableQuantity'];
$price=$_POST['price'];
		
$sql = "INSERT INTO book (bookID,bookName,category,authorName,isbnNumber,bookImage,quantity,availableQuantity,price) VALUES ('$bookID','$bookname','$category','$author','$isbn','$filename','$quantity','$availableQuantity','$price')";
if(mysqli_query($con, $sql)){
 move_uploaded_file($tempname, $folder);
    echo "<script>alert('Book Listed successfully');</script>";
echo "<script>window.location.href='managebook.php'</script>";
}

		
		else{
      echo "<script>alert('Something went wrong. Please try again');</script>";    
      echo "<script>window.location.href='addbook.php'</script>";
	}

}

if(isset($_POST['update_book']))
{
   
    $id =$_POST['id'];

    $bookName = $_POST['bookName'];
    $category=$_POST['category'];
    $authorName=$_POST['authorName'];
    $bookImage =  $_FILES["bookImage"]["name"];
    $price =  $_POST['price'];
    $quantity =$_POST['quantity'];

    $query = "UPDATE book SET bookName='$bookName',category='$category',authorName='$authorName',bookImage='$bookImage',price='$price',quantity='$quantity'WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        move_uploaded_file($tempname, $folder);
        echo '<script type="text/javascript">'; 
        echo 'alert("Book is successfully Updated");';
        echo 'window.location.href = "managebook.php";';
        echo '</script>';
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Book is not updated");';
        echo 'window.location.href = "managebook.php";';
        echo '</script>';
    }

}
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete  from book  WHERE id='$id'";
$query_run = mysqli_query($con, $sql);
if($query_run)
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Book is successfully deleted");';
    echo 'window.location.href = "managebook.php";';
    echo '</script>';
}
else
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Book is not deleted");';
    echo 'window.location.href = "managebook.php";';
    echo '</script>';
}

}


?>