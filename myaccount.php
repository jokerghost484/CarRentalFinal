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
  <title>My Account</title>
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
  $kaan = FALSE;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      if (isset($_POST['logout'])) {
          $_SESSION["status"] = 0;
          $kaan = TRUE;
      }
      if($kaan==TRUE){
        echo "<script> location.href='index.php'; </script>";
      }

      
      
      
  }

  function test_input($data)
  {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  
  
  
  
  ?>



  <div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-6 mt-5">
          <h2>Your Favorite Car</h2>
          <div class="card mb-3 mt-5">
            <img src="images/ford-mustang-gt-2015-background-1080p-443589.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mustang</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsam, commodi,
                officiis, fugit cumque corrupti eius perferendis enim libero minus corporis quas voluptas ex architecto
                delectus est! Distinctio, soluta itaque.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="col">
        </div>
        <div class="col mt-5">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
              MyAccount
            </div>
            <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM customertable WHERE CustomerEmail='$email'";
            $result = $conn->query($sql);





            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
          
                <ul class="list-group list-group-flush">
                <li class="list-group-item">'.$row["CustomerName"].'</li>
                <li class="list-group-item">'.$row["CustomerAge"].'</li>
                <li class="list-group-item">'.$row["CustomerLicenseID"].'</li>
                <li class="list-group-item">'.$row["CustomerState"].'</li>
              </ul>'
 ;
              }
            }


            ?>
           


            <div class="card-body">
              <a class="btn btn-outline-dark " href="bookings.php">Bookings</a>
            </div>
            <div class="card-body">
            <input type="submit" class="btn btn-outline-dark " name="logout" value="LogOut">
            </div>
          </div>
          
      </form>
          
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col">

        </div>
        <div class="col-9 mt-5">
          <h2 style="text-align: center;">Favorite Place</h2>
          <div class="card mb-3 mt-5">
            <img src="images/tokyo-background-full-hd-484990.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Japan</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ullam praesentium
                ducimus alias tempore corrupti numquam magnam aspernatur laboriosam totam itaque, ea iusto et nostrum
                facere officiis expedita quasi nesciunt nulla mollitia consectetur fuga. Accusamus omnis, tenetur odio
                alias debitis, nobis tempore exercitationem fugiat numquam architecto eaque, nulla natus molestiae
                dicta. Animi nesciunt vero neque expedita, molestiae eum repudiandae distinctio?</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="col">

        </div>
      </div>
    </div>

  </div>




  <?php include("footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>