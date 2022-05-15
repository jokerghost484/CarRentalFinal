<?php
session_start();

  ?>
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
  $managerid = $password = "";
  
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kaan = TRUE;

    $password = test_input($_POST["password"]);
    if (empty($_POST["managerid"])) {
      $kaan = FALSE;
    } else {
      $managerid = test_input($_POST["managerid"]);
    }
    
    if($kaan ==TRUE){
      $sql = "SELECT ManagerPassword,ManagerName,ManagerPosition FROM managertable WHERE ManagerID='$managerid'";
      $result = $conn->query($sql);
      
        
       if ($result->num_rows == 0) {
            $kaan=FALSE;
        } else if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["ManagerPassword"] != md5($password)) {
                    $notMatchedErr = "Wrong password!";
                    $kaan=FALSE;
                }
                else{
                  $_SESSION["managername"]=$row["ManagerName"];
                  $_SESSION["managerid"]=$managerid;
                  $_SESSION["position"]=$row["ManagerPosition"];
                  $_SESSION["statusadmin"] = 1;
                }
                
                
              
            }
        }
        
    }
    
  
  
      if($kaan==TRUE){
        
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
  <div class="row">
    <div class="col">

    </div>
    <div class="col-6 mt-5">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
          <h2>Admin Login</h2>
        </div>
        <div class="mb-3 mt-5" style="text-align: left;">
          <label for="exampleInputID" class="form-label">Admin ID</label>
          <input type="name" class="form-control" id="managerid" name="managerid" value="<?php echo isset($_POST["managerid"]) ? $_POST["managerid"] : ''; ?>">

        </div>
        <div class="mb-3" style="text-align: left;">
          <label for="exampleInputPassword10" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
        </div>

        <input class="btn btn-outline-dark mt-5" type="submit" name="LogIn" value="LogIn">

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