<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"> <i class="fa-solid fa-ghost fa-xl pr-4" style="color:white"></i>Ghost
        Rental</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="fleet.php">Fleet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="services.php">Services</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto flex-nowrap">
          <li class="nav-item ">
            
            <?php if($_SESSION["status"] == 1){
              
            
              ?>
              <a class="navbar-brand" href="myaccount.php"> <?php echo $_SESSION["name"]  ?>
              <i class="fa-solid fa-user"></i>
            </a>;
            <?php
            }
            else{
            ?>
              <a class="navbar-brand" href="login.php">Myaccount
              <i class="fa-solid fa-user"></i>
            </a>; 
            <?php
            }
            ?>
            
          </li>
        </ul>
      </div>
    </div>
  </nav>