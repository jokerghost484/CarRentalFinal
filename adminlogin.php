<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e63db42066.js" crossorigin="anonymous"></script>
</head>

<?php include("navbar.php"); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col">

    </div>
    <div class="col-6 mt-5">
      <form>
        <div class="mb-3">
          <h2>Admin Login</h2>
        </div>
        <div class="mb-3 mt-5" style="text-align: left;">
          <label for="exampleInputID" class="form-label">Admin ID</label>
          <input type="email" class="form-control" id="exampleInputID">

        </div>
        <div class="mb-3" style="text-align: left;">
          <label for="exampleInputPassword10" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword10">
        </div>

        <a class="btn btn-outline-dark mt-5" href="admin.php">Login</a>

      </form>


    </div>
    <div class="col">

    </div>
  </div>
</div>




<?php include("footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>

</body>

</html>