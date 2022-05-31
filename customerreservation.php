<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Bookings</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

  <?php 
  $kaan = FALSE;

 

  function test_input($data)
  {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  
  
  
  
  ?>



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="font-family: Merriweather, serif" id="exampleModalLabel">Booking Cancel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="font-family: Merriweather, serif">
          Are you sure about this? You are going to cancel your booking.
        </div>
        <div class="modal-footer" style="font-family: Merriweather, serif">

          <a class="btn btn-outline-danger" href="home.php">Yes</a>
          <a class="btn btn-outline-info" href="bookings.php">No</a>
        </div>
      </div>
    </div>
  </div>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


    <div class="container mt-5">
      <div class="row">
        
        <div class="col-12">
          <div class="card mt-5">
            <div class="card-header">
              Bookings
            </div>
            <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-1">CarID</li>
              <li class="list-group-item col-2">Car Name</li>
              <li class="list-group-item col-2">City</li>
              <li class="list-group-item col-2">Pick Up Day</li>  
              <li class="list-group-item col-2">Drop Off Day</li>
              <li class="list-group-item col-2">Booked Time</li>
              <li class="list-group-item col-1">Payment</li>
              

            </ul>
            <?php
            $cusid = $_SESSION['cusid'];
            $sql = "SELECT CONCAT(m.BranchName, ' ', m.CarName) AS Model,c.ModelID,CONCAT(c.CarLetter, ' ', c.CarID ) AS CarNo ,r.Pickupday,r.Dropoffday,c.City,r.Payment,r.ReservationID,r.ReservationTime  FROM reservationtable r,cartable c,carmodeltable m ,receipttable f
            WHERE r.CustomerID='$cusid' AND m.ModelID = c.ModelID AND r.CarID = c.CarID AND r.CustomerID = f.CustomerID
            GROUP BY r.ReservationID 
            ORDER BY r.ReservationTime ASC ";
            
            $result = $conn->query($sql);





            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
          
          
          
          
          
          <ul class="list-group list-group-horizontal">
            
          <li class="list-group-item col-1">' . $row["CarNo"] . '</li>
            <li class="list-group-item col-2">' . $row["Model"] . '</li>
            <li class="list-group-item col-2">' . $row["City"] . '</li>
            <li class="list-group-item col-2">' . $row["Pickupday"] . '</li>
            <li class="list-group-item col-2">' . $row["Dropoffday"] . '</li>
            <li class="list-group-item col-2">' . $row["ReservationTime"] . '</li>
            <li class="list-group-item col-1">' . $row["Payment"] . '$</li>
            
            
          </ul>';
              }
            }


            ?>
            

          </div>
        </div>
        
      </div>
    </div>




  </form>



  <?php include("footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>