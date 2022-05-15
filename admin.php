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

  <div class="container">
    <div class="row">
      <div class="col mt-5 " style="text-align: center;">
        <a class="btn btn-outline-secondary" href="addcar.php">Add Car</a>
      </div>
      <div class="col mt-5" style="text-align: center;">
        <a class="btn btn-outline-secondary" href="deletecar.php">Delete Car</a>
      </div>
      <div class="col mt-5" style="text-align: center;">
        <a class="btn btn-outline-secondary" href="updatecar.php">Update Car</a>
      </div>
      <div class="col mt-5" style="text-align: center;">
        <a class="btn btn-outline-secondary" href="cancel.php">Cancel Reservation</a>
      </div>


    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col mt-5">
        <div class="card border-success mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h5 class="card-title ">Income <span class="badge bg-info text-dark ml-3">Monthly</span></h5>

          </div>
          <div class="card-body text-dark">
            <h2>80,967,544</h2>
            <p class="card-text">Total Income <span style="float:right;">
                10%<i class="fa-solid fa-arrow-turn-up" style="color: green;"></i>
              </span></p>
          </div>
        </div>
      </div>
      <div class="col mt-5">
        <div class="card border-success mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h5 class="card-title ">Bookings <span class="badge bg-info text-dark ml-3">Monthly</span></h5>

          </div>
          <div class="card-body text-dark">
            <h2>10,967,544</h2>
            <p class="card-text">New Bookings <span style="float:right;">
                15%<i class="fa-solid fa-arrow-turn-up" style="color: green;"></i>
              </span></p>
          </div>
        </div>
      </div>
      <div class="col mt-5">
        <div class="card border-success mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h5 class="card-title ">Visitors <span class="badge bg-info text-dark ml-3">Monthly</span></h5>

          </div>
          <div class="card-body text-dark">
            <h2>40,967,544</h2>
            <p class="card-text">New Visitors <span style="float:right;">
                30%<i class="fa-solid fa-arrow-turn-up" style="color: green;"></i>
              </span></p>
          </div>
        </div>
      </div>
      <div class="col mt-5">
        <div class="card border-success mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h5 class="card-title ">Cars <span class="badge bg-info text-dark ml-3">Monthly</span></h5>
          </div>
          <div class="card-body text-dark">
            <h2>6</h2>
            <p class="card-text">New Cars <span style="float:right;">
                17%<i class="fa-solid fa-arrow-turn-up" style="color: green;"></i>
              </span></p>
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