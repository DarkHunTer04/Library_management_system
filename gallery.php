<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
     <!--Bootstrap5 css-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <!--Botstrap5 js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <!--Icons-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
   <link rel="stylesheet" href="gallery.css">
</head>
<body>
 <?php
include 'includes/navbar.php';
 ?>
    <section>
        <div class="main"style="background:url(image/bg14.png);">
            <div class="form">
            <h1>Gallery</h1>
            <div class="gallery img-fluid">
                <div class="animated flash"><img src="image/libraryimage 1.jpg"class="rounded"alt="Library image"width="100%"height="100%"></div>
                <div class="animated flash"><img src="image/libraryimage 2.jpg"class="rounded"class=""alt=""width="100%"height="100%"></div>
                <div class="animated flash"><img src="image/libraryimage 3.jpg"class="rounded"class=""alt=""width="100%"height="100%"></div>
            </div>
            <div class="gallery img-fluid">
                <div class="animated flash">
                    <img src="image/libraryimage 4.jpg"class="rounded"class=""alt=""width="100%"height="100%">
                </div>
                <div class="animated flash">
                    <img src="image/libraryimage 5.jpg"class="rounded"class=""alt=""width="100%"height="100%">
                </div>
                <div class="animated flash">
                    <img src="image/libraryimage 6.jpg"class="rounded"class="" alt=""width="100%"height="100%">
                </div>
    
            </div>
            <div class="gallery img-fluid">
                <div class="animated flash"><img src="image/libraryimage 7.jpg"class="rounded"class="" alt=""width="100%"height="100%"></div>
                <div class="animated flash"><img src="image/libraryimage 8.jpg"class="rounded"class="" alt=""width="100%"height="100%"></div>
                <div class="animated flash"><img src="image/libraryimage 9.jpg"class="rounded"class="" alt=""width="100%"height="100%"></div>
                
            </div>
    </section>
</body>
</html>
<?php
include 'includes/footer.php';
?>