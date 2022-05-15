<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e63db42066.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include("navbar.php"); ?>


<?php

  $servername = "localhost";
  $username = "root";
  $password = "password";
  $dbname = "carweb";

  // Create connection
  $conn = mysqli_connect($servername, $username, null, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  ?>


<?php


if (isset($_POST['CarID'])) {
    $_SESSION["carid"] = $row["CarID"];
    echo "<script> location.href='index.php'; </script>";
}


  $sql = "SELECT * FROM cartable ";
  $result = $conn->query($sql);



  if ($result->num_rows == 0) {
    $kaan = FALSE;
  } else if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
   
      echo '<div class="container mt-5">
      <div class="row ">
          <div class="col-sm-4 mt-5">
              <div class="card" style="width: 18rem;">
                  <img src="images/mercedes-benz-background-1080p-362844.jpg" class="card-img-top" alt="mercedes">
                  <div class="card-body">
                      <h5 class="card-title">'.$row["CarName"].'</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                  </div>
                  <ul class="list-group list-group-flush">
                  <li class="list-group-item">'.$row["CarType"].'</li>
                  <li class="list-group-item">'.$row["Fuel"].'</li>
                  <li class="list-group-item">'.$row["Passenger"].'   <i class="fa-solid fa-user"></i></li>
                  
                  </ul>

              </div>
          </div>
          <div class="col-sm-8 mt-5">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title"> Features of Car</h5>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                              ipsum dolor sit amet consectetur adipisicing elit. Culpa sed earum quia corrupti
                              inventore maiores.
                          </li>
                          <li class="list-group-item">
                              <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                              ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, sequi.
                          </li>
                          <li class="list-group-item">
                              <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                              ipsum dolor, sit amet consectetur adipisicing elit. Aliquid.
                          </li>
                          <li class="list-group-item">
                              <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                              ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quas cum architecto?
                          </li>
                          <li class="list-group-item">
                              <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem
                              ipsum dolor sit amet.
                          </li>
                          <li class="list-group-item">
                              <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Lorem,
                              ipsum.
                          </li>';
                          
                          if ($_SESSION["status"]==1) {
                            echo'
                            <a class="btn btn-outline-dark ml-5 "'.$row["CarID"] .'href="confirm.php">Select</a>
                             
              
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>';
                    }
                    else{
                        echo' <form action="purchase.php" method="post">
                        <input class="btn btn-outline-dark mt-5" type="submit" name="purchasebutton" value="'.$row["Price"].'">
                        
                        </form>
          
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>';
                    }
                    
                    
    }
  }
  

  ?>

    


  



    <?php include("footer.php"); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</html>