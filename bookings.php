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
  <title>My Bookings</title>
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
            <li class="list-group-item col-6">Car</li>
            <li class="list-group-item col-4">Date</li>
            <li class="list-group-item col-2">Price</li>

          </ul>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-6">Peugeot</li>
            <li class="list-group-item col-4">2022-29-04</li>
            <li class="list-group-item col-2">350$</li>
          </ul>
          <div class="Cancel-button mx-auto pt-2 pb-2">
            <a class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Cancel</a>
          </div>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-6"></li>
            <li class="list-group-item col-4"></li>
            <li class="list-group-item col-2"></li>

          </ul>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-6"></li>
            <li class="list-group-item col-4"></li>
            <li class="list-group-item col-2"></li>

          </ul>
        </div>
      </div>
      <div class="col">

      </div>
    </div>
  </div>


  <?php include("footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>