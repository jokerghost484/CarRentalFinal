<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand " href="admin.php"> <i class="fa-solid fa-ghost fa-xl pr-4" style="color:white"></i>Ghost
        Rental Admin Page</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <?php if($_SESSION["statusadmin"] == 1){
              
              ?>
        <ul class="navbar-nav ms-auto flex-nowrap">
          <li class="nav-item ">
          
          <a class="navbar-brand" href="adminprofile.php"> <?php echo $_SESSION["managername"]  ?>
              
            </a>

          <?php
            }
            else{
            ?>
            

      <a class="navbar-brand" href="adminprofile.php">Admin
              
            </a>
            <?php
            }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>