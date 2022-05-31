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
  <title>Ghost Rental Admin</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e63db42066.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include("navbaradmin.php"); ?>

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



  <div class="container">
    <div class="row">



      <div class="col mt-5 " style="text-align: center;">
        <a class="btn btn-outline-secondary" href="addcar.php">Add Model</a>
      </div>
      <div class="col mt-5 " style="text-align: center;">
        <a class="btn btn-outline-secondary" href="updatemodel.php">Update Model</a>
      </div>
      <div class="col mt-5" style="text-align: center;">
        <a class="btn btn-outline-secondary" href="deletecar.php">Delete Car</a>
      </div>
      <div class="col mt-5" style="text-align: center;">
        <a class="btn btn-outline-secondary" href="updatecar.php">Update Car</a>
      </div>
      <div class="col mt-5 " style="text-align: center;">
        <a class="btn btn-outline-secondary" href="cars.php">List All Cars</a>
      </div>
      <div class="col mt-5" style="text-align: center;">
        <a class="btn btn-outline-secondary" href="cancel.php">Cancel Reservation</a>
      </div>


    </div>
  </div>

  <div class="container mt-5">
    <div class="row">



      <div class="col-3 mt-5">
        <div class="card border-success mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h5 class="card-title ">Income <span class="badge bg-info text-dark ml-3">Total</span></h5>

          </div>
          <?php

$sql = "SELECT SUM(Payment) AS Income FROM reservationtable ";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {


         echo '<div class="card-body text-dark">
   

            <h2>'.$row["Income"] .' $</h2>
            
               
              </span></p>
          </div>';
        }
      }
?>


        </div>
      </div>
      <div class="col-3 mt-5">
        <div class="card border-success mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h5 class="card-title ">Bookings <span class="badge bg-info text-dark ml-3">Total</span></h5>

          </div>
          
          <?php
            
            $sql = "SELECT COUNT(*) AS reservations FROM reservationtable ";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
          
                <div class="card-body text-dark">
                <h2>'.$row["reservations"].'</h2>
                
              </div>'
 ;
              }
            }


            ?>
        </div>
      </div>
      <div class="col-3 mt-5">
        <div class="card border-success mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h5 class="card-title ">Members <span class="badge bg-info text-dark ml-3">Total</span></h5>

          </div>
          <?php
            
            $sql = "SELECT COUNT(*) AS members FROM customertable ";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
          
                <div class="card-body text-dark">
                <h2>'.$row["members"].'</h2>
                
              </div>'
 ;
              }
            }


            ?>
        </div>
      </div>
      <div class="col-3 mt-5">
        <div class="card border-success mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h5 class="card-title ">Cars <span class="badge bg-info text-dark ml-3">Total</span></h5>
          </div>
          <?php
            
            $sql = "SELECT COUNT(*) AS cars FROM cartable ";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
          
                <div class="card-body text-dark">
                <h2>'.$row["cars"].'</h2>
               
              </div>'
 ;
              }
            }


            ?>
          
        </div>
      </div>

      <div class="container">
    <div class="row">



      <div class="col mt-5 " style="text-align: center;">
        <a class="btn btn-outline-secondary" href="customers.php">List Customers</a>
      </div>
      <div class="col mt-5 " style="text-align: center;">
        <a class="btn btn-outline-secondary" href="disabledcars.php">Disabled Cars</a>
      </div>
      <div class="col mt-5 " style="text-align: center;">
        <a class="btn btn-outline-secondary" href="repair.php">Status Repair</a>
      </div>
      <div class="col mt-5 " style="text-align: center;">
        <a class="btn btn-outline-secondary" href="listrentals.php">Car Rentals</a>
      </div>
      

     


    </div>
  </div>
      




    </div>
  </div>

  <footer>
    <div class="footer">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12 item text">
              <h3>Ghost Rental</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptatibus, perspiciatis quaerat
                in
                eius, temporibus porro praesentium ut autem exercitationem natus mollitia pariatur placeat error
                numquam
                molestias eos vitae architecto.</p>
            </div>

            <p class="copyright">Ghost Rental © 2022</p>
          </div>
        </div>
      </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>