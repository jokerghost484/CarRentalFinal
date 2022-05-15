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
  <title>Purchase Login </title>
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

  <div id="Page1">


    <div class="container mt-5">
      <div class="row">
        <div class="col">

        </div>
        <div class="col-6 mt-5">
          <h1>We need to identify you</h1>
          <form>
            <div class="mb-3">

              <h2>Login</h2>
            </div>
            <div class="mb-3 mt-5" style="text-align: left;">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3" style="text-align: left;">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check" style="text-align: left;">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label " for="exampleCheck1">Check me out</label>
            </div>
            <a class="btn btn-outline-dark mt-5" href="confirm.php">Login</a>
          </form>
          <div class="new-acc" style="text-align: center;">
            <a href="#" onclick=" show('Page2','Page1');">Create a new account</a>
          </div>


        </div>
        <div class="col">

        </div>
      </div>
    </div>
  </div>

  <div id="Page2" style="display:none">
    <div class="container mt-5">
      <div class="row">
        <div class="col">

        </div>
        <div class="col-6 mt-5">
          <h1>We need to identify you</h1>
          <form class="row g-3 mt-3">
            <div class="mb-3">

              <h2>Login</h2>
            </div>
            <div class="col-md-6" style="text-align: left;">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6" style="text-align: left;">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-3" style="text-align: left;">
              <label for="inputLicense" class="form-label">LicenseID</label>
              <input type="text" class="form-control" id="inputLicense">
            </div>
            <div class="col-md-3" style="text-align: left;">
              <label for="inputAge" class="form-label mb-4">Age</label>
              <select id="inputAge" class="form-select">
                <option selected>Choose...</option>
                <option>19-25</option>
                <option>26-35</option>
                <option>35-46</option>
                <option>46+</option>
              </select>
            </div>
            <div class="col-md-4 mt-auto" style="text-align: left;">
              <label for="inputState" class="form-label mb-4">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>Tokyo</option>
                <option>Paris</option>
                <option>Venice</option>
                <option>New York</option>
              </select>
            </div>
            <div class="col-md-2" style="text-align: left;">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12" style="text-align: left;">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12">
              <a class="btn btn-outline-dark mt-5" href="confirm.php">Sign Up</a>
            </div>
          </form>
          <div class="new-acc" style="text-align: center;">
            <a href="#" onclick=" show('Page1','Page2');">Access my account</a>
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