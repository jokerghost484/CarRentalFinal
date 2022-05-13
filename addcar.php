<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Add</title>
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
          <h5 class="modal-title" style="font-family: Merriweather, serif" id="exampleModalLabel">Car Add</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="font-family: Merriweather, serif">
          Are you sure about this? You are going to add a new car. You can add features car to update car page from home
          page.
        </div>
        <div class="modal-footer" style="font-family: Merriweather, serif">

          <a class="btn btn-outline-danger" href="admin.php">Yes</a>
          <a class="btn btn-outline-info" href="addcar.php">No</a>
        </div>
      </div>
    </div>
  </div>


  <div class="container mt-5">
    <div class="row ">
      <div class="col-sm-4 mt-5">
        <div class="card" style="width: 18rem;">
          <img src="images/No-Image-Found-400x264.png" class="card-img-top" alt="honda">
          <div class="card-body">
            <p class="card-text">Please add a car image about car you are going to add. </p>
            <a class="btn btn-outline-dark" href="#">Add an image</a>
          </div>


        </div>
      </div>
      <div class="col-sm-8 mt-5">

        <form class="row g-3 mt-3">
          <div class="mb-3">
            <h2>Create Car Profile </h2>
          </div>
          <div class="col-md-6" style="text-align: left;">
            <label for="inputCarName" class="form-label">Car Name</label>
            <input type="name" class="form-control" id="inputCarName">
          </div>
          <div class="col-md-6" style="text-align: left;">
            <label for="inputCarID" class="form-label">CarID</label>
            <input type="password" class="form-control" id="inputCarID" placeholder="XXXXXXX">
          </div>

          <div class="col-md-3" style="text-align: left;">
            <label for="inputCarType" class="form-label mb-4">CarType</label>
            <select id="inputCarType" class="form-select">
              <option selected>Choose...</option>
              <option>Automatic</option>
              <option>Manual</option>
              <option>Half Automatic</option>

            </select>
          </div>
          <div class="col-md-3" style="text-align: left;">
            <label for="inputFuel" class="form-label mb-4">Fuel</label>
            <select id="inputFuel" class="form-select">
              <option selected>Choose...</option>
              <option>Petrol</option>
              <option>Electricity</option>
              <option>Diesel</option>
              <option>Biodiesel</option>
            </select>
          </div>
          <div class="col-md-3 mt-auto" style="text-align: left;">
            <label for="inputPassenger" class="form-label mb-4">Passenger</label>
            <select id="inputPassenger" class="form-select">
              <option selected>Choose...</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
            </select>
          </div>
          <div class="col-md-3" style="text-align: left;">
            <label for="inputPrice" class="form-label">Price</label>
            <input type="password" class="form-control" id="inputPrice" placeholder="$">
          </div>
          <div class="col-12">
            <label for="inputMiniDescription" class="form-label">Mini Description</label>
            <input type="text" class="form-control" id="inputMiniDescription" placeholder="Lorem">
          </div>

          <div class="col-12">
            <a class="btn btn-outline-dark mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Add New
              Car</a>
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