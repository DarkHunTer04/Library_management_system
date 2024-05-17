
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
     <!--Bootstrap5 css-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <!--Botstrap5 js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <!--Icons-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
   <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
  
  <?php
include 'includes/navbar.php';
  ?>
    <div class="wrapper">
        <div class="logo"> <img src="image/admin logo.jpg" alt=""> </div>
        <div class="text-center mt-4 name"> Admin </div>
        <form class="p-3 mt-3" action="admin.php"method="POST">
            <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text"name="username"placeholder="Username" id="user"> </div>
            <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" placeholder="Password" id="password"> </div> <button class="btn mt-3"type="submit"name="submit" id="login"value="login">Login</button>
        </form>
    </div>   
</div>
</body>
</html>