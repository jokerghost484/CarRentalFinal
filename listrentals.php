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
  <title>Update Car</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e63db42066.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include("navbaradmin.php"); ?>


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


  $kaan = FALSE;
  $ghost = FALSE;
  $city = "";
  $modelid = "";
  $holder = 0;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    
    if (isset($_POST['listcar'])) {
      $ghost = TRUE;
      
    
    if ($_POST["city"] == 'Choose...') {
      
      $ghost = FALSE;
    } else {
      $city = test_input($_POST["city"]);
      $_SESSION["carcity"] = $city;
      
    }
    

    }
    

    if ($ghost == TRUE) {

      echo "<script> location.href='locaterental.php'; </script>";
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




  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


    <?php
   

    ?>
    <div class="col-10 m-auto mt-5">
    <div class="col-4 m-auto " >
    <label for="state" class="form-label mb-4">City</label>
            <select id="city" name="city" class="form-select" value="<?php echo isset($_POST["city"]) ? $_POST["city"] : ''; ?>">
              <option selected>Choose...</option>
              <option>Tokyo</option>
              <option>Paris</option>
              <option>Venice</option>
              <option>New York</option>
            </select>

    </div>
            <div class="mt-5">
            
            <input type="submit" class="btn btn-outline-danger col-3 ml-4" name="listcar" value="List Cars For Selected Model">

            </div>
           

            
      
      

    </div>


  </form>


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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>