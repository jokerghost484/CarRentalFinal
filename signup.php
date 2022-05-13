
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e63db42066.js" crossorigin="anonymous"></script>
  <style>
    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>


<?php include("navbar.php"); ?>



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
  $email =  $password = $name = $address = $license = $age =  $state =  $zip = "";
  $emailErr = $passwordErr = $nameErr = $addressErr = $licenseErr = $ageErr = $stateErr =  $zipErr = "";
  


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kaan = TRUE;

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
      $kaan = FALSE;
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $kaan = FALSE;
      }
    }
    
    if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
      $kaan = FALSE;
    } else {
      $password = test_input($_POST["password"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-0-9' ]*$/", $password)) {
        $passwordErr = "Only letters and white space allowed";
        $kaan = FALSE;
      }
    }

    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
      $kaan = FALSE;
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
        $kaan = FALSE;
      }
    }

    if (empty($_POST["address"])) {
      $addressErr = "Address is required";
      $kaan = FALSE;
    } else {
      $address = test_input($_POST["address"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-0-9' ]*$/", $address)) {
        $addressErr = "Only letters and white space allowed";
        $kaan = FALSE;
      }
    }

   


    if (empty($_POST["license"])) {
      $licenseErr = "LicenseID is required";
      $kaan = FALSE;
    } else {
      $license = test_input($_POST["license"]);
    }

    if (empty($_POST["age"])) {
      $ageErr = "Age is required";
      $kaan = FALSE;
    } else {
      $age = test_input($_POST["age"]);
    }

    if (empty($_POST["state"])) {
      $stateErr = "State is required";
      $kaan = FALSE;
    } else {
      $state = test_input($_POST["state"]);
    }

    if (empty($_POST["zip"])) {
      $zipErr = "Zip is required";
      $kaan = FALSE;
    } else {
      $zip = test_input($_POST["zip"]);
    }

    if ($kaan == TRUE) {
      $stmt = $conn->prepare("INSERT INTO customertable (CustomerEmail, CustomerPassword, CustomerName, CustomerAddress,CustomerLicenseID,CustomerAge,CustomerState,CustomerZip )
       VALUES (?, ?, ?, ?, ?,?,?,?)");
      $stmt->bind_param("ssssssss", $email, $password, $name, $address, $license, $age, $state, $zip);

      if (isset($_POST['email'])) {
       
        if($kaan==TRUE){
          $email = $_POST["email"];
        }

      }
      if (isset($_POST['password'])) {
        $password = md5($_POST["password"]);
      }
      if (isset($_POST['name'])) {
        $name = $_POST["name"];
      }
      if (isset($_POST['address'])) {
        $address = $_POST["address"];
      }
      if (isset($_POST['license'])) {
        $license = $_POST["license"];
      }
      if (isset($_POST['age'])) {
        $age = $_POST["age"];
      }
      if (isset($_POST['state'])) {
        $state = $_POST["state"];
      }
      if (isset($_POST['zip'])) {
        $zip = $_POST["zip"];
      }
      $stmt->execute();
    }

    if ($kaan == TRUE) {
      echo "<script> location.href='login.php'; </script>";
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
    <div class="row">
      <div class="col">

      </div>
      <div class="col-6 mt-5">
        <h1>We need to identify you</h1>
        
        <form class="row g-3 mt-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="mb-3">

            <h2>SignUp</h2>
          </div>
          
          <div class="col-md-6" style="text-align: left;">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
            <span class="error">*<?php echo $emailErr; ?></span>
          </div>
          <div class="col-md-6" style="text-align: left;">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
            <span class="error">*<?php echo $passwordErr; ?></span>
          </div>
          <div class="col-12">
            <label for="name" class="form-label">Name </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="kaan akgün" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
            <span class="error">*<?php echo $nameErr; ?></span>
          </div>
          <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor" value="<?php echo isset($_POST["address"]) ? $_POST["address"] : ''; ?>">
            <span class="error">*<?php echo $addressErr; ?></span>
          </div>
          <div class="col-md-3" style="text-align: left;">
            <label for="license" class="form-label">LicenseID</label>
            <input type="text" class="form-control" id="license" name="license" value="<?php echo isset($_POST["license"]) ? $_POST["license"] : ''; ?>">
            <span class="error">*<?php echo $licenseErr; ?></span>
          </div>
          <div class="col-md-3" style="text-align: left;">
            <label for="age" class="form-label mb-4">Age</label>
            <select id="age" name="age" class="form-select"  value="<?php echo isset($_POST["age"]) ? $_POST["age"] : ''; ?>">
              <option selected>Choose...</option>
              <option>19-25</option>
              <option>26-35</option>
              <option>35-46</option>
              <option>46+</option>
            </select>
            <span class="error">*<?php echo $ageErr; ?></span>
          </div>
          <div class="col-md-4 mt-auto" style="text-align: left;">
            <label for="state" class="form-label mb-4">State</label>
            <select id="state" name="state" class="form-select" value="<?php echo isset($_POST["state"]) ? $_POST["state"] : ''; ?>">
              <option selected>Choose...</option>
              <option>Tokyo</option>
              <option>Paris</option>
              <option>Venice</option>
              <option>New York</option>
            </select>
            <span class="error">*<?php echo $stateErr; ?></span>
          </div>
          <div class="col-md-2" style="text-align: left;">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" value="<?php echo isset($_POST["zip"]) ? $_POST["zip"] : ''; ?>">
            <span class="error">*<?php echo $zipErr; ?></span>
          </div>
          
          <div class="col-12">
          <input class="btn btn-outline-dark mt-5" type="submit" name="SignUp" value="Submit">
            
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