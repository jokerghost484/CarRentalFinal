<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">

<style>

</style>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ghost Rental Home</title>
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
// define variables and set to empty values
$pickup =  $dropoff = $pickupday = $dropoffday = "";
$pickupErr = $dropdownErr =   "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $kaan = TRUE;

  
  
  

  if (empty($_POST["pickup"])) {
    $kaan = FALSE;
  } else {
    $pickup = test_input($_POST["pickup"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $pickup)) { 
      $kaan = FALSE;
    }
  }

  if (empty($_POST["dropoff"])) {
    $kaan = FALSE;
  } else {
    $dropoff = test_input($_POST["dropoff"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $dropoff)) { 
      $kaan = FALSE;
    }
  }

  if (empty($_POST["pickupday"])) {
    $kaan = FALSE;
  } else {
    $pickupday = test_input($_POST["pickupday"]);
  }


  if (empty($_POST["dropoffday"])) {
    $kaan = FALSE;
  } else {
    $dropoffday = test_input($_POST["dropoffday"]);
  }

  if($pickupday > $dropoffday){
    $kaan=false;
  }
  else{
    $_SESSION["pickupday"] = $pickupday;
    $_SESSION["dropoffday"] = $dropoffday;
  }

  if ($kaan == TRUE) {
    echo "<script> location.href='carpage.php'; </script>";
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

  <div class="container">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-6 mt-5">
        <h1>Car Hire</h1>
        <form class="cf" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="half left cf">
            <br>
            <input type="pickup" id="pickup" placeholder="PickUp" name="pickup" value="<?php echo isset($_POST["pickup"]) ? $_POST["pickup"] : ''; ?>">
            <br>
            <input type="dropoff" id="dropoff" placeholder="DropOff" name="dropoff" value="<?php echo isset($_POST["dropoff"]) ? $_POST["dropoff"] : ''; ?>">

          </div>
          <div class="half right cf">
            <label for="PickUpDay">PickUpDay </label>
            <input type="date" id="pickupday" name="pickupday" value="<?php echo isset($_POST["pickupday"]) ? $_POST["pickupday"] : ''; ?>">
            <label for="PickDownDay">PickDownDay</label>
            <input type="date" id="dropoffday" name="dropoffday" value="<?php echo isset($_POST["dropoffday"]) ? $_POST["dropoffday"] : ''; ?>">
          </div>
          <input type="submit" value="Search" id="input-submit">
        </form>
      </div>
      <div class="col">

      </div>
    </div>

    <div class="row ">
      <div class="col-sm-6 mt-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> Book on our web instead of comparison websites</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Avoid insurance
                surprises sold by third parties
              </li>
              <li class="list-group-item">
                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> No additional charges,
                final price guaranteed
              </li>
              <li class="list-group-item">
                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> Best price guaranteed
              </li>
              <li class="list-group-item">
                <i class="fa-regular fa-circle-check fa-xl" style="color: rgb(11, 148, 11);"></i> No deposit, no excess
                option
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mt-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Our Trust</h5>
            <p class="card-text">Currently of 537589 review of customers, %90 said we are the best .</p>
            <div class=" star mt-5">
              <i class="fa-solid fa-star fa-2xl" style="color: #FDCC0D"></i>
              <i class="fa-solid fa-star fa-2xl" style="color: #FDCC0D"></i>
              <i class="fa-solid fa-star fa-2xl" style="color: #FDCC0D"></i>
              <i class="fa-solid fa-star fa-2xl" style="color: #FDCC0D"></i>
              <i class="fa-solid fa-star-half-stroke fa-2xl" style="color: #FDCC0D"></i>
            </div>

            <a class="btn btn-outline-dark mt-5" href="services.php">Services</a>
          </div>
        </div>
      </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner mt-5">
        <div class="carousel-item active">
          <img src="images/road-background-4k-490880.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h1>Comfortable</h1>
          </div>
        </div>

        <div class="carousel-item">
          <img src="images/road-wallpaper-1080p-490965.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h1>Reliable</h1>
          </div>
        </div>

        <div class="carousel-item">
          <img src="images/road-wallpaper-laptop-491485.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h1>Luxury</h1>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <h2 style="text-align: center;">Some Popular Cities To Go</h2>
    <div class="container">
      <div class="row row-cols-4">
        <div class="col mt-5" style="text-align: center;">New York
          <img src="images/new-york-background-full-hd-1080p-485992.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col mt-5" style="text-align: center;">Venice
          <img src="images/venice-background-1080p-492888.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col mt-5" style="text-align: center;">Tokyo
          <img src="images/tokyo-background-full-hd-484990.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col mt-5" style="text-align: center;">Paris
          <img src="images/eiffel-tower-background-full-hd-1080p-476938.jpg" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>



    <?php include("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</body>

</html>