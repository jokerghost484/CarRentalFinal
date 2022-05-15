<!DOCTYPE html>

<html lang="en">

<head>
  <style>
    * {
      font-family: Arial;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
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


  <div class="container mt-5">
    <div class="row">
      <div class="col pr-4">

      </div>
      <div class="col-10 mt-5">
        <div class="card" style="border-style:none">
          <div class="card-body">
            <h3 class="card-title" style="text-align: center;font-family: Merriweather, serif">Latest Technology and
              Equipment</h3>
            <p class="card-text mt-5" style="font-family: Merriweather, serif">Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Porro, culpa. Labore, hic? In
              ab neque reiciendis repudiandae veniam quae id, tenetur, recusandae ipsa similique animi dolorum
              consequuntur facere dolore temporibus quia perspiciatis. Voluptas, sed ut rerum minima quas fugit officiis
              ipsam, modi suscipit aspernatur explicabo neque omnis alias deleniti vero soluta. Ut, quibusdam.
              Architecto fugit odit a corrupti accusamus tempore autem voluptate quod similique. Facere, laborum
              deleniti. Veritatis, sequi non..</p>
            <p class="card-text mt-3" style="font-family: Merriweather, serif">Lorem ipsum, dolor sit amet consectetur
              adipisicing elit. Voluptates, dolorem veritatis. Praesentium dolore ea quod architecto, dolor omnis
              numquam quo perspiciatis adipisci nobis blanditiis labore laborum nam ducimus sit alias.</p>
          </div>

        </div>
      </div>
      <div class="col pr-4">

      </div>
    </div>
  </div>




  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <div class="card mt-5">
          <i class="fa-regular fa-snowflake fa-10x mt-3" style="text-align: center; color: rgb(0, 140, 255);"></i>
          <div class="card-body">
            <h5 class="card-title mt-4" style="text-align : center">Snow Chains</h5>
            <p class="card-text mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quod nulla molestias
              soluta iste laborum autem consequatur perspiciatis neque sunt, expedita, ducimus officia dolorem inventore
              fugit. Omnis eius, dolorem quaerat fugit et quisquam. Nihil delectus consequuntur perspiciatis quas, alias
              rerum!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mt-5">
          <i class="fa-solid fa-location-dot fa-10x mt-3" style="text-align: center; color: rgb(255, 115, 0);"></i>
          <div class="card-body">
            <h5 class="card-title mt-4" style="text-align : center">Location</h5>
            <p class="card-text mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quod nulla molestias
              soluta iste laborum autem consequatur perspiciatis neque sunt, expedita, ducimus officia dolorem inventore
              fugit. Omnis eius, dolorem quaerat fugit et quisquam. Nihil delectus consequuntur perspiciatis quas, alias
              rerum!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mt-5">
          <i class="fa-solid fa-globe fa-10x mt-3" style="text-align: center; color: rgb(255, 0, 221);"></i>
          <div class="card-body">
            <h5 class="card-title mt-4" style="text-align : center">Cross Border</h5>
            <p class="card-text mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quod nulla molestias
              soluta iste laborum autem consequatur perspiciatis neque sunt, expedita, ducimus officia dolorem inventore
              fugit. Omnis eius, dolorem quaerat fugit et quisquam. Nihil delectus consequuntur perspiciatis quas, alias
              rerum!</p>
          </div>
        </div>
      </div>
    </div>
  </div>








  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <div class="card mt-5">
          <i class="fa-solid fa-baby fa-10x mt-3" style="text-align: center; color: rgb(197, 187, 196);"></i>
          <div class="card-body">
            <h5 class="card-title mt-4" style="text-align : center">Child Seat</h5>
            <p class="card-text mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quod nulla molestias
              soluta iste laborum autem consequatur perspiciatis neque sunt, expedita, ducimus officia dolorem inventore
              fugit. Omnis eius, dolorem quaerat fugit et quisquam. Nihil delectus consequuntur perspiciatis quas, alias
              rerum!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mt-5">
          <i class="fa-solid fa-wallet fa-10x mt-3" style="text-align: center; color: rgb(27, 6, 25);"></i>
          <div class="card-body">
            <h5 class="card-title mt-4" style="text-align : center">No Deposit</h5>
            <p class="card-text mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quod nulla molestias
              soluta iste laborum autem consequatur perspiciatis neque sunt, expedita, ducimus officia dolorem inventore
              fugit. Omnis eius, dolorem quaerat fugit et quisquam. Nihil delectus consequuntur perspiciatis quas, alias
              rerum!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mt-5">
          <i class="fa-solid fa-gas-pump fa-10x mt-3" style="text-align: center; color: rgb(11, 138, 74);"></i>
          <div class="card-body">
            <h5 class="card-title mt-4" style="text-align : center">Fuel Options</h5>
            <p class="card-text mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quod nulla molestias
              soluta iste laborum autem consequatur perspiciatis neque sunt, expedita, ducimus officia dolorem inventore
              fugit. Omnis eius, dolorem quaerat fugit et quisquam. Nihil delectus consequuntur perspiciatis quas, alias
              rerum!</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <div class="card mt-5">
          <i class="fa-solid fa-bolt fa-10x mt-3" style="text-align: center; color: #ffde3e;"></i>
          <div class="card-body">
            <h5 class="card-title mt-4" style="text-align : center">Fast Service</h5>
            <p class="card-text mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quod nulla molestias
              soluta iste laborum autem consequatur perspiciatis neque sunt, expedita, ducimus officia dolorem inventore
              fugit. Omnis eius, dolorem quaerat fugit et quisquam. Nihil delectus consequuntur perspiciatis quas, alias
              rerum!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mt-5">
          <i class="fa-solid fa-car fa-10x mt-3" style="text-align: center; color: rgb(156, 3, 23);"></i>
          <div class="card-body">
            <h5 class="card-title mt-4" style="text-align : center">Driver Option</h5>
            <p class="card-text mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quod nulla molestias
              soluta iste laborum autem consequatur perspiciatis neque sunt, expedita, ducimus officia dolorem inventore
              fugit. Omnis eius, dolorem quaerat fugit et quisquam. Nihil delectus consequuntur perspiciatis quas, alias
              rerum!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mt-5">
          <i class="fa-solid fa-9 fa-10x mt-3" style="text-align: center; color: rgb(108, 3, 156);"></i>
          <div class="card-body">
            <h5 class="card-title mt-4" style="text-align : center">Ghost Rental since 2013</h5>
            <p class="card-text mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quod nulla molestias
              soluta iste laborum autem consequatur perspiciatis neque sunt, expedita, ducimus officia dolorem inventore
              fugit. Omnis eius, dolorem quaerat fugit et quisquam. Nihil delectus consequuntur perspiciatis quas, alias
              rerum!</p>
          </div>
        </div>
      </div>
    </div>
  </div>








  <div class="container">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-6 mt-5">
        <h1>Book Your Car with These Services</h1>
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

    <?php include("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</body>

</html>