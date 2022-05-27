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
  // define variables and set to empty values
  $branchname = $carname =  $quantity = $carid = $type = $fuel = $size =  $price = $ima = "";
  $branchnameErr = $carnameErr =  $quantityErr = $caridErr = $typeErr = $fuelErr = $sizeErr =  $priceErr = $imaErr = "";
  


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kaan = TRUE;


    if ($_POST["branchname"] == 'Choose...') {
      $branchnameErr = "Branchname is required";
      $kaan = FALSE;
    } else {
      $branchname = test_input($_POST["branchname"]);
    }

    if ($_POST["carname"] == 'Choose...') {
      $carnameErr = "Carname is required";
      $kaan = FALSE;
    } else {
      $carname = test_input($_POST["carname"]);
    }
    

    if ($_POST["type"] == 'Choose...') {
      $typeErr = "Type is required";
      $kaan = FALSE;
    } else {
      $type = test_input($_POST["type"]);
    }

    if ($_POST["fuel"] == 'Choose...') {
      $fuelErr = "Fuel is required";
      $kaan = FALSE;
    } else {
      $fuel = test_input($_POST["fuel"]);
    }

    if ($_POST["size"] == 'Choose...') {
      $sizeErr = "Size is required";
      $kaan = FALSE;
    } else {
      $size = test_input($_POST["size"]);
    }

    if (empty($_POST["price"])) {
      $priceErr = "Price is required";
      $kaan = FALSE;
    } else {
      $price = test_input($_POST["price"]);
    }

    if ($_POST["ima"] == 'Image...') {
      $imaErr = "Image is required";
      $kaan = FALSE;
    } else {
      $ima = test_input($_POST["ima"]);
    }

    if($kaan == TRUE){
      $sql = "SELECT * FROM carmodeltable ";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    if($row["BranchName"] == $branchname && $row["CarName"] == $carname && $row["CarType"] == $type && $row["Fuel"] == $fuel && $row["CarSize"] == $size ){
      $kaan = FALSE;
    }
  }
} 
    }

    if ($kaan == TRUE) {
      $stmt = $conn->prepare("INSERT INTO carmodeltable (BranchName,CarName,CarType,Fuel,CarSize,Price,CarImage)
       VALUES (?, ?, ?, ?, ?,?,?)");
      $stmt->bind_param("sssssis", $branchname,$carname, $type, $fuel, $size, $price,$ima);

      if (isset($_POST['branchname'])) {
        $typbranchnamee = $_POST["branchname"];
      }

      if (isset($_POST['carname'])) {
       
        if($kaan==TRUE){
          $carname = $_POST["carname"];
        }

      }
      if (isset($_POST['type'])) {
        $type = $_POST["type"];
      }
      if (isset($_POST['fuel'])) {
        $fuel = $_POST["fuel"];
      }
      if (isset($_POST['size'])) {
        $size = $_POST["size"];
      }
      if (isset($_POST['price'])) {
        $price = $_POST["price"];
      }
      if (isset($_POST['ima'])) {
        $ima = $_POST["ima"];
      }

      $stmt->execute();
    }

    if ($kaan == TRUE) {
      echo "<script> location.href='admin.php'; </script>";
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




  


  <div class="container mt-5">
    <div class="row ">
      <div class="col-1 mt-5">
      
        
      </div>
      <div class="col-sm-8 mt-5">

        <form class="row g-3 mt-3" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="mb-3">
            <h2>Create Car Profile </h2>
          </div>
          <div class="col-md-3" style="text-align: left;">
            <label for="inputName" class="form-label mb-4">Model Name</label>
            <select class="form-select" id="branchname" name="branchname"  value="<?php echo isset($_POST["branchname"]) ? $_POST["branchname"] : ''; ?>">
            <option selected>Choose...</option>
              <option>Opel</option>
              <option>Peugeot</option>
              <option>Honda</option>
              <option>Ford</option>
              <option>Chevrolet</option>

              </select>
          </div>
          <div class="col-md-3" style="text-align: left;">
            <label for="inputCarName" class="form-label mb-4">Car Name</label>
            <select  class="form-select" id="carname" name="carname"  value="<?php echo isset($_POST["carname"]) ? $_POST["carname"] : ''; ?>">
            <option selected>Choose...</option>
              <option>Astra</option>
              <option>Corsa</option>
              <option>3008</option>
              <option>206</option>
              <option>Civic</option>
              <option>Jazz</option>
              <option>Mustang</option>
              <option>Fiesta</option>
              <option>Camaro</option>
              <option>Corvette</option>
              </select>
          </div>
          
          <div class="col-md-3" style="text-align: left;">
            <label for="inputCarType" class="form-label mb-4">CarType</label>
            <select id="type" class="form-select" name="type"  value="<?php echo isset($_POST["type"]) ? $_POST["type"] : ''; ?>">
              <option selected>Choose...</option>
              <option>Automatic</option>
              <option>Manual</option>
              <option>Half Automatic</option>

            </select>
          </div>
          <div class="col-md-3" style="text-align: left;">
            <label for="inputFuel" class="form-label mb-4">Fuel</label>
            <select id="fuel" class="form-select" name="fuel"  value="<?php echo isset($_POST["fuel"]) ? $_POST["fuel"] : ''; ?>">
              <option selected>Choose...</option>
              <option>Petrol</option>
              <option>Electricity</option>
              <option>Diesel</option>
            </select>
          </div>
          <div class="col-md-3 mt-auto" style="text-align: left;">
            <label for="inputPassenger" class="form-label mb-4">Size</label>
            <select id="passenger" class="form-select" name="size"  value="<?php echo isset($_POST["size"]) ? $_POST["size"] : ''; ?>">
              <option selected>Choose...</option>
              <option>Large</option>
              <option>Small</option>
              <option>Medium</option>
              
            </select>
          </div>
          <div class="col-md-3" style="text-align: left;">
            <label for="inputPrice" class="form-label">Price</label>
            <input type="name" class="form-control" id="price" placeholder="$" name="price"  value="<?php echo isset($_POST["price"]) ? $_POST["price"] : ''; ?>">
          </div>
          <div class="col-md-3 mt-auto" style="text-align: left;">
            <label for="inputima" class="form-label mb-4">Image</label>
            <select id="ima" class="form-select" name="ima"  value="<?php echo isset($_POST["ima"]) ? $_POST["ima"] : ''; ?>">
              <option selected>Image...</option>
              <option>astra.jpg</option>
              <option>corsa.jpg</option>
              <option>3008.jpg</option>
              <option>206.jpg</option>
              <option>civic.jpg</option>
              <option>jazz.jpg</option>
              <option>mustang.jpg</option>
              <option>fiesta.jpg</option>
              <option>camaro.jpg</option>
              <option>corvette.jpg</option>
              
            </select>
          </div>
          

          <div class="col-12">
            
          <input class="btn btn-outline-dark mt-5" type="submit" name="SignUp" value="Add New Car">
            
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