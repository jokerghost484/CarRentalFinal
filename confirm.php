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
          <h5 class="modal-title" style="font-family: Merriweather, serif" id="exampleModalLabel">Booking Complete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="font-family: Merriweather, serif">
          Booking has done succesfully.You can see your bookings from booking page in MyAccount.
        </div>
        <div class="modal-footer" style="font-family: Merriweather, serif">

          <a class="btn btn-outline-dark" href="index.php">Home</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row ">
      <div class="col-sm-4 mt-5" style="font-family: Merriweather, serif">
        <div class="card" style="width: 18rem;">
          <img src="images/sports-car-background-hd-1920x1080-329208.jpg" class="card-img-top" alt="peugeot">
          <div class="card-body">
            <h5 class="card-title">Peugeot</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Automatic</li>
            <li class="list-group-item">Petrol</li>
            <li class="list-group-item">2 <i class="fa-solid fa-user"></i></li>
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
                $350
              </li>



            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>





  <div class="container">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-10 mt-5">
        <h2>Pay with a credit card</h2>
        <form>
          <div class="form-row">
            <div class="form-group col-md-4 pr-5">
              <label for="inputName7">Name on Card</label>
              <input type="email" class="form-control" id="inputName7" placeholder="Name Surname">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCredit">Credit Card Number</label>
              <input type="password" class="form-control" id="inputCredit" placeholder="XXXX-XXXX-XXXX-XXXX">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2 pr-4">
              <label for="inputExpiration">Expiration</label>
              <input type="text" class="form-control" id="inputExpiration" placeholder="31/12">
            </div>
            <div class="form-group col-2">
              <label for="imputCvv">CVV</label>
              <input type="text" class="form-control" id="inputCvv" placeholder="XXX">
            </div>
          </div>
          <div class="button12 pt-4">
            <a class="btn btn-outline-dark " data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Confirm
              Purchase</a>
          </div>

        </form>
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