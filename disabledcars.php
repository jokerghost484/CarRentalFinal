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
  <title>Cancel Reservation</title>
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

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['handle'])) {
      $kaan = TRUE;
      if(isset($_POST["flexRadioDefault"])){
        $carid = $_POST['flexRadioDefault'];
      }
      else{
          $kaan = FALSE;
      }
     
      
    }
    if($kaan == TRUE){
       
            $sql = "INSERT INTO repairctable(CarID) VALUES($carid)";
            if ($conn->query($sql) === TRUE) {
                if ($kaan == TRUE) {
                    echo "<script> alert('Car handled to repair') ; </script>";
                }
             
              } 
            
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

    <div class="container mt-5">
      <div class="row">

        <div class="col-12">
          <div class="card mt-5">
            <div class="card-header">
              Disabled Cars
            </div>
            <ul class="list-group list-group-horizontal">
              <li class="list-group-item col-1">Option</li>
              <li class="list-group-item col-3">Car Name</li>
              <li class="list-group-item col-2">City</li>
              <li class="list-group-item col-2">CarType</li>
              <li class="list-group-item col-2">Fuel</li>
              <li class="list-group-item col-2">Size</li>
              
              

            </ul>
            <?php
           
            $sql = "SELECT CONCAT(m.BranchName, ' ', m.CarName) AS Model,c.ModelID,c.CarID,c.City,m.CarType,m.Fuel,m.CarSize,c.CarStatus 
            FROM cartable c,carmodeltable m WHERE c.ModelID = m.ModelID AND c.CarStatus = 0 AND c.CarID NOT IN (SELECT CarID FROM repairctable)
            GROUP BY c.CarID";
            $result = $conn->query($sql);





            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '
          
          
          
          
          
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-1">

              <div class="form-chec mt-3 ml-4">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="' . $row["CarID"] . '">
 <label class="form-check-label" for="flexRadioDefault1">
   
 </label> 

</li>
<li class="list-group-item col-3">' . $row["Model"] . '</li>
            <li class="list-group-item col-2">' . $row["City"] . '</li>
            <li class="list-group-item col-2">' . $row["CarType"] . '</li>
            <li class="list-group-item col-2">' . $row["Fuel"] . '</li>
            <li class="list-group-item col-2">' . $row["CarSize"] . '</li>
            
            
            
          </ul>';
              }
            }


            ?>
            <div class="Cancel-button mx-auto pt-2 pb-2">
              <input type="submit" class="btn btn-outline-danger " name="handle" value="HandleCarRepair">
            </div>

          </div>
        </div>

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