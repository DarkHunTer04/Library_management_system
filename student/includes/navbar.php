
<nav class="navbar navbar-expand-md navbar-light"> 

         <div class="container-fluid ">
       
        
         <a class="navbar-brand" href="#">Maximus Knowledge </a>
       
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbartext" aria-controls="navbartext" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          
        </button>
        <div class="collapse navbar-collapse" id="navbartext">
          <ul class="navbar-nav ms-auto">
         
            <li class="nav-item">
              <a class="nav-link " href="myissuedbooks.php">Issued Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="myprofile.php">My profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="searchbooks.php">Display Books</a>
            </li>
           
            <li class="nav-item ">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#"><img
              src="../image/student logo.png"
              class="rounded-circle"
              height="30"
              alt=""
              loading="lazy"
            /><?php echo "<b>"; echo $_SESSION['username']; echo "</b>"; ?></a>
            </li>
          </ul>
          <span class="navbar-text">
           
          </span>
        </div>
      </div>
    </nav>