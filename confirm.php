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
  <title>Confirm the Purchase</title>
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

  $nameoncard =  $cardnumber = $expiration = $cvv  = "";
  $nameoncardErr = $cardnumberErr = $expirationErr = $cvvErr = "";



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kaan = TRUE;

    if (empty($_POST["nameoncard"])) {
      $nameoncardErr = "Name on Card is required";
      $kaan = FALSE;
    } else {
      $nameoncard = test_input($_POST["nameoncard"]);
    }

    if (empty($_POST["cardnumber"])) {
      $cardnumberErr = "Card number is required";
      $kaan = FALSE;
    } else {
      $cardnumber = test_input($_POST["cardnumber"]);
    }

    if (empty($_POST["expiration"])) {
      $expirationErr = "State is required";
      $kaan = FALSE;
    } else {
      $expiration = test_input($_POST["expiration"]);
    }

    if (empty($_POST["cvv"])) {
      $cvvErr = "Zip is required";
      $kaan = FALSE;
    } else {
      $cvv = test_input($_POST["cvv"]);
    }
    $customeridadd = $_SESSION["customerid"];

    $filler = $_SESSION["carid"];
    $pick = $_SESSION["pickupday"];
  $drop = $_SESSION["dropoffday"];
  $sql = "SELECT DATEDIFF('$drop', '$pick') AS DateDiff";
  $result = $conn->query($sql);



  if ($result->num_rows == 0) {
  } else if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $daycount = $row["DateDiff"];
    }
  }
    $sql = "SELECT m.Price FROM cartable c,carmodeltable m WHERE CarID = '$filler' AND c.ModelID = m.ModelID";
  $result = $conn->query($sql);
  if ($result->num_rows == 0) {
    
  } else if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      $payment = $row["Price"] * $daycount;
    }
   }
  


    if ($kaan == TRUE) {
      $stmt = $conn->prepare("INSERT INTO receipttable (CustomerID,NameOnCard, CardNumber, Expiration, CVV,Payment)
       VALUES (?, ?, ?, ?,?,?)");
      $stmt->bind_param("issssi", $customeridadd,$nameoncard, $cardnumber, $expiration, $cvv,$payment);


      if (isset($_POST['nameoncard'])) {
        $nameoncard = $_POST["nameoncard"];
      }

      if (isset($_POST['cardnumber'])) {
        $cardnumber = $_POST["cardnumber"];
      }
      if (isset($_POST['expiration'])) {
        $expiration = $_POST["expiration"];
      }
      if (isset($_POST['cvv'])) {
        $cvv = $_POST["cvv"];
      }
      $stmt->execute();
    }

    if ($kaan == TRUE) {
      $filler = $_SESSION["carid"];
      $sql = "SELECT * FROM carttable WHERE CarID = '$filler'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          $reservationidadd = $row["ReservationID"];
          $customeridadd = $row["CustomerID"];
          $caridadd = $row["CarID"];
          $pickupdayadd = $row["Pickupday"];
          $dropoffdayadd = $row["Dropoffday"];
        }
      }

      $sql = "INSERT INTO reservationtable (ReservationID,CustomerID,CarID,Pickupday,Dropoffday) VALUES ('$reservationidadd','$customeridadd','$caridadd','$pickupdayadd','$dropoffdayadd' )";
      if ($conn->query($sql) === TRUE) {
        $kaan = TRUE;
      } else {
        $kaan = FALSE;
      }
      if($kaan == TRUE){
        $sql = "DELETE FROM carttable WHERE CarID = '$caridadd' ";
        if ($conn->query($sql) === TRUE) {
          $kaan = TRUE;
        } else {
          $kaan = FALSE;
        }
      }
    }
    if ($kaan == TRUE) {
      echo "<script> location.href='bookings.php'; </script>";
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


  <?php
  $filler = $_SESSION["carid"];
  $pick = $_SESSION["pickupday"];
  $drop = $_SESSION["dropoffday"];
  $sql = "SELECT DATEDIFF('$drop', '$pick') AS DateDiff";
  $result = $conn->query($sql);



  if ($result->num_rows == 0) {
  } else if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $daycount = $row["DateDiff"];
    }
  }




  $sql = "SELECT m.BranchName,m.CarName,m.ModelID,m.CarType,m.Fuel,m.CarSize,m.Price,m.CarImage FROM cartable c,carmodeltable m WHERE CarID = '$filler' AND c.ModelID = m.ModelID";
  $result = $conn->query($sql);



  if ($result->num_rows == 0) {
    $kaan = FALSE;
  } else if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      

      echo '<div class="container mt-5">
      <div class="row ">
        <div class="col-sm-4 mt-5" style="font-family: Merriweather, serif">
          <div class="card" style="width: 18rem;">
            <img src="images/' . $row["CarImage"] . '" class="card-img-top" alt="peugeot">
            <div class="card-body">
            <h4 class="card-title">' . $row["BranchName"] . '</h4>
            <h5 class="card-title">' . $row["CarName"] . '</h5>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">' . $row["CarType"] . '</li>
        <li class="list-group-item">' . $row["Fuel"] . '</li>
        <li class="list-group-item">' . $row["CarSize"] . '   <i class="fa-solid fa-user"></i></li>
        
            </ul>
  
          </div>
        </div>
        <div class="col-sm-8 mt-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Confirm Your Purchase</h5>
              <ul class="list-group list-group-flush" style="font-family: Merriweather, serif">
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
                </li>
                <li class="list-group-item" style="text-align: center;font-size: 30px;">
                ' . $row["Price"] * $daycount . '$
                </li>
  
  
  
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>';
    }
  }




  ?>









  <div class="container">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-10 mt-5">
        <h2>Pay with a credit card</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="form-row">
            <div class="form-group col-md-4 pr-5">
              <label for="inputName7">Name on Card</label>
              <input type="text" class="form-control" id="inputName7" placeholder="Name Surname" name="nameoncard" value="<?php echo isset($_POST["nameoncard"]) ? $_POST["nameoncard"] : ''; ?>">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCredit">Credit Card Number</label>
              <input type="text" class="form-control" id="inputCredit" placeholder="XXXX-XXXX-XXXX-XXXX" name="cardnumber" value="<?php echo isset($_POST["cardnumber"]) ? $_POST["cardnumber"] : ''; ?>">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2 pr-4">
              <label for="inputExpiration">Expiration</label>
              <input type="text" class="form-control" id="inputExpiration" placeholder="31/12" name="expiration" value="<?php echo isset($_POST["expiration"]) ? $_POST["expiration"] : ''; ?>">
            </div>
            <div class="form-group col-2">
              <label for="imputCvv">CVV</label>
              <input type="text" class="form-control" id="inputCvv" placeholder="XXX" name="cvv" value="<?php echo isset($_POST["cvv"]) ? $_POST["cvv"] : ''; ?>">
            </div>
          </div>
          <div class="button12 pt-4">
            <input class="btn btn-outline-dark mt-5" type="submit" name="Confirm" value="ConfirmPurchase">
          </div>

        </form>
      </div>
      <div class="col">

      </div>
    </div>
  </div>



  <?php include("footer.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>