<?php
session_start();
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Manage Issue Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="searchbooks.css">
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
                <h4>Display and search Books
                <div class="input-group">
                </h4>
            </div>
           
            <div class=" card-body ">
                <form name="form1" action=""method="POST">
                    <table class="table">
                        <tr>
                            <td><input type="text"name="t"placeholder="Enter Book Name" class="form-control" required></td>
                            <td><button class=" btn btn-info"type="submit"name="submit"value="Search Book">Search Book</button></td>
                        </tr>

                    </table>

                </form>
               
             <?php
             if(isset($_POST['submit']))
             {
                $a=0;
                $query="SELECT * FROM book where bookName like('%$_POST[t]%')";
                echo "<table class='table table-bordered  table-responsive'>";
                echo "<tr>";
                $res=mysqli_query($con,$query);
                
                while($row=mysqli_fetch_array($res))
                {
                    $a=$a+1;
                   echo "<td>";
                   
                   ?><img src="../admin/bookimg/<?php echo $row['bookImage'];?>" width="100"height="150"><?php
                  echo "<br>";
                  
                   echo "<br>";
                  
                   echo "<b>"."Book Name:"."</b>";
                   echo "<br>";
                   echo $row['bookName'];
                   
                   echo "<br>";
                   echo "<b>"."Available Books:"."</b>";
                   echo $row['availableQuantity'];
                  
                   echo "</td>";
   
                   if($a==4)
                   {
                   echo "</tr>";
                   echo "<tr>";
                   $a=0;
                   }
                   
                }
               
                echo "</tr>";
                echo "</table>";
    
             }
             else
             {
                $a=0;
                $query="SELECT * FROM book where availableQuantity>0";
                echo "<table class='table table-bordered table-responsive'>";
                echo "<tr>";
                $res=mysqli_query($con,$query);
                
                while($row=mysqli_fetch_array($res))
                {
                    $a=$a+1;
                   echo "<td>";
                   
                   ?><img src="../admin/bookimg/<?php echo $row['bookImage'];?>" width="100"height="150"><?php
                  echo "<br>";
                  
                   echo "<br>";
                  
                   echo "<b>"."Book Name:"."</b>";
                   echo "<br>";
                   echo $row['bookName'];
                   
                   echo "<br>";
                   echo "<b>"."Available Books:"."</b>";
                   echo $row['availableQuantity'];
                  
                   echo "</td>";
   
                   if($a==3)
                   {
                   echo "</tr>";
                   echo "<tr>";
                   $a=0;
                   }
                   
                }
               
                echo "</tr>";
                echo "</table>";
   
             }
           
?>
            </div>
        </div>
    </div>
</div>
</body>