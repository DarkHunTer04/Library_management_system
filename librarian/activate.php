<?php
   session_start();
   require 'dbcon.php';

    if (isset($_GET['id'])){
  
        $student_id=$_GET['id'];

        $sql="UPDATE `student` SET 
             `status`='Yes' WHERE id='$student_id'";
  
        mysqli_query($con,$sql);
   
    }
  
   
?>
<script type="text/javascript">
    window.location="studentdetails.php";
</script>