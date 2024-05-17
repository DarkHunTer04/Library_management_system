<?php
session_start();
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Issue New Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="issuenewbook.css">
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
                <h4>Issue New Book 
                <div class="input-group">

                </h4>
            </div>
           
            <div class=" card-body ">
               
                <form  name="form1" action=""method="POST">
                <table>
                   <tr>
                      <td>
                         <select name="userID" id=""class="form-control form-select">
                         <?php
                          $query="SELECT  userID  FROM student";
                          
                            $res=mysqli_query($con,$query);
                           while($row=mysqli_fetch_array($res))
                           {
                           echo "<option>";
                           echo $row["userID"];
                           echo"</option>";
                            }
                          ?>
                         </select>
                      </td>
                      <td>
                
                       <button type="submit"value="search"name="submit1"class="form-control btn btn-primary">Search</button> 
                      </td>
                   </tr>
                </table>
               
                <?php
               if(isset($_POST["submit1"]))
               { 
                  $query="SELECT * FROM student WHERE userID='$_POST[userID]'";
                  $std=mysqli_query($con,$query);
                  while($row1=mysqli_fetch_array($std))
                  {
                  $userID=$row1["userID"];
                  $name=$row1["name"];
                  $email=$row1["email"];
                  $phone=$row1["phone"];
                  $username=$row1["username"];
                  
                  }

              ?>
               <table class="table table-bordered table-striped "style="margin-top:5px">
                <tr>
                   <td>
                      <input type="text"class="form-control" placeholder="Student UserID"name="userID"value="<?php 
                      echo $userID;?>"required=""> 
                     </td>
                </tr>
                <tr>
                   <td>
                      <input type="text"class="form-control" placeholder="Student Name"value="<?php 
                      echo $name;?>" name="name"required=""> 
                     </td>
                </tr>
                <td>
                      <input type="text"class="form-control" placeholder="Student Username"
                      value="<?php echo $username;?>"required=""name="username"> 
                     </td>
                </tr>
                <tr>
                   <td>
                      <input type="email"class="form-control" placeholder="Student Email"value="<?php 
                      echo $email;?>"name="email"required=""> 
                     </td>
                </tr>
                <tr>
                   <td>
                      <input type="text"class="form-control" placeholder="Student mobile number"value="<?php 
                      echo $phone;?>"name="phone"required=""> 
                     </td>
                </tr>
                
                <tr>
                   <td>
                      <select name="bookName" id="" class=" form-control form-select">
                         <?php
                         $query="SELECT bookName FROM book";
                         $res=mysqli_query($con,$query);
                         while($row=mysqli_fetch_array($res))
                         {
                           echo "<option>";
                           echo $row["bookName"];
                           echo"</option>";
                         }
                         ?>
                      </select>  
                     </td>
                </tr>
                <tr>
                   <td>
                      <input type="text"class="form-control" placeholder="Book issue Date"value=""name="issue_date"required=""> 
                     </td>
                </tr>
               
                <tr>
                   <td>
                  <button type="submit"value="Issue Book"name="issue_book"class="form-control btn btn-success btn-md" >Issue Book</button> 
                     </td>
                </tr>
               </table>
              <?php
               }
                ?>
                 </form>
                 <?php
                  if(isset($_POST["issue_book"]))
                  {
                  $query="INSERT INTO issue_books values('','$_POST[userID]','$_POST[name]','$_POST[username]','$_POST[email]','$_POST[phone]','$_POST[bookName]','$_POST[issue_date]','','')";
                   $query1="UPDATE book SET availableQuantity=availableQuantity-1 WHERE bookName='$_POST[bookName]'";
                  mysqli_query($con,$query);
                  mysqli_query($con,$query1);
                 
                  
                  ?>
                  <script type="text/javascript">
                     alert("Book Issued Successfully....");
                     window.location.href="manageissuebooks.php";
                     </script>
                     <?php

                  }
                 ?>
            </div>
           
        </div>
    </div>
</div>
</div>
</body>
</html>