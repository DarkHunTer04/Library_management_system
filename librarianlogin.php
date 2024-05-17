<?php  
session_start();    
   require 'dbcon.php';

    $username = $_POST['userName'];  
    $pass = $_POST['password'];  
        
        $username = stripcslashes($username);  
        $pass = stripcslashes($pass);  
        $username = mysqli_real_escape_string($con, $username);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select *from librarian where username = '$username' and password = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count ==TRUE){  
        $_SESSION["username"]=$username;
    echo '<script type="text/javascript">'; 
    echo 'alert("you are successfully Login ");';
    echo 'window.location.href = "librarian/studentdetails.php";';
    echo '</script>';
        }  
        else{  
            echo '<script type="text/javascript">'; 
            echo 'alert("Login failed...Invalid username or password.");';
            echo 'window.location.href = "librarian login.php";';
            echo '</script>';
             
        }     
?>  