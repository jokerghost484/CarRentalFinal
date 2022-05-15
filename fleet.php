<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fleet</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e63db42066.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include("navbar.php"); ?>



  <div class="title mt-5">
    <h2 style="text-align: center;">Car Hire Fleet</h2>
  </div>

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
  $sql = "SELECT * FROM cartable ";
  $result = $conn->query($sql);



  if ($result->num_rows == 0) {
    $kaan = FALSE;
  } else if ($result->num_rows > 0) {
    $i = 0;
    while ($row = $result->fetch_assoc()) {
      if ($i % 3 == 0) {
        echo '<div class="container">
              <div class="row">';
      }
      echo '<div class="col mt-4">
      <div class="card" style="width: 18rem;">
        <img src="images/mercedes-benz-background-1080p-362844.jpg" class="card-img-top" alt="mercedes">
        <div class="card-body">
          <h5 class="card-title">'.$row["CarName"].'</h5>
          
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">'.$row["CarType"].'</li>
          <li class="list-group-item">'.$row["Fuel"].'</li>
          <li class="list-group-item">'.$row["Passenger"].'   <i class="fa-solid fa-user"></i></li>
          <li class="list-group-item">'.$row["Price"].'</li>
        </ul>
        <div class="card-body">
          <a class="btn btn-outline-dark" href="bookform.php">Book</a>
        </div>
      </div>
    </div>';
      /*if ($i % 3 == 0) {
        echo '</div>
        </div>';
      }*/
      $i++;
    }
  }

  ?>
  



  <div class="container mt-5">
    <div class="row mt-5">
      <div class="col">

      </div>
      <div class="col-6 mt-5">
        <div class="card">
          <div class="card-header" style="color: rgb(0, 132, 255);">
            <h5>Extras and Services</h5>
          </div>
          <div class="card-body">

            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse distinctio earum tenetur
              tempore quo nam repudiandae, molestias ad in ipsa! Facilis ipsum quidem optio asperiores voluptatibus
              molestias nobis excepturi autem vitae sit modi enim cumque accusamus laudantium cupiditate dolores, a
              saepe sequi? Totam magnam quis laborum quidem iure dolorum incidunt.</p>
            <a href="services.php" class="btn btn-outline-primary">Services</a>
          </div>
        </div>
      </div>
      <div class="col">

      </div>
    </div>
  </div>



  <div class="container mt-5">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-9 mt-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Latest Technology and Equipment</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, culpa. Labore, hic? In
              ab neque reiciendis repudiandae veniam quae id, tenetur, recusandae ipsa similique animi dolorum
              consequuntur facere dolore temporibus quia perspiciatis. Voluptas, sed ut rerum minima quas fugit officiis
              ipsam, modi suscipit aspernatur explicabo neque omnis alias deleniti vero soluta. Ut, quibusdam.
              Architecto fugit odit a corrupti accusamus tempore autem voluptate quod similique. Facere, laborum
              deleniti. Veritatis, sequi non..</p>

          </div>
          <img src="images/wallpaperflare.com_wallpaper.jpg" class="card-img-bottom" alt="...">
        </div>
      </div>
      <div class="col">

      </div>
    </div>
  </div>



  <?php include("footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>