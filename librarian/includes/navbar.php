<nav class="navbar navbar-expand-md navbar-light"> 
        <div class="container-fluid ">
       
        
         <a class="navbar-brand" href="#">Maximus Knowledge </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbartext" aria-controls="navbartext" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          
        </button>
        <div class="collapse navbar-collapse" id="navbartext">
          <ul class="navbar-nav ms-auto">
        
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Books
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="addbook.php">Add New Book</a></li>
                <li><a class="dropdown-item " href="managebook.php">Manage Books</a></li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="studentdetails.php">Registered Students</a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Issue Books
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="issuenewbook.php">Issue New Book</a></li>
                <li><a class="dropdown-item" href="manageissuebooks.php">Manage Issued Books</a></li> 
              </ul>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="query.php"> Query</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#"><img
              src="../image/librarian logo.png"
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