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
  $name = $password = $managerid = $position =  "";
  $nameErr = $passwordErr = $manageridErr = $positionErr = "";
  


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kaan = TRUE;

    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
      $kaan = FALSE;
    } else {
      $name = test_input($_POST["name"]);
      // check if e-mail address is well-formed
      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
        $kaan = FALSE;
      }
    }

    if (empty($_POST["managerid"])) {
      $manageridErr = "ManagerID is required";
      $kaan = FALSE;
    } else {
      $managerid = test_input($_POST["managerid"]);
      // check if name only contains letters and whitespace
      
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

    

    if (empty($_POST["position"])) {
      $positionErr = "Position is required";
      $kaan = FALSE;
    } else {
      $position = test_input($_POST["position"]);
    }

    

    

    if ($kaan == TRUE) {
      $stmt = $conn->prepare("INSERT INTO managertable (ManagerName, ManagerID, ManagerPassword, ManagerPosition )
       VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $name, $managerid, $password, $position);

      if (isset($_POST['name'])) {
       
        if($kaan==TRUE){
          $name = $_POST["name"];
        }

      }
      if (isset($_POST['managerid'])) {
        $managerid = $_POST["managerid"];
      }
      if (isset($_POST['password'])) {
        $password = md5($_POST["password"]);
      }
      if (isset($_POST['position'])) {
        $position = $_POST["position"];
      }
      
      $stmt->execute();
    }

    if ($kaan == TRUE) {
      echo "<script> location.href='adminprofile.php'; </script>";
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
      <div class="col-9 mt-5">
        <h2>Create Admin Profile For New Employee</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="form-row">
            <div class="form-group col-md-4 pr-5">
              <label for="inputName9">Name and Surname</label>
              <input type="name" class="form-control" id="name" name="name" placeholder="Name Surname" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCredit">Admin ID</label>
              <input type="text" class="form-control" id="managerid" name="managerid" placeholder="XXXX" value="<?php echo isset($_POST["managerid"]) ? $_POST["managerid"] : ''; ?>">
            </div>
          </div>

          <div class="form-row">
            <div class="mb-3" style="text-align: left;">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
            </div>
            <div class="col-md-3 ml-5" style="text-align: left;">
              <label for="position" class="form-label mb-4">Position</label>
              <select id="position" class="form-select" name="position" value="<?php echo isset($_POST["position"]) ? $_POST["position"] : ''; ?>">
                <option selected>Choose...</option>
                <option>Manager</option>
                <option>Co-Manager</option>
                <option>Sales Department Manager</option>
                <option>Car Manager</option>
              </select>
            </div>
          </div>
          <div class="button12 mt-5">
          <button type="btn btn-outline-dark mt-5" class="btn btn-outline-dark" id="crtbtn">Create Admin Profile</button>
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