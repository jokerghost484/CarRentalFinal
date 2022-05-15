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
      
      if (isset($_POST['deletebutton'])) {
          $kaan = TRUE;
          $reservationid = $_POST['flexRadioDefault'];
          $sql = "DELETE FROM reservationtable WHERE ReservationID='$reservationid'";
      }

      if ($conn->query($sql) === TRUE) {
        if($kaan==TRUE){
          echo "<script> location.href='bookings.php'; </script>";
        }
        
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
        <div class="col">

        </div>
        <div class="col-9">
          <div class="card mt-5">
            <div class="card-header">
              Bookings
            </div>
            <ul class="list-group list-group-horizontal">
              <li class="list-group-item col-2">Option</li>
              <li class="list-group-item col-2">CarID</li>
              <li class="list-group-item col-4">PickUpDay</li>
              <li class="list-group-item col-4">DropOffDay</li>

            </ul>
            <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reservationtable WHERE CustomerEmail='$email'";
            $result = $conn->query($sql);





            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
          
          
          
          
          
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-2">

              <div class="form-chec mt-3 ml-4">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="' . $row["ReservationID"] . '">
 <label class="form-check-label" for="flexRadioDefault1">
   
 </label> 

</li>
            <li class="list-group-item col-2">' . $row["CarID"] . '</li>
            <li class="list-group-item col-4">' . $row["Pickupday"] . '</li>
            <li class="list-group-item col-4">' . $row["Dropoffday"] . '</li>
            
            
          </ul>';
              }
            }


            ?>
            <div class="Cancel-button mx-auto pt-2 pb-2">
              <input type="submit" class="btn btn-outline-danger " name="deletebutton" value="Delete">
            </div>

          </div>
        </div>
        <div class="col">

        </div>
      </div>
    </div>




  </form>



  <?php include("footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>