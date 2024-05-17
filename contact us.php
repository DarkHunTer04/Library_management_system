<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
      <!--Bootstrap5 css-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <!--Botstrap5 js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <!--Icons-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
   <link rel="stylesheet" href="contact us.css">
</head>
<body>
    <?php
    include 'includes/navbar.php';
?>  <div class="back"style="">
<section class="py-5">
  <div class="container py-4">
    <h2 class="text-uppercase lined mb-4">We are here to help you</h2>
    <p class="lead mb-5">Are you curious about something? Do you have some kind of problem related to our services?.</p>
    <p class="text-sm mb-5">Please feel free to contact us, our customer service center is working for you 24/7.</p>
    <div class="row gy-5 mb-5">

      <div class=" rounded col-lg-4 block-icon-hover text-center">
        <div class="icon icon-outlined icon-outlined-primary icon-thin mx-auto mb-3"><i class="fas fa-map-marker-alt"></i></div>
        <h4 class=" text-uppercase mb-3">Address</h4>
        <p class="text-gray-600 text-sm"><strong>Maximus Knowledge<br>Mohali,Punjab<br>India</strong></p>
  
      </div>
      <div class="col-4">
<div class="p-3 mb-5 rounded text-center" >

        <div class="icon icon-outlined icon-outlined-primary icon-thin mx-auto mb-3 " ><i class="fas fa-map-marker-alt "></i></div>
        <h4 class="text-uppercase mb-3">Call center</h4>
        <p class="text-gray-600 text-sm">+91 7992404782</p>
        <p class="text-gray-600 text-sm"><strong></strong></p>
      </div>
      </div>
      <div class=" rounded col-lg-4 block-icon-hover text-center">
        <div class="icon icon-outlined icon-outlined-primary icon-thin mx-auto mb-3"><i class="fas fa-map-marker-alt"></i></div>
        <h4 class="text-uppercase mb-3">Electronic support</h4>
        <p class="text-gray-600 text-sm">Please feel free to write an email to us</p>
        <ul class="list-unstyled text-sm mb-0">
          <li><strong><a href="mailto:">maximusknow@gmail.com</a></strong></li>
        </ul>
      </div>
</div>
 
<div class="wrapper  shadow shadow-warning shadow-intensity-lg rounded ">
        <div class="text-center mt-4 name"> Contact Us </div>
        <form name="f1" class="p-3 mt-4" method="post" >
           <div class="form-field d-flex align-items-center"><span class="far fa-user"></span><input type="text" id="name" name="name" class="form-text" placeholder="Your name" required><div class="valid-feedback">Valid.</div>
           <div class="invalid-feedback">Please fill out this field.</div></div>
            <div class="form-field d-flex align-items-center"><span class="fa fa-envelope"></span><input type="email" id="email"name="email" class="form-text" placeholder="Your email"></div>
            <div class="form-field d-flex align-items-center"><span class="fa fa-phone"></span><input type="text"id="phone"name="phone" class="form-text" placeholder="Your phone"required><div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div></div>
            <div class="form-field d-flex align-items-center"><input type="text" id="query"name="query" placeholder="Your query"required><div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div></div>
            <button class="btn mt-3"name="submit">Send</button>
        </form>
    </div>
   
</section>
</div>
</body>
<?php
include 'includes/footer.php';

?>
</html>

<?php
require 'dbcon.php';
?>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$query=$_POST['query'];
$sql="INSERT INTO query VALUES ('','$name','$email','$phone','$query')";
$query_run=mysqli_query($con, $sql);
if($query_run)
{

    echo '<script type="text/javascript">'; 
    echo 'alert("Your query is recorded!!   We can try to answer your query as soon as possible");';
    echo 'window.location.href = "home.php";';
    echo '</script>';
}
else{
echo 'invalid data....';
}
}

?>

