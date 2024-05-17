
<?php
require_once('config.php');
?>
<?php
if(isset($_POST))
{
$name=$_POST['name'];
$userid=$_POST['uid'];
$branch=$_POST['branch'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$sql="INSERT INTO student(name,userID,branch,username,email,phone,password,status) VALUES (?,?,?,?,?,?,?,'No')";
$stminsert=$db->prepare($sql);
$result=$stminsert->execute([$name,$userid,$branch,$username,$email,$phone,$password]);
if($result)
{

    echo '<script type="text/javascript">'; 
    echo 'alert("you are successfully registered ");';
    echo 'window.location.href = "student login.php";';
    echo '</script>';
}
else{
echo 'invalid data....';
}
}
else{
	echo 'No data';
}
?>
