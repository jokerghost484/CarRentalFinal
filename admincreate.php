<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Admin Profile</title>
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

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="font-family: Merriweather, serif" id="exampleModalLabel">Admin Create Complete
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="font-family: Merriweather, serif">
          You have succesfully created new admin profile.
        </div>
        <div class="modal-footer" style="font-family: Merriweather, serif">

          <a class="btn btn-outline-dark" href="adminprofile.php">Back</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-9 mt-5">
        <h2>Create Admin Profile For New Employee</h2>
        <form>
          <div class="form-row">
            <div class="form-group col-md-4 pr-5">
              <label for="inputName9">Name and Surname</label>
              <input type="email" class="form-control" id="inputName9" placeholder="Name Surname">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCredit">Admin ID</label>
              <input type="password" class="form-control" id="inputCredit" placeholder="XXXXXXXXXXXXX">
            </div>
          </div>

          <div class="form-row">
            <div class="mb-3" style="text-align: left;">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="col-md-3 ml-5" style="text-align: left;">
              <label for="inputAge" class="form-label mb-4">Position</label>
              <select id="inputAge" class="form-select">
                <option selected>Choose...</option>
                <option>Manager</option>
                <option>Co-Manager</option>
                <option>Sales Department Manager</option>
                <option>Car Manager</option>
              </select>
            </div>
          </div>
          <div class="button12 mt-5">
            <a class="btn btn-outline-dark " data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Create New
              Admin</a>
          </div>

        </form>


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