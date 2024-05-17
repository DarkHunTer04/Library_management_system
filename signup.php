<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
     <!--Bootstrap5 css-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <!--Botstrap5 js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <!--Icons-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
   <link rel="stylesheet" href="register.css">
</head>
<body>
 <?php
include 'includes/navbar.php';
 ?>

    <div class="wrapper">
      <div class="text-center mt-4 name">Register</div>
      <form name="f1" class="p-3 mt-4" action="register.php"method="POST" >
         <div class="form-field d-flex align-items-center"><span class="far fa-user"></span><input type="text" id="name" name="name" class="form-text" placeholder="Your name" required><div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div></div>
         <div class="form-field d-flex align-items-center"><span class="far fa-user"></span><input type="text" id="uid" name="uid" class="form-text" placeholder="Your user id" required><div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div></div>
         <div class="form-field d-flex align-items-center"><span class="far fa-user"></span><input type="text" id="branch" name="branch" class="form-text" placeholder="Your branch" required><div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div></div>
         <div class="form-field d-flex align-items-center"><span class="far fa-user"></span><input type="text" id="username" name="username" class="form-text" placeholder="your username" required><div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill out this field.</div></div>
          <div class="form-field d-flex align-items-center"><span class="fa fa-envelope"></span><input type="email" id="email"name="email" class="form-text" placeholder="Your email"></div>
          <div class="form-field d-flex align-items-center"><span class="fa fa-phone"></span><input type="text"id="phone"name="phone" class="form-text" placeholder="Your phone"required><div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div></div>
          <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" id="pwd" placeholder="Password"required> <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div></div> 
          
            
            <button class="btn mt-3">Register</button>
        </form>
    </div>
</body>
</html>