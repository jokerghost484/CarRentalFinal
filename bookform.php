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
  <title>Booking Form</title>
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


  <div class="container">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-6 mt-5">
        <h1>Car Hire</h1>
        <form class="cf" action="carpage.php">
          <div class="half left cf">
            <br>
            <input type="pickup" id="input-pickup" placeholder="PickUp">
            <br>
            <input type="dropoff" id="input-dropoff" placeholder="DropOff">

          </div>
          <div class="half right cf">
            <label for="PickUpDay">PickUpDay </label>
            <input type="date" id="PickUpDay" name="PickUpDay">
            <label for="PickDownDay">PickDownDay</label>
            <input type="date" id="PickDownDay" name="PickDownDay">
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